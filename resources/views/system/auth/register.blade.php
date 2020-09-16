@extends('layouts.auth')
@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/conditions.css') }}">
@endsection

@section('main-content')
    <div id="register_wrapper">
        <div class="container-fluid">
            <div class="register-container">
                <div class="col-md-8 mx-auto register-container grid-container">
                    <div class="grid-item my-auto">
                        @if (Session::has('success'))
                            {{ Session::get('success') }}
                            @else
                            กรุณากรอกรหัสยืนยันสิทธิ์
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
