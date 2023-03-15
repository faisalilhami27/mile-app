<?php

namespace App\UseCases;

use App\Repositories\PackageRepository;
use Carbon\Carbon;
use MongoDB\BSON\UTCDateTime;

class PackageUseCase extends BaseUseCase
{
  private $packageRepository;

  public function __construct()
  {
    $this->packageRepository = new PackageRepository();
  }

  /**
   * Get all packages
   * @return object
   */
  public function getAll(): object
  {
    try {
      $result = $this->packageRepository->getAll();

      if (count($result) == 0) {
        return $this->returnNotFound('Package not found');
      }

      return $this->returnSuccess($result, 'Package found');
    } catch (\Exception $e) {
      return $this->returnError($e->getMessage());
    }
  }

  /**
   * Get package by id
   * @param string $id
   * @return string|array
   */
  public function getById(string $id): string|object
  {
    try {
      $result = $this->packageRepository->getById($id);

      if (is_null($result)) {
        return $this->returnNotFound('Package not found');
      }

      return $this->returnSuccess($result, 'Package found');
    } catch (\Exception $e) {
      return $this->returnError($e->getMessage());
    }
  }

  /**
   * Create new package
   * @param array $data
   * @return object
   */
  public function store(array $data): object
  {
    try {
      $now = Carbon::now()->toDateTimeString();
      $convertToMongoDate = new UTCDateTime(strtotime($now) * 1000);
      $data['connote']['created_at'] = $convertToMongoDate;
      $data['connote']['updated_at'] = $convertToMongoDate;

      $koliData = [];
      foreach ($data['koli_data'] as $key => $value) {
        $value['created_at'] = $convertToMongoDate;
        $value['updated_at'] = $convertToMongoDate;
        $koliData[$key] = $value;
      }

      $data['koli_data'] = $koliData;
      $result = $this->packageRepository->store($data);
      return $this->returnSuccess($result, 'Package created successfully', 201);
    } catch (\Exception $e) {
      return $this->returnError($e->getMessage());
    }
  }

  /**
   * Update package by id
   * @param string $id
   * @param array $data
   * @return object
   */
  public function update(string $id, array $data): object
  {
    try {
      $package = $this->packageRepository->getById($id);

      if (is_null($package)) {
        return $this->returnNotFound('Package not found');
      }

      $now = Carbon::now()->toDateTimeString();
      $convertToMongoDate = new UTCDateTime(strtotime($now) * 1000);
      $data['connote']['created_at'] = $package['connote']['created_at'];
      $data['connote']['updated_at'] = $convertToMongoDate;

      $koliData = [];
      foreach ($data['koli_data'] as $key => $value) {
        $value['created_at'] = $package['koli_data'][$key]['created_at'];
        $value['updated_at'] = $convertToMongoDate;
        $koliData[$key] = $value;
      }

      $data['koli_data'] = $koliData;
      $result = $this->packageRepository->update($id, $data);
      return $this->returnSuccess($result, 'Package updated successfully');
    } catch (\Exception $e) {
      return $this->returnError($e->getMessage());
    }
  }

  /**
   * Update some field package by id
   * @param string $id
   * @param array $data
   * @return object
   */
  public function updateSomeField(string $id, array $data): object
  {
    try {
      $package = $this->packageRepository->getById($id);

      if (is_null($package)) {
        return $this->returnNotFound('Package not found');
      }

      $result = $this->packageRepository->update($id, $data);
      return $this->returnSuccess($result, 'Package updated successfully');
    } catch (\Exception $e) {
      return $this->returnError($e->getMessage());
    }
  }

  /**
   * Delete package by id
   * @param string $id
   * @return object
   */
  public function delete(string $id): object
  {
    try {
      $package = $this->packageRepository->getById($id);

      if (is_null($package)) {
        return $this->returnNotFound('Package not found');
      }

      $this->packageRepository->delete($id);
      return $this->returnSuccess(null, 'Package deleted successfully');
    } catch (\Exception $e) {
      return $this->returnError($e->getMessage());
    }
  }
}
