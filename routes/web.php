<?php

use Illuminate\Support\Facades\App;
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

Route::get('/locale/{locale}',  'App\Http\Controllers\LanguagesController@changeLocale')->name('locale');

Route::get('/', function () {App::setLocale('ua'); return view('home');})->name('index');
Route::get('/ua', function () {App::setLocale('ua'); return  redirect('/');});

Route::get('/{locale}', function ($locale) {
    if (! in_array($locale, ['ua', 'ru'])) { 
 
       abort(404);
 
    } else if ($locale == 'ua') {
 
       App::setLocale('ua');
       return view('home');
 
    } else if ($locale == 'ru') {
 
       App::setLocale('ru');
       return view('home');
    }
    })->name('index.lang');

    Route::get('/{locale}/therapeutic_help', function ($locale) {
      if (! in_array($locale, ['ua', 'ru'])) { 
   
         abort(404);
   
      } else if ($locale == 'ua') {
   
         App::setLocale('ua');
         return view('therapeutic');
   
      } else if ($locale == 'ru') {
   
         App::setLocale('ru');
         return view('therapeutic');
      }
      })->name('therapeutic.lang');

      Route::get('/{locale}/teeth_cleaning', function ($locale) {
         if (! in_array($locale, ['ua', 'ru'])) { 
      
            abort(404);
      
         } else if ($locale == 'ua') {
      
            App::setLocale('ua');
            return view('cleaning');
      
         } else if ($locale == 'ru') {
      
            App::setLocale('ru');
            return view('cleaning');
         }
         })->name('cleaning.lang');

         Route::get('/{locale}/prosthesis', function ($locale) {
            if (! in_array($locale, ['ua', 'ru'])) { 
         
               abort(404);
         
            } else if ($locale == 'ua') {
         
               App::setLocale('ua');
               return view('prosthesis');
         
            } else if ($locale == 'ru') {
         
               App::setLocale('ru');
               return view('prosthesis');
            }
            })->name('prosthesis.lang');

            Route::get('/{locale}/surgery', function ($locale) {
               if (! in_array($locale, ['ua', 'ru'])) { 
            
                  abort(404);
            
               } else if ($locale == 'ua') {
            
                  App::setLocale('ua');
                  return view('surgery');
            
               } else if ($locale == 'ru') {
            
                  App::setLocale('ru');
                  return view('surgery');
               }
               })->name('surgery.lang');

               Route::get('/{locale}/plasmotherapy', function ($locale) {
                  if (! in_array($locale, ['ua', 'ru'])) { 
               
                     abort(404);
               
                  } else if ($locale == 'ua') {
               
                     App::setLocale('ua');
                     return view('plasmotherapy');
               
                  } else if ($locale == 'ru') {
               
                     App::setLocale('ru');
                     return view('plasmotherapy');
                  }
                  })->name('plasmotherapy.lang');

                  Route::get('/{locale}/pediatrician', function ($locale) {
                     if (! in_array($locale, ['ua', 'ru'])) { 
                  
                        abort(404);
                  
                     } else if ($locale == 'ua') {
                  
                        App::setLocale('ua');
                        return view('pediatrician');
                  
                     } else if ($locale == 'ru') {
                  
                        App::setLocale('ru');
                        return view('pediatrician');
                     }
                     })->name('pediatrician.lang');