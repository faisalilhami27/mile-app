<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  /**
   * Response
   * @param $status
   * @param $message
   * @param $code
   * @param null $data
   * @return JsonResponse
   */
  public function response($status, $message, $code, $data = null): \Illuminate\Http\JsonResponse
  {
    return response()->json([
      'status' => $status,
      'message' => $message,
      'data' => $data
    ], $code);
  }
}
