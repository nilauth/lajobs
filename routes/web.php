<?php

use App\Models\Job;

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
    $jobs = Job::all();
    return view('jobs', [
        'title' => "Job Listings",
        'jobs' => $jobs
    ]);
});


Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    return view('job', [
        'myjob' => $job
    ]);
});