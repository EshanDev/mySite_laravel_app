<?php

namespace App\Http\Controllers\ControlPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControlpanelController extends Controller
{
    public function index()
    {
        return view('system.index');
    }
}
