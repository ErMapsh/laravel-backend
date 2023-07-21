<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function () {
    return "Hello world";
});

Route::post('/post', function (Request $req) {
    return response($req->all(), 202);
});

Route::put('/put/{id}', function ($id) {
    // $data = [
    //     'name' => 'Raphael',
    //     'age' => 22,
    //     'email' => 'r.mobis@rmobis.com'
    // ];
    $name = "mahesh";
    $age = 23;
    $email = 'mahesh@email.com';
    $data = compact('name', 'age', 'email');

    return response($data, 200);
});

Route::delete('/delete/{id}', function ($id) {
    return response($id, 200);
});

Route::patch('/patch/{id}', function ($id) {
    return response($id, 200);
});
