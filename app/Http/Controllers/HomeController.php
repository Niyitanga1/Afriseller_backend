<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
  /**
     * @OA\Put(
     *      path="/api/update_company/{id}",
     *      operationId="updatecompany",
     *    
     *      summary="update company",
     *      description="update  company",
     *  
     *     @OA\Parameter(
     *      name="token",
     *      in="query",
     *      @OA\Schema(
     *           type="string"
     *      )
     *      ),
     * 
     *    @OA\Parameter(
     *      name="id",
     *      in="path",
     *      @OA\Schema(
     *           type="integer"
     *      )
     *      ),
           
   *          @OA\RequestBody(
     *        required=true,
     *        @OA\JsonContent(
     *           required={"title", "content", "status"},
     *          
     *        ),
     *     ),
     *       @OA\Response(
     *      response=200,
     *      description="Success response",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="200"),
     *      @OA\Property(property="message", type="string", example=" success."),
     *        )
     *     ),
     *        @OA\Response(
     *      response=400,
     *      description="Bad Request",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="400"),
     *      @OA\Property(property="message", type="string", example="Error in processing request")
     *        )
     *     )
     * )
     *      
     * )
     */

     public function updatecompany(Request $request)
     {
      
     } 


  /**
     * @OA\Put(
     *      path="/api/update_user/{id}",
     *      operationId="updateuser",
     *    
     *      summary="update USER",
     *      description="update  user",
     *  
     *     @OA\Parameter(
     *      name="token",
     *      in="query",
     *      @OA\Schema(
     *           type="string"
     *      )
     *      ),
     * 
     *    @OA\Parameter(
     *      name="id",
     *      in="path",
     *      @OA\Schema(
     *           type="integer"
     *      )
     *      ),
           
   *          @OA\RequestBody(
     *        required=true,
     *        @OA\JsonContent(
     *           required={"title", "content", "status"},
     *          
     *        ),
     *     ),
     *       @OA\Response(
     *      response=200,
     *      description="Success response",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="200"),
     *      @OA\Property(property="message", type="string", example=" success."),
     *        )
     *     ),
     *        @OA\Response(
     *      response=400,
     *      description="Bad Request",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="400"),
     *      @OA\Property(property="message", type="string", example="Error in processing request")
     *        )
     *     )
     * )
     *      
     * )
     */

     public function updateuser(Request $request)
     {
      
     } 


   /**
     * @OA\Put(
     *      path="/api/update_company_full_services/{id}",
     *      operationId="updatecompany_full_services",
     *    
     *      summary="update  company_full_services",
     *      description="update   company_full_services",
     *  
     *     @OA\Parameter(
     *      name="token",
     *      in="query",
     *      @OA\Schema(
     *           type="string"
     *      )
     *      ),
     * 
     *    @OA\Parameter(
     *      name="id",
     *      in="path",
     *      @OA\Schema(
     *           type="integer"
     *      )
     *      ),
           
   *          @OA\RequestBody(
     *        required=true,
     *        @OA\JsonContent(
     *           required={"title", "content", "status"},
     *          
     *        ),
     *     ),
     *       @OA\Response(
     *      response=200,
     *      description="Success response",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="200"),
     *      @OA\Property(property="message", type="string", example=" success."),
     *        )
     *     ),
     *        @OA\Response(
     *      response=400,
     *      description="Bad Request",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="400"),
     *      @OA\Property(property="message", type="string", example="Error in processing request")
     *        )
     *     )
     * )
     *      
     * )
     */

     public function updatecompany_full_services(Request $request)
     {
      
     }     


        /**
     * @OA\Put(
     *      path="/api/update_company_full_service_details/{id}",
     *      operationId="updatecompany_full_service_details",
     *    
     *      summary="update  company_full_service_details",
     *      description="update  company_full_service_details",
     *  
     *     @OA\Parameter(
     *      name="token",
     *      in="query",
     *      @OA\Schema(
     *           type="string"
     *      )
     *      ),
     * 
     *    @OA\Parameter(
     *      name="id",
     *      in="path",
     *      @OA\Schema(
     *           type="integer"
     *      )
     *      ),
           
   *          @OA\RequestBody(
     *        required=true,
     *        @OA\JsonContent(
     *           required={"title", "content", "status"},
     *          
     *        ),
     *     ),
     *       @OA\Response(
     *      response=200,
     *      description="Success response",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="200"),
     *      @OA\Property(property="message", type="string", example=" success."),
     *        )
     *     ),
     *        @OA\Response(
     *      response=400,
     *      description="Bad Request",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="400"),
     *      @OA\Property(property="message", type="string", example="Error in processing request")
     *        )
     *     )
     * )
     *      
     * )
     */

     public function updatecompany_full_service_details(Request $request)
     {
      
     } 

        /**
     * @OA\Put(
     *      path="/api/update_image_for_full_service_details/{id}",
     *      operationId="updateimage_for_full_service_details",
     *    
     *      summary="update  image_for_full_service_details",
     *      description="update   image_for_full_service_details",
     *  
     *     @OA\Parameter(
     *      name="token",
     *      in="query",
     *      @OA\Schema(
     *           type="string"
     *      )
     *      ),
     * 
     *    @OA\Parameter(
     *      name="id",
     *      in="path",
     *      @OA\Schema(
     *           type="integer"
     *      )
     *      ),
           
   *          @OA\RequestBody(
     *        required=true,
     *        @OA\JsonContent(
     *           required={"title", "content", "status"},
     *          
     *        ),
     *     ),
     *       @OA\Response(
     *      response=200,
     *      description="Success response",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="200"),
     *      @OA\Property(property="message", type="string", example=" success."),
     *        )
     *     ),
     *        @OA\Response(
     *      response=400,
     *      description="Bad Request",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="400"),
     *      @OA\Property(property="message", type="string", example="Error in processing request")
     *        )
     *     )
     * )
     *      
     * )
     */

     public function updateimage_for_full_service_details(Request $request)
     {
      
     } 



        /**
     * @OA\Put(
     *      path="/api/update_membership_plan/{id}",
     *      operationId="updatemembership_plan",
     *    
     *      summary="update  membership_plan",
     *      description="update  membership_plan",
     *  
     *     @OA\Parameter(
     *      name="token",
     *      in="query",
     *      @OA\Schema(
     *           type="string"
     *      )
     *      ),
     * 
     *    @OA\Parameter(
     *      name="id",
     *      in="path",
     *      @OA\Schema(
     *           type="integer"
     *      )
     *      ),
           
   *          @OA\RequestBody(
     *        required=true,
     *        @OA\JsonContent(
     *           required={"title", "content", "status"},
     *          
     *        ),
     *     ),
     *       @OA\Response(
     *      response=200,
     *      description="Success response",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="200"),
     *      @OA\Property(property="message", type="string", example=" success."),
     *        )
     *     ),
     *        @OA\Response(
     *      response=400,
     *      description="Bad Request",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="400"),
     *      @OA\Property(property="message", type="string", example="Error in processing request")
     *        )
     *     )
     * )
     *      
     * )
     */

     public function updatemembership_plan(Request $request)
     {
      
     }      

        /**
     * @OA\Put(
     *      path="/api/update_quiz_booking/{id}",
     *      operationId="updatequiz_booking",
     *    
     *      summary="updat  equiz_booking",
     *      description="update  quiz_booking",
     *  
     *     @OA\Parameter(
     *      name="token",
     *      in="query",
     *      @OA\Schema(
     *           type="string"
     *      )
     *      ),
     * 
     *    @OA\Parameter(
     *      name="id",
     *      in="path",
     *      @OA\Schema(
     *           type="integer"
     *      )
     *      ),
           
   *          @OA\RequestBody(
     *        required=true,
     *        @OA\JsonContent(
     *           required={"title", "content", "status"},
     *          
     *        ),
     *     ),
     *       @OA\Response(
     *      response=200,
     *      description="Success response",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="200"),
     *      @OA\Property(property="message", type="string", example=" success."),
     *        )
     *     ),
     *        @OA\Response(
     *      response=400,
     *      description="Bad Request",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="400"),
     *      @OA\Property(property="message", type="string", example="Error in processing request")
     *        )
     *     )
     * )
     *      
     * )
     */

     public function updatequiz_booking(Request $request)
     {
      
     }


          /**
     * @OA\Put(
     *      path="/api/update_activated_membership_plan/{id}",
     *      operationId="updateactivated_membership_plan",
     *    
     *      summary="update  activated_membership_plan",
     *      description="update  activated_membership_plan",
     *  
     *     @OA\Parameter(
     *      name="token",
     *      in="query",
     *      @OA\Schema(
     *           type="string"
     *      )
     *      ),
     * 
     *    @OA\Parameter(
     *      name="id",
     *      in="path",
     *      @OA\Schema(
     *           type="integer"
     *      )
     *      ),
           
   *          @OA\RequestBody(
     *        required=true,
     *        @OA\JsonContent(
     *           required={"title", "content", "status"},
     *          
     *        ),
     *     ),
     *       @OA\Response(
     *      response=200,
     *      description="Success response",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="200"),
     *      @OA\Property(property="message", type="string", example=" success."),
     *        )
     *     ),
     *        @OA\Response(
     *      response=400,
     *      description="Bad Request",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="400"),
     *      @OA\Property(property="message", type="string", example="Error in processing request")
     *        )
     *     )
     * )
     *      
     * )
     */

     public function updateactivated_membership_plan(Request $request)
     {
      
     }   


          /**
     * @OA\Put(
     *      path="/api/update_question_bank_options/{id}",
     *      operationId="updatequestion_bank_options",
     *    
     *      summary="update  question_bank_options",
     *      description="update  question_bank_options",
     *  
     *     @OA\Parameter(
     *      name="token",
     *      in="query",
     *      @OA\Schema(
     *           type="string"
     *      )
     *      ),
     * 
     *    @OA\Parameter(
     *      name="id",
     *      in="path",
     *      @OA\Schema(
     *           type="integer"
     *      )
     *      ),
           
   *          @OA\RequestBody(
     *        required=true,
     *        @OA\JsonContent(
     *           required={"title", "content", "status"},
     *          
     *        ),
     *     ),
     *       @OA\Response(
     *      response=200,
     *      description="Success response",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="200"),
     *      @OA\Property(property="message", type="string", example=" success."),
     *        )
     *     ),
     *        @OA\Response(
     *      response=400,
     *      description="Bad Request",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="400"),
     *      @OA\Property(property="message", type="string", example="Error in processing request")
     *        )
     *     )
     * )
     *      
     * )
     */

     public function updatequestion_bank_options(Request $request)
     {
      
     }     
     
          /**
     * @OA\Put(
     *      path="/api/update_quizzes/{id}",
     *      operationId="updatequizzes",
     *    
     *      summary="update   quizzes",
     *      description="update   quizzes",
     *  
     *     @OA\Parameter(
     *      name="token",
     *      in="query",
     *      @OA\Schema(
     *           type="string"
     *      )
     *      ),
     * 
     *    @OA\Parameter(
     *      name="id",
     *      in="path",
     *      @OA\Schema(
     *           type="integer"
     *      )
     *      ),
           
   *          @OA\RequestBody(
     *        required=true,
     *        @OA\JsonContent(
     *           required={"title", "content", "status"},
     *          
     *        ),
     *     ),
     *       @OA\Response(
     *      response=200,
     *      description="Success response",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="200"),
     *      @OA\Property(property="message", type="string", example=" success."),
     *        )
     *     ),
     *        @OA\Response(
     *      response=400,
     *      description="Bad Request",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="400"),
     *      @OA\Property(property="message", type="string", example="Error in processing request")
     *        )
     *     )
     * )
     *      
     * )
     */

     public function updatequizzes(Request $request)
     {
      
     } 
     
          /**
     * @OA\Put(
     *      path="/api/update_question_bank/{id}",
     *      operationId="update_questionbank",
     *    
     *      summary="update  question_bank",
     *      description="update   question_bank",
     *  
     *     @OA\Parameter(
     *      name="token",
     *      in="query",
     *      @OA\Schema(
     *           type="string"
     *      )
     *      ),
     * 
     *    @OA\Parameter(
     *      name="id",
     *      in="path",
     *      @OA\Schema(
     *           type="integer"
     *      )
     *      ),
           
   *          @OA\RequestBody(
     *        required=true,
     *        @OA\JsonContent(
     *           required={"title", "content", "status"},
     *          
     *        ),
     *     ),
     *       @OA\Response(
     *      response=200,
     *      description="Success response",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="200"),
     *      @OA\Property(property="message", type="string", example=" success."),
     *        )
     *     ),
     *        @OA\Response(
     *      response=400,
     *      description="Bad Request",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="400"),
     *      @OA\Property(property="message", type="string", example="Error in processing request")
     *        )
     *     )
     * )
     *      
     * )
     */

     public function update_questionbank(Request $request)
     {
      
     }   
     
     

             /**
     * @OA\Put(
     *      path="/api/update_quiz_response/{id}",
     *      operationId="updatequiz_response",
     *    
     *      summary="update  question_bank",
     *      description="update   question_bank",
     *  
     *     @OA\Parameter(
     *      name="token",
     *      in="query",
     *      @OA\Schema(
     *           type="string"
     *      )
     *      ),
     * 
     *    @OA\Parameter(
     *      name="id",
     *      in="path",
     *      @OA\Schema(
     *           type="integer"
     *      )
     *      ),
           
   *          @OA\RequestBody(
     *        required=true,
     *        @OA\JsonContent(
     *           required={"title", "content", "status"},
     *          
     *        ),
     *     ),
     *       @OA\Response(
     *      response=200,
     *      description="Success response",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="200"),
     *      @OA\Property(property="message", type="string", example=" success."),
     *        )
     *     ),
     *        @OA\Response(
     *      response=400,
     *      description="Bad Request",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="400"),
     *      @OA\Property(property="message", type="string", example="Error in processing request")
     *        )
     *     )
     * )
     *      
     * )
     */

     public function updatequiz_response(Request $request)
     {
      
     }      
         
           

    

    

