<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Active;


class UsersController extends Controller
{
    
    public function index(){
        
        $actiUsers = Active::users()->get();
        // foreach ($$actiUsers as $activity) {
        //     echo $activity->user->name . '<br>';
        // }
        $users = User::all();
        return view('users.index',['users'=>$users]);
        return $users;
     }
   
    
}
