<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $product_id
 * @property int $quantity_id
 * @property int $carton_quantity
 * @property int $item_quantity
 * @property int $total_quantity
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Cart newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cart newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cart query()
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereCartonQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereItemQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereQuantityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereTotalQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereUpdatedAt($value)
 */
	class Cart extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $email
 * @property string|null $address
 * @property int|null $postcode
 * @property string|null $attention
 * @property string|null $tel
 * @property int|null $uid
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Customer> $customers
 * @property-read int|null $customers_count
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Client newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Client newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Client query()
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereAttention($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client wherePostcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereTel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereUpdatedAt($value)
 */
	class Client extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $company_name
 * @property string|null $address
 * @property string|null $phone_number
 * @property string|null $email
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Product> $products
 * @property-read int|null $products_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Company newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company query()
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCompanyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereUserId($value)
 */
	class Company extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $client_id
 * @property string|null $name
 * @property string|null $email
 * @property string|null $address
 * @property int|null $postcode
 * @property string|null $attention
 * @property string|null $tel
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property-read \App\Models\Client|null $client
 * @method static \Illuminate\Database\Eloquent\Builder|Customer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereAttention($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer wherePostcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereTel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereUpdatedAt($value)
 */
	class Customer extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $user_id
 * @property string $order_no
 * @property string $sender_name
 * @property string $sender_address
 * @property string $sender_postcode
 * @property string $sender_state
 * @property string $sender_phone
 * @property string $receiver_name
 * @property string $receiver_address
 * @property string $receiver_postcode
 * @property string $receiver_state
 * @property string $receiver_phone
 * @property string|null $status
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Product> $products
 * @property-read int|null $products_count
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery query()
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereOrderNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereReceiverAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereReceiverName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereReceiverPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereReceiverPostcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereReceiverState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereSenderAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereSenderName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereSenderPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereSenderPostcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereSenderState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereUserId($value)
 */
	class Delivery extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $invoice_no
 * @property int|null $no
 * @property string $date
 * @property string $customer_id
 * @property string $payment_method
 * @property string $name
 * @property string|null $attention
 * @property string $address
 * @property string $tel
 * @property string|null $payment_terms
 * @property string|null $due_date
 * @property string|null $subtotal
 * @property int|null $sstPercentage
 * @property string|null $sst
 * @property string|null $final_price
 * @property string|null $remarks
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\InvoiceItem> $items
 * @property-read int|null $items_count
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice query()
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereAttention($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereFinalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereInvoiceNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice wherePaymentTerms($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereSst($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereSstPercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereSubtotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereTel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereUpdatedAt($value)
 */
	class Invoice extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $invoice_id
 * @property int|null $quantity
 * @property string|null $description
 * @property string|null $unit_price
 * @property string|null $total_price
 * @property string|null $subtotal_price
 * @property string|null $sst
 * @property string|null $final_price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Invoice $invoice
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereFinalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereInvoiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereSst($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereSubtotalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereTotalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereUnitPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceItem whereUpdatedAt($value)
 */
	class InvoiceItem extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Product> $products
 * @property-read int|null $products_count
 * @method static \Illuminate\Database\Eloquent\Builder|Location newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Location newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Location query()
 */
	class Location extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $message
 * @property int|null $is_read
 * @property int|null $uid
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Notification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification query()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereIsRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereUpdatedAt($value)
 */
	class Notification extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property int $company_id
 * @property int $product_id
 * @property int|null $rack_id
 * @property int $order_no
 * @property int $quantity
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $floor_id
 * @property int|null $week_number
 * @property-read \App\Models\Delivery|null $delivery
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Picker> $pickers
 * @property-read int|null $pickers_count
 * @property-read \App\Models\Product|null $product
 * @method static \Illuminate\Database\Eloquent\Builder|Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order query()
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereFloorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereOrderNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereRackId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereWeekNumber($value)
 */
	class Order extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder|PDFReport newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PDFReport newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PDFReport query()
 */
	class PDFReport extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $tel
 * @property string|null $email
 * @property string|null $attention
 * @property int $partner_type
 * @property int|null $uid
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Product> $products
 * @property-read int|null $products_count
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Partner newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Partner newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Partner query()
 * @method static \Illuminate\Database\Eloquent\Builder|Partner whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partner whereAttention($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partner whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partner whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partner whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partner wherePartnerType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partner whereTel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partner whereUid($value)
 */
	class Partner extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property int $product_id
 * @property int|null $rack_id
 * @property int|null $return_stock_id
 * @property int|null $order_no
 * @property int $quantity
 * @property string $status
 * @property string|null $report
 * @property string|null $remark
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $floor_id
 * @property-read \App\Models\Product|null $product
 * @property-read \App\Models\ReturnStock|null $returnStock
 * @method static \Illuminate\Database\Eloquent\Builder|Picker newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Picker newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Picker query()
 * @method static \Illuminate\Database\Eloquent\Builder|Picker whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Picker whereFloorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Picker whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Picker whereOrderNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Picker whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Picker whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Picker whereRackId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Picker whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Picker whereReport($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Picker whereReturnStockId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Picker whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Picker whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Picker whereUserId($value)
 */
	class Picker extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property string $sender_address
 * @property string $receiver_address
 * @property string $sender_state
 * @property string $receiver_state
 * @property string $sender_postcode
 * @property string $receiver_postcode
 * @property string $sender_name
 * @property string $sender_contact_no
 * @property int $pickup_id
 * @property string $time_pickup
 * @property string $date_pickup
 * @property int $carton_quantity
 * @property string $remarks
 * @method static \Illuminate\Database\Eloquent\Builder|Pickup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pickup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pickup query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pickup whereCartonQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pickup whereDatePickup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pickup wherePickupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pickup whereReceiverAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pickup whereReceiverPostcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pickup whereReceiverState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pickup whereRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pickup whereSenderAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pickup whereSenderContactNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pickup whereSenderName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pickup whereSenderPostcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pickup whereSenderState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pickup whereTimePickup($value)
 */
	class Pickup extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string|null $SKU
 * @property string|null $product_desc
 * @property string|null $expired_date
 * @property string $Img
 * @property string|null $UOM
 * @property int|null $weight_per_unit
 * @property int $client_id
 * @property string|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $uid
 * @property int|null $partner_id
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Location> $locations
 * @property-read int|null $locations_count
 * @property-read \App\Models\Partner|null $partner
 * @property-read \App\Models\User|null $users
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereExpiredDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePartnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereProductDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSKU($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUOM($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereWeightPerUnit($value)
 */
	class Product extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $company_id
 * @property string $product_name
 * @property string $product_code
 * @property string $product_desc
 * @property int $carton_quantity
 * @property int $item_per_carton
 * @property string $product_dimensions
 * @property string $weight_per_item
 * @property string $weight_per_carton
 * @property float $total_weight
 * @property float $product_price
 * @property string $product_image
 * @property string $address
 * @property string $phone_number
 * @property string $email
 * @property string|null $status
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRequest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRequest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRequest query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRequest whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRequest whereCartonQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRequest whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRequest whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRequest whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRequest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRequest whereItemPerCarton($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRequest wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRequest whereProductCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRequest whereProductDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRequest whereProductDimensions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRequest whereProductImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRequest whereProductName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRequest whereProductPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRequest whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRequest whereTotalWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRequest whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRequest whereWeightPerCarton($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRequest whereWeightPerItem($value)
 */
	class ProductRequest extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $product_id
 * @property int $pallet_quantity
 * @property int $total_quantity
 * @property int $sold_carton_quantity
 * @property int $sold_item_quantity
 * @property int $remaining_quantity
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Quantity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Quantity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Quantity query()
 * @method static \Illuminate\Database\Eloquent\Builder|Quantity whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quantity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quantity wherePalletQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quantity whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quantity whereRemainingQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quantity whereSoldCartonQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quantity whereSoldItemQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quantity whereTotalQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quantity whereUpdatedAt($value)
 */
	class Quantity extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property string $total_weight
 * @property int $total_quantity
 * @property int $product_id
 * @property int|null $rack_id
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $floor_id
 * @method static \Illuminate\Database\Eloquent\Builder|Restock newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Restock newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Restock query()
 * @method static \Illuminate\Database\Eloquent\Builder|Restock whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restock whereFloorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restock whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restock whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restock whereRackId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restock whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restock whereTotalQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restock whereTotalWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restock whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restock whereUserId($value)
 */
	class Restock extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property int $company_id
 * @property string $return_no
 * @property string $email
 * @property string $address
 * @property string $phone_number
 * @property string|null $receive_status
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Picker> $pickers
 * @property-read int|null $pickers_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Product> $products
 * @property-read int|null $products_count
 * @method static \Illuminate\Database\Eloquent\Builder|ReturnStock newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReturnStock newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReturnStock query()
 * @method static \Illuminate\Database\Eloquent\Builder|ReturnStock whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReturnStock whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReturnStock whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReturnStock whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReturnStock whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReturnStock wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReturnStock whereReceiveStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReturnStock whereReturnNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReturnStock whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReturnStock whereUserId($value)
 */
	class ReturnStock extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $status
 * @method static \Illuminate\Database\Eloquent\Builder|Status newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Status newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Status query()
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereStatus($value)
 */
	class Status extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property-read \App\Models\Partner|null $customer
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transfer query()
 */
	class Transfer extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string $role
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Client|null $client
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Company> $companies
 * @property-read int|null $companies_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Partner> $partners
 * @property-read int|null $partners_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Product> $products
 * @property-read int|null $products_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $waybill_no
 * @property int|null $no
 * @property string $date
 * @property string $customer_id
 * @property string $service_type
 * @property string $shipper_name
 * @property string $shipper_address
 * @property string $shipper_postcode
 * @property string|null $shipper_attention
 * @property string $shipper_tel
 * @property string|null $shipper_email
 * @property string $receiver_name
 * @property string $receiver_address
 * @property string $receiver_postcode
 * @property string|null $receiver_attention
 * @property string $receiver_tel
 * @property string|null $receiver_email
 * @property string|null $order_content
 * @property string|null $order_category
 * @property string|null $order_size
 * @property string|null $order_total_weight
 * @property string|null $remarks
 * @property int $status
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\WaybillFile> $files
 * @property-read int|null $files_count
 * @property-read \App\Models\Status $statusName
 * @method static \Illuminate\Database\Eloquent\Builder|Waybill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Waybill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Waybill query()
 * @method static \Illuminate\Database\Eloquent\Builder|Waybill whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Waybill whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Waybill whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Waybill whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Waybill whereNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Waybill whereOrderCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Waybill whereOrderContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Waybill whereOrderSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Waybill whereOrderTotalWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Waybill whereReceiverAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Waybill whereReceiverAttention($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Waybill whereReceiverEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Waybill whereReceiverName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Waybill whereReceiverPostcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Waybill whereReceiverTel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Waybill whereRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Waybill whereServiceType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Waybill whereShipperAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Waybill whereShipperAttention($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Waybill whereShipperEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Waybill whereShipperName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Waybill whereShipperPostcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Waybill whereShipperTel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Waybill whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Waybill whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Waybill whereWaybillNo($value)
 */
	class Waybill extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $waybill_id
 * @property string $file_path
 * @property string $file_name
 * @property string $uploaded_at
 * @property-read \App\Models\Waybill $waybill
 * @method static \Illuminate\Database\Eloquent\Builder|WaybillFile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WaybillFile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WaybillFile query()
 * @method static \Illuminate\Database\Eloquent\Builder|WaybillFile whereFileName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WaybillFile whereFilePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WaybillFile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WaybillFile whereUploadedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WaybillFile whereWaybillId($value)
 */
	class WaybillFile extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $company_id
 * @property int $week_number
 * @property int $total_inflow_quantity
 * @property int $total_outflow_quantity
 * @property int $net_change_quantity
 * @property int $remaining_quantity
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $company_name
 * @method static \Illuminate\Database\Eloquent\Builder|WeeklyReport newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WeeklyReport newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WeeklyReport query()
 * @method static \Illuminate\Database\Eloquent\Builder|WeeklyReport whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WeeklyReport whereCompanyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WeeklyReport whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WeeklyReport whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WeeklyReport whereNetChangeQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WeeklyReport whereRemainingQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WeeklyReport whereTotalInflowQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WeeklyReport whereTotalOutflowQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WeeklyReport whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WeeklyReport whereWeekNumber($value)
 */
	class WeeklyReport extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property float $weight_of_product
 * @property int|null $rack_id
 * @property int $product_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $floor_id
 * @method static \Illuminate\Database\Eloquent\Builder|Weight newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Weight newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Weight query()
 * @method static \Illuminate\Database\Eloquent\Builder|Weight whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Weight whereFloorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Weight whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Weight whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Weight whereRackId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Weight whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Weight whereWeightOfProduct($value)
 */
	class Weight extends \Eloquent {}
}