//====================DELETE  REQUESTS===========================
  /**
     * @OA\Delete(
     *      path="/api/users/{id}",
     *      operationId="delete_users",
     *    
     *      summary="delete_users",
     *      description="delete_users",
     *  
     *     @OA\Parameter(
     *      name="token",
     *      in="query",
     *      @OA\Schema(
     *           type="string"
     *      )
     *      ),
     * 
     *       @OA\Parameter(
     *      name="id",
     *      in="path",
     *      @OA\Schema(
     *           type="integer"
     *      )
     *      ),
           
     *      @OA\RequestBody(
     *      required=true,
     *      description="delete_user",
   
     *      @OA\MediaType(
     *            mediaType="json",
     *            @OA\Schema(
     *               type="object",

     * 


    
     *            )
     *        ),
     *      ),
     *       @OA\Response(
     *      response=200,
     *      description="Success response",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="200"),
     *      @OA\Property(property="message", type="string", example=" success."),
     *        )
     *     ),
     *        @OA\Response(
     *      response=400,
     *      description="Bad Request",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="400"),
     *      @OA\Property(property="message", type="string", example="Error in processing request")
     *        )
     *     )
     * )
     *      
     * )
     */

     public function delete_users(Request $request)
     {
      
     } 


       /**
     * @OA\Delete(
     *      path="/api/company/{id}",
     *      operationId="deletecompany",
     *    
     *      summary="delete_company",
     *      description="delete_company",
     *  
     *     @OA\Parameter(
     *      name="token",
     *      in="query",
     *      @OA\Schema(
     *           type="string"
     *      )
     *      ),
     * 
     *    @OA\Parameter(
     *      name="id",
     *      in="path",
     *      @OA\Schema(
     *           type="integer"
     *      )
     *      ),
           
     *      @OA\RequestBody(
     *      required=true,
     *      description="delete_company",
   
     *      @OA\MediaType(
     *            mediaType="json",
     *            @OA\Schema(
     *               type="object",

     * 


    
     *            )
     *        ),
     *      ),
     *       @OA\Response(
     *      response=200,
     *      description="Success response",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="200"),
     *      @OA\Property(property="message", type="string", example=" success."),
     *        )
     *     ),
     *        @OA\Response(
     *      response=400,
     *      description="Bad Request",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="400"),
     *      @OA\Property(property="message", type="string", example="Error in processing request")
     *        )
     *     )
     * )
     *      
     * )
     */

     public function deletecompany(Request $request)
     {
      
     } 


            /**
     * @OA\Delete(
     *      path="/api/company_full_services/{id}",
     *      operationId="delete_company_full_service",
     *    
     *      summary="delete_company_full_services",
     *      description="delete_company_full_services",
     *  
     *     @OA\Parameter(
     *      name="token",
     *      in="query",
     *      @OA\Schema(
     *           type="string"
     *      )
     *      ),
     * 
     *  @OA\Parameter(
     *      name="id",
     *      in="path",
     *      @OA\Schema(
     *           type="integer"
     *      )
     *      ),
           
     *      @OA\RequestBody(
     *      required=true,
     *      description="delete_company_full_services",
   
     *      @OA\MediaType(
     *            mediaType="json",
     *            @OA\Schema(
     *               type="object",

     *  


    
     *            )
     *        ),
     *      ),
     *       @OA\Response(
     *      response=200,
     *      description="Success response",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="200"),
     *      @OA\Property(property="message", type="string", example=" success."),
     *        )
     *     ),
     *        @OA\Response(
     *      response=400,
     *      description="Bad Request",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="400"),
     *      @OA\Property(property="message", type="string", example="Error in processing request")
     *        )
     *     )
     * )
     *      
     * )
     */

     public function delete_company_full_service(Request $request)
     {
      
     } 


        /**
     * @OA\Delete(
     *      path="/api/company_full_service_details/{id}",
     *      operationId="delete_company_full_service_detail",
     *    
     *      summary="delete_company_full_service_details",
     *      description="delete_company_full_service_details",
     *  
     *     @OA\Parameter(
     *      name="token",
     *      in="query",
     *      @OA\Schema(
     *           type="string"
     *      )
     *      ),
     * 
     *  @OA\Parameter(
     *      name="id",
     *      in="path",
     *      @OA\Schema(
     *           type="integer"
     *      )
     *      ),
           
     *      @OA\RequestBody(
     *      required=true,
     *      description="delete_company_full_service_details",
   
     *      @OA\MediaType(
     *            mediaType="json",
     *            @OA\Schema(
     *               type="object",

     *   


    
     *            )
     *        ),
     *      ),
     *       @OA\Response(
     *      response=200,
     *      description="Success response",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="200"),
     *      @OA\Property(property="message", type="string", example=" success."),
     *        )
     *     ),
     *        @OA\Response(
     *      response=400,
     *      description="Bad Request",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="400"),
     *      @OA\Property(property="message", type="string", example="Error in processing request")
     *        )
     *     )
     * )
     *      
     * )s
     */

     public function delete_company_full_service_detail(Request $request)
     {
      
     } 


            /**
     * @OA\Delete(
     *      path="/api/image_for_full_service_details/{id}",
     *      operationId="deleteimage_for_full_service_details",
     *    
     *      summary="delete image_for_full_service_details",
     *      description="delete image_for_full_service_details",
     *  
     *     @OA\Parameter(
     *      name="token",
     *      in="query",
     *      @OA\Schema(
     *           type="string"
     *      )
     *      ),
     * 
     *  @OA\Parameter(
     *      name="id",
     *      in="path",
     *      @OA\Schema(
     *           type="integer"
     *      )
     *      ),
           
     *      @OA\RequestBody(
     *      required=true,
     *      description="delete image_for_full_service_details",
   
     *      @OA\MediaType(
     *            mediaType="json",
     *            @OA\Schema(
     *               type="object",

     *  


    
     *            )
     *        ),
     *      ),
     *       @OA\Response(
     *      response=200,
     *      description="Success response",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="200"),
     *      @OA\Property(property="message", type="string", example=" success."),
     *        )
     *     ),
     *        @OA\Response(
     *      response=400,
     *      description="Bad Request",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="400"),
     *      @OA\Property(property="message", type="string", example="Error in processing request")
     *        )
     *     )
     * )
     *      
     * )
     */

     public function deleteimage_for_full_service_details(Request $request)
     {
      
     } 




                 /**
     * @OA\Delete(
     *      path="/api/membership_plan/{id}",
     *      operationId="deletemembership_plan",
     *    
     *      summary="delete_membership_plan",
     *      description="delete_membership_plan",
     *  
     *     @OA\Parameter(
     *      name="token",
     *      in="query",
     *      @OA\Schema(
     *           type="string"
     *      )
     *      ),
     * 
     *  @OA\Parameter(
     *      name="id",
     *      in="path",
     *      @OA\Schema(
     *           type="integer"
     *      )
     *      ),
           
     *      @OA\RequestBody(
     *      required=true,
     *      description="deletemembership_plan",
   
     *      @OA\MediaType(
     *            mediaType="json",
     *            @OA\Schema(
     *               type="object",

     *   


    
     *            )
     *        ),
     *      ),
     *       @OA\Response(
     *      response=200,
     *      description="Success response",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="200"),
     *      @OA\Property(property="message", type="string", example=" success."),
     *        )
     *     ),
     *        @OA\Response(
     *      response=400,
     *      description="Bad Request",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="400"),
     *      @OA\Property(property="message", type="string", example="Error in processing request")
     *        )
     *     )
     * )
     *      
     * )
     */

     public function deletemembership_plan(Request $request)
     {
      
     } 



                 /**
     * @OA\Delete(
     *      path="/api/quiz_booking/{id}",
     *      operationId="deletequiz_booking",
     *    
     *      summary="delete quiz_booking",
     *      description="delete quiz_booking",
     *  
     *     @OA\Parameter(
     *      name="token",
     *      in="query",
     *      @OA\Schema(
     *           type="string"
     *      )
     *      ),
     * 
     *  @OA\Parameter(
     *      name="id",
     *      in="path",
     *      @OA\Schema(
     *           type="integer"
     *      )
     *      ),
           
     *      @OA\RequestBody(
     *      required=true,
     *      description="delete quiz_booking",
   
     *      @OA\MediaType(
     *            mediaType="json",
     *            @OA\Schema(
     *               type="object",

     *   


    
     *            )
     *        ),
     *      ),
     *       @OA\Response(
     *      response=200,
     *      description="Success response",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="200"),
     *      @OA\Property(property="message", type="string", example=" success."),
     *        )
     *     ),
     *        @OA\Response(
     *      response=400,
     *      description="Bad Request",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="400"),
     *      @OA\Property(property="message", type="string", example="Error in processing request")
     *        )
     *     )
     * )
     *      
     * )
     */

     public function deletequiz_booking(Request $request)
     {
      
     } 


