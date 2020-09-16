<?php

namespace App\Http\Controllers\ControlPanel;

use App\Models\User;
use App\Models\Conditions;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Laravel\Ui\Presets\React;

class ControlpanelController extends Controller
{
    public function index()
    {
        return view('system.index');
    }

    public function SendCode(Request $request){

        $gen = Str::random(32);
        $code = Str::substr($gen, 1, 13);



        $data = array(
            'email' => $request->email,
            'student_code' => $request->student_code,
            'code' => $code
        );

        if(!empty($request->except('_token'))){

            $conditions = new Conditions();
            $conditions->email = $data['email'];
            $conditions->student_code = $data['student_code'];
            $conditions->code = $code;
            $conditions->save();
            return response()->json($data);

        } else {
            dd($request->_token);
        }

    }


    // verify email and student_code

    public function verify_email(Request $request){
        // verity email.
        if($request->input('email') !== ''){

            if($request->input('email')){
                $rule = array('email' => 'required|email|unique:conditions');
                $validation = Validator::make($request->all(), $rule);

                if(!$validation->fails()){
                    die('true');
                }
            }

        } die('false');
    }
    public function verify_stdcode(Request $request){
        // verity student_code.
        if($request->input('student_code') !== ''){

            if($request->input('student_code')){
                $rule = array('student_code' => 'required|digits:10|unique:conditions');
                $validation = Validator::make($request->all(), $rule);

                if(!$validation->fails()){
                    die('true');
                }
            }

        } die('false');
    }



}
