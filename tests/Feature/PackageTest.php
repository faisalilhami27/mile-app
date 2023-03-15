<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PackageTest extends TestCase
{
  /**
   * A basic feature test example.
   *
   * @test
   */
  public function getAllData()
  {
    $response = $this->get('/api/package/all');
    $response->assertStatus(200);
  }

  /**
   * A basic feature test example.
   *
   * @test
   */
  public function getDataByIdNotFound()
  {
    $response = $this->get('/api/package/5f9f1b0b8b6b9c0b8c8b6b0c');
    $response->assertStatus(404);
  }

  /**
   * A basic feature test example.
   *
   * @test
   */
  public function getDataByIdSuccess()
  {
    $response = $this->get('/api/package/641199adab218ecdba0b3ba4');
    $response->assertStatus(200)
      ->assertOk();
  }

  /**
   * A basic feature test example.
   *
   * @test
   */
  public function storeSuccess()
  {
    $data = [
      "transaction_id" => "d0090c40-539f-479a-8274-899b9970bddc",
      "customer_name" => "PT. AMARA PRIMATIGA",
      "customer_code" => "1678593",
      "transaction_amount" => "70700",
      "transaction_discount" => "0",
      "transaction_additional_field" => "true",
      "transaction_payment_type" => "29",
      "transaction_state" => "PAID",
      "transaction_code" => "CGKFT20200715121",
      "transaction_order" => "123",
      "location_id" => "5cecb20b6c49615b174c3e74",
      "organization_id" => 6,
      "transaction_payment_type_name" => "Invoice",
      "transaction_cash_amount" => 0,
      "transaction_cash_change" => 0,
      "customer_attribute" => [
        "Nama_Sales" => "Radit Fitrawikarsa",
        "TOP" => "14 Hari",
        "Jenis_Pelanggan" => "B2B"
      ],
      "connote" => [
        "connote_id" => "f70670b1-c3ef-4caf-bc4f-eefa702092ed",
        "connote_number" => 1,
        "connote_service" => "ECO",
        "connote_service_price" => 70700,
        "connote_amount" => 70700,
        "connote_code" => "AWB00100209082020",
        "connote_booking_code" => "",
        "connote_order" => 326931,
        "connote_state" => "PAID",
        "connote_state_id" => 2,
        "zone_code_from" => "CGKFT",
        "zone_code_to" => "SMG",
        "surcharge_amount" => null,
        "transaction_id" => "d0090c40-539f-479a-8274-899b9970bddc",
        "actual_weight" => 20,
        "volume_weight" => 0,
        "chargeable_weight" => 20,
        "organization_id" => 6,
        "location_id" => "5cecb20b6c49615b174c3e74",
        "connote_total_package" => "3",
        "connote_surcharge_amount" => "0",
        "connote_sla_day" => "4",
        "location_name" => "Hub Jakarta Selatan",
        "location_type" => "HUB",
        "source_tariff_db" => "tariff_customers",
        "id_source_tariff" => "1576868",
        "pod" => null,
        "history" => [
        ]
      ],
      "connote_id" => "f70670b1-c3ef-4caf-bc4f-eefa702092ed",
      "origin_data" => [
        "customer_name" => "PT. NARA OKA PRAKARSA",
        "customer_address" => "JL. KH. AHMAD DAHLAN NO. 100, SEMARANG TENGAH 12420",
        "customer_email" => "info@naraoka.co.id",
        "customer_phone" => "024-1234567",
        "customer_address_detail" => null,
        "customer_zip_code" => "12420",
        "zone_code" => "CGKFT",
        "organization_id" => 6,
        "location_id" => "5cecb20b6c49615b174c3e74"
      ],
      "destination_data" => [
        "customer_name" => "PT AMARIS HOTEL SIMPANG LIMA",
        "customer_address" => "JL. KH. AHMAD DAHLAN NO. 01, SEMARANG TENGAH",
        "customer_email" => null,
        "customer_phone" => "0248453499",
        "customer_address_detail" => "KOTA SEMARANG SEMARANG TENGAH KARANGKIDUL",
        "customer_zip_code" => "50241",
        "zone_code" => "SMG",
        "organization_id" => 6,
        "location_id" => "5cecb20b6c49615b174c3e74"
      ],
      "koli_data" => [
        [
          "koli_length" => 0,
          "awb_url" => "https://tracking.mile.app/label/AWB00100209082020.1",
          "koli_chargeable_weight" => 9,
          "koli_width" => 0,
          "koli_surcharge" => [
          ],
          "koli_height" => 0,
          "koli_description" => "V WARP",
          "koli_formula_id" => null,
          "connote_id" => "f70670b1-c3ef-4caf-bc4f-eefa702092ed",
          "koli_volume" => 0,
          "koli_weight" => 9,
          "koli_id" => "e2cb6d86-0bb9-409b-a1f0-389ed4f2df2d",
          "koli_custom_field" => [
            "awb_sicepat" => null,
            "harga_barang" => null
          ],
          "koli_code" => "AWB00100209082020.1"
        ],
        [
          "koli_length" => 0,
          "awb_url" => "https://tracking.mile.app/label/AWB00100209082020.2",
          "koli_chargeable_weight" => 9,
          "koli_width" => 0,
          "koli_surcharge" => [
          ],
          "koli_height" => 0,
          "koli_description" => "V WARP",
          "koli_formula_id" => null,
          "connote_id" => "f70670b1-c3ef-4caf-bc4f-eefa702092ed",
          "koli_volume" => 0,
          "koli_weight" => 9,
          "koli_id" => "3600f10b-4144-4e58-a024-cc3178e7a709",
          "koli_custom_field" => [
            "awb_sicepat" => null,
            "harga_barang" => null
          ],
          "koli_code" => "AWB00100209082020.2"
        ],
        [
          "koli_length" => 0,
          "awb_url" => "https://tracking.mile.app/label/AWB00100209082020.3",
          "koli_chargeable_weight" => 2,
          "koli_width" => 0,
          "koli_surcharge" => [],
          "koli_height" => 0,
          "koli_description" => "LID HOT CUP",
          "koli_formula_id" => null,
          "connote_id" => "f70670b1-c3ef-4caf-bc4f-eefa702092ed",
          "koli_volume" => 0,
          "koli_weight" => 2,
          "koli_id" => "2937bdbf-315e-4c5e-b139-fd39a3dfd15f",
          "koli_custom_field" => [
            "awb_sicepat" => null,
            "harga_barang" => null
          ],
          "koli_code" => "AWB00100209082020.3"
        ]
      ],
      "custom_field" => [
        "catatan_tambahan" => "JANGAN DI BANTING / DI TINDIH"
      ],
      "currentLocation" => [
        "name" => "Hub Jakarta Selatan",
        "code" => "JKTS01",
        "type" => "Agent"
      ]
    ];
    $response = $this->post('/api/package', $data);
    $response->assertCreated()
      ->assertSuccessful();
  }

  /**
   * A basic feature test example.
   *
   * @test
   */
  public function storeFailed()
  {
    $data = [
      "transaction_id" => "",
      "customer_name" => "",
      "customer_code" => "1678593",
      "transaction_amount" => "70700",
      "transaction_discount" => "0",
      "transaction_additional_field" => "true",
      "transaction_payment_type" => "29",
      "transaction_state" => "PAID",
      "transaction_code" => "CGKFT20200715121",
      "transaction_order" => "123",
      "location_id" => "5cecb20b6c49615b174c3e74",
      "organization_id" => 6,
      "transaction_payment_type_name" => "Invoice",
      "transaction_cash_amount" => 0,
      "transaction_cash_change" => 0,
      "customer_attribute" => [
        "Nama_Sales" => "Radit Fitrawikarsa",
        "TOP" => "14 Hari",
        "Jenis_Pelanggan" => "B2B"
      ],
      "connote" => [
        "connote_id" => "f70670b1-c3ef-4caf-bc4f-eefa702092ed",
        "connote_number" => 1,
        "connote_service" => "ECO",
        "connote_service_price" => 70700,
        "connote_amount" => 70700,
        "connote_code" => "AWB00100209082020",
        "connote_booking_code" => "",
        "connote_order" => 326931,
        "connote_state" => "PAID",
        "connote_state_id" => 2,
        "zone_code_from" => "CGKFT",
        "zone_code_to" => "SMG",
        "surcharge_amount" => null,
        "transaction_id" => "d0090c40-539f-479a-8274-899b9970bddc",
        "actual_weight" => 20,
        "volume_weight" => 0,
        "chargeable_weight" => 20,
        "organization_id" => 6,
        "location_id" => "5cecb20b6c49615b174c3e74",
        "connote_total_package" => "3",
        "connote_surcharge_amount" => "0",
        "connote_sla_day" => "4",
        "location_name" => "Hub Jakarta Selatan",
        "location_type" => "HUB",
        "source_tariff_db" => "tariff_customers",
        "id_source_tariff" => "1576868",
        "pod" => null,
        "history" => [
        ]
      ],
      "connote_id" => "f70670b1-c3ef-4caf-bc4f-eefa702092ed",
      "origin_data" => [
        "customer_name" => "PT. NARA OKA PRAKARSA",
        "customer_address" => "JL. KH. AHMAD DAHLAN NO. 100, SEMARANG TENGAH 12420",
        "customer_email" => "info@naraoka.co.id",
        "customer_phone" => "024-1234567",
        "customer_address_detail" => null,
        "customer_zip_code" => "12420",
        "zone_code" => "CGKFT",
        "organization_id" => 6,
        "location_id" => "5cecb20b6c49615b174c3e74"
      ],
      "destination_data" => [
        "customer_name" => "PT AMARIS HOTEL SIMPANG LIMA",
        "customer_address" => "JL. KH. AHMAD DAHLAN NO. 01, SEMARANG TENGAH",
        "customer_email" => null,
        "customer_phone" => "0248453499",
        "customer_address_detail" => "KOTA SEMARANG SEMARANG TENGAH KARANGKIDUL",
        "customer_zip_code" => "50241",
        "zone_code" => "SMG",
        "organization_id" => 6,
        "location_id" => "5cecb20b6c49615b174c3e74"
      ],
      "koli_data" => [
        [
          "koli_length" => 0,
          "awb_url" => "https://tracking.mile.app/label/AWB00100209082020.1",
          "koli_chargeable_weight" => 9,
          "koli_width" => 0,
          "koli_surcharge" => [
          ],
          "koli_height" => 0,
          "koli_description" => "V WARP",
          "koli_formula_id" => null,
          "connote_id" => "f70670b1-c3ef-4caf-bc4f-eefa702092ed",
          "koli_volume" => 0,
          "koli_weight" => 9,
          "koli_id" => "e2cb6d86-0bb9-409b-a1f0-389ed4f2df2d",
          "koli_custom_field" => [
            "awb_sicepat" => null,
            "harga_barang" => null
          ],
          "koli_code" => "AWB00100209082020.1"
        ],
        [
          "koli_length" => 0,
          "awb_url" => "https://tracking.mile.app/label/AWB00100209082020.2",
          "koli_chargeable_weight" => 9,
          "koli_width" => 0,
          "koli_surcharge" => [
          ],
          "koli_height" => 0,
          "koli_description" => "V WARP",
          "koli_formula_id" => null,
          "connote_id" => "f70670b1-c3ef-4caf-bc4f-eefa702092ed",
          "koli_volume" => 0,
          "koli_weight" => 9,
          "koli_id" => "3600f10b-4144-4e58-a024-cc3178e7a709",
          "koli_custom_field" => [
            "awb_sicepat" => null,
            "harga_barang" => null
          ],
          "koli_code" => "AWB00100209082020.2"
        ],
        [
          "koli_length" => 0,
          "awb_url" => "https://tracking.mile.app/label/AWB00100209082020.3",
          "koli_chargeable_weight" => 2,
          "koli_width" => 0,
          "koli_surcharge" => [],
          "koli_height" => 0,
          "koli_description" => "LID HOT CUP",
          "koli_formula_id" => null,
          "connote_id" => "f70670b1-c3ef-4caf-bc4f-eefa702092ed",
          "koli_volume" => 0,
          "koli_weight" => 2,
          "koli_id" => "2937bdbf-315e-4c5e-b139-fd39a3dfd15f",
          "koli_custom_field" => [
            "awb_sicepat" => null,
            "harga_barang" => null
          ],
          "koli_code" => "AWB00100209082020.3"
        ]
      ],
      "custom_field" => [
        "catatan_tambahan" => "JANGAN DI BANTING / DI TINDIH"
      ],
      "currentLocation" => [
        "name" => "Hub Jakarta Selatan",
        "code" => "JKTS01",
        "type" => "Agent"
      ]
    ];
    $response = $this->post('/api/package', $data);
    $response->assertFound();
  }

  /**
   * A basic feature test example.
   *
   * @test
   */
  public function updateSuccess()
  {
    $data = [
      "transaction_id" => "d0090c40-539f-479a-8274-899b9970bddc",
      "customer_name" => "PT. AMARA PRIMATIGA SAUDARA",
      "customer_code" => "1678593",
      "transaction_amount" => "70700",
      "transaction_discount" => "0",
      "transaction_additional_field" => "true",
      "transaction_payment_type" => "29",
      "transaction_state" => "PAID",
      "transaction_code" => "CGKFT20200715121",
      "transaction_order" => "123",
      "location_id" => "5cecb20b6c49615b174c3e74",
      "organization_id" => 6,
      "transaction_payment_type_name" => "Invoice",
      "transaction_cash_amount" => 0,
      "transaction_cash_change" => 0,
      "customer_attribute" => [
        "Nama_Sales" => "Radit Fitrawikarsa",
        "TOP" => "14 Hari",
        "Jenis_Pelanggan" => "B2B"
      ],
      "connote" => [
        "connote_id" => "f70670b1-c3ef-4caf-bc4f-eefa702092ed",
        "connote_number" => 1,
        "connote_service" => "ECO",
        "connote_service_price" => 70700,
        "connote_amount" => 70700,
        "connote_code" => "AWB00100209082020",
        "connote_booking_code" => "",
        "connote_order" => 326931,
        "connote_state" => "PAID",
        "connote_state_id" => 2,
        "zone_code_from" => "CGKFT",
        "zone_code_to" => "SMG",
        "surcharge_amount" => null,
        "transaction_id" => "d0090c40-539f-479a-8274-899b9970bddc",
        "actual_weight" => 20,
        "volume_weight" => 0,
        "chargeable_weight" => 20,
        "organization_id" => 6,
        "location_id" => "5cecb20b6c49615b174c3e74",
        "connote_total_package" => "3",
        "connote_surcharge_amount" => "0",
        "connote_sla_day" => "4",
        "location_name" => "Hub Jakarta Selatan",
        "location_type" => "HUB",
        "source_tariff_db" => "tariff_customers",
        "id_source_tariff" => "1576868",
        "pod" => null,
        "history" => [
        ]
      ],
      "connote_id" => "f70670b1-c3ef-4caf-bc4f-eefa702092ed",
      "origin_data" => [
        "customer_name" => "PT. NARA OKA PRAKARSA",
        "customer_address" => "JL. KH. AHMAD DAHLAN NO. 100, SEMARANG TENGAH 12420",
        "customer_email" => "info@naraoka.co.id",
        "customer_phone" => "024-1234567",
        "customer_address_detail" => null,
        "customer_zip_code" => "12420",
        "zone_code" => "CGKFT",
        "organization_id" => 6,
        "location_id" => "5cecb20b6c49615b174c3e74"
      ],
      "destination_data" => [
        "customer_name" => "PT AMARIS HOTEL SIMPANG LIMA",
        "customer_address" => "JL. KH. AHMAD DAHLAN NO. 01, SEMARANG TENGAH",
        "customer_email" => null,
        "customer_phone" => "0248453499",
        "customer_address_detail" => "KOTA SEMARANG SEMARANG TENGAH KARANGKIDUL",
        "customer_zip_code" => "50241",
        "zone_code" => "SMG",
        "organization_id" => 6,
        "location_id" => "5cecb20b6c49615b174c3e74"
      ],
      "koli_data" => [
        [
          "koli_length" => 0,
          "awb_url" => "https://tracking.mile.app/label/AWB00100209082020.1",
          "koli_chargeable_weight" => 9,
          "koli_width" => 0,
          "koli_surcharge" => [
          ],
          "koli_height" => 0,
          "koli_description" => "V WARP",
          "koli_formula_id" => null,
          "connote_id" => "f70670b1-c3ef-4caf-bc4f-eefa702092ed",
          "koli_volume" => 0,
          "koli_weight" => 9,
          "koli_id" => "e2cb6d86-0bb9-409b-a1f0-389ed4f2df2d",
          "koli_custom_field" => [
            "awb_sicepat" => null,
            "harga_barang" => null
          ],
          "koli_code" => "AWB00100209082020.1"
        ],
        [
          "koli_length" => 0,
          "awb_url" => "https://tracking.mile.app/label/AWB00100209082020.2",
          "koli_chargeable_weight" => 9,
          "koli_width" => 0,
          "koli_surcharge" => [
          ],
          "koli_height" => 0,
          "koli_description" => "V WARP",
          "koli_formula_id" => null,
          "connote_id" => "f70670b1-c3ef-4caf-bc4f-eefa702092ed",
          "koli_volume" => 0,
          "koli_weight" => 9,
          "koli_id" => "3600f10b-4144-4e58-a024-cc3178e7a709",
          "koli_custom_field" => [
            "awb_sicepat" => null,
            "harga_barang" => null
          ],
          "koli_code" => "AWB00100209082020.2"
        ],
        [
          "koli_length" => 0,
          "awb_url" => "https://tracking.mile.app/label/AWB00100209082020.3",
          "koli_chargeable_weight" => 2,
          "koli_width" => 0,
          "koli_surcharge" => [],
          "koli_height" => 0,
          "koli_description" => "LID HOT CUP",
          "koli_formula_id" => null,
          "connote_id" => "f70670b1-c3ef-4caf-bc4f-eefa702092ed",
          "koli_volume" => 0,
          "koli_weight" => 2,
          "koli_id" => "2937bdbf-315e-4c5e-b139-fd39a3dfd15f",
          "koli_custom_field" => [
            "awb_sicepat" => null,
            "harga_barang" => null
          ],
          "koli_code" => "AWB00100209082020.3"
        ]
      ],
      "custom_field" => [
        "catatan_tambahan" => "JANGAN DI BANTING / DI TINDIH"
      ],
      "currentLocation" => [
        "name" => "Hub Jakarta Selatan",
        "code" => "JKTS01",
        "type" => "Agent"
      ]
    ];
    $response = $this->put('/api/package/6411c77b00164c8b1107c6c2', $data);
    $response->assertSuccessful();
  }

  /**
   * A basic feature test example.
   *
   * @test
   */
  public function updateFailed()
  {
    $data = [
      "transaction_id" => "134kfd-3209i402393k-32904032",
      "customer_name" => "TESTING",
      "customer_code" => "1678593",
      "transaction_amount" => "70700",
      "transaction_discount" => "0",
      "transaction_additional_field" => "true",
      "transaction_payment_type" => "29",
      "transaction_state" => "PAID",
      "transaction_code" => "CGKFT20200715121",
      "transaction_order" => "123",
      "location_id" => "5cecb20b6c49615b174c3e74",
      "organization_id" => 6,
      "transaction_payment_type_name" => "Invoice",
      "transaction_cash_amount" => 0,
      "transaction_cash_change" => 0,
      "customer_attribute" => [
        "Nama_Sales" => "Radit Fitrawikarsa",
        "TOP" => "14 Hari",
        "Jenis_Pelanggan" => "B2B"
      ]
    ];
    $response = $this->put('/api/package/', $data);
    $response->assertStatus(405);
  }

  /**
   * A basic feature test example.
   *
   * @test
   */
  public function updateSomeFieldSuccess()
  {
    $data = [
      "customer_name" => "PT. AMARA PRIMATIGA SAUDARA KAYA",
      "transaction_amount" => "70700",
      "transaction_payment_type" => "29",
      "transaction_order" => "123",
      "organization_id" => 6,
      "origin_data" => [
        "customer_name" => "PT. NARA OKA PRAKARSA",
        "customer_address" => "JL. KH. AHMAD DAHLAN NO. 100, SEMARANG TENGAH 12420",
        "customer_email" => "info@naraoka.co.id",
        "customer_phone" => "024-1234567",
        "customer_address_detail" => null,
        "customer_zip_code" => "12420",
        "zone_code" => "CGKFT",
        "organization_id" => 6,
        "location_id" => "5cecb20b6c49615b174c3e74"
      ],
      "destination_data" => [
        "customer_name" => "PT AMARIS HOTEL SIMPANG LIMA",
        "customer_address" => "JL. KH. AHMAD DAHLAN NO. 01, SEMARANG TENGAH",
        "customer_email" => null,
        "customer_phone" => "0248453499",
        "customer_address_detail" => "KOTA SEMARANG SEMARANG TENGAH KARANGKIDUL",
        "customer_zip_code" => "50241",
        "zone_code" => "SMG",
        "organization_id" => 6,
        "location_id" => "5cecb20b6c49615b174c3e74"
      ]
    ];

    $response = $this->patch('/api/package/6411c77b00164c8b1107c6c2', $data);
    $response->assertStatus(200);
  }

  /**
   * A basic feature test example.
   *
   * @test
   */
  public function updateSomeFieldFailed()
  {
    $data = [
      "customer_name" => "PT. AMARA PRIMATIGA SAUDARA KAYA",
      "transaction_amount" => "70700",
      "transaction_payment_type" => "29",
      "transaction_order" => "123",
      "organization_id" => 6,
    ];
    $response = $this->patch('/api/package/6411c77b00164c8b1107c6c2', $data);
    $response->assertFound();
  }

  /**
   * A basic feature test example.
   *
   * @test
   */
  public function deleteSuccess()
  {
    $response = $this->delete('/api/package/641199adab218ecdba0b3ba4');
    $response->assertStatus(200);
  }

  /**
   * A basic feature test example.
   *
   * @test
   */
  public function deleteFailed()
  {
    $response = $this->delete('/api/package/6411c7c0636ec1a9010b9141');
    $response->assertStatus(404);
  }
}
