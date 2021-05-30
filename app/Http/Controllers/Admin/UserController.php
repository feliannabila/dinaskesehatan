<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();

        return view('pages.admin.user.index', [
            'users' => $users
        ]);
    }

    public function create()
    {
        return view('pages.admin.user.create');
    }
    
    public function store(UserRequest $request)
    {
        $data = $request->all();
        $data['picture'] = $request->file('picture')->store(
            'assets/user', 'public'
        );

        User::create($data);

        return redirect()->route('user.index');

    }

    public function edit(){

    }

    public function update(){

    }

    public function destroy($id)
    {
        $item = User::findorFail($id);
        $item->delete();

        return redirect()->route('user.index');
    }
}
