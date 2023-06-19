<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


/* ------------------------------------------------------------------------
 * 8 | Відредагуйте файл routes/web.php, щоб налаштувати маршрути для CRUD.
 */
Route::resource('posts', PostController::class);


/* ------------------------------------------------------------------------
 * 9 | Створіть маршрут “/welcome”, який повертає текст
 * “Welcome to our website!“.
 */
Route::get('/welcome', function () {
    return 'Welcome to our website!';
});


/* ------------------------------------------------------------------------
 * 10 | Створіть маршрут “/welcome/{name}“, який повертає “Welcome, {name}!“.
 * Додайте перевірку на відсутність імені. Якщо ім‘я відсутнє, маршрут
 * має повертати “Welcome, guest”.
 *
 >>>> При відсутності $name, конфліктує з роутом '/welcome'
 >>>> Відпрацює перший оголошений
 */
Route::get('/welcome/{name?}', function (string $name = 'guest') {
    return  "Welcome, {$name}!";
});


/* ------------------------------------------------------------------------
 * 11 | Створіть маршрут “/welcome/{name}/{age}“, який повертає
 * “Welcome, {name}. You are {age} years old.“. Додайте перевірку, що вік є числом.
 * Якщо вік не є числом, маршрут має повертати помилку.
 */
Route::get('/welcome/{name}/{age}', function (string $name, int $age) {
    return  "Welcome, {$name}. You are {$age} years old.";
})->whereNumber("age");


/* ------------------------------------------------------------------------
 * 12 | Створіть маршрут “/year/{year}“, який перевіряє, чи рік дорівнює поточному року.
 * Якщо так, то повертайте “Yes, this is the current year”.
 * Якщо ні, то “No, this is not the current year”.
 */
Route::get('/year/{year}', function (int $year) {
    return (in_array( $year, [date('Y'), date('y')]))
        ? "Yes, this is the current year"
        : "No, this is not the current year";
})->whereNumber("year");


/* ------------------------------------------------------------------------
 * 13 | Створіть маршрут “/age/{age}“, який повертає “You are {age} years old.“.
 * Зробіть так, щоб маршрут працював тільки для числових значень віку.
 */
Route::get('/age/{age}', function (int $age) {
    return "You are {$age} years old.";
})->whereNumber("age");


/* ------------------------------------------------------------------------
 * 14 | Створіть маршрут “/find”, який приймає параметр “q” і повертає
 * “You are searching for {q}“. Додайте перевірку, що параметр “q” не є пустим.
 * Якщо параметр “q” пустий, повертайте “Please enter a search query”.
 */
Route::get('/find', function () {
    $q = request()->query("q");
    return ($q)
        ? "You are searching for {$q}"
        : "Please enter a search query";
});


/* ------------------------------------------------------------------------
 * 15 | Створіть маршрут “/page”, який повертає HTML-відповідь із заголовком
 * “This is a page” і статусом 200.
 */
Route::get('/page', function () {
    return response("<h1>This is a page</h1>");
});


/* ------------------------------------------------------------------------
 * 16 | Створіть маршрут “/missing”, який повертає HTML-відповідь
 * із заголовком “This page is not found” і статусом 404.
 */
Route::get('/missing', function () {
    return response("<h1>This page is not found</h1>", 404);
});


/* ------------------------------------------------------------------------
 * 17 | Створіть маршрут “/public”, який повертає HTML-відповідь із заголовком “Public Page”.
 * Додайте до цього маршруту заголовок “Cache-Control” зі значенням
 * “no-cache, no-store, must-revalidate”.
 */
Route::get('/public', function () {
    return response("<h1>Public Page</h1>", 200)
        ->header("Cache-Control", "no-cache, no-store, must-revalidate")
        ;
});


