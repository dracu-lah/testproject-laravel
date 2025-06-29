<?php

namespace App\Swagger;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

/**
 * @OA\Info(
 *     title="Hello API",
 *     version="1.0.0",
 *     description="Simple Hello World JSON API with Swagger in Laravel"
 * )
 *
 * @OA\Server(
 *     url=L5_SWAGGER_CONST_HOST,
 *     description="Localhost API Server"
 * )
 *
 */
class SwaggerController
{
    use AuthorizesRequests;
    use DispatchesJobs;
    use ValidatesRequests;
}
