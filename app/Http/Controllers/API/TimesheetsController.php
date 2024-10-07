<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * @OA\Info(
 *     version="1.0",
 *     title="Timesheet2",
 *     description="Pulling timesheets",
 *     @OA\Contact(name="C")
 * )
 * @OA\Server(
 *     url="http://localhost:8000",
 *     description="API server"
 * )
 */
class TimesheetsController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/timesheets/pending",
     *     @OA\Response(
     *         response="200",
     *         description="Pulls the pending timesheets"
     *     )
     * )
     */
    function pending(Request $request) {
        $collection = [];

        return response()->json($collection);
    }

    /**
     * @OA\Get(
     *     path="/api/timesheets/approved",
     *     @OA\Response(
     *         response="200",
     *         description="Pulls the approved timesheets"
     *     )
     * )
     */
    function approved(Request $request) {
        $collection = [];

        return response()->json($collection);
    }

    /**
     * @OA\Get(
     *     path="/api/timesheets/rejected",
     *     @OA\Response(
     *         response="200",
     *         description="Pulls the rejected timesheets"
     *     )
     * )
     */
    function rejected(Request $request) {
        $collection = [];

        return response()->json($collection);
    }
}
