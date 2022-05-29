<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class UserController extends Controller
{
    public function index()
    {
        $title = "User";
        $user = User::get();
        return view('admin.user.index', compact('title', 'user')); 
    }

    public function create()
    {
        $title = "tambah data";
        return view('admin.user.create', compact('title')); 
    }

    public function simpan(request $request)
    {
        // dd($request->all());
        
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        
        return redirect()->route('admin.user.index');
    }

    public function edit($id)
    {
        $title="edit";
        $edit= User::where('id',$id)->first();
        return view('admin.user.edit', compact('title','edit'));
    }

    public function update(request $request, $id)
    {

        $user = User::where('id', $id)->first();

        $user->name = $request->name ? $request->name : $user->name;
        $user->email = $request->email ? $request->email : $user->email;
        $user->password = $request->password ? bcrypt($request->password) : $user->password;

        $user->update();

        return redirect()->route('admin.user.index');
    }

    public function destroy($id)
    {
        Category::where('id', $id)->destroy();
        return redirect()->route('admin.user.index');
    }

}
