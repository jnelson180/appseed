<?php

// BASE ROUTE
Route::get('/', 'PagesController@index');

//Another route example
//Route::get('/about', 'PagesController@about');

// ADDITIONAL PAGES FOR argon-dashboard THEME
Route::get('/icons', 'PagesController@icons');
Route::get('/maps', 'PagesController@maps');
Route::get('/profile', 'PagesController@profile');
Route::get('/tables', 'PagesController@tables');
// END ADDITIONAL PAGES FOR argon-dashboard THEME

Route::get('/locale/{locale?}', function($locale = null){

    if(in_array($locale, config('app.available_locale')))
    {
        session(['locale' => ($locale ?? config('app.locale'))]);
    }

    return redirect()->back();
});

// THEME SWITCHER ROUTE - set "theme" session and redirect to BASE ROUTE
Route::get('/theme/{theme?}', function($theme = null){

    if(in_array($theme, config('themes.available_themes')))
    {
        session(['theme' => ($theme ?? env('APP_THEME') ?? config('themes.default_theme'))]);
    }
    else
    {
        session(['theme' => (env('APP_THEME') ?? config('themes.default_theme'))]);
    }

    return redirect('/');
});

// AUTH ROUTES
Auth::routes();


