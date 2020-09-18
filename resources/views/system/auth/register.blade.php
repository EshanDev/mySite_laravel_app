@extends('layouts.auth')
@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/conditions.css') }}">
@endsection

@section('main-content')
<div id="register_wrapper">
    <div class="container-fluid">
        <div class="register-container">
            {{-- Register Container --}}
            <div class="grid-container">
                <div class="register-header">
                    <div class="text-header">
                        {{__('ระบบลงทะเบียน')}}
                    </div>
                </div>
                <div class="register-content">

                    <form action="#" class="register-form" id="register_form">
                        <fieldset class="border rounded custom">
                            <legend class="w-auto">ส่วนที่ 1 Registration code.</legend>
                            <div class="form">
                                <div class="form-group">
                                    <label for="registration_code">รหัสยืนยันตน</label>
                                    <input type="text" class="form-control" name="registration_code"
                                        id="registration_code">
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
            {{-- End Register Container --}}
        </div>
    </div>
</div>
@endsection