/**
     * @OA\Delete(
     *      path="/api/activated_membership_plan/{id}",
     *      operationId="deleteactivated_membership_plan",
     *    
     *      summary="delete activated_membership_plan",
     *      description="delete activated_membership_plan",
     *  
     *     @OA\Parameter(
     *      name="token",
     *      in="query",
     *      @OA\Schema(
     *           type="string"
     *      )
     *      ),
     * 
     *  @OA\Parameter(
     *      name="id",
     *      in="path",
     *      @OA\Schema(
     *           type="integer"
     *      )
     *      ),
           
     *      @OA\RequestBody(
     *      required=true,
     *      description="delete activated_membership_plan",
   
     *      @OA\MediaType(
     *            mediaType="json",
     *            @OA\Schema(
     *               type="object",

     *   


    
     *            )
     *        ),
     *      ),
     *       @OA\Response(
     *      response=200,
     *      description="Success response",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="200"),
     *      @OA\Property(property="message", type="string", example=" success."),
     *        )
     *     ),
     *        @OA\Response(
     *      response=400,
     *      description="Bad Request",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="400"),
     *      @OA\Property(property="message", type="string", example="Error in processing request")
     *        )
     *     )
     * )
     *      
     * )
     */

     public function deleteactivated_membership_plan(Request $request)
     {
      
     } 



     
