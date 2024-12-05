<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserData;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
  function index(){
   
   
    return view('admin.index');
  }

  function All_user(){
    $users = UserData::all();
    return view('admin.user', compact('users'));   
  }
  public function edit(Request $request){
    $user = UserData::find($request->id);
    if (!$user) {
        return response()->json(['error' => 'User not found'], 404);
    }

    $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required|email',  
        // 'password' => 'required|min:6', 
        'role' => 'required',
    ]);
    $user->name = $validatedData['name'];
    $user->email = $validatedData['email'];
    // $user->password = bcrypt($validatedData['password']); 
    $user->role = $validatedData['role'];
    $user->save();
    return redirect('/admin/user');
}

  function delete($id){
     $user_delete =UserData::find($id);
     $user_delete->delete();
     return redirect('/admin/user');
  }
}
