<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Signusers;

class UserController extends Controller
{
    public function home(){
        return view('users.home',[
          'users'=>signusers::get()
        ]);
      }

      public function signup(){
        return view('users.signup', [
          'oldInput' => old(),
      ]);
      }
      public function store(Request $request)
      {
          $request->validate([
              'user_email' => 'required|email',
              'user_name' => 'required',
              'user_gender' => 'required',
              'user_password' => 'required',
              'user_confirm_password' => 'required|same:user_password',
          ]);
      
          $user = new Signusers();
          $user->email = $request->input('user_email');
          $user->username = $request->input('user_name');
          $user->gender = $request->input('user_gender');
          $user->password = $request->input('user_password');
          $user->confirmpassword = $request->input('user_confirm_password');
          $user->date_added = now();
          $user->save();
      
          return redirect()->route('users.home')->with('success', 'Signup successful!');
      }

      public function edit($id){
        $user = Signusers::where('id', $id)->first();
        return view('users.edit',['user'=> $user]);
      }
    
      public function update(Request $request, $id)
    {
        $request->validate([
            'user_email' => 'required|email',
            'user_name' => 'required',
            'user_gender' => 'required',
            'user_password' => 'required',
            'user_confirm_password' => 'required|same:user_password',
        ]);
    
        try {
            $user = Signusers::findOrFail($id);
            $user->email = $request->input('user_email');
            $user->username = $request->input('user_name');
            $user->gender = $request->input('user_gender');
            $user->password = $request->input('user_password');
            $user->confirmpassword = $request->input('user_confirm_password');
            $user->save();
    
            return redirect()->route('users.home')->with('success', 'Updated successful!');
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to update. Please try again.');
        }
    }
    
    public function delete($id){
      $user = Signusers::where('id',$id)->first();
      $user->delete();
      return back()->with('success', 'Deleted successfully');
    }
}