/**
     * @OA\Delete(
     *      path="/api/quiz_response/{id}",
     *      operationId="deletequiz_response",
     *    
     *      summary="delete quiz_response",
     *      description="delete quiz_response",
     *  
     *     @OA\Parameter(
     *      name="token",
     *      in="query",
     *      @OA\Schema(
     *           type="string"
     *      )
     *      ),
     * 
     *  @OA\Parameter(
     *      name="id",
     *      in="path",
     *      @OA\Schema(
     *           type="integer"
     *      )
     *      ),
           
     *      @OA\RequestBody(
     *      required=true,
     *      description="delete quiz_response",
   
     *      @OA\MediaType(
     *            mediaType="json",
     *            @OA\Schema(
     *               type="object",

     *


    
     *            )
     *        ),
     *      ),
     *       @OA\Response(
     *      response=200,
     *      description="Success response",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="200"),
     *      @OA\Property(property="message", type="string", example=" success."),
     *        )
     *     ),
     *        @OA\Response(
     *      response=400,
     *      description="Bad Request",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="400"),
     *      @OA\Property(property="message", type="string", example="Error in processing request")
     *        )
     *     )
     * )
     *      
     * )
     */

     public function deletequiz_response(Request $request)
     {
      
     } 



     /**
     * @OA\Delete(
     *      path="/api/question_bank_options/{id}",
     *      operationId="deletequestion_bank_options",
     *    
     *      summary="delete question_bank_options",
     *      description="delete question_bank_options",
     *  
     *     @OA\Parameter(
     *      name="token",
     *      in="query",
     *      @OA\Schema(
     *           type="string"
     *      )
     *      ),
     * 
     *  @OA\Parameter(
     *      name="id",
     *      in="path",
     *      @OA\Schema(
     *           type="integer"
     *      )
     *      ),
           
     *      @OA\RequestBody(
     *      required=true,
     *      description="delete question_bank_options",
   
     *      @OA\MediaType(
     *            mediaType="json",
     *            @OA\Schema(
     *               type="object",

     *   


    
     *            )
     *        ),
     *      ),
     *       @OA\Response(
     *      response=200,
     *      description="Success response",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="200"),
     *      @OA\Property(property="message", type="string", example=" success."),
     *        )
     *     ),
     *        @OA\Response(
     *      response=400,
     *      description="Bad Request",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="400"),
     *      @OA\Property(property="message", type="string", example="Error in processing request")
     *        )
     *     )
     * )
     *      
     * )
     */

     public function deletequestion_bank_options(Request $request)
     {
      
     } 



     /**
     * @OA\Delete(
     *      path="/api/quizzes/{id}",
     *      operationId="deletequizzes",
     *    
     *      summary="delete quizzes",
     *      description="delete quizzes",
     *  
     *     @OA\Parameter(
     *      name="token",
     *      in="query",
     *      @OA\Schema(
     *           type="string"
     *      )
     *      ),
     * 
     *  @OA\Parameter(
     *      name="id",
     *      in="path",
     *      @OA\Schema(
     *           type="integer"
     *      )
     *      ),
           
     *      @OA\RequestBody(
     *      required=true,
     *      description="delete  quizzes",
   
     *      @OA\MediaType(
     *            mediaType="json",
     *            @OA\Schema(
     *               type="object",

     *  


    
     *            )
     *        ),
     *      ),
     *       @OA\Response(
     *      response=200,
     *      description="Success response",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="200"),
     *      @OA\Property(property="message", type="string", example=" success."),
     *        )
     *     ),
     *        @OA\Response(
     *      response=400,
     *      description="Bad Request",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="400"),
     *      @OA\Property(property="message", type="string", example="Error in processing request")
     *        )
     *     )
     * )
     *      
     * )
     */

     public function deletequizzes(Request $request)
     {
      
     } 




          /**
     * @OA\Delete(
     *      path="/api/question_bank/{id}",
     *      operationId="deletequestion_bank",
     *    
     *      summary="delete  question_bank",
     *      description="delete question_bank",
     *  
     *     @OA\Parameter(
     *      name="token",
     *      in="query",
     *      @OA\Schema(
     *           type="string"
     *      )
     *      ),
     * 
     *  @OA\Parameter(
     *      name="id",
     *      in="path",
     *      @OA\Schema(
     *           type="integer"
     *      )
     *      ),
           
     *      @OA\RequestBody(
     *      required=true,
     *      description="delete question_bank",
   
     *      @OA\MediaType(
     *            mediaType="json",
     *            @OA\Schema(
     *               type="object",

     *   


    
     *            )
     *        ),
     *      ),
     *       @OA\Response(
     *      response=200,
     *      description="Success response",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="200"),
     *      @OA\Property(property="message", type="string", example=" success."),
     *        )
     *     ),
     *        @OA\Response(
     *      response=400,
     *      description="Bad Request",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="400"),
     *      @OA\Property(property="message", type="string", example="Error in processing request")
     *        )
     *     )
     * )
     *      
     * )
     */

     public function deletequestion_bank(Request $request)
     {
      
     } 






















































