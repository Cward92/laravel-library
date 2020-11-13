<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{


    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if($validator->fails()){
            return response(['message' => 'Validation errors', 'errors' =>  $validator->errors(), 'status' => false], 422);
        }

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);
      
        /**Take note of this: Your user authentication access token is generated here **/
        $data['token'] =  $user->createToken('MyApp')->accessToken;
        $data['name'] =  $user->name;

        return response(['data' => $data, 'message' => 'Account created successfully!', 'status' => true]);
    }

    public function index()
    {
        return User::all();
    }

    public function show($user)
    {
        return User::find($user);
    }

    public function store()
    {
        return User::create([
            'name' => request('name'),
            'email' => request('email'),
            'passport' => request('passport')
        ]);
    }

    public function update($user)
    {
        $user = User::find($user);
        $user->name = request('name');
        $user->email = request('email');
        $user->password = request('password');

        $user->save();
    }

    public function destroy($user)
    {
        $user = User::find($user);
        $user->delete();
    }
     
}