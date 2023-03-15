<?php

namespace App\Repositories;

use App\Models\Package;

class PackageRepository
{
  /**
   * Get all packages
   * @return mixed
   */
  public function getAll(): mixed
  {
    try {
      return Package::orderBy('created_at', 'desc')->get();
    } catch (\Exception $e) {
      return $e->getMessage();
    }
  }

  /**
   * Get package by id
   * @param string $id
   * @return mixed
   */
  public function getById(string $id): mixed
  {
    try {
      return Package::find($id);
    } catch (\Exception $e) {
      return $e->getMessage();
    }
  }

  /**
   * Create new package
   * @param array $data
   * @return mixed
   */
  public function store(array $data): mixed
  {
    try {
      return Package::create($data);
    } catch (\Exception $e) {
      return $e->getMessage();
    }
  }

  /**
   * Update package by id
   * @param string $id
   * @param array $data
   * @return mixed
   */
  public function update(string $id, array $data): mixed
  {
    try {
      $package = Package::find($id);
      $package->update($data);
      return $package;
    } catch (\Exception $e) {
      return $e->getMessage();
    }
  }

  /**
   * Delete package by id
   * @param string $id
   * @return mixed
   */
  public function delete(string $id): mixed
  {
    try {
      $package = Package::find($id);
      $package->delete();
      return $package;
    } catch (\Exception $e) {
      return $e->getMessage();
    }
  }
}
