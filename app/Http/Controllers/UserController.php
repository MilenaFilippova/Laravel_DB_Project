<?php

namespace App\Http\Controllers;
use App\User;
use App\Order;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
		$users = User::all();
		foreach ($users as $user) {
			$array[$user['id']] = array(
				'id' => $user['id'],
				'name' => $user['name'],
				'email' => $user['email'],
				'order' => $user->services,
				'employee' => $user->employees,
			);
		}
			
		
        /*return view('users.index', [
          'users'  => User::get(),
        ]);*/ 
		return view('users.index')->with(['data' => $array]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('users.create', [
         // 'user'  => new User, ]);
		 
		 return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$user = User::create($request->all());
        //$user->order()->create($request->only('service'));

		$user = new User();
		
		$user->name = $request['name'];
		$user->email = $request['email'];
		$user->password = $request['password'];
		$user->save();
		
		$order = new Order();
		$order->id_clients = $user->id;
		//$order->id_employee = 0;
		$order->id_employee = $request['employee'];
		//$order->cost = 1200;
		$order->date = now();
		$order->service = $request['service'];
		$order->save();

		return $this->index();

        //return redirect()->route('user.show', $user);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show', ['user' => $user]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$user = User::find($id);
		
		$info = array(
			'id' => $user['id'],
			'name' => $user['name'],
			'email' => $user['email'],
			'service' => $user->services,
			'employee'=> $user->employees,
			'pass' => $user['password'],
			);
		
        return view('users.edit')->with(['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $user = User::find($id);
		$user->update($request->all());

        //($user->order()->count()) ? 
         //   $user->order()->update($request->only('service')) : $user->order()->create($request->only('service'));


		$order = Order::where('id_clients', $id)->update(['service' => $request->service]);
		//$employee = Order::where('id_clients', $id)->update(['employee' => $request->employee]);
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
	 
    public function destroy($id)
    {
        /*$user->order()->delete();
        $user->delete();*/
		$users = User::where('id', $id)->delete();


		return $this->index();
        //return redirect()->route('user.index');
    }
}