/**
     * @OA\Post(
     *      path="/api/users/login_phone",
     *      operationId="users_phone_login",
     *    
     *      summary="User Login  with Phone Number",
     *      description="USER  login with Phone Number",
     *     
     *      @OA\RequestBody(
     *      required=true,
     *      description="USER  login with Phone Number",
     *		@OA\Parameter(
     *      name="id",
     *      in="path",
     *      required=true,
     *      description= " ",
     *      example="10",
     *      @OA\Schema(
     *           type="integer"
     *      )
     *      ),
     *      @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *       @OA\Property(property="phone", type="string", format="string"),
     *       @OA\Property(property="password", type="string", format="string")
     *            )
     *        ),
     *      ),
     *       @OA\Response(
     *      response=200,
     *      description="Success response",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="200"),
     *      @OA\Property(property="message", type="string", example="User Logged ins successfully."),
     *        )
     *     ),
     *        @OA\Response(
     *      response=400,
     *      description="Bad Request",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="400"),
     *      @OA\Property(property="message", type="string", example="Error in processing request")
     *        )
     *     )
     * )
     *      
     * )
     */

     public function users_phone_login()
     {
       
     }



     




/**
     * @OA\Post(
     *      path="/api/users/login",
     *      operationId="users_email_login",
     *    
     *      summary="User Login  with email",
     *      description="USER  login with email",
     *     
     *      @OA\RequestBody(
     *      required=true,
     *      description="USER  login with email",
     *		@OA\Parameter(
     *      name="id",
     *      in="path",
     *      required=true,
     *      description= " ",
     *      example="10",
     *      @OA\Schema(
     *           type="integer"
     *      )
     *      ),
     *      @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *       @OA\Property(property="email", type="string", format="string"),
     *       @OA\Property(property="password", type="string", format="string")
     *            )
     *        ),
     *      ),
     *       @OA\Response(
     *      response=200,
     *      description="Success response",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="200"),
     *      @OA\Property(property="message", type="string", example="User Logged ins successfully."),
     *        )
     *     ),
     *        @OA\Response(
     *      response=400,
     *      description="Bad Request",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="400"),
     *      @OA\Property(property="message", type="string", example="Error in processing request")
     *        )
     *     )
     * )
     *      
     * )
     */

    public function users_email_login()
    {
      
    }

   /**
     * @OA\Post(
     *      path="/api/users",
     *      operationId="register_user",
     *    
     *      summary="Register user",
     *      description="Register user",
     * 
     *      @OA\RequestBody(
     *      required=true,
     *      description="Register user",
     *		@OA\Parameter(
     *      name="id",
     *      in="path",
     *      required=true,
     *      description= " ",
     *      example="10",
     *      @OA\Schema(
     *           type="integer"
     *      )
     *      ),
     *      @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *       @OA\Property(property="email", type="string", format="email"),
     *       @OA\Property(property="phone", type="number", format="number"),
     *       @OA\Property(property="full_name", type="string", format="string"),
     *       @OA\Property(property="national_id", type="number", format="number"),
     *       @OA\Property(property="password", type="string", format="string"),
   
     *       
         
     *            )
     *        ),
     *      ),
     *       @OA\Response(
     *      response=200,
     *      description="Success response",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="200"),
     *      @OA\Property(property="message", type="string", example="User Logged ins successfully."),
     *        )
     *     ),
     *        @OA\Response(
     *      response=400,
     *      description="Bad Request",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="400"),
     *      @OA\Property(property="message", type="string", example="Error in processing request")
     *        )
     *     )
     * )
     *      
     * )
     */

     public function register_user()
     {
        
     }
 



     /**
     * @OA\Post(
     *      path="/api/companies",
     *      operationId="store_company",
     *    
     *      summary="Register Company",
     *      description="Register Company",
     *      @OA\Parameter(
     *      name="token",
     *      in="query",
     *      required=true,
 
     *      @OA\Schema(
     *           type="string"
     *      )
     *      ),
     *      @OA\RequestBody(
     *      required=true,
     *      description="Register Company",
     *		@OA\Parameter(
     *      name="id",
     *      in="path",
     *      required=true,
     *      description= " ",
     *      example="10",
    
     *      @OA\Schema(
     *           type="integer"
     *      )
     *      ),
     *      @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *              
     *  
     *       @OA\Property(property="company_full_name", type="string", format="text"),
     *       @OA\Property(property="company_short_name", type="string", format="text"),
     *       @OA\Property(property="company_tin", type="number", format="number"),
     *       @OA\Property(property="company_phone", type="number", format="number"),
     *       @OA\Property(property="company_email", type="string", format="email"),
     *       @OA\Property(property="company_representative_name", type="string", format="text"),
     *       @OA\Property(property="company_representative_id", type="number", format="number"),
     *       @OA\Property(property="company_type", type="string", format="string"),
     * 
     *        @OA\Property(property="company_registration_document", type="file", format="pdf"  ),
     * 
     *       @OA\Property(property="company_website", type="string", format="string"),
     *      @OA\Property(property="company_biography", type="string", format="string"),
     *      @OA\Property(property="company_logo", type="file", format="jpeg"),
     *      @OA\Property(property="company_welcome_image", type="file", format="jpeg"),
     *      @OA\Property(property="company_reference", type="string", format="string"),
     *     
     *    
     *      @OA\Property(property="company_login_password", type="password", format="password"),
     *     
     *       
     * 
     *       
     *    
     *            )
     *        ),
     *      ),
     *       @OA\Response(
     *      response=200,
     *      description="Success response",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="200"),
     *      @OA\Property(property="message", type="string", example=" success."),
     *        )
     *     ),
     *        @OA\Response(
     *      response=400,
     *      description="Bad Request",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="400"),
     *      @OA\Property(property="message", type="string", example="Error in processing request")
     *        )
     *     )
     * )
     *      
     * )
     */

     public function store_company()
     {
        
     }



     /**
     * @OA\Post(
     *      path="/api/Company_full_services",
     *      operationId="store_Company_full_services",
     *    
     *      summary="Store  Company_full_services",
     *      description="Store  Company_full_services",
     *  @OA\Parameter(
     *      name="token",
     *      in="query",
     *      required=true,
 
     *      @OA\Schema(
     *           type="string"
     *      )
     *      ),
     *      @OA\RequestBody(
     *      required=true,
     *      description="Store  Company_full_services",
     *		@OA\Parameter(
     *      name="id",
     *      in="path",
     *      required=true,
     *      description= " ",
     *      example="10",
    
     *      @OA\Schema(
     *           type="integer"
     *      )
     *      ),
     *      @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *  
     *       @OA\Property(property="service_id", type="integer", format="integer"),
     *       @OA\Property(property="service_name", type="string", format="string"),
     *   @OA\Property(property="company_id", type="integer", format="integer"),
     *   @OA\Property(property="service_recorded_by", type="string", format="string"),
     *  
     *   
 
     *    
     *            )
     *        ),
     *      ),
     *       @OA\Response(
     *      response=200,
     *      description="Success response",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="200"),
     *      @OA\Property(property="message", type="string", example=" success."),
     *        )
     *     ),
     *        @OA\Response(
     *      response=400,
     *      description="Bad Request",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="400"),
     *      @OA\Property(property="message", type="string", example="Error in processing request")
     *        )
     *     )
     * )
     *      
     * )
     */

     public function store_Company_full_services()
     {
        
     }     
      
     /**
     * @OA\Post(
     *      path="/api/Company_full_service_details",
     *      operationId="store_Company_full_services_details",
     *    
     *      summary="Store  Company_full_service_details",
     *      description="store_Company_full_service_details",
     *  @OA\Parameter(
     *      name="token",
     *      in="query",
     *      required=true,
 
     *      @OA\Schema(
     *           type="string"
     *      )
     *      ),
     *      @OA\RequestBody(
     *      required=true,
     *      description="Register Company",
     *		@OA\Parameter(
     *      name="id",
     *      in="path",
     *      required=true,
     *      description= " ",
     *      example="10",
    
     *      @OA\Schema(
     *           type="integer"
     *      )
     *      ),
     *      @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *  @OA\Property(property="token", type="string", format="string"),
     * 
     *       @OA\Property(property="full_service_details_id", type="integer", format="integer"),
     *       @OA\Property(property="service_id",  type="integer", format="integer"),
     *   @OA\Property(property="full_content", type="string", format="string"),
     *   @OA\Property(property="main_image", type="file", format="jpeg"),
     *   @OA\Property(property="is_there_another_image", type="boolean", format="binary"),
     *   
 
     *    
     *            )
     *        ),
     *      ),
     *       @OA\Response(
     *      response=200,
     *      description="Success response",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="200"),
     *      @OA\Property(property="message", type="string", example=" success."),
     *        )
     *     ),
     *        @OA\Response(
     *      response=400,
     *      description="Bad Request",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="400"),
     *      @OA\Property(property="message", type="string", example="Error in processing request")
     *        )
     *     )
     * )
     *      
     * )
     */

     public function store_Company_full_services_details()
     {
       
     }  



          /**
     * @OA\Post(
     *      path="/api/image_for_full_service_details",
     *      operationId="store_image_for_full_service_details",
     *    
     *      summary="store_image_for_full_service_details",
     *      description="store_image_for_full_service_details",
     *  @OA\Parameter(
     *      name="token",
     *      in="query",
     *      required=true,
 
     *      @OA\Schema(
     *           type="string"
     *      )
     *      ),
     *      @OA\RequestBody(
     *      required=true,
     *      description="store_image_for_full_service_details",
     *		@OA\Parameter(
     *      name="id",
     *      in="path",
     *      required=true,
     *      description= " ",
     *      example="10",
    
     *      @OA\Schema(
     *           type="integer"
     *      )
     *      ),
     *      @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
   
     * 
     *       @OA\Property(property="image_details_id", type="integer", format="integer"),
     *       @OA\Property(property="full_service_details_id", type="integer", format="integer"),
     *   @OA\Property(property="image_location", type="string", format="string"),
     *  
     *   @OA\Property(property="image_uploaded_by", type="string", format="string"),
     *   @OA\Property(property="image_status", type="boolean", format="binary"),

     *            )
     *        ),
     *      ),
     *       @OA\Response(
     *      response=200,
     *      description="Success response",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="200"),
     *      @OA\Property(property="message", type="string", example=" success."),
     *        )
     *     ),
     *        @OA\Response(
     *      response=400,
     *      description="Bad Request",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="400"),
     *      @OA\Property(property="message", type="string", example="Error in processing request")
     *        )
     *     )
     * )
     *      
     * )
     */

     public function store_company_full_service_details(Request $request)
     {
        
     }


 
          /**
     * @OA\Post(
     *      path="/api/membership_plan",
     *      operationId="store_membership_plan",
     *    
     *      summary="store_membership_plan",
     *      description="store_membership_plan",
     *  @OA\Parameter(
     *      name="token",
     *      in="query",
     *      required=true,
 
     *      @OA\Schema(
     *           type="string"
     *      )
     *      ),
     *      @OA\RequestBody(
     *      required=true,
     *      description="store_membership_plan",
     *		@OA\Parameter(
     *      name="id",
     *      in="path",
     *      required=true,
     *      description= " ",
     *      example="10",
    
     *      @OA\Schema(
     *           type="integer"
     *      )
     *      ),
     *      @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *  
     * 
     *       @OA\Property(property="membership_id", type="integer", format="integer"),
     *       @OA\Property(property="membership_name", type="string", format="string"),
     *   @OA\Property(property="membership_duration", type="string", format="time"),
     *  
     *   @OA\Property(property="membership_recorded_by", type="string", format="date"),
     *   @OA\Property(property="membership_fees", type="number", format="number"),

     *            )
     *        ),
     *      ),
     *       @OA\Response(
     *      response=200,
     *      description="Success response",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="200"),
     *      @OA\Property(property="message", type="string", example=" success."),
     *        )
     *     ),
     *        @OA\Response(
     *      response=400,
     *      description="Bad Request",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="400"),
     *      @OA\Property(property="message", type="string", example="Error in processing request")
     *        )
     *     )
     * )
     *      
     * )
     */

     public function store_membership_plan(Request $request)
     {
        
     }    
   

          /**
     * @OA\Post(
     *      path="/api/quiz_booking",
     *      operationId="store_quiz_booking",
     *    
     *      summary="store_quiz_booking",
     *      description="store_quiz_booking",
     *  @OA\Parameter(
     *      name="token",
     *      in="query",
     *      required=true,
 
     *      @OA\Schema(
     *           type="string"
     *      )
     *      ),
     *      @OA\RequestBody(
     *      required=true,
     *      description="store_quiz_booking",
     *		@OA\Parameter(
     *      name="id",
     *      in="path",
     *      required=true,
     *      description= " ",
     *      example="10",
    
     *      @OA\Schema(
     *           type="integer"
     *      )
     *      ),
     *      @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *
     * 
     *       @OA\Property(property="booking_id", type="integer", format="integer"),
     *       @OA\Property(property="quiz_id", type="integer", format="integer"),
     *   @OA\Property(property="user_id", type="integer", format="integer"),
     *   
    
     *            )
     *        ),
     *      ),
     *       @OA\Response(
     *      response=200,
     *      description="Success response",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="200"),
     *      @OA\Property(property="message", type="string", example=" success."),
     *        )
     *     ),
     *        @OA\Response(
     *      response=400,
     *      description="Bad Request",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="400"),
     *      @OA\Property(property="message", type="string", example="Error in processing request")
     *        )
     *     )
     * )
     *      
     * )
     */

     public function store_quiz_booking(Request $request)
     {
      
     }      
     
     

          /**
     * @OA\Post(
     *      path="/api/activated_membership_plan",
     *      operationId="store_activated_membership_plan",
     *    
     *      summary="store_activated_membership_plan",
     *      description="store_activated_membership_plan",
     *  @OA\Parameter(
     *      name="token",
     *      in="query",
     *      required=true,
 
     *      @OA\Schema(
     *           type="string"
     *      )
     *      ),
     *      @OA\RequestBody(
     *      required=true,
     *      description="store_activated_membership_plan",
     *		@OA\Parameter(
     *      name="id",
     *      in="path",
     *      required=true,
     *      description= " ",
     *      example="10",
    
     *      @OA\Schema(
     *           type="integer"
     *      )
     *      ),
     *      @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     * 
     *       @OA\Property(property="activated_membership_id", type="integer", format="integer"),
     *       @OA\Property(property="company_id",type="integer", format="integer"),
     *   @OA\Property(property="membership_id", type="integer", format="integer"),
     *   @OA\Property(property="membership_start_from", type="string", format="date"),
     *   @OA\Property(property="membership_end_to", type="string", format="data"),
     *   @OA\Property(property="amount_paid", type="number", format="number"),
     *   @OA\Property(property="payment_method_used", type="string", format="string"),
    
     * @OA\Property(property="registered_by", type="string", format="string"),
    
     *            )
     *        ),
     *      ),
     *       @OA\Response(
     *      response=200,
     *      description="Success response",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="200"),
     *      @OA\Property(property="message", type="string", example=" success."),
     *        )
     *     ),
     *        @OA\Response(
     *      response=400,
     *      description="Bad Request",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="400"),
     *      @OA\Property(property="message", type="string", example="Error in processing request")
     *        )
     *     )
     * )
     *      
     * )
     */

     public function store_activated_membership_plan(Request $request)
     {
        
     } 
     
          /**
     * @OA\Post(
     *      path="/api/quiz_response",
     *      operationId="store_quiz_response",
     *    
     *      summary="store_quiz_response",
     *      description="store_quiz_response",
     *  @OA\Parameter(
     *      name="token",
     *      in="query",
     *      required=true,
 
     *      @OA\Schema(
     *           type="string"
     *      )
     *      ),
     *      @OA\RequestBody(
     *      required=true,
     *      description="store_quiz_response",
     *		@OA\Parameter(
     *      name="id",
     *      in="path",
     *      required=true,
     *      description= " ",
     *      example="10",
    
     *      @OA\Schema(
     *           type="integer"
     *      )
     *      ),
     *      @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *  
     * 
     *       @OA\Property(property="response_id", type="integer", format="integer"),
     *       @OA\Property(property="quiz_id",  type="integer", format="integer"),
     *   @OA\Property(property="question_id",  type="integer", format="integer"),
     *   @OA\Property(property="question_option_id",  type="boolean", format="binary"),
     *   @OA\Property(property="earned_marks",  type="integer", format="integer"),
     *   @OA\Property(property="user_id",  type="integer", format="integer"),
     *  @OA\Property(property="user_location", type="string", format="string"),
     *  @OA\Property(property="user_phone", type="number", format="number"),
     *  @OA\Property(property="user_country", type="string", format="string"),
    
     *            )
     *        ),
     *      ),
     *       @OA\Response(
     *      response=200,
     *      description="Success response",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="200"),
     *      @OA\Property(property="message", type="string", example=" success."),
     *        )
     *     ),
     *        @OA\Response(
     *      response=400,
     *      description="Bad Request",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="400"),
     *      @OA\Property(property="message", type="string", example="Error in processing request")
     *        )
     *     )
     * )
     *      
     * )
     */

     public function store_quiz_response(Request $request)
     {
        
     }     



               /**
     * @OA\Post(
     *      path="/api/question_bank_options",
     *      operationId="store_question_bank_options",
     *    
     *      summary="store_question_bank_options",
     *      description="store_question_bank_options",
     *  @OA\Parameter(
     *      name="token",
     *      in="query",
     *      required=true,
 
     *      @OA\Schema(
     *           type="string"
     *      )
     *      ),
     *      @OA\RequestBody(
     *      required=true,
     *      description="store_question_bank_options",
     *		@OA\Parameter(
     *      name="id",
     *      in="path",
     *      required=true,
     *      description= " ",
     *      example="10",
    
     *      @OA\Schema(
     *           type="integer"
     *      )
     *      ),
     *      @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     * 
     * 
     *       @OA\Property(property="question_option_id",  type="integer", format="integer"),
     *       @OA\Property(property="question_id",  type="integer", format="integer"),
     *   @OA\Property(property="option_name", type="string", format="string"),
     *   @OA\Property(property="option_status", type="boolean", format="binary"),
     *  
     *   @OA\Property(property="option_registered_by", type="string", format="string"),
     *   @OA\Property(property="option_marks", type="number", format="number"),

    
     *            )
     *        ),
     *      ),
     *       @OA\Response(
     *      response=200,
     *      description="Success response",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="200"),
     *      @OA\Property(property="message", type="string", example=" success."),
     *        )
     *     ),
     *        @OA\Response(
     *      response=400,
     *      description="Bad Request",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="400"),
     *      @OA\Property(property="message", type="string", example="Error in processing request")
     *        )
     *     )
     * )
     *      
     * )
     */

     public function store_question_bank_options(Request $request)
     {
       
     }   



 





  /**
     * @OA\Post(
     *      path="/api/quiz",
     *      operationId="store_quiz",
     *    
     *      summary="store_quiz",
     *      description="store_quiz",
     *  @OA\Parameter(
     *      name="token",
     *      in="query",
     *      required=true,
 
     *      @OA\Schema(
     *           type="string"
     *      )
     *      ),
     *      @OA\RequestBody(
     *      required=true,
     *      description="store_quiz",
     *		@OA\Parameter(
     *      name="id",
     *      in="path",
     *      required=true,
     *      description= " ",
     *      example="10",
    
     *      @OA\Schema(
     *           type="integer"
     *      )
     *      ),
     *      @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *  
     * 
     *       @OA\Property(property="quiz_id",  type="integer", format="integer"),
     *       @OA\Property(property="quiz_name", type="string", format="string"),
     *   @OA\Property(property="quiz_date_from", type="string", format="date"),
     *   @OA\Property(property="quiz_time_from", type="string", format="time"),
     *   @OA\Property(property="quiz_date_to", type="string", format="date"),
     *   @OA\Property(property="quiz_time_to", type="string", format="date"),
     *   @OA\Property(property="company_id",  type="number", format="number"),
     
     * @OA\Property(property="quiz_registered_by", type="string", format="string"),
     * @OA\Property(property="quiz_total_marks", type="number", format="number"),
     * @OA\Property(property="attempt_user_limit", type="integer", format="integer"),
    

    
     *            )
     *        ),
     *      ),
     *       @OA\Response(
     *      response=200,
     *      description="Success response",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="200"),
     *      @OA\Property(property="message", type="string", example=" success."),
     *        )
     *     ),
     *        @OA\Response(
     *      response=400,
     *      description="Bad Request",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="400"),
     *      @OA\Property(property="message", type="string", example="Error in processing request")
     *        )
     *     )
     * )
     *      
     * )
     */

     public function store_quiz(Request $request)
     {
       
     }  

  /**
     * @OA\Post(
     *      path="/api/question_bank",
     *      operationId="store_question_bank",
     *    
     *      summary="store_question_bank",
     *      description="store_question_bank",
     *  @OA\Parameter(
     *      name="token",
     *      in="query",
     *      required=true,
 
     *      @OA\Schema(
     *           type="string"
     *      )
     *      ),
     *      @OA\RequestBody(
     *      required=true,
     *      description="store_question_bank",
     *		@OA\Parameter(
     *      name="id",
     *      in="path",
     *      required=true,
     *      description= " ",
     *      example="10",
    
     *      @OA\Schema(
     *           type="integer"
     *      )
     *      ),
     *      @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",

     *       @OA\Property(property="question_id", type="integer", format="integer"),
     *       @OA\Property(property="question_name", type="string", format="string"),
     *  
     *   @OA\Property(property="question_type", type="string", format="string"),
     *   @OA\Property(property="question_marks_total", type="number", format="number"),
  
    

    
     *            )
     *        ),
     *      ),
     *       @OA\Response(
     *      response=200,
     *      description="Success response",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="200"),
     *      @OA\Property(property="message", type="string", example=" success."),
     *        )
     *     ),
     *        @OA\Response(
     *      response=400,
     *      description="Bad Request",
     *      @OA\JsonContent(
     *      @OA\Property(property="status", type="number", example="400"),
     *      @OA\Property(property="message", type="string", example="Error in processing request")
     *        )
     *     )
     * )
     *      
     * )
     */
    

     public function store_question_bank(Request $request)
     {
       
     }      




















































