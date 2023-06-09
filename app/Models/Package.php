<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Package extends Eloquent
{
  use HasFactory, SoftDeletes;

  protected $connection = 'mongodb';
  protected $collection = 'transactions';
  protected $fillable = [
    "transaction_id",
    "customer_name",
    "customer_code",
    "transaction_amount",
    "transaction_discount",
    "transaction_additional_field",
    "transaction_payment_type",
    "transaction_state",
    "transaction_code",
    "transaction_order",
    "location_id",
    "organization_id",
    "transaction_payment_type_name",
    "transaction_cash_amount",
    "transaction_cash_change",
    "customer_attribute",
    "connote",
    "connote_id",
    "origin_data",
    "destination_data",
    "koli_data",
    "custom_field",
    "currentLocation",
    "created_at",
    "updated_at",
  ];
}

