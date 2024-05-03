<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterStudentRequest;
use Illuminate\Http\Request;

class StudentRegisterController extends Controller
{
    
    public function registerStudent(RegisterStudentRequest $request){

        return $request->all();
    }
}
