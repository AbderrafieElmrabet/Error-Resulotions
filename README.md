# Error-Resulotions

to fix the error you have to define the [xxx] route, by adding a new xxx route like :

Route::get('/xxx', function () {
    return view('ErrorIndex');
})->name('xxx');

in the web.php file