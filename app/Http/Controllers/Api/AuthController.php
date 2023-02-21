<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\JWTSubject\User as JWTSubjectUser;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use PHPOpenSourceSaver\JWTAuth\Contracts\Providers\Auth as ProvidersAuth;

class AuthController extends Controller
{
   public function  __construct(){


   }




   public function register(Request $request){


  
$request->validate([

          'email'=>'required|email|unique:users',
          'phone'=>'required|numeric|unique:users',
          'full_name'=>'required',
          'national_id'=>'required|numeric|unique:users',
          'password'=>'required|string|min:6',
          'status',
          'previlage',
          'registered_date'=>'date',
          'is_login'
   
        ]);

        $user = User::create([
            'email'=>$request->input('email'),
            'phone'=>$request->input('phone'),
            'full_name'=>$request->input('full_name'),
            'national_id'=>$request->input('national_id'),
            'password'=>Hash::make($request->input('password')),
            'status'=>$request->input('status'),
            'previlage'=>$request->input('previlage'),
            'registered_date'=>now(),
            'is_login'=>$request->input('is_login')

   ] );

   $token =Auth::login($user);



 
   return response()->json([
     'message'=>'Succesfuklly  registerd',
     'token'=>$token,
     'user'=>$user
   ],200);

      }


  public function login(Request $request){
    $request->validate([
     'email'=>'required|email',
     'password'=>'required'
    ]);
  if(!Auth::attempt($request->only('email','password'))){
    return response()->json([
      'message1'=>'Invalid  credentials'
    ],401);
  }else{
    $user=Auth::user();
    $token =Auth::login($user);
    $user1=User::where('email','=',$request->email)->first();
    $user1->remember_token=$token;
    $user1->save();
    return response()->json([
      'message'=>'logged in succesfully',
      'token'=>$token,
      'user'=>$user
    ],200);
  }

  } 



  public function login_phone(Request $request){
    $request->validate([
      'phone'=>'required|numeric',
      'password'=>'required'
     ]);
    if(!Auth::attempt($request->only('phone','password'))){
      return response()->json([
        'message'=>'Invalid  credentials'
      ],401);
    }else{
      $user=Auth::user();
      $token =Auth::login($user);
      $user1=User::where('phone','=',$request->phone)->first();
      $user1->remember_token=$token;
      $user1->save();
      return response()->json([
        'message'=>'logged in succesfully',
        'token'=>$token,
        'user'=>$user
      ],200);
    }
  
    } 


}