//====================VIEWS===========================
     /**
     * @OA\Get(
     *     path="/api/view_companies",
    
     *  
     *     
     *     summary="GET ALL",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="index",
     *    
     *     @OA\Parameter(
     *         name="status",
     *         in="query",
     *         description="Status values that needed to be considered for filter",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *          
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     * 
     * 
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *        
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     *  
     * )
     */
    public function index()
    {
        
    }

          /**
     * @OA\Get(
     *     path="/api/view_users",
  
     *  
     *     
     *     summary="GET ALL",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="view_users",
     *    
     *     @OA\Parameter(
     *         name="status",
     *         in="query",
     *         description="Status values that needed to be considered for filter",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *        
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     * 
     * 
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *        
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     *  
     * )
     */
    
    public function view_users()
    {
      
    }


             /**
     * @OA\Get(
     *     path="/api/view_company_full_services",
   
     *  
     *     
     *     summary="GET ALL",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="view_company_full_services",
     *    
     *     @OA\Parameter(
     *         name="status",
     *         in="query",
     *         description="Status values that needed to be considered for filter",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     * 
     * 
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *        
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     *  
     * )
     */
    
     public function view_company_full_services()
     {
         
     }


                  /**
     * @OA\Get(
     *     path="/api/view_company_full_service_details",

     *     summary="GET ALL",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="view_company_full_service_details",
     *     @OA\Parameter(
     *         name="status",
     *         in="query",
     *         description="Status values that needed to be considered for filter",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(

     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",   
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     ) 
     * )
     */
    
     public function view_company_full_service_details()
     {
         
     }

                       /**
     * @OA\Get(
     *     path="/api/view_image_for_full_service_details",
  
     *     summary="GET ALL",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="view_image_for_full_service_details",
     *     @OA\Parameter(
     *         name="status",
     *         in="query",
     *         description="Status values that needed to be considered for filter",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(

     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",   
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     ) 
     * )
     */
    
     public function view_image_for_full_service_details()
     {
         
     }


