<?php

use App\Http\Controllers\search;
use App\Models\tiket;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('search', function (Request $request) {
//     $query = $request->get('query');
//     $filterResult = tiket::where('merchant_name', 'LIKE', '%'. $query. '%')->get();
//     return response()->json($filterResult);
// });

Route::get('/home', [search::class, 'index']);

Route::get('/ajax-autocomplete-search', [search::class, 'autocompleteSearch']);