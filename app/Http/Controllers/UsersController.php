<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class UsersController extends Controller
{
    
    public function getallUsers(){
    
        $users = User::all();
        return view('users.authors',['users'=>$users]);
     }
   
    
}
