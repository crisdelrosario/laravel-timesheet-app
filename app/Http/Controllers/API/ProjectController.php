<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * @OA\Info(
 *     version="1.0",
 *     title="Project",
 *     description="Add, update, remove project",
 *     @OA\Contact(name="C")
 * )
 * @OA\Server(
 *     url="http://localhost:8000",
 *     description="API server"
 * )
 */
class ProjectController extends Controller
{
    /**
     * @OA\Post(
     *     path="/api/project/create",
     *     @OA\Response(
     *         response="200",
     *         description="Create new project"
     *     )
     * )
     */
    public function create(Request $request) {
        return response()->json(
            array(
                "status" => "created"
            )
        );
    }

    /**
     * @OA\Put(
     *     path="/api/project/update",
     *     @OA\Response(
     *         response="200",
     *         description="Update existing project"
     *     )
     * )
     */
    public function update(Request $request) {
        return response()->json(
            array(
                "status" => "updated"
            )
        );
    }

    /**
     * @OA\Delete(
     *     path="/api/project/drop",
     *     @OA\Response(
     *         response="200",
     *         description="Remove project"
     *     )
     * )
     */
    public function drop(Request $request) {
        return response()->json(
            array(
                "status" => "deleted"
            )
        );
    }
}
