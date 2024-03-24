<?php

namespace App\Http\Controllers\Api\Student;
use App\Http\Controllers\Controller;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use function auth;
use App\Http\Requests\PasswordUpdateRequest;
use App\Models\Student;
use Hash;

class AuthController extends Controller
{

    use ApiResponse;

    // login step 1
    public function login(Request $request)
    {
       
         $request->validate([
        'email' => 'required|email|exists:students,email',
           'password' => 'required'
        ], [
        'email.required' => 'A email is required',
        'password.required' => 'A password is required',
    ]);
        
         if(auth()->guard('students-login')->attempt(['email' =>$request->email ,'password' =>$request->password,'status'=>'1'])){ 
             $instructor = auth()->guard('students-login')->user();
             $token = $instructor->createToken('apiToken')->plainTextToken;
             $instructor->api_token = $token;
             $instructor->save();
            return $this->okApiResponse($instructor,__("instructor information"));
                } 
                else{ 
                    $user = Student::where('email',$request->email)->first();
                    if($user->status == 0 )
                    return $this->errorApiResponse([],401,__('auth_login_account_bloacked')); 
                    else
                   return $this->errorApiResponse([],401,__('auth_login_failed')); 
                } 

    }


   public function updatePassword(PasswordUpdateRequest $request) {
        
        $user = auth()->guard('students')->user();
        $user->password = Bcrypt($request->password);
        $user->save();
        return $this->createdApiResponse($user,__("Password Updated Successfully"));
   
}

    public function logout()
    {
        // Revoke a specific user token
        auth()->guard('students')->user()->tokens()->delete();
        return $this->okApiResponse([],__("Logged out successfully"));
    }
    
  

}
