<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *     title = "Antep Bootcamp Swagger Example",
 *     version = "1.0.0",
 *     @OA\Contact(
 *     email = "kerim.caglarr@gmail.com",
 *     name = "Kerim Çağlar"
 * )
 * )
 *
 *
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

}

/// Kullanılan paketler:
///
/// 1. adım laravel projesi indirme
/// 2. adım paket kurulumu : composer require darkaonline/l5-swagger
/// 3. adım paket kurulumu : (Hata verirse önemsemeyin) composer require zircote/swagger-php
/// 4. adım paket publish etme :
/// php artisan vendor:publish --provider "L5Swagger\L5SwaggerServiceProvider"
///
///
/// .env dosyası içine eklenecekler:
/// L5_SWAGGER_GENERATE_ALWAYS = true
/// SWAGGER_VERSION=2.0
///
/// php artisan l5-swagger:generate
///