/**
     * @OA\Get(
     *     path="/api/view_membership_plan",

     *     summary="GET ALL",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="view_membership_plan",
     *     @OA\Parameter(
     *         name="status",
     *         in="query",
     *         description="Status values that needed to be considered for filter",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(

     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",   
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     ) 
     * )
     */
    
     public function view_membership_plan()
     {
         
     }
/**
     * @OA\Get(
     *     path="/api/view_quiz_booking",

     *     summary="GET ALL",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="view_quiz_booking",
     *     @OA\Parameter(
     *         name="status",
     *         in="query",
     *         description="Status values that needed to be considered for filter",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(

     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",   
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     ) 
     * )
     */
    
     public function view_quiz_booking()
     {
       
     }
/**
     * @OA\Get(
     *     path="/api/view_activated_membership_plan",

     *     summary="GET ALL",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="view_activated_membership_plan",
     *     @OA\Parameter(
     *         name="status",
     *         in="query",
     *         description="Status values that needed to be considered for filter",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(

     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",   
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     ) 
     * )
     */
    
     public function view_activated_membership_plan()
     {
         
     }

/**
     * @OA\Get(
     *     path="/api/view_quiz_response",

     *     summary="GET ALL",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="view_quiz_response",
     *     @OA\Parameter(
     *         name="status",
     *         in="query",
     *         description="Status values that needed to be considered for filter",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
 
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",   
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     ) 
     * )
     */
    
     public function view_quiz_response()
     {
       
     }
 
/**
     * @OA\Get(
     *     path="/api/view_question_bank_options",

     *     summary="GET ALL",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="view_question_bank_options",
     *     @OA\Parameter(
     *         name="status",
     *         in="query",
     *         description="Status values that needed to be considered for filter",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(

     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",   
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     ) 
     * )
     */
    
     public function view_question_bank_options()
     {
        
     }    

/**
     * @OA\Get(
     *     path="/api/view_quizzes",

     *     summary="GET ALL",
     *     description="Multiple status values can be provided with comma separated string",

     *     @OA\Parameter(
     *         name="status",
     *         in="query",
     *         description="Status values that needed to be considered for filter",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",   
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     ) 
     * )
     */
    
     public function view_quizzes()
     {
       
     }  


/**
     * @OA\Get(
     *     path="/api/view_question_bank",

     *     summary="GET ALL",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="view_question_bank",
     *     @OA\Parameter(
     *         name="status",
     *         in="query",
     *         description="Status values that needed to be considered for filter",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(

     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",   
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     ) 
     * )
     */
    
     public function view_question_bank()
     {
        
     }       
}