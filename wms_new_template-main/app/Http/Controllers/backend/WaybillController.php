<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;


use App\Models\Client;
use App\Models\Customer;
use App\Models\Waybill;

class WaybillController extends Controller
{
    public function index()
    {
        $waybills = Waybill::all();
        return view('backend.Invoice.waybill_list', compact('waybills'));
    }

    public function create()
    {
        return view('backend.invoice.waybill_form');
    }

    public function searchShipper(Request $request)
    {
        $query = $request->get('query');

        // Search in both Clients and Customers tables
        $shippers = DB::table('clients')
                    ->select('name', 'email', 'address', 'postcode', 'attention', 'tel')
                    ->where('name', 'like', "$query%")
                    ->union(DB::table('customers')
                            ->select('name', 'email','address', 'postcode', 'attention', 'tel')
                            ->where('name', 'like', "$query%"))
                    ->get();

        $html = '';
        foreach ($shippers as $shipper) {
            $html .= '<div class="dropdown-item" data-details=\'' . json_encode($shipper) . '\'>' . $shipper->name . '</div>';
        }

        return response()->json($html);
    }

    public function searchReceiver(Request $request)
    {
        $query = $request->get('query');

        // Search in both Clients and Customers tables
        $receivers = DB::table('clients')
                    ->select('name','email', 'address', 'postcode', 'attention', 'tel')
                    ->where('name', 'like', "$query%")
                    ->union(DB::table('customers')
                            ->select('name', 'email', 'address', 'postcode', 'attention', 'tel')
                            ->where('name', 'like', "$query%"))
                    ->get();

        $html = '';
        foreach ($receivers as $receiver) {
            $html .= '<div class="dropdown-item" data-details=\'' . json_encode($receiver) . '\'>' . $receiver->name . '</div>';
        }

        return response()->json($html);
    }

    public function store(Request $request)
    {
        // Validation rules
        $request->validate([
            'no' => 'required|string',
            'customer_id' => 'required|string',
            'service_type' => 'required|string',
            'date' => 'required|date',
            'shipper_details.name' => 'required|string',
            'shipper_details.address' => 'required|string',
            'shipper_details.postcode' => 'required|string',
            'shipper_details.attention' => 'nullable|string',
            'shipper_details.tel' => 'required|string',
            'shipper_details.email' => 'nullable|string',
            'receiver_details.name' => 'required|string',
            'receiver_details.address' => 'required|string',
            'receiver_details.postcode' => 'required|string',
            'receiver_details.attention' => 'nullable|string',
            'receiver_details.tel' => 'required|string',
            'receiver_details.email' => 'nullable|string',
        ]);

        // Handle order products data (optional fields)
        $orderProducts = $request->input('order_products', []);

        // Ensure nullable fields are set to null if not provided
        $nullableFields = ['content', 'category', 'size', 'total_weight'];
        foreach ($nullableFields as $field) {
            if (!isset($orderProducts[$field])) {
                $orderProducts[$field] = null;
            }
        }

       // $dateNow = Carbon::now();  // Current date and time
       // $dateWb = $dateNow->format('dmy');
        // Format current date for database storage
       // $formattedDate = $dateNow->format('Y-m-d');

$pickupDate = $request->input('date'); // No formatting needed, use as-is
$dateWb = date('dmy', strtotime($pickupDate)); // Convert to dmy format
$formattedDate = date('Y-m-d', strtotime($pickupDate)); // Convert to Y-m-d format

        // Create a new Waybill instance
        $waybill = new Waybill();
        $waybill->date = $formattedDate;
        $waybill->no = $request->input('no');
        $waybill->waybill_no = 'ARKODWB-' . $dateWb . '-' . $request->input('no') . $request->input('customer_id');
        $waybill->customer_id = $request->input('customer_id');
        $waybill->service_type = $request->input('service_type');
        $waybill->shipper_name = $request->input('shipper_details.name');
        $waybill->shipper_address = $request->input('shipper_details.address');
        $waybill->shipper_postcode = $request->input('shipper_details.postcode');
        $waybill->shipper_attention = $request->input('shipper_details.attention');
        $waybill->shipper_tel = $request->input('shipper_details.tel');
        $waybill->shipper_email = $request->input('shipper_details.email');
        $waybill->receiver_name = $request->input('receiver_details.name');
        $waybill->receiver_address = $request->input('receiver_details.address');
        $waybill->receiver_postcode = $request->input('receiver_details.postcode');
        $waybill->receiver_attention = $request->input('receiver_details.attention');
        $waybill->receiver_tel = $request->input('receiver_details.tel');
        $waybill->receiver_email = $request->input('receiver_details.email');
        $waybill->order_content = $request->input('order_products.content');
        $waybill->order_category = $request->input('order_products.category');
        $waybill->order_size = $request->input('order_products.size');
        $waybill->order_total_weight = $request->input('order_products.total_weight');
        $waybill->status = 1;
        $waybill->save();

        //add exprexa API cURL here ***

        // Data for PDF
        $data = [
            'customer_id' => $waybill->customer_id,
            'waybill_no' => $waybill->waybill_no,
           // 'date' => Carbon::parse($waybill->date)->format('d-m-y'),
           'date' => $waybill->date,
           
            'service_type' => $waybill->service_type,
            'shipper' => [
                'name' => $waybill->shipper_name,
                'address' => $waybill->shipper_address,
                'postcode' => $waybill->shipper_postcode,
                'attention' => $waybill->shipper_attention,
                'tel' => $waybill->shipper_tel,
                'email' => $waybill->shipper_email,
            ],
            'receiver' => [
                'name' => $waybill->receiver_name,
                'address' => $waybill->receiver_address,
                'postcode' => $waybill->receiver_postcode,
                'attention' => $waybill->receiver_attention,
                'tel' => $waybill->receiver_tel,
                'email' => $waybill->receiver_email,
            ],
            'order' => [
                'content' => $waybill->order_content,
                'category' => $waybill->order_category,
                'size' => $waybill->order_size,
                'total_weight' => $waybill->order_total_weight,
            ],
        ];

        // Generate PDF
        $pdf = PDF::loadView('backend.invoice.waybill', $data);

        // Set filename dynamically based on waybill_no
        $filename = $waybill->waybill_no . '.pdf';
        $filepath = public_path('pdfs/' . $filename);
        $pdf->save($filepath);

        return response()->json([
            'pdf_url' => url('pdfs/' . $filename),
            'redirect_url' => route('waybills.index')
        ]);
    }

