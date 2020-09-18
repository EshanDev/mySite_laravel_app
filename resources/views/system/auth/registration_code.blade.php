@extends('layouts.auth')
@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/conditions.css') }}">
@endsection


@section('main-content')
<div id="conditions_wrapper">
    <div class="container-fluid">
        <div class="confirmed-container">
            <div class="col-md-11 mx-auto confirmed-content grid-container">
                <div class="grid-item my-auto">
                    <div class="box content">
                        <div class="text-header">
                            <h3 class="text-center">
                                <div>Registration Code Confirmed</div>
                            </h3>
                        </div>
                        <div class="confirmed-form mx-auto">
                            <fieldset class="border rounded custom">
                                <legend class="w-auto" style="font-size: 16px; margin-left: 10px">
                                    กรอกรหัสยืนยันการลงทะเบียน
                                </legend>
                                <form action="{{route('match.code')}}" method="POST" id="formAgreement"
                                    autocomplete="off">
                                    @csrf
                                    <div class="form-group">
                                        <label for="confirmed_code">ที่อยู่อีเมล์</label>
                                        <input type="text" id="confirmed_code" name="confirmed_code"
                                            class="form-control">
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
    jQuery('#formAgreement').validate({
        rules: {
            confirmed_code: {
                required: true,
                remote: {
                    url: "{{ route('condition.verify.code') }}",
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
confirmed_code: {
required: 'โปรดระบุรหัสนักศึกษา',
remote: 'รหัสยืนยันสิทธิ์ไม่ถูกต้อง'
},

},
success: function(label){
var name = label.attr('for');
label.text("รหัสยืนยันตนถูต้อง");
},

});


// $(function(){
// $('input').focusin(function(){
// input = $(this);
// input.data('place-holder-text', input.attr('placeholder'))
// input.attr('placeholder', '');
// });

// $('input').focusout(function(){
// input = $(this);
// input.attr('placeholder', input.data('place-holder-text'));
// });
// })
</script>
@endsection