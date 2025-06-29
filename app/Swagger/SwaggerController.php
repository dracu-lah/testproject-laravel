<?php

namespace App\Swagger;

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
 *
 * @OA\SecurityScheme(
 *     securityScheme="bearerAuth",
 *     type="http",
 *     scheme="bearer",
 *     bearerFormat="JWT"
 * )
 */
class SwaggerController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
