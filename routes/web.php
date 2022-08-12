<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentsController;
use App\Http\Controllers\membersController;

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

Route::get('/', function () {
    return view('myapp');
});

// Route for get all students
Route::get('/getallstudents', [studentsController::class, 'getAllStudents']);

// Route for delete student
Route::get('/deleteStudent/{id}', [studentsController::class, 'deleteStudent']);

// Route for get records from student and monthincome table
Route::get('/getFromTwoTables', [studentsController::class, 'getFromTwoTables']);

// Route for get all memebrs
Route::get('/getAllMembers', [membersController::class, 'getAllMembers']);

// Route for delete a memebr
Route::get('/deleteMember/{id}', [membersController::class, 'deleteMember']);

// Route for get records from member and memberincome table
Route::get('/getMembersTables', [membersController::class, 'getMembersTables']);

// Route for add a memebr
Route::get('/addMember/{memName}/{memEmail}/{month}/{year}/{volume}', [membersController::class, 'addMember']);

// Route for get top 5 memebrs
Route::get('/getTopMembers', [membersController::class, 'getTopMembers']);

// Route for get personal details of a memebr
Route::get('/getPerDetails/{id}', [membersController::class, 'getPerDetails']);


// Route for get income details of a memebr
Route::get('/getIncomeDetails/{id}', [membersController::class, 'getIncomeDetails']);

// Route to delete income details of a memebr
Route::get('/delIncomeDetails/{id}', [membersController::class, 'gdelIncomeDetails']);


// Route to add income of member
Route::get('/addMemebrIncome/{id}/{month}/{year}/{volume}', [membersController::class, 'addMemebrIncome']);

// Route to edit name and email
Route::get('/editPerDetails/{id}/{name}/{email}', [membersController::class, 'editPerDetails']);

// Route to get months and years
Route::get('/getMonthYear', [membersController::class, 'getMonthYear']);


// Route to get memebrs based on month and year
Route::get('/getTopMembersOnParams/{month}/{year}', [membersController::class, 'getTopMembersOnParams']);
