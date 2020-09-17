<?php

namespace App\Http\Controllers\ControlPanel;

use App\Models\User;
use App\Models\Conditions;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;
use App\Mail\ActivationRegister;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class ControlpanelController extends Controller
{
    public function index()
    {
        $conditions = DB::table('conditions')->count();
        if ($conditions > 30) {
            return redirect()->route('auth.login');
        } else {
            return view('system.index')->with('message', 'ปิดการลงทะเบียนเนื่องจากครบโควต้าแล้ว');
        }
    }

    public function SendCode(Request $request)
    {
        $student_email = $request->input('email');
        $student_code = $request->input('student_code');
        $code = Str::uuid($student_code);
        $result = $code;


        $data = array(
            'email' => $student_email,
            'student_code' => $student_code,
            'code' => $result
        );


        if (!empty($request->except('_token'))) {

            // Create new session.
            $store = new Conditions();

            // Create variable name.
            $store->email = $data['email'];
            $store->student_code = $data['student_code'];
            $store->code = $result;

            // Store into database conditions table.
            //$conditions->save();

            // Send eMail to user by Email Address.
            //Mail::to($data['email'])->send(new ActivationRegister($data));

            // Redirect to Register Authentication page.
            return redirect()->route('auth.register')->with('success', 'รหัสยืนยันถูกส่งไปยังอีเมล์ของท่านเรียบร้อยแล้ว');
        } else {
            return false;
            //dd($request->_token);
        }
    }


    // verify email and student_code

    public function verify_email(Request $request)
    {
        // verity email.
        if ($request->input('email') !== '') {

            if ($request->input('email')) {
                $rule = array('email' => 'required|email|unique:conditions');
                $validation = Validator::make($request->all(), $rule);

                if (!$validation->fails()) {
                    die('true');
                }
            }
        }
        die('false');
    }
    public function verify_stdcode(Request $request)
    {
        // verity student_code.
        if ($request->input('student_code') !== '') {

            if ($request->input('student_code')) {
                $rule = array('student_code' => 'required|digits:10|unique:conditions');
                $validation = Validator::make($request->all(), $rule);

                if (!$validation->fails()) {
                    die('true');
                }
            }
        }
        die('false');
    }
}
