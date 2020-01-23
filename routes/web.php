<?php

use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|*/
/*Route::get('/', 'PosttsController@index');*/




Route::resource('/order', 'OrderController');
Route::get('/user', 'UserController@index');
Route::get('/create_user', 'UserController@create');
Route::post('/delete_user/{id}', 'UserController@destroy'); 
Route::get('/edit_user/{id}', 'UserController@edit');
Route::post('/update_user/{id}', 'UserController@update');

Route::post('/user', 'UserController@store');

//Route::post('/del', 'UserController@destroy')





/* ********************** */



/*
Route::get('/', function () {
	$orders = \App\Order::orderBy('created_at' , 'asc')->get();
	return view('orders', [
		'orders'=>$orders
	]);
	
});

Route::get('/orders', function () {
    return view('orders');
});


Route::post('/order', function (Request $request) {
	$validator = Validator::make($request->all(),[
		'service'=>'required|max:255'
	]);
	
	if($validator->fails())
	{
			return redirect('/')
				->withInput()
				->withErrors($validator);
	}
	
	//новый объект
	$order = new \App\Order;
	$order->service = $request->service;
	$order->save();
	
	return redirect('/');
	
});



Route::delete('/order/{order}', function (\App\Order $order) {
	$order->delete();
	
	return redirect('/');
});


/******










Route::get('/tasks', function () {
	$tasks = DB::table('tasks')->get();
	//из модели
   // $tasks=App\Task::all();
  // $tasks=App\Task::incomplete();
	return view('tasks.index',compact('tasks'));
});



Route::get('/tasks/{task}', function ($id) {
	//find ищет по идентификатору
	$task = DB::table('tasks')->find($id);
    return view('tasks.show',compact('task'));
});


/*
Route::get('hello', function () {
	$tasks = DB::table('tasks')->get();
    return view('hello',compact('tasks'));
});

Route::get('/tasks', 'TaskController@index');
Route::get('/tasks/{task}', 'TaskController@show');




*/

/*
Route::get('hello', function () {
	$tasks=[
		'add task',
		'find task',
		'rev',
	];
    return view('hello', compact('tasks'));
});*/

