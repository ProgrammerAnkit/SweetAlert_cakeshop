<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Hash;

class UserController extends Controller
{
    public function getsignup(){
        return view('User.signup');
    }

    public function postsignup(Request $request){

        // dd($request->all());
        $validated = $request->validate([
            'email' => 'email|required|unique:users',
            'password' => 'required',
        ]);
      
        $user = new User();
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        Auth::login($user);
        return redirect()->route('shop.index');              

            // second way
            
        // $user = new User([
        //     'email' => $request->input('email'),
        //     'password' => $request->input('password')
        //     ]);
        //     $user->save();
        // return redirect()->route('shop.index');
    }

    public function getsignin(){
        return view('User.signin');
    }

    public function postsignin(Request $request){
        $validated = $request->validate([
                        'email' => 'email|required',
                        'password' => 'required|',
                    ]);
                    
            if (Auth::attempt(['email'=>$request->input('email'),
                             'password'=>$request->input('password')                   
            ])){
                    return redirect()->route('User.profile')->with('success','user loged in successfully');
            }
            return redirect()->back()->with('failure','user not exist');
    }

//     public function postsignin(Request $request){

//         // dd($request->all());
//         $validated = $request->validate([
//             'email' => 'email|required',
//             'password' => 'required|',
//         ]);

//     $data = User::where('email', $request->email)->first();
//     if ($data) {  
//         if ($request->email == $data->email AND Hash::check($request->password, $data->password)) {
//         return redirect()->route('User.profile')->with('success','user loged in successfully');

//         } else {
           
//             return redirect()->back()->with('failure','password missmacth');

//         }
//     }
    
//     else {
//         return redirect()->back()->with('failure','user not exist');
//     }

// }

    public function getprofile(){
        return view('User.profile');
    }

    public function getlogout(){
        Auth::logout();
        return redirect()->route('welcome');
    }
    
}
