<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function users(){
        $users = DB::table('users')->get();
        return view('users',[
            'users' => $users
        ]);
    }

    public function store(){
        DB::table('users')->insert([
            'name' => request('name')
        ]);
        return redirect('users');
    }

    public function delete($id){
        DB::table('users')->where('id',$id)->delete();
        return redirect('users');
    }

    public function edit($id){
        $users = DB::table('users')->where('id',$id)->first();
        return view('edit_user',[
            'edit_users' => $users
        ]);
    }

    public function update($id){
        DB::table('users')->where('id',$id)->update([
            'name' => request('name')
        ]);
        return redirect('users');
    }
}
