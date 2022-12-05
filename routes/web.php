<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Articale;
use App\Models\Employee;
use App\Models\User;

Route::get('/', function () {
    $articals   = Articale::all()->random();
    $articalls  = Articale::all()->take(12);
    $small      = Articale::all()->take(6);
    $posts      = Articale::all()->random();
    $show       = Articale::all()->random();

    return view('frontend.home' , compact( 'articals' , 'small' , 'posts' , 'show' , 'articalls'));
})->name('home');


Route::get('/about', function () {
    $small = Articale::all()->take(6);
    return view('frontend.about' , compact('small'));
})->name('about');

Route::get('/contact', function () {
    $small = Articale::all()->take(6);
    return view('frontend.contact' , compact('small'));
})->name('contact');


// ___________________________________________________________________

use App\Http\Controllers\ArticaleController;
 
Route::get('/Articales', [ArticaleController::class, 'index'])->name('Articales');
Route::get('/Articales/{id}', [ArticaleController::class, 'single'])->name('Articales.single');
Route::get('/{auther}', [ArticaleController::class, 'auther'])->name('auther');
Route::get('/a/{category}', [ArticaleController::class, 'category'])->name('category');

//search
Route::get('/s/search', [ArticaleController::class, 'search'])->name('search');

//dashboard
Route::get('/dashboard/all_articals', [ArticaleController::class, 'all_articals'])->name('all_articals');
Route::get('/dashboard/all_articals/create', [ArticaleController::class, 'create'])->name('all_articals.create');
Route::post('/dashboard/all_articals/store', [ArticaleController::class, 'store'])->name('all_articals.store');
Route::get('/dashboard/all_articals/edit/{id}', [ArticaleController::class, 'edit'])->name('all_articals.edit');
Route::post('/dashboard/all_articals/update/{id}', [ArticaleController::class, 'update'])->name('all_articals.update');
Route::get('/dashboard/all_articals/destroy/{id}', [ArticaleController::class, 'destroy'])->name('all_articals.destroy');


// ____________________________________________________________________

use App\Http\Controllers\ContactController;

Route::post('/ask', [ContactController::class, 'ask'])->name('ask');
Route::get('/dashboard/ask', [ContactController::class, 'asks'])->name('all_ask');
Route::get('/dashboard/ask/{id}', [ContactController::class, 'destroy'])->name('ask.destroy');

// ___________________________________________________________________

use App\Http\Controllers\CommentController;

Route::post('/comment', [CommentController::class, 'comment'])->name('comment');
Route::get('/dashboard/all_comments', [CommentController::class, 'all_comments'])->name('all_comments');
Route::get('/dashboard/destroy/{id}', [CommentController::class, 'destroy'])->name('comments.destroy');

// ___________________________________________________________________


use App\Http\Controllers\backendController;

Route::get('/l/logout', [backendController::class, 'logout'])->name('logout');

// ___________________________________________________________________


use App\Http\Controllers\CategoryController;

Route::get('/dashboard/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/dashboard/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/dashboard/categories/store', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/dashboard/categories/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
Route::post('/dashboard/categories/update/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::get('/dashboard/categories/destroy/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');

// ___________________________________________________________________

use App\Http\Controllers\EmployeeController;

Route::get('/dashboard/all_employee', [EmployeeController::class, 'index'])->name('all_employee');
Route::get('/dashboard/create', [EmployeeController::class, 'create'])->name('all_employee.create');
Route::post('/dashboard/store', [EmployeeController::class, 'store'])->name('all_employee.store');
Route::get('/dashboard/edit/{id}', [EmployeeController::class, 'edit'])->name('all_employee.edit');
Route::post('/dashboard/update/{id}', [EmployeeController::class, 'update'])->name('all_employee.update');
Route::get('/dashboard/employee/{id}', [EmployeeController::class, 'destroy'])->name('all_employee.destroy');

// ___________________________________________________________________



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/d/dashboard', function () {
        return view('backend.home');
    })->name('dashboard');

    Route::get('/d/dashboard/users', function () {
        $users = User::all();
        return view('backend.users.all_user' , compact('users'));
    })->name('all_users');
});
