<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::post('users/login',[AuthController::class,'login']);
Route::post('users/login_by_phone',[AuthController::class,'login_phone']);
Route::post('registerusers',[AuthController::class,'register']);
Route::post('users',[AuthController::class,'register']);

Route::middleware('auth:api')->group( function(){
 
Route::post('users/logout',[LoginController::class,'logout']);


Route::post('companies',[Controller::class,'register_company']);
Route::post('Company_full_services',[Controller::class,'register_company_full_services']);
Route::post('Company_full_service_details',[Controller::class,'store_company_full_service_details']);
Route::post('image_for_full_service_details',[Controller::class,'store_image_for_full_service_details']);
Route::post('membership_plan',[Controller::class,'store_membership_plan']);

Route::post('quiz_booking',[Controller::class,'store_quiz_booking']);
Route::post('activated_membership_plan',[Controller::class,'store_activated_membership_plan']);
Route::post('quiz_response',[Controller::class,'store_quiz_response']);
Route::post('question_bank_options',[Controller::class,'store_question_bank_options']);
Route::post('quiz',[Controller::class,'store_quiz']);
Route::post('question_bank',[Controller::class,'store_question_bank']);




//=====================Routes for Deleting=====================


Route::delete('users/{id}',[Controller::class,'delete_user']);
Route::delete('company/{id}',[Controller::class,'delete_company']);
Route::delete('company_full_services/{id}',[Controller::class,'delete_company_full_services']);
Route::delete('company_full_service_details/{id}',[Controller::class,'delete_company_full_service_details']);
Route::delete('image_for_full_service_details/{id}',[Controller::class,'delete_image_for_full_service_details']);
Route::delete('membership_plan/{id}',[Controller::class,'delete_membership_plan']);
Route::delete('quiz_booking/{id}',[Controller::class,'delete_quiz_booking']);
Route::delete('activated_membership_plan/{id}',[Controller::class,'delete_activated_membership_plan']);
Route::delete('quiz_response/{id}',[Controller::class,'delete_quiz_response']);
Route::delete('question_bank_options/{id}',[Controller::class,'delete_question_bank_options']);
Route::delete('quizzes/{id}',[Controller::class,'delete_quizzes']);
Route::delete('question_bank/{id}',[Controller::class,'delete_question_bank']);


//=====================Routes for Updating=====================
Route::put('update_company/{id}',[Controller::class,'update_company']);
Route::put('update_user/{id}',[Controller::class,'update_user']);
Route::put('update_company_full_services/{id}',[Controller::class,'update_company_full_services']);
Route::put('update_company_full_service_details/{id}',[Controller::class,'update_company_full_service_details']);
Route::put('update_image_for_full_service_details/{id}',[Controller::class,'update_image_for_full_service_details']);
Route::put('update_membership_plan/{id}',[Controller::class,'update_membership_plan']);
Route::put('update_quiz_booking/{id}',[Controller::class,'update_quiz_booking']);
Route::put('update_activated_membership_plan/{id}',[Controller::class,'update_activated_membership_plan']);
Route::put('update_question_bank_options/{id}',[Controller::class,'update_question_bank_options']);
Route::put('update_quizzes/{id}',[Controller::class,'update_quizzes']);
Route::put('update_question_bank/{id}',[Controller::class,'update_question_bank']);
});


//=====================Routes for Views=====================

Route::get('view_companies',[Controller::class,'view_companies']);
Route::get('view_users',[Controller::class,'view_users']);
Route::get('view_company_full_services',[Controller::class,'view_company_full_services']);
Route::get('view_company_full_service_details',[Controller::class,'view_company_full_service_details']);
Route::get('view_image_for_full_service_details',[Controller::class,'view_image_for_full_service_details']);
Route::get('view_membership_plan',[Controller::class,'view_membership_plan']);
Route::get('view_quiz_booking',[Controller::class,'view_quiz_booking']);
Route::get('view_activated_membership_plan',[Controller::class,'view_activated_membership_plan']);
Route::get('view_quiz_response',[Controller::class,'view_quiz_response']);
Route::get('view_question_bank_options',[Controller::class,'view_question_bank_options']);
Route::get('view_quizzes',[Controller::class,'view_quizzes']);
Route::get('view_question_bank',[Controller::class,'view_question_bank']);






