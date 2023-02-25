<?php

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

Route::get('homePage', function(){
  // return view('homepage');
  // return "WSB";
  // return ['name' => 'WSB', 'base' => 'classic'];
  
  // return view('homePage', ['firstName' => 'Janusz', 'lastName' => 'Kowalski']);
});
  
  Route::get('pages/{x}', function($x){
    $pages = [
      'contact' => "Strona WSB",
      'home' => "Strona domowa"
    ];
    return $pages[$x];
  });
  
  Route::get('address/{city}/{street}/{zipcode?}', function(string $city, string $street, int $zipCode = null){
    if ($zipCode == null) {
      $zipCode = '-';
    }else{
      $zipCode = substr($zipCode,0,2)."-".substr($zipCode, 2,3);
    }
    
    echo <<<ADDRESS
      Miasto: $city, ulica: $street,<br>
      Kod pocztowy: $zipCode
ADDRESS;
  });
  
Route::redirect('adres/{city}/{street}/{zipcode?}', '/address/{city}/{street}/{zipcode?}');

Route::prefix('admin')->group(function(){
  Route::get('home/{name}', function(string $name){
    echo "Witaj $name na stronie administracyjnej";
  //})->where(['name' => '[a-zA-Z]+']);
})->where(['name' => '[A-z]+']);
  
  Route::get('users', function(){
    echo "Użytkownicy systemu";
  });
});

Route::redirect('admin/{name}', '/admin/home/{name}');

Route::get('homePage', function(){
  return view('homePage', ['firstName' => 'Janusz', 'lastName' => 'Kowalski', 'city' => 'Poznań']);
});