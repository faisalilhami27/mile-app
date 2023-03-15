<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PackageRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize(): bool
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, mixed>
   */
  public function rules(): array
  {
    return [
      "transaction_id" => 'required|min:5|max:100',
      "customer_name" => 'required|min:3|max:100',
      "customer_code" => 'required|min:6|max:20',
      "transaction_amount" => 'required|min:4|max:30',
      "transaction_discount" => 'required|min:1|max:20',
      "transaction_additional_field" => 'required|min:3|max:20',
      "transaction_payment_type" => 'required|min:1|max:20',
      "transaction_state" => 'required|min:4|max:20',
      "transaction_code" => 'required|min:10|max:30',
      "transaction_order" => 'required|min:1|max:10',
      "location_id" => 'required|min:10|max:25',
      "organization_id" => 'required|min:1|max:10',
      "transaction_payment_type_name" => 'required|min:3|max:100|alpha',
      "transaction_cash_amount" => 'required|min:0|max:10',
      "transaction_cash_change" => 'required|min:0|max:10',

      // customer attribute
      "customer_attribute" => 'required',
      "customer_attribute.Nama_Sales" => 'required|min:3|max:100',
      "customer_attribute.TOP" => 'required|min:3|max:100',
      "customer_attribute.Jenis_Pelanggan" => 'required|min:3|max:100',

      "connote" => 'required',
      "connote.connote_id" => 'required|min:10|max:50',
      "connote.connote_number" => 'required|min:1|max:50',
      "connote.connote_service" => 'required|min:3|max:50',
      "connote.connote_service_price" => 'required|min:3|max:50',
      "connote.connote_amount" => 'required|min:3|max:50',
      "connote.connote_code" => 'required|min:3|max:50',
      "connote.connote_order" => 'required|min:1|max:10',
      "connote.connote_state" => 'required|min:3|max:50',
      "connote.connote_state_id" => 'required|min:1|max:10',
      "connote.zone_code_from" => 'required|min:3|max:50',
      "connote.transaction_id" => 'required|min:3|max:50',
      "connote.actual_weight" => 'required|min:1|max:50',
      "connote.volume_weight" => 'required|min:0|max:50',
      "connote.chargeable_weight" => 'required|min:0|max:50',
      "connote.organization_id" => 'required|min:1|max:10',
      "connote.location_id" => 'required|min:10|max:25',
      "connote.connote_total_package" => 'required|min:1|max:10',
      "connote.connote_surcharge_amount" => 'required|min:1|max:50',
      "connote.connote_sla_day" => 'required|min:1|max:10',
      "connote.location_name" => 'required|min:3|max:50',
      "connote.location_type" => 'required|min:1|max:10',
      "connote.source_tariff_db" => 'required|min:3|max:50',
      "connote.id_source_tariff" => 'required|min:1|max:10',
      "connote.history" => 'array',

      "connote_id" => 'required|min:10|max:50',

      "origin_data" => 'required',
      "origin_data.customer_name" => "required|min:3|max:100",
      "origin_data.customer_address" => "required|min:10|max:255",
      "origin_data.customer_email" => "required|email|min:10|max:100",
      "origin_data.customer_phone" => "required|min:8|max:20",
      "origin_data.customer_zip_code" => "required|min:5|max:10",
      "origin_data.zone_code" => "required|min:3|max:50",
      "origin_data.organization_id" => "required|min:1|max:10",
      "origin_data.location_id" => "required|min:10|max:25",

      "destination_data" => 'required',
      "destination_data.customer_name" => "required|min:3|max:100",
      "destination_data.customer_address" => "required|min:10|max:255",
      "destination_data.customer_phone" => "required|min:8|max:20",
      "destination_data.customer_zip_code" => "required|min:5|max:10",
      "destination_data.zone_code" => "required|min:3|max:50",
      "destination_data.organization_id" => "required|min:1|max:10",
      "destination_data.location_id" => "required|min:10|max:25",

      "koli_data" => 'required|array',
      "koli_data.*.koli_length" => 'required|min:0|max:10',
      "koli_data.*.koli_width" => 'required|min:0|max:10',
      "koli_data.*.koli_height" => 'required|min:0|max:10',
      "koli_data.*.koli_surcharge" => 'array',
      "koli_data.*.koli_chargeable_weight" => 'required|min:0|max:10',
      "koli_data.*.koli_description" => 'required|min:3|max:255',
      "koli_data.*.koli_volume" => 'required|min:0|max:10',
      "koli_data.*.koli_weight" => 'required|min:0|max:10',
      "koli_data.*.koli_custom_field" => 'required',
      "koli_data.*.koli_id" => 'required|min:10|max:50',
      "koli_data.*.koli_code" => 'required|min:10|max:50',
      "koli_data.*.awb_url" => 'required|min:10|max:100|url',

      "custom_field" => 'required',
      "custom_field.catatan_tambahan" => 'required|min:10|max:255',

      "currentLocation" => 'required',
      "currentLocation.name" => 'required|min:3|max:50',
      "currentLocation.type" => 'required|min:3|max:10',
      "currentLocation.code" => 'required|min:3|max:25',
    ];
  }
}
