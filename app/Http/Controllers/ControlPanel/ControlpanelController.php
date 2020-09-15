<?php

namespace App\Http\Controllers\ControlPanel;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ControlpanelController extends Controller
{
    public function index()
    {
        return view('system.index');
    }

    public function SendCode(Request $request){
        $data = array(
            'email' => $request->email,
            'student_code' => $request->student_code,
        );

        return response()->json($data);
    }
}
