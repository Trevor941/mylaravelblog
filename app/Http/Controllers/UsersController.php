<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class UsersController extends Controller
{
    
    public function getAdminstrators(){
    $role = Role::find(1);
    $admins = $role->users;
    return view('users.administrator', compact('admins'));
     }
   
     public function getReaders(){

        $role = Role::find(3);
        $readers = $role->users;
        return view('users.readers', compact('readers'));
     }

     public function getAuthors(){
         $role = Role::find(2);
         $authors = $role->users;
         return view('users.authors', compact('authors'));
     }
}
