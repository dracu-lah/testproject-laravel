<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class HelloController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/hello",
     *     summary="Returns a hello message",
     *     tags={"Hello"},
     *     @OA\Response(
     *         response=200,
     *         description="Successful response",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="message", type="string", example="Hello, World!")
     *         )
     *     )
     * )
     */
    public function __invoke(): JsonResponse
    {
        return response()->json(['message' => 'Hello, World!']);
    }
}
