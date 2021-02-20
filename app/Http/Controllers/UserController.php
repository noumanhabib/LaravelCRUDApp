<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();

        return view("welcome", ['users' => $users]);
    }

    public function add(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('add');
        } else if ($request->isMethod('post')) {
            $name = $request->name;
            $age = $request->age;
            $gender = $request->gender;
            $user = new User();
            $user->name = $name;
            $user->age = $age;
            $user->gender = $gender;
            $user->save();
            return redirect("/")->with("success", "User added successfuly");
        }
    }

    public function update(Request $request, $id = 0)
    {
        if ($request->isMethod('get')) {
            $user = User::findOrFail($id);
            return view('add', ['user' => $user]);
        } else if ($request->isMethod('post')) {
            $id = $request->id;
            $name = $request->name;
            $age = $request->age;
            $gender = $request->gender;
            $user = User::findOrFail($id);
            $user->name = $name;
            $user->age = $age;
            $user->gender = $gender;
            $user->save();
            return redirect('/')->with("message", "User update successfuly");
        }
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/')->with("message", "User deleted successfuly");
    }
}