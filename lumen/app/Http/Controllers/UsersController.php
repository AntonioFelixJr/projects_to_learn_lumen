<?php

namespace App\Http\Controllers;

use Validator;
use App\User;
// use Illuminate\Http\Client\Request;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index() {
        return User::paginate();
    }

    public function show($id) {
        return User::findOrFail($id);
    }

    public function store(Request $request) {
        $data = $request->json()->all();

        $user = User::create($request->all());
        return $user;
        //$reponseValidate = $this->inputvalidate($data);

        // $validator = $this->validate($request, [
        //     'name' => 'required|unique:posts|max:255',
        //     'email' => 'required',
        // ]);

        // if ($validator->fails()) {
        //     return redirect('post/create')
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }

        // $users = new User();
        // $users->name = strtoupper($data->name);
        // $users->birth = $data->birth;
        // $users->email = $data->email;
        // $users->password = $data->password;
        // $users->save();
    }

    public function inputvalidate($data)
    {
        // $this->validate($request, [
        //     'name' => 'required',
        //     'email' => 'required|email|unique:users'
        // ]);

        // $errors = [];
        // empty($data->name)? $errors[] = 'name' : $data->name;
        // empty($data->birth)? $errors[] = 'birth' : $data->birth;
        // empty($data->email)? $errors[] = 'email' : $data->email;
        // empty($data->password)? $errors[] = 'password' : $data->password;

        // if (!empty($errors)) {
        //     return "Campo(s) não enviados: ".(implode(",", $errors));
        // }
    }
}