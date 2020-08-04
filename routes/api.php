<?php

use App\Model\Product;
use App\Model\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiresource('/products', 'productController');

Route::group(['prefix' => 'products'], function () {

    route::apiResource('/{Product}/Reviews','reviewController');
});
