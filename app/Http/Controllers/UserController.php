<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home()
    {
        // $user=User::all();                            //select * from tb
        $users=User::find(2);                            //select * from tb where id=2
       return $users;
        return view('welcome');
     
    }
}
