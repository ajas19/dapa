<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function viewregForm()
    {
        return view('userRegister');
    }

    public function viewlogin(){

        return view('login');

    }



    public function regForm(Request $req)
    {

        $req->validate([
            'name'=>'required|max:100',
            'email'=>'required|email|unique:users',
            'gender'=>'required',
            'desc'=>'required|max:200',
            'country'=>'required',
            'password'=>'required|confirmed|max:20',
        ]);

      $data['name'] = $req->name;
      $data['email'] = $req->email;
      $data['gender'] = $req->gender;
      $data['description'] = $req->desc;
      $data['country'] = $req->country;
      $data['password'] = Hash::make($req->password);


    $newUser=User::create($data);

      if($newUser)
      {
         return redirect('register')->with('status',"Sucessfully added");
      }else
      {
        return redirect('register')->with('status',"Insertion Failed");
      }


    }



    public function checklogin(Request $req)
    {

       $credentials=$req->validate([

            'email'=>'required',
            'password'=>'required',
        ]);


        //$credentials = $req->only('email','password');

        if(Auth::attempt( $credentials))
        {
            $req->session()->regenerate();
            return redirect('home')->with('status',"Login Sucess");
        }else
        {
            return redirect('login')->with('status',"Login Failed!");
        }

    }



}
