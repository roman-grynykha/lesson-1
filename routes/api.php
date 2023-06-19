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


/* ------------------------------------------------------------------------
 * 18 | Створіть маршрут “/api/person”, який повертає відповідь у форматі JSON
 * з наступними полями: “name”, “age”, “city”.
 * Інформацію можна заповнити будь-якими даними на ваш вибір..
 */
Route::get('/person', function () {
    return response()->json([
        "name" => "name_val",
        "age" => "age_val",
        "city" => "city_val",
    ]);
});


/* ------------------------------------------------------------------------
 * 19 | Створіть маршрут “/api/person/{name}“, який повертає відповідь
 * у форматі JSON з інформацією про користувача з заданим іменем.
 * Якщо користувача з таким іменем немає, поверніть відповідь з відповідним повідомленням.
 */
Route::get('/person/{name}', function (string $name) {
    return response()->json([
        "name" => $name,
        "age" => "age_val",
        "city" => "city_val",
    ]);
});
