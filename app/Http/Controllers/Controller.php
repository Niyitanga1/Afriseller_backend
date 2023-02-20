<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Carbon\Carbon as Time;
use App\Models\Companies;
use App\Models\Company_full_services;
use App\Models\Company_full_service_details;
use App\Models\Image_for_full_service_details;
use App\Models\Membership_plan;
use App\Models\Quiz_booking;
use App\Models\Activated_membership_plan;
use App\Models\Quiz_response;
use App\Models\Question_bank_options;
use App\Models\Quiz;
use App\Models\Question_bank;
use Illuminate\Support\Facades\Validator;
use DB;





use Illuminate\Support\Facades\Hash;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use PhpParser\Node\Stmt\Else_;
/**
 * @OA\Info(
 *      version="1.0.0",

 *      title="REST API  DOCUMENTATION",
 *      description="L5 Swagger OpenApi description",
 *      @OA\Contact(
 *          email="niyitangaaime1@gmail.com"
 *      ),
 *     @OA\License(
 *         name="Apache 2.0",
 *         url="https://www.apache.org/licenses/LICENSE-2.0.html"
 *     )
 * )
 */




class Controller extends BaseController

{


    
    public function register(Request $request){


      $validator1= Validator::make($request->all(),[


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

        if ($validator1->fails()){
          return response()->json(
              [
 
              'errors'=>$validator1->errors(),
              
      ],400);

         }

        if($validator1->validated()){
        
        
          $users = new User;
          $users->email=$request->input('email');
          $users->phone=$request->input('phone');
          $users->full_name=$request->input('full_name');
          $users->national_id=$request->input('national_id');
          $users->password=Hash::make($request->input('password'));
          $users->status=$request->input('status');
          $users->previlage=$request->input('previlage');
          $users->registered_date=now();
          $users->is_login=$request->input('is_login');
          $users->save();
          return response()->json($users);

        }

    

    
      
            }


  //register company          
public function register_company(Request $request){  
  $validator1= Validator::make($request->all(),[
        'company_full_name'=>'required',
        'company_short_name'=>'required',
        'company_tin'=>'required|numeric|unique:companies',
        'company_phone'=>'required|numeric',
        'company_email'=>'required|email|unique:companies',
        'company_representative_name'=>'required',
        'company_representative_id'=>'required|numeric',
        'company_type'=>'required',
        'company_registration_document'=>'nullable|file',
        'company_website'=>'required',
        'company_biography'=>'required',
        'company_logo'=>'nullable|file',
        'company_welcome_image'=>'nullable|file',
        'company_reference'=>'required',
        'company_registered_date',
        'company_status',
        'company_login_password'=>'required|string|min:6',
        'is_login',
        'membership_status',

      
    ]);

    
    if ($validator1->fails()){
      return response()->json(
          [

          'errors'=>$validator1->errors(),
          
  ],400);

     }

    if($validator1->validated()){

        $company = new Companies;
        $company->company_full_name=$request->input('company_full_name');
        $company->company_short_name=$request->input('company_short_name');
        $company->company_tin=$request->input('company_tin');
        $company->company_phone=$request->input('company_phone');
        $company->company_email=$request->input('company_email');
        $company->company_representative_name=$request->input('company_representative_name');
        $company->company_representative_id=$request->input('company_representative_id');
        $company->company_type=$request->input('company_type');
        $company->company_registration_document=$request->file('company_registration_document');
     
        if($request->hasFile('company_registration_document')){
         $new_name=$company->company_registration_document->getClientOriginalName();
         $company->company_registration_document->move($new_name);
         $company->company_registration_document=$new_name;
      }
        $company->company_website=$request->input('company_website');
        $company->company_biography=$request->input('company_biography');
        $company->company_logo=$request->file('company_logo'); 

        if($request->hasFile('company_logo')){
          $new_name1=$company->company_logo->getClientOriginalName();
        $company->company_logo->move($new_name1);
         $company->company_logo=$new_name1;
       }

        $company->company_welcome_image=$request->file('company_welcome_image');

        if($request->hasFile('company_welcome_image')){
          $new_name=$company->company_welcome_image->getClientOriginalName();
          $company->company_welcome_image->move($new_name);
          $company->company_welcome_image=$new_name;
       }
        $company->company_reference=$request->input('company_reference');
        $company->company_registered_date= now();
        $company->company_status=$request->input('company_status');
        $company->company_login_password=Hash::make($request->input('company_login_password'));
        $company->is_login=$request->input('is_login');
        $company->membership_status=$request->input('membership_status');
        $company->save();
  
    return response()->json($company);

     
}    }



//register company full services

public function register_company_full_services(Request $request){  
  $validator1= Validator::make($request->all(),[
      'service_id'=>'required',
      'service_name'=>'required',
      'company_id'=>'required',
      'service_recorded_by'=>'required',
      'service_recorded_date',
      
  ]);
  
  if ($validator1->fails()){
    return response()->json(
        [

        'errors'=>$validator1->errors(),
        
],400);

   }

  if($validator1->validated()){

      $company_full_service = new Company_full_services;
      $company_full_service ->service_id=$request->input('service_id');
      $company_full_service ->service_name=$request->input('service_name');
      $company_full_service ->company_id=$request->input('company_id');
      $company_full_service ->service_recorded_by=$request->input('service_recorded_by');
      $company_full_service ->service_recorded_date= now();
      
      $company_full_service ->save();

  return response()->json($company_full_service );
}
} 




//company_full_service_details
public function store_company_full_service_details(Request $request){  
  $validator1= Validator::make($request->all(),[
      'full_service_details_id'=>'required',
      'service_id'=>'required',
      'full_content'=>'required',
      'main_image'=>'required',
      'is_there_another_image'=>'required',
     
      
  ]);
  
  if ($validator1->fails()){
    return response()->json(
        [

        'errors'=>$validator1->errors(),
        
],400);

   }

  if($validator1->validated()){
      $company_full_service_details = new Company_full_service_details;
      $company_full_service_details ->full_service_details_id=$request->input('full_service_details_id');
      $company_full_service_details ->service_id=$request->input('service_id');
      $company_full_service_details ->full_content=$request->input('full_content');
      $company_full_service_details ->main_image=$request->input('main_image');
      $company_full_service_details ->is_there_another_image=$request->input('is_there_another_image');
      
      $company_full_service_details ->save();

  return response()->json($company_full_service_details );

    }
} 

//image_for_full_service_details


public function store_image_for_full_service_details(Request $request){  
  $validator1= Validator::make($request->all(),[
    'image_details_id'=>'required',
    'full_service_details_id'=>'required',
     'image_location'=>'required',
     'image_uploaded_date',
     'image_uploaded_by'=>'required',
     'image_status'=>'required'
     
      
  ]);
  
  if ($validator1->fails()){
    return response()->json(
        [

        'errors'=>$validator1->errors(),
        
],400);

   }

  if($validator1->validated()){

      $image_for_full_service_details = new Image_for_full_service_details;
      $image_for_full_service_details ->image_details_id=$request->input('image_details_id');
      $image_for_full_service_details->full_service_details_id=$request->input('full_service_details_id');
      $image_for_full_service_details->image_location=$request->input('image_location');
      $image_for_full_service_details ->image_uploaded_date=now();
      $image_for_full_service_details ->image_uploaded_by=$request->input('image_uploaded_by');
      $image_for_full_service_details ->image_status=$request->input('image_status');
      $image_for_full_service_details->save();

  return response()->json( $image_for_full_service_details );

    
} }


  //Membership  Plan   
  
  public function store_membership_plan(Request $request){  
    $validator1= Validator::make($request->all(),[
      'membership_id'=>'required',
      'membership_name'=>'required',
       'membership_duration'=>'required',
       'membership_recorded_date',
       'membership_recorded_by'=>'required',
       'membership_fees'=>'required'
       
        
    ]);

    
    if ($validator1->fails()){
      return response()->json(
          [

          'errors'=>$validator1->errors(),
          
  ],400);

     }

    if($validator1->validated()){

        $membership_plan = new Membership_plan;
        $membership_plan->membership_id=$request->input('membership_id');
        $membership_plan->membership_name=$request->input('membership_name');
        $membership_plan->membership_duration=$request->input('membership_duration');
        $membership_plan->membership_recorded_date=now();
        $membership_plan ->membership_recorded_by=$request->input('membership_recorded_by');
        $membership_plan ->membership_fees=$request->input('membership_fees');
        $membership_plan->save();
  
    return response()->json( $membership_plan );
  
  } }



    //Quiz  Booking
    
    public function store_quiz_booking(Request $request){  
      $validator1= Validator::make($request->all(),[
        'booking_id'=>'required',
        'quiz_id'=>'required',
        'user_id'=>'required',
        'booking_registered_date'
         
          
      ]);

      
      if ($validator1->fails()){
        return response()->json(
            [

            'errors'=>$validator1->errors(),
            
    ],400);

       }

      if($validator1->validated()){
    
          $quiz_booking = new Quiz_booking;
          $quiz_booking->booking_id=$request->input('booking_id');
          $quiz_booking->quiz_id=$request->input('quiz_id');
          $quiz_booking->user_id=$request->input('user_id');
          $quiz_booking->booking_registered_date=now();
      
          $quiz_booking->save();
    
      return response()->json( $quiz_booking);
    

    } }




        //Active Membership Plan

        public function store_activated_membership_plan(Request $request){  
          $validator1= Validator::make($request->all(),[
            'activated_membership_id'=>'required',
            'company_id'=>'required',
            'membership_id'=>'required',
            'membership_start_from'=>'required',
            'membership_end_to'=>'required',
            'amount_paid'=>'required|numeric',
            'payment_method_used'=>'required',
            'registered_date',
            'registered_by'=>'required' 
          ]);
     
          if ($validator1->fails()){
            return response()->json(
                [
   
                'errors'=>$validator1->errors(),
                
        ],400);
  
           }
  
          if($validator1->validated()){     
      
              $activated_membership_plan = new Activated_membership_plan;
              $activated_membership_plan->activated_membership_id=$request->input('activated_membership_id');
              $activated_membership_plan->company_id=$request->input('company_id');
              $activated_membership_plan->membership_id=$request->input('membership_id');
              $activated_membership_plan->membership_start_from=$request->input('membership_start_from');
              $activated_membership_plan->membership_end_to=$request->input('membership_end_to');
              $activated_membership_plan->amount_paid=$request->input('amount_paid');
              $activated_membership_plan->payment_method_used=$request->input('payment_method_used');
              $activated_membership_plan->registered_date=now();
              $activated_membership_plan->registered_by=$request->input('registered_by');
              $activated_membership_plan->save();
        
          return response()->json( $activated_membership_plan);
        
        } }

         //Quiz  Response
         
         public function store_quiz_response(Request $request){  
          $validator1= Validator::make($request->all(),[
            'response_id'=>'required',
            'quiz_id'=>'required',
            'question_id'=>'required',
            'question_option_id'=>'required',
            'answered_question_status'=>'required',
            'earned_marks'=>'required|numeric',
            'user_id'=>'required',
            'user_location'=>'required',
            'user_phone'=>'required|numeric',
            'user_country'=>'required',
         
          ]);

          
        if ($validator1->fails()){
          return response()->json(
              [
 
              'errors'=>$validator1->errors(),
              
      ],400);

         }

        if($validator1->validated()){
 
              $quiz_response = new  Quiz_response;
              $quiz_response->response_id=$request->input('response_id');
              $quiz_response->quiz_id=$request->input('quiz_id');
              $quiz_response->question_id=$request->input('question_id');
              $quiz_response->question_option_id=$request->input('question_option_id');
              $quiz_response->answered_question_status=$request->input('answered_question_status');
              $quiz_response->earned_marks=$request->input('earned_marks');
              $quiz_response->user_id=$request->input('user_id');
              $quiz_response->user_location=$request->input('user_location');
              $quiz_response->user_phone=$request->input('user_phone');
              $quiz_response->user_country=$request->input('user_country');
              $quiz_response->save();
        
          return response()->json(  $quiz_response);

        }   
      }
        
          //Question  Bank Options
          
          public function store_question_bank_options(Request $request){  
            $validator1= Validator::make($request->all(),[
              'question_option_id'=>'required',
              'question_id'=>'required',
              'option_name'=>'required',
              'option_status'=>'required',
              'option_registered_date',
              'option_registered_by'=>'required',
              'option_marks'=>'required|numeric'
           
            ]);
          
        if ($validator1->fails()){
          return response()->json(
              [
 
              'errors'=>$validator1->errors(),
              
      ],400);

         }

        if($validator1->validated()){

                $question_bank_options= new  Question_bank_options;
                $question_bank_options->question_option_id=$request->input('question_option_id');
                $question_bank_options->question_id=$request->input('question_id');
                $question_bank_options->option_name=$request->input('option_name');
                $question_bank_options->option_status=$request->input('option_status');
                $question_bank_options->option_registered_date=now();
                $question_bank_options->option_registered_by=$request->input('option_registered_by');
                $question_bank_options->option_marks=$request->input('option_marks');

                $question_bank_options->save();
          
            return response()->json($question_bank_options);
 
          }    }      


          //  Store Quiz

          public function store_quiz(Request $request){  
            $validator1= Validator::make($request->all(),[
              'quiz_id' =>'required',
              'quiz_name'=>'required',
              'quiz_date_from'=>'required',
              'quiz_time_from'=>'required',
              'quiz_date_to'=>'required',
              'quiz_time_to'=>'required',
              'company_id'=>'required',
             'quiz_registered_date',
              'quiz_registered_by'=>'required',
              'quiz_total_marks'=>'required|numeric',
              'attempt_user_limit'=>'required'
           
            ]);
            
        if ($validator1->fails()){
          return response()->json(
              [
 
              'errors'=>$validator1->errors(),
              
      ],400);

         }

        if($validator1->validated()){
        
                $quiz= new  Quiz;
                $quiz->quiz_id=$request->input('quiz_id');
                $quiz->quiz_name=$request->input('quiz_name');
                $quiz->quiz_date_from=$request->input('quiz_date_from');
                $quiz->quiz_time_from=$request->input('quiz_time_from');
                $quiz->quiz_date_to=$request->input('quiz_date_to');
                $quiz->quiz_time_to=$request->input('quiz_time_to');
                $quiz->company_id=$request->input('company_id');
                $quiz->quiz_registered_date=now();
                $quiz->quiz_registered_by=$request->input('quiz_registered_by');
                $quiz->quiz_total_marks=$request->input('quiz_total_marks');
                $quiz->attempt_user_limit=$request->input('attempt_user_limit');


                $quiz->save();
          
            return response()->json($quiz);
          
          }   }




                    //  Store Question  Bank


          public function store_question_bank(Request $request){  
            $validator1= Validator::make($request->all(),[
              'question_id'=>'required',
              'question_name'=>'required',
              'question_registered',
              'question_type'=>'required',
              'question_marks_total'=>'required|numeric'
           
            ]);

            
        if ($validator1->fails()){
          return response()->json(
              [
 
              'errors'=>$validator1->errors(),
              
      ],400);

         }

        if($validator1->validated()){
          
                $question_bank= new  Question_bank;
                $question_bank->question_id=$request->input('question_id');
                $question_bank->question_name=$request->input('question_name');
                $question_bank->question_registered=now();
                $question_bank->question_type=$request->input('question_type');
                $question_bank->question_marks_total=$request->input('question_marks_total');


                $question_bank->save();
          
            return response()->json($question_bank);
          
          }   }







   //======================VIEWS======================    
     //View  companies     
     
public function view_companies(){
$company = DB::select('select * from companies');
return response()->json(['companies'=>$company],200);
      }   
      
           //View  Users     
     
public function view_users(){
  $user = DB::select('select * from users');
  return response()->json(['Users'=>$user],200);
        }  


public function view_company_full_services(){
$full_service = DB::select('select * from company_full_services');
return response()->json(['view_company_full_services'=>$full_service],200);
                }  

public function view_company_full_service_details(){
$service_details = DB::select('select * from company_full_service_details');
 return response()->json(['company_full_service_details'=>$service_details],200);
        }  


      
public function view_image_for_full_service_details(){
$image_for_full_service_details = DB::select('select * from image_for_full_service_details');
return response()->json(['view_image_for_full_service_details'=>$image_for_full_service_details],200);
                  }         
public function view_membership_plan(){
$membership_plan = DB::select('select * from membership_plans');
return response()->json(['membership_plans'=>$membership_plan],200);
       }  

public function view_quiz_booking(){
$quiz_booking = DB::select('select * from quiz_bookings ');
return response()->json(['Quiz Bookings'=>$quiz_booking ],200);
               }  
               
               
public function view_activated_membership_plan(){
$activated_membership_plan = DB::select('select * from activated_membership_plans ');
return response()->json(['activated_membership_plans'=>$activated_membership_plan ],200);
                               }   
                                 
                               
public function view_quiz_response(){
 $quiz_response = DB::select('select * from quiz_responses  ');
return response()->json(['quiz_responses '=>$quiz_response ],200);
} 




public function view_question_bank_options(){
  $question_bank_options =  DB::select('select * from question_bank_options  ');
 return response()->json([' question_bank_options '=> $question_bank_options ],200);
 } 



 public function view_quizzes(){
  $quiz =  DB::select('select * from quizzes  ');
 return response()->json([' quizzes '=>  $quiz ],200);
 }
 
 public function view_question_bank(){
  $question_bank =  DB::select('select * from question_banks  ');
 return response()->json([' question_bank '=>  $question_bank ],200);
 } 



    //======================    DELETING  ====================== 


public function delete_company(Request $request,$id){

$company = Companies::find($id);
$company->delete();
return response()->json([' RECORD DELETED', $company ],200);
       }



    

public function delete_user(Request $request,$id){
  
$user = User::find($id);
$user->delete();
return response()->json([' RECORD DELETED',  $user ],200);
   }




public function delete_company_full_services(Request $request,$id){

$company_full_services = Company_full_services::find($id);
$company_full_services ->delete();
 return response()->json([' RECORD DELETED', $company_full_services ],200);
  } 





      
public function delete_company_full_service_details(Request $request,$id){
$company_full_service_details = Company_full_service_details::find($id);
$company_full_service_details  ->delete();
return response()->json([' RECORD DELETED',$company_full_service_details  ],200);
   }




public function delete_image_for_full_service_details(Request $request,$id){

$image_for_full_service_details = Image_for_full_service_details::find($id);
$image_for_full_service_details  ->delete();
return response()->json([' RECORD DELETED',$image_for_full_service_details ],200);
 }





public function delete_membership_plan(Request $request,$id){

  $membership_plan = Membership_plan::find($id);
  $membership_plan  ->delete();
  return response()->json([' RECORD DELETED', $membership_plan ],200);
  }



  

  public function delete_quiz_booking(Request $request,$id){
    $quiz_booking = Quiz_booking::find($id);
    $quiz_booking ->delete();
    return response()->json([' RECORD DELETED', $quiz_booking ],200);
   }


    


    public function delete_activated_membership_plan(Request $request,$id){

      $activated_membership_plan = Activated_membership_plan::find($id);
      $activated_membership_plan->delete();
      return response()->json([' RECORD DELETED', $activated_membership_plan],200);
 }
          




public function delete_quiz_response(Request $request,$id){

$quiz_response = Quiz_response::find($id);
$quiz_response->delete();
return response()->json([' RECORD DELETED',$quiz_response],200);
  }





public function delete_question_bank_options(Request $request,$id){

$question_bank_options= Question_bank_options::find($id);
$question_bank_options->delete();
return response()->json([' RECORD DELETED',$question_bank_options],200);
  } 
              
 




public function delete_quizzes(Request $request,$id){

  $quizzes= Quiz::find($id);
  $quizzes->delete();
  return response()->json([' RECORD DELETED',  $quizzes],200);
  } 




public function delete_question_bank(Request $request,$id){

$question_bank= Question_bank::find($id);
$question_bank->delete();
return response()->json([' RECORD DELETED', $question_bank],200);
  }   

    //======================    Updating  ====================== 
                                    
      
public function update_company(Request $request,$id){

$company=Companies::find($id);
$company->update($request->all());
return response()->json([' RECORD UPDATED  SUCCESSFULLY !!', $company],200);
   }  




public function update_user(Request $request,$id){

  $user=User::find($id);
  $user->update($request->all());
  return response()->json([' RECORD UPDATED  SUCCESSFULLY !!',  $user],200);
  }  




  public function update_company_full_services(Request $request,$id){

    $company_full_services=Company_full_services::find($id);
    $company_full_services->update($request->all());
    return response()->json([' RECORD UPDATED  SUCCESSFULLY !!',   $company_full_services],200);
  }    



public function update_company_full_service_details(Request $request,$id){
$company_full_service_details=Company_full_service_details::find($id);
$company_full_service_details->update($request->all());
return response()->json([' RECORD UPDATED  SUCCESSFULLY !!',$company_full_service_details],200);
 }   
      
      

public function update_image_for_full_service_details(Request $request,$id){

 $image_for_full_service_details=Image_for_full_service_details::find($id);
 $image_for_full_service_details->update($request->all());
return response()->json([' RECORD UPDATED  SUCCESSFULLY !!',$image_for_full_service_details],200);
  }   
   
   
public function update_membership_plan(Request $request,$id){

$membership_plan=Membership_plan::find($id);
$membership_plan->update($request->all());
return response()->json([' RECORD UPDATED  SUCCESSFULLY !!',$membership_plan],200);
   }  


public function update_quiz_booking(Request $request,$id){

$quiz_booking=Quiz_booking::find($id);
$quiz_booking->update($request->all());
return response()->json([' RECORD UPDATED  SUCCESSFULLY !!',$quiz_booking],200);
   }   


      
public function update_activated_membership_plan(Request $request,$id){
$activated_membership_plan=Activated_membership_plan::find($id);
$activated_membership_plan->update($request->all());
return response()->json([' RECORD UPDATED  SUCCESSFULLY !!',$activated_membership_plan],200);
   }    


public function update_quiz_response(Request $request,$id){
$quiz_response=Quiz_response::find($id);
$quiz_response->update($request->all());
return response()->json([' RECORD UPDATED  SUCCESSFULLY !!',$quiz_response],200);
  }  
  

public function update_question_bank_options(Request $request,$id){
$question_bank_options=Question_bank_options::find($id);
$question_bank_options->update($request->all());
return response()->json([' RECORD UPDATED  SUCCESSFULLY !!',$question_bank_options],200);
  }    



public function update_quizzes(Request $request,$id){

$quizzes=Quiz::find($id);
$quizzes->update($request->all());
return response()->json([' RECORD UPDATED  SUCCESSFULLY !!',$quizzes],200);
 }   
              
              
 public function update_question_bank(Request $request,$id){

 $question_bank=Quiz::find($id);
 $question_bank->update($request->all());
   return response()->json([' RECORD UPDATED  SUCCESSFULLY !!', $question_bank],200);
  }  




       
               









}