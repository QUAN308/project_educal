<?php

use App\Http\Controllers\Courses;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Phần load giao diện người dùng
Route::get('/', "loadView@listCoursesView");
Route::get('/courses', "loadView@courses");
Route::get('/course/{id}', "loadView@cateCourse");
Route::get('/detail-course/{id}', "loadView@detailCourse");

// Phần login
Route::get('/login', ['as'=>'login', 'uses'=>'Auth\LoginController@formLogin']);
Route::post('/login', ['as'=>'login', 'uses'=>'Auth\LoginController@postLogin']);
Route::get('/logout', ['as'=>'logout', 'uses'=>'Auth\LoginController@logOut']);
Route::middleware(['auth'])->group(function(){
    // USERS
    Route::get("/list_user", "LoadUsers@listUsers")->name("route_BackEnd_list_user_Users");
    Route::match(["get", "post"], "list_user/add", "LoadUsers@add")->name("route_BackEnd_list_user_add");
    Route::get("/list_user/detail/{id}", "LoadUsers@detail")->name("route_BackEnd_list_user_detail");
    Route::post("/list_user/update/{id}", "LoadUsers@update")->name("route_BackEnd_list_user_update");
    Route::get("/list_user/delete/{id}", "LoadUsers@delete")->name("route_BackEnd_list_user_delete");
    // CATEGORY
    Route::get("/categories", "Categories@loadCategory")->name("route_BackEnd_categories_loadCategory");
    Route::match(["get", "post"], "categories/add" ,"Categories@addCategory")->name("route_BackEnd_categories_addCategory");
    Route::get("/categories/detail/{id}", "Categories@detail")->name("route_BackEnd_categories_detail");
    Route::post("/categories/update/{id}", "Categories@updateCate")->name("route_BackEnd_categories_detail_update");
    Route::get("/categories/delete/{id}", "Categories@deleteCate")->name("route_BackEnd_categories_delete");
    // COURSES
    Route::get("/list_courses", "Courses@listCourses")->name("route_BackEnd_courses_list");
    Route::match(["get", "post"], "courses/add", "Courses@addCourses")->name("route_BackEnd_courses_add");
    Route::get("/courses/detail/{id}", "Courses@detail")->name("route_BackEnd_courses_detail");
    Route::post("/courses/update/{id}", "Courses@updateCourse")->name("route_BackEnd_courses_update");
    Route::get("/courses/delete/{id}", "Courses@deleteCourse")->name("route_BackEnd_courses_delete");
    // LECTURERS
    Route::get("/lecturer", "lecturers@getLecturers")->name("route_BackEnd_lecturer_list");
    Route::match(["get", "post"], "/lecturer/add", "lecturers@addLecturer")->name("route_BackEnd_lecturer_add");
    Route::get("/lecturer/detail/{id}", "lecturers@detail")->name("route_BackEnd_lecturer_detail");
    Route::post("/lecturer/update/{id}", "lecturers@updateLecturer")->name("route_BackEnd_lecturer_update");
    Route::get("/lecturer/delete/{id}", "lecturers@deleteLecturer")->name("route_BackEnd_lecturer_delete");
});