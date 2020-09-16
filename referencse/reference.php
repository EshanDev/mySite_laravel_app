<?php

// ตรวจสอบว่ามี user_id ถูกส่งมาหรือไม่ in controller
if($request->has('user_id')){
    dd('user_id is exists.'); // ถ้าส่งมา
} else {
    dd('user_id in not exists.'); // ถ้าไม่ส่งมา
}
