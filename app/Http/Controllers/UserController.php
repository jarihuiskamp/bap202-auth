<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
class UserController extends Controller
{
    public function list(){
        $users = User::paginate(10);
        //return view('users.list', ['users' => $users]);
        return view('users.list', compact('users'));
    }
}