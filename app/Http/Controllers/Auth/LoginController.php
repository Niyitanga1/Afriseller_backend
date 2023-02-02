<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Validator;




use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;


    

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function login(Request $request){
        $validator1= Validator::make($request->all(),[
            'email'=>'required|email',
           
            'password'=>'required'
           ]);

           $validator2= Validator::make($request->all(),[
            'phone'=>'required',
           
            'password'=>'required'
           ]);
    
           if ($validator1->fails()&&$validator2->fails()){
            return response()->json(
                [
                'message'=>'Some credentials are missing',
                'status'=>'400',

                'errors'=>$validator1->errors(),
                'errors'=>$validator2->errors()
        ],400);

           }

           if($validator2->validated()){
               $user=User::where('phone','=',$request->phone)->first();
            if($user){

                if(Hash::check($request->password,$user->password) && $user->status==1 ){
                    $token=$user->createToken($user->email)->plainTextToken;
                    $user->remember_token=$token;
                    $user->save();

                    return response()->json([
                        'Message'=>'user logged in',
                        'status'=>'200',
                        'token'=>$token,
                        'user'=>$user

                        
                      ],200);
                } 
           }}


            if ($validator1->validated()){
             $request->validate([
                'email'=>'required',
                
                'password'=>'required'
             ]);
             $user=User::where('email','=',$request->email)->first();
            if($user){

                if(Hash::check($request->password,$user->password) && $user->status==1 ){
                    $token=$user->createToken($user->email)->plainTextToken;
                    $user->remember_token=$token;
                    $user->save();

                    
            

                    return response()->json([
                        'Message'=>'user logged in',
                        'status'=>'200',
                        'token'=>$token,
                        'user'=>$user,
                   
                      ],200);
                      
                } 
                else{
                    return response()->json([
                      
                         'message'=>'incorrect credentials/Unauthorised user ',
                          'status'=>'401'],401);

                }
                

            }else{

                return response()->json([
                   'message'=>'incorrect credentials/Unauthorised user ',
                      'status'=>'401'],401);

            }
           }

           

    }

    public function logout(Request $request){

        $user=User::where('remember_token','=',$request->token)->first();
        if($user){
           $user->remember_token='';
           $user->save();

            return response()->json(['message'=>"logged out succesfully"],200);
    

        }
       
       
    }
    




    

    
}




