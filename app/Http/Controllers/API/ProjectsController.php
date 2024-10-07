<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * @OA\Info(
 *     version="1.0",
 *     title="Projects",
 *     description="Pulling projects listing",
 *     @OA\Contact(name="C")
 * )
 * @OA\Server(
 *     url="http://localhost:8000",
 *     description="API server"
 * )
 */
class ProjectsController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/projects",
     *     @OA\Response(
     *         response="200",
     *         description="Pulls projects"
     *     )
     * )
     */
    public function projects(Request $request) {
        $projects = [];
        return response()->json($projects);
    }
}
