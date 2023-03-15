<?php

namespace App\UseCases;

class BaseUseCase
{
  /**
   * @param null $data
   * @param string $message
   * @param int $code
   * @return object
   */
  public function returnSuccess($data = null, string $message = 'Success', int $code = 200): object
  {
    return (object) [
      'status' => 'success',
      'message' => $message,
      'data' => $data,
      'code' => $code
    ];
  }

  /**
   * @param string $message
   * @param int $code
   * @return object
   */
  public function returnError(string $message = 'Error', int $code = 500): object
  {
    return (object) [
      'status' => 'error',
      'message' => $message,
      'code' => $code,
      'data' => null
    ];
  }

  /**
   * @param string $message
   * @return object
   */
  public function returnNotFound(string $message = 'Not Found'): object
  {
    return (object) [
      'status' => 'error',
      'message' => $message,
      'code' => 404,
      'data' => null
    ];
  }
}
