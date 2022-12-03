<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuestionCategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::put('/user', [AuthController::class, 'update']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user', [AuthController::class, 'userProfile']);
});
Route::group([
    'middleware' => 'api',
    'prefix' => 'v1'
], function ($router) {
    Route::post('/survey', [SurveyController::class, 'create']);
    Route::get('/survey', [SurveyController::class, 'getSurvey']);
    Route::get('/survey/{id}', [SurveyController::class, 'getbyId']);
    Route::put('/survey/{id}', [SurveyController::class, 'update']);
    Route::delete('/survey/{id}', [SurveyController::class, 'destroy']);
});
Route::group([
    'middleware' => 'api',
    'prefix' => 'v1'
], function ($router) {
    Route::post('/result', [ResultController::class, 'create']);
    Route::get('/result', [ResultController::class, 'getResult']);
    Route::get('/result/{id}', [ResultController::class, 'getbyId']);
    Route::get('/result/user/{id}', [ResultController::class, 'getbyUserId']);
    Route::put('/result/{id}', [ResultController::class, 'update']);
    Route::delete('/result/{id}', [ResultController::class, 'destroy']);
});
Route::group([
    'middleware' => 'api',
    'prefix' => 'v1'
], function ($router) {
    Route::post('/question', [QuestionController::class, 'create']);
    Route::get('/question', [QuestionController::class, 'getQuestion']);
    Route::get('/question/{id}', [QuestionController::class, 'getbyId']);
    Route::delete('/question/{id}', [QuestionController::class, 'destroy']);
});
Route::group([
    'middleware' => 'api',
    'prefix' => 'v1'
], function ($router) {
    Route::post('/questionCategory', [QuestionCategoryController::class, 'create']);
    Route::get('/questionCategory', [QuestionCategoryController::class, 'getQuestionCategory']);
    Route::get('/questionCategory/{id}', [QuestionCategoryController::class, 'getbyId']);
    Route::delete('/questionCategory/{id}', [QuestionCategoryController::class, 'destroy']);
});
Route::group([
    'middleware' => 'api',
    'prefix' => 'v1'
], function ($router) {
    Route::post('/role', [RoleController::class, 'create']);
    Route::get('/role', [RoleController::class, 'get']);
    Route::get('/role/{id}', [RoleController::class, 'getbyId']);
    Route::delete('/role/{id}', [RoleController::class, 'destroy']);
});
