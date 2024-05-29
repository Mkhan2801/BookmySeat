<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{




    public function Index(){
        if(auth()->check()){
            $user = auth()->user();
        return view('user_result',['data'=>$user]);
        }else{
            return view('login-singup');
        }
    }



    public function Profile(){
        return view('profile');
    }



    public function ProfileUpdate(Request $req){


        $req->validate(['avatar'=> 'image|max:3000',
        'password' => [ 'min:8','confirmed']]);
        $input['password']=bcrypt($input['password']);
        $manager = new ImageManager(new Driver());

        $user = auth()->user();
        $filename = $user->id . "-" . uniqid() . ".jpg";
        $image = $manager->read($req->file("avatar"));
        $imageData = $image->cover(120,120)->toJpeg();
        Storage::put("public/avatars/" . $filename,$imageData);
        
        $oldAvatar = $user->avatar;
        $user->avatar = $filename;
        $user->save();
        if($oldAvatar != "fallback-avatar.jpg"){
        Storage::delete(str_replace("/storage/","/public/",$oldAvatar));
        }


        return view('home',['user'=>$user]);
    }

    public function SingUp(Request $req ){
        $input = $req->validate([
            'username' => ['required', 'min:3', 'max:20', Rule::unique('users','username')],
            'email' => ['required', 'email', Rule::unique('users','email')],
            'password' => ['required', 'min:8','confirmed'],
        ]);
        $input['password']=bcrypt($input['password']);

       $user =  User::create($input);
        auth()->login($user);
        return redirect('/')->with('singUp','Thank you for creating account');

    } 



    
    public function LogIn(Request $req ){
        $input = $req->validate([
            'loginusername' => 'required',
            'loginpassword' => 'required',
        ]);
        if(auth()->attempt(['username'=> $input['loginusername'],'password'=> $input['loginpassword']])){
            $req->session()->regenerate();
            $user = auth()->user();
            return redirect("/")->with('singIn',"Welcome back ");
        }
        else
        {
            return redirect('/')->with('fail','Invaled username or password');
        }
        

    }




    public function LogOut(){
        auth()->logout();
        return redirect('/')->with('singOut','You are sucssesfully logged out');
    }
}
