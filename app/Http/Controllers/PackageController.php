<?php

namespace App\Http\Controllers;

use App\Http\Requests\PackageRequest;
use App\Http\Requests\UpdatePackageRequest;
use App\UseCases\PackageUseCase;
use Illuminate\Http\JsonResponse;

class PackageController extends Controller
{
  private $packageUseCase;

  public function __construct()
  {
    $this->packageUseCase = new PackageUseCase();
  }

  /**
   * Get all packages
   *
   * @return JsonResponse
   */
  public function getAll(): JsonResponse
  {
    $result = $this->packageUseCase->getAll();
    return $this->response($result->status, $result->message, $result->code, $result->data);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param PackageRequest $request
   * @return JsonResponse
   */
  public function store(PackageRequest $request): JsonResponse
  {
    $result = $this->packageUseCase->store($request->all());
    return $this->response($result->status, $result->message, $result->code, $result->data);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param string $id
   * @return JsonResponse
   */
  public function getById(string $id): JsonResponse
  {
    $result = $this->packageUseCase->getById($id);
    return $this->response($result->status, $result->message, $result->code, $result->data);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param PackageRequest $request
   * @param string $id
   * @return JsonResponse
   */
  public function update(PackageRequest $request, string $id): JsonResponse
  {
    $result = $this->packageUseCase->update($id, $request->all());
    return $this->response($result->status, $result->message, $result->code, $result->data);
  }

  /**
   * Update some field.
   *
   * @param UpdatePackageRequest $request
   * @param string $id
   * @return JsonResponse
   */
  public function updateSomeField(UpdatePackageRequest $request, string $id): JsonResponse
  {
    $result = $this->packageUseCase->updateSomeField($id, $request->all());
    return $this->response($result->status, $result->message, $result->code, $result->data);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param string $id
   * @return JsonResponse
   */
  public function destroy(string $id): JsonResponse
  {
    $result = $this->packageUseCase->delete($id);
    return $this->response($result->status, $result->message, $result->code, $result->data);
  }
}
