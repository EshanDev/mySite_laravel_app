<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Send Registration Code</title>


    <style>
        .text-header {
            font-size: 1.5rem;
        }

        .text-center {
            text-align: center;
        }

        .content-box {
            width: 100%;
            min-width: 100px;
            max-width: 580px;
            margin: 0 auto;
            border-radius: 5px;
            border: 1px solid rgba(0, 0, 0, 0.5);
            min-height: 250px;
            padding: 5px;
        }

        .nav {

            margin: 0;
            padding: 25px;
        }

        .nav .nav-item {
            margin: 0;
            list-style-type: none;
            display: block;
            border-bottom: 1px solid #bab7b7;
            padding: 10px 15px;
        }

        .registration_code p {
            padding: 0;
            margin-top: 0;
            margin-bottom: 15px;
            line-height: 1;
            font-size: 20px;
            font-weight: lighter;
        }

        .registration_code div {
            margin: 0 auto;
            padding: 10px 15px;
            text-align: center;
            color: #000000;
            font-size: 25px;
            font-weight: lighter;
        }

        .goto-register {
            width: 100%;
            margin: 0 auto;
            padding-top: 25px;
            padding-bottom: 25px;

        }

        .btn {
            text-decoration: none;
            width: 100%;
            min-height: 50px;
            min-width: 120px;
            background: transparent;
            border: 1px solid #bab7b7;
            color: #000000;
            text-align: center;
            padding: 15px;
        }

        .btn:hover {
            background: #bab7b7;
            color: #000000;
        }
    </style>
</head>

<body>
    <div class="box">
        <div class="text-header">
            <p class="text-center">ยินดีต้อนรับเข้าสู่ระบบลงทะเบียน</p>
        </div>
        <div class="content-box">
            <div class="text-content">
                <ul class="nav">
                    <li class="nav-item">
                        ที่อยู่อีเมล์ของคุณ : {{ $data['email'] }}
                    </li>
                    <li class="nav-item">
                        รหัสประจำตัวนักศึกษาของคุณ : {{ $data['student_code'] }}
                    </li>
                </ul>
            </div>

            <div class="registration_code">
                <p class="text-center">รหัสยืนยันของคุณ</p>
                <div>{{ $data['code'] }}</div>
            </div>

            <div class="goto-register text-center">
                <a href="{{ $url }}" class="btn">เข้าสู่ระบบลงทะเบียน</a>
            </div>


        </div>
    </div>
</body>

</html>