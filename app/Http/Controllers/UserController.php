<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;


class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
    	return view('users.index', compact('users'));
    }

    public function show($id)
    {
    	$user = User::findOrFail($id);
        return view('users.show', ['user'=>$user]);
    }

    public function create()
    {
        $user = User::all();
        return view('users.create', ['user'=>$user]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'username'=>'required|min:5|max:100|unique:users',
            'email'=>'required|email|unique:users',
            'address'=>'required|max:200',
            'phone'=>'required',
            'avatar'=>'required|image|mimes:jpg,jpeg,png,bmp',
            'password'=>'required',
            'password_confirmation'=>'required|same:password'
        ]);

        $file = $request->file('avatar');
        $path = $file->store('avatars', 'public');

        User::create([
            'username'=>$request->username,
            'email'=>$request->email,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'avatar'=>$path,
            'password'=>$request->password,
            'password_confirmation'=>$request->password_confirmation
        ]);

        return redirect()->route('users.create')->with('status', 'User was Successfully Created');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', ['user'=>$user]);
    }

    public function update(Request $request, $id)
    {
        $update_user = User::findOrFail($id);
        $request->validate([
            'address'=>'required|max:200',
            'phone'=>'required',
            'status'=>'required',
            'avatar'=>'mimes:jpg,jpeg,png,bmp'
        ]);

        $update_user->update([
            'address'=>$request->address,
            'phone'=>$request->phone,
            'status'=>$request->status,
            'avatar'=>$request->avatar,
        ]);

        if($request->file('avatar')) 
        {
            if ($update_user->avatar && file_exists(storage_path('app/public/'.$update_user->avatar))) 
            {
                Storage::delete('public/'.$update_user->avatar);
            }

            $file = $request->file('avatar')->store('avatars', 'public');
            $update_user->avatar = $file;
        }

        $update_user->save();
        return redirect()->route('users.edit',['user'=>$update_user])->with('status', 'User was Updated Successfully');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        if ($user->avatar && file_exists(storage_path('app/public/'.$user->avatar))) 
        {
            Storage::delete('public/'.$user->avatar);
        }
        
        $user->delete();
        return redirect()->back()->with('status', 'User was Successfully deleted');
    }

    public function search(Request $request)
    {
       $cari = $request->get('search');
       $users = User::where('email', 'LIKE', '%'.$cari.'%')->orderBy('created_at', 'DESC')->paginate(5);
       return view('users.index', ['users'=>$users]);
    }
    
}