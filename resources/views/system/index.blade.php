@extends('layouts.auth')
@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/conditions.css') }}">
@endsection


@section('main-content')
<div id="conditions_wrapper">
    <div class="container-fluid">
        <div class="conditions-container">
            <div class="col-md-11 mx-auto condition-content grid-container">
                <div class="grid-item my-auto">
                    <div class="box content">
                        <div class="text-header">
                            <h3 class="text-center">
                                <div>ข้อตกลง เงื่อนไข</div>
                                <div>และผู้มีสิทธิ์ลงทะเบียน</div>
                            </h3>
                        </div>
                        <div class="text-detials">
                            <p class="text-indent-30">
                                เว็บไซต์นี้ พัฒนาขึ้นเพื่อใช้เป็นเครื่องมือในการศึกษาวิจัย
                                และเพื่อให้การใช้งานเว็บไซต์เป็นไปตามวัตถุประสงค์ สอดคล้องต่อกระบวนการศึกษาวิจัย ดังนั้น
                                ผู้วิจัยจึงได้กำหนดเงื่อนไขการใช้งาน ข้อตกลงและผู้มีสิทธิ์ลงทะเบียน ดังนี้
                            </p>
                        </div>
                        <div class="text-conditions">
                            <div class="condition-requirement">
                                <h5>คุณสมบัติ / สิทธิ์และเงื่อนไข</h5>
                            </div>
                            <div class="condition-list">
                                <ul class="nav">
                                    <li class="list">
                                        ผู้มีสิทธิ์ลงทะเบียนต้องเป็นนักศึกษามหาวิทยาลัยรามคำแหง ที่สอบผ่านกระบวนวิชา
                                        ECT1301 คอมพิวเตอร์เพื่อการเรียนการสอน
                                        มีคอมพิวเตอร์หรืออุปกรณ์ที่สามารถเข้าใช้งานเว็บฝึกอบรมได้
                                    </li>
                                    <li class="list">
                                        เว็บฝึกอบรมจำกัดโควต้าการลงทะเบียนเพียง 30 สิทธิ์
                                        โดยจะให้สิทธิ์นักศึกษาที่ลงทะเบียน และยืนยันการลงทะเบียนเรียบร้อย สำหรับ 30
                                        สิทธิ์แรก และระบบจะปิดการลงทะเบียนทันทีเมื่อมีนักศึกษายืนยันสิทธิ์ครบ 30
                                        สิทธิ์เป็นที่เรียบร้อย
                                    </li>
                                    <li class="list">
                                        นักศึกษาที่ได้รับสิทธิ์ใช้งานเว็บฝึกอบรมจะต้องให้ความร่วมมือในการจัดการศึกษาวิจัย
                                        โดยดำเนินกิจกรรมตามขั้นตอนกระบวนการอบรมที่เว็บฝึกอบรมจัดเตรียมไว้ให้
                                        จนครบระยะเวลาที่กำหนด หรือ จนจบคอร์สฝึกอบรม
                                    </li>
                                    <li class="list">
                                        นักศึกษาที่ได้รับสิทธิ์ใช้งานเว็บฝึกอบรมจะได้รับสิทธิ์การใช้งาน
                                        เข้าใช้งานคอร์สฝึกอบรมที่จัดให้ทั้งหมด และเมื่อครบกำหนด 18 ชั่วโมง
                                        หรือครบระยะเวลาที่่ใช้การศึกษาวิจัย
                                        นักศึกษาจะถูกปรับสิทธิ์เป็นผู้ใช้งานทั่วไปและยังสามารถใช้งานเว็บฝึกอบรมได้จนกว่ามีการปรับปรุงระบบใหม่
                                    </li>
                                </ul>
                            </div>
                            <div class="agreement">
                                <p class="text-agree">
                                    เมื่อนักศึกษายอมรับเงื่อนไขและข้อตกลงดังกล่าวแล้ว ให้นักศึกษากรอกที่อยู่อีเมล์
                                    และรหัสประจำตัวนักศึกษาให้ถูกต้องเพื่อระบบจะดำเนินการจัดส่งรหัสยืนยันสิทธิ์ไปยังที่อยู่
                                    อีเมล์ที่นักศึกษาระบุไว้ภายหลัง
                                </p>
                            </div>

                            <div class="condition-form mx-auto">
                                <fieldset class="border rounded custom">
                                    <legend class="w-auto" style="font-size: 16px; margin-left: 10px">กรอกข้อมูลนักศึกษา
                                    </legend>
                                    <form action="{{ route('auth.sendcode') }}" method="POST" id="formAgreement"
                                        autocomplete="off">
                                        @csrf
                                        <div class="form-group">
                                            <label for="email">ที่อยู่อีเมล์</label>
                                            <input type="email" id="email" name="email" class="form-control"
                                                placeholder="กรุณากรอกข้อมูลที่ถูกต้อง">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">รหัสประจำตัวนักศึกษา</label>
                                            <input type="text" id="student_code" name="student_code"
                                                class="form-control" placeholder="กรุณากรอกข้อมูลที่ถูกต้อง">
                                            <span id="validateSTC"></span>
                                        </div>
                                        <div class="form-group text-center">
                                            <button type="submit"
                                                class="btn btn-primary btn-lg">ส่งรหัสยืนยันสิทธิ์</button>
                                        </div>
                                    </form>
                                </fieldset>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('script')
<script>
    $(document).ready(function(){
        // Student Code verification
        jQuery.validator.addMethod('studentcode', function(student_code, element){
            student_code = student_code.replace(/\s+/g, "");
            return this.optional(element) || student_code.length > 9 && student_code.match(/[1-9]{1}[0-9]{9}/); //59 124 2000 9
        }, "รหัสนักศึกษาไม่ถูกต้อง");

    });
    var base_url = "{{ URL::to('/auth') }}";
    jQuery('#formAgreement').validate({
        rules: {
            student_code: {
                required: true,
                number: true,
                studentcode: true,
                maxlength: 10,

                remote: {
                    url: "{{ route('condition.verify.stdcode') }}",
                    type: "post",

                    data: {
                        _token: function(){
                            return "{{ csrf_token() }}"
                        }
                    }
                }

            },
            email: {
                required: true,
                email: true,

                remote: {
                    url: "{{ route('condition.verify.email') }}",
                    type: "post",

                    data: {
                        _token: function(){
                            return "{{ csrf_token() }}"
                        }
                    }
                }
            },


        },
        messages: {
            student_code: {
                required: 'โปรดระบุรหัสนักศึกษา',
                number: 'รูปแบบรหัสนักศึกษาไม่ถูกต้อง',
                maxlength: 'รูปแบบรหัสนักศึกษาไม่ถูกต้อง',
                remote: 'รหัสนักศึกษานี้ได้ลงทะเบียนไว้แล้ว'
            },
            email: {
                required: 'โปรดระบุที่อยู่อีเมล์',
                email: 'รูปแบบอีเมล์ไม่ถูกต้อง',
                remote: "อีเมล์นี้ได้ลงทะเบียนไว้แล้ว"
            }
        },
        // success: function(label){
        //     var name = label.attr('for');
        //     label.text(name+ 'is OK');
        // },

    });


    $(function(){
        $('input').focusin(function(){
                input = $(this);
                input.data('place-holder-text', input.attr('placeholder'))
                input.attr('placeholder', '');
            });

        $('input').focusout(function(){
                input = $(this);
                input.attr('placeholder', input.data('place-holder-text'));
            });
    })
</script>
@endsection
