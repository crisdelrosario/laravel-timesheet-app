<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * @OA\Info(
 *     version="1.0",
 *     title="Health Check",
 *     description="This can be use for health checking",
 *     @OA\Contact(name="C")
 * )
 * @OA\Server(
 *     url="http://localhost:8000",
 *     description="API server"
 * )
 */
class HealthController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/health",
     *     @OA\Response(
     *         response="200",
     *         description="This returns PONG with up-time"
     *     )
     * )
     */
    public function index(Request $request) {
        $up_time=shell_exec('uptime');

        return response()->json(
            array(
                "message" => "PONG: $up_time"
            )
        );
    }
}
