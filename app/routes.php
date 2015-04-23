<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function () {
    return View::make('index');
});

Route::get('/about-us', function () {
    return View::make('pages/nosotros');
});

Route::get('/mision', function () {
    return View::make('pages/mision');
});

Route::get('/vision', function () {
    return View::make('pages/vision');
});

Route::get('/normas', function () {
    return View::make('pages/normas');
});

Route::get('/cursos', function () {
    return View::make('pages/cursos');
});

Route::get('/team', function () {
    return View::make('pages/team');
});

Route::get('/contact', function () {
    return View::make('pages/contact');
});


Route::post('/contact', function () {
    $validator = Validator::make(Input::all(), array(
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required'
    ));

    if ($validator->fails()) {
        // The given data did not pass validation
        return Redirect::to('/contact')->withErrors($validator)->with('error', 'La informaci&oacute;n suministrada posee errores.');
    }


    $email = Input::get('email');
    $name = Input::get('name');
    $message = Input::get('message');


    $data = array('email' => $email, 'name' => $name, 'msg' => $message);

    Mail::send('emails.contacto', $data, function ($message) {
        $message->to('edwin.rea33@gmail.com', 'Marco Romero')->subject('Mensaje!');
    });


    return Redirect::to('/contact')->with('success', 'envio satisfactorio!!');
});

Route::get('/services', function () {
    return View::make('pages/servicios');
});

Route::get('/adiestramiento', function () {
    return View::make('pages/adiestramiento');
});

Route::get('/noticias', function () {
    return View::make('pages/noticias');
});
