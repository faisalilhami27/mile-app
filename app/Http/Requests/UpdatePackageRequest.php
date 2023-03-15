<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePackageRequest extends FormRequest
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
      "customer_name" => 'required|min:3|max:100',
      "transaction_amount" => 'required|min:4|max:30',
      "transaction_payment_type" => 'required|min:1|max:20',
      "transaction_order" => 'required|min:1|max:10',
      "organization_id" => 'required|min:1|max:10',

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
    ];
  }
}
