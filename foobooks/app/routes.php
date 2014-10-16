<?php
// app/routes.php
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
Route::get('flights/{day_of_week}', function($day_of_week)
{
	$days = Array ('mo','tu','we','tr','fr','sa','su');
	if (in_array(strtolower($day_of_week), $days)){
		return "here are the flights departing on the $day_of_week...";
	}
	else{
	return "invalid day";
	}
});

Route::get('/book/{id}', function($id)
{
	return "you have requested ".$id;
});

Route::get('/book', function()
{
	return 'Version A';
});


Route::post('/book', function()
{
    return 'version b';
});

Route::get('example', function()
{
    return View::make('example');
});
Route::get('home', function()
{
    return View::make('home');
});
Route::get('/my/long/calendar/route', array(
    'as' => 'calendar',
    function() {
        return View::make('calendar');
    }
));

Route::get('save/{princess}/{unicorn}', function($princess)
{
    return "Sorry, {$princess} is in another castle. :(";
})->where('princess', '[A-Za-z]+')
->where('unicorn', '[0-9]+');;

/*Route::get('/{squirrel}', function($squirrel)
{
    $data['squirrel'] = $squirrel;

    return View::make('simple', $data);
});

Route::get('/', array(
    'before'    => 'birthday',
    function()
    {
       return View::make('hello');
    }
));

Route::get('/', array(
    'before'    => 'birthday:09/10,foo,baz',
    function()
    {
       return View::make('hello');
    }
));
*/

Route::get('custom/response', function()
{
    $response = Response::make('***some bold text***', 200);
    $response->headers->set('Content-Type', 'text/x-markdown');
    return $response;
});
Route::get('markdown/response', function()
{
    $data = array('iron', 'man', 'rocks');
    return Response::json($data);
});


Route::get('first', function()
{
   return Redirect::to('second');
});

Route::get('second', function()
{
    return 'Second route.';
});

Route::get('/books', function() {
    return 'Here are all the books...';
}); 

Route::get('/new', function() {

    $view  = '<form method="POST">';
    $view .= 'Title: <input type="text" name="title">';
    $view .= '<input type="submit">';
    $view .= '</form>';
    return $view;

});

Route::post('/new', function() {

    $input =  Input::all();
    print_r($input);

});
Route::get('/practice', function() {
    echo App::environment();
});