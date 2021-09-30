<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\UserController as UserV1;
use App\Http\Controllers\Api\V1\PagarController as PagarV1;
use App\Http\Controllers\Api\V1\ProductoController as ProductoV1;
use App\Http\Controllers\Api\V1\CompradorController as CompradorV1;
use App\Http\Controllers\Api\V1\VendedorController as VendedorV1;

Route::apiResource('v1/user', UserV1::class)
    ->only(['index', 'show', 'store', 'update', 'destroy']); 

Route::apiResource('v1/pagar', PagarV1::class)
    ->only(['index', 'show', 'store', 'update', 'destroy'])
    ->middleware('auth:api');

Route::apiResource('v1/producto', ProductoV1::class)
    ->only(['index', 'show', 'store', 'update', 'destroy'])
    ->middleware('auth:api');

Route::apiResource('v1/comprador', CompradorV1::class)
    ->only(['index', 'show', 'store', 'update', 'destroy'])
    ->middleware('auth:api');

Route::apiResource('v1/vendedor', VendedorV1::class)
    ->only(['index', 'show', 'store', 'update', 'destroy'])
    ->middleware('auth:api');