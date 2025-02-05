@extends('backend.layouts.app')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>View Files for Waybill #{{ $waybills->id }}</title>

<!-- Include necessary scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<div class="content-header">
    <div class="d-flex align-items-center">
        <div class="me-auto">
            <h4 class="page-title">Data Tables</h4>
            <div class="d-inline-block align-items-center">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ URL::to('/home') }}"><i class="mdi mdi-home-outline"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">View Files</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- Main content -->
<section class="content">
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Uploaded Files</h3>
                    </div>
                    <div class="box-body">
                        @if($files->isEmpty())
                            <p>No files uploaded for this waybill.</p>
                        @else
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>File Name</th>
                                    <th>Preview</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($files as $file)
                                    <tr>
                                        <td>{{ $file->file_name }}</td>
                                        <td>
                                            @if(in_array(pathinfo($file->file_name, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif']))
                                                <img src="{{ asset('files/' . $file->file_name) }}" alt="{{ $file->file_name }}" style="max-width: 100px; max-height: 100px;">
                                            @else
                                                <span>No preview available</span>
                                            @endif
                                        </td>
                                        <td>
                                            <!-- View Button -->
                                            <button class="text-info me-2" style="border: none; background: none;" data-bs-toggle="tooltip" data-bs-original-title="View File" onclick="window.open('{{ asset('files/' . $file->file_name) }}', '_blank')">
                                                <i class="ti-eye"></i>
                                            </button>        
                                            <!-- Download Button -->            
                                            <button class="text-success me-2" style="border: none; background: none;" data-bs-toggle="tooltip" data-bs-original-title="Download File" onclick="downloadFile('{{ asset('files/' . $file->file_name) }}')">
                                                <i class="ti-download"></i>
                                            </button>                    
                                            <!-- Delete Form -->
                                            <form id="deleteForm{{ $file->id }}" action="{{ route('files.destroy', $file->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="text-danger sa-params" style="border: none; background: none;" data-bs-toggle="tooltip" data-bs-original-title="Delete" onclick="document.getElementById('deleteForm{{ $file->id }}').submit();">
                                                    <i class="ti-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</section>
<!-- /.content -->
@endsection
<script>
    function downloadFile(url) {
        // Create a temporary anchor element
        const a = document.createElement('a');
        a.href = url;
        a.download = ''; // This will trigger the download
        document.body.appendChild(a);
        a.click(); // Programmatically click the anchor to trigger the download
        document.body.removeChild(a); // Remove the anchor from the document
    }
</script>
@section('page content overlay')
    <!-- Page Content overlay -->
    <!-- Vendor JS -->
    <script src="{{ asset('assets/js/vendors.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/chat-popup.js') }}"></script>
    <script src="{{ asset('assets/icons/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/vendor_components/datatable/datatables.min.js') }}"></script>

    <!-- Deposito Admin App -->
    <script src="{{ asset('assets/js/template.js') }}"></script>
    <script src="{{ asset('assets/js/pages/data-table.js') }}"></script>
@endsection
