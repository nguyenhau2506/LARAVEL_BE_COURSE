<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
  /**
     * @OA\Get(
     *   path="/api/test/users",
     *   summary="Get a User",
     *   operationId="getUser",
     *   tags={"Users"},
     *   @OA\Response(response=200, description="Successful operation"),
     *   @OA\Response(response=406, description="Not acceptable"),
     *   @OA\Response(response=500, description="Internal server error")
     * )
     */
    public function users()
    {
        return response()->json([
            'name' => 'Abigail',
            'state' => 'CA'
        ]);
    }
}
