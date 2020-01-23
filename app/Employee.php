<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Order;

class Employee extends Model
{
    public function users() 
	{
		return $this->belongsToMany(User::class, 'orders' , 'id_clients' , 'id_employee');
	}
	
}
