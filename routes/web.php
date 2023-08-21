<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionAnswerConfigController;
use App\Http\Controllers\QuestionAnswerController;
use App\Models\QuestionAnswer;
use App\Models\QuestionAnswerConfig;
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



require __DIR__.'/auth.php';


Route::get('/', function () {
    return view('faq',
        [
            'data' => QuestionAnswer::all(),
            'viewData' => QuestionAnswerConfig::first()
        ]);
});
Route::get('/admin', function () {
    return view('admin',
        [
            'data' => QuestionAnswer::all(),
            'viewData' => QuestionAnswerConfig::first()

        ]);
})->middleware('auth');
Route::resource('qas', QuestionAnswerController::class);
Route::post('/qaSettings', QuestionAnswerConfigController::class);