    public function sendAPI(Request $request, $id)
    {
        $waybill = Waybill::findOrFail($id);

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://exprexalogistic.com.my/api/pick-ups/add-arkod',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'sender_name' => $waybill->shipper_name,
                'sender_company_name' => '',
                'sender_contact1' => $waybill->shipper_tel,
                'sender_contact2' => '',
                'sender_email' => $waybill->shipper_email,
                'sender_address' => $waybill->shipper_address,
                'sender_postcode' => $waybill->shipper_postcode,
                'sender_city' => '-',
                'sender_state' => '-',
                'sender_country' => '-',
                // 'services_checkbox[]' => 'Express',
                // 'services_checkbox[]' => 'Cargo',
                // 'services_checkbox[]' => 'SEA',
                'services_checkbox[]' => 'Land',
                'receiver_customer_id' => '',
                'receiver_name' => $waybill->receiver_name,
                'receiver_company_name' => '',
                'receiver_contact1' => $waybill->receiver_tel,
                'receiver_contact2' => '',
                'receiver_email' => $waybill->receiver_email,
                'receiver_address' => $waybill->receiver_address,
                'receiver_postcode' => $waybill->receiver_postcode,
                'receiver_city' => '-',
                'receiver_state' => '-',
                'receiver_country' => '-',
                'billing_customer_id' => '1',
                'billing_name' => 'ALEX',
                'billing_company_name' => 'ARKOD SMART LOGITECH SDN BHD',
                'billing_contact1' => '0123231698',
                'billing_contact2' => '',
                'billing_email' => 'admin@arkod.com.my',
                'billing_address' => '1451, JALAN KELULI, BINTAWA INDUSTRIAL ESTATE',
                'billing_postcode' => '93450',
                'billing_city' => 'KUCHING',
                'billing_state' => 'SARAWAK',
                'billing_country' => 'MALAYSIA',
                'billing_checkbox' => '-',
                'item_name' => $waybill->order_content,
                'item_date' => $waybill->date,
                'item_quantity' => '0',
                'item_invoice' => '-',
                'item_dimension' => $waybill->order_size,
                'gross_weight' => $waybill->order_total_weight,
                'item_weight' => '-',
                'item_cod' => '0',
                'item_remarks' => '-',
                'radio_weight' => '-',
                'user_id' => '159',
                'doc_file[]' => '',
                //'doc_file[]' => '',
                'tracking_num' => $waybill->waybill_no
            ),
        ));

        $response = curl_exec($curl);
        $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);

        if ($httpCode === 200) {
            return response()->json(['success' => true, 'response' => $response]);
        } else {
             return response()->json(['success' => false, 'response' => $response], $httpCode);
        }
    }





    public function generatePdf($id)
    {
        $waybill = Waybill::findOrFail($id);

        // Data for PDF
        $data = [
            'customer_id' => $waybill->customer_id,
            'waybill_no' => $waybill->waybill_no,
            //'date' => Carbon::parse($waybill->date)->format('d-m-y'),
            'date' => $waybill->date,
            'service_type' => $waybill->service_type,
            'shipper' => [
                'name' => $waybill->shipper_name,
                'address' => $waybill->shipper_address,
                'postcode' => $waybill->shipper_postcode,
                'attention' => $waybill->shipper_attention,
                'tel' => $waybill->shipper_tel,
                'email' => $waybill->shipper_email,
            ],
            'receiver' => [
                'name' => $waybill->receiver_name,
                'address' => $waybill->receiver_address,
                'postcode' => $waybill->receiver_postcode,
                'attention' => $waybill->receiver_attention,
                'tel' => $waybill->receiver_tel,
                'email' => $waybill->receiver_email,
            ],
            'order' => [
                'content' => $waybill->order_content,
                'category' => $waybill->order_category,
                'size' => $waybill->order_size,
                'total_weight' => $waybill->order_total_weight,
            ],
        ];

        // Generate PDF
        $pdf = PDF::loadView('backend.invoice.waybill', $data);

        $filename = $waybill->waybill_no . '.pdf';

        return new Response(
            $pdf->output(),
            200,
            [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="' . $filename . '"'
            ]
        );
    }

    public function addRemarks(Request $request)
{
    $request->validate([
        'waybill_id' => 'required|exists:waybills,id',
        'remarks' => 'string|max:255',
    ]);

    $waybill = Waybill::find($request->waybill_id);
    $waybill->remarks = $request->remarks;
    $waybill->save();

    return response()->json(['success' => true]);
}


    public function destroy($id)
    {
        $waybill = Waybill::findOrFail($id);

    // to delete pdf from public/pdfs directory
    // Construct the PDF file path using the waybill number
    $pdfFilePath = public_path('pdfs/' . $waybill->waybill_no . '.pdf');

    // Delete the PDF file if it exists
    if (file_exists($pdfFilePath)) {
        unlink($pdfFilePath);
    }

        $waybill->delete();

        return redirect()->back()->with('success', 'Waybill deleted successfully!');
    }

}
