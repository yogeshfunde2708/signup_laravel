<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Signusers;

class UserController extends Controller
{
    public function home()
    {
        return view('users.home', [
          'users' => signusers::get(),
          'search' => '',
        ]);
    }

    public function signup()
    {
        return view('users.signup');
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

    public function search(Request $request)
    {
        $search = $request->input('search', '');

        if ($search != "") {
            $users = Signusers::where('username','email', 'like', "%$search%")->get();
        } else {
            $users = Signusers::all();
        }

        return view('users.home', compact('users', 'search'));
    }
    public function clear(Request $request){
        return redirect()->route('users.home');
    }


    public function edit($id)
    {
        $user = Signusers::where('id', $id)->first();
        return view('users.edit', ['user' => $user]);
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

    public function delete($id)
    {
        $user = Signusers::where('id', $id)->first();
        $user->delete();
        return back()->with('success', 'Deleted successfully!');
    }
}
