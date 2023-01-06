<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"
      xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <!--[if gte mso 9]>
    <xml>
        <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->
    <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="format-detection" content="date=no"/>
    <meta name="format-detection" content="address=no"/>
    <meta name="format-detection" content="telephone=no"/>
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Roboto:400,400i,700,700i" rel="stylesheet"/>
    <title>Email Template</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <style type="text/css" media="screen">
        body {
            font-family: 'Roboto', Arial, sans-serif !important
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            min-height: 100vh;
            width: 100%;
            background: #c8e8e9;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            width: 85%;
            background: #fff;
            border-radius: 6px;
            padding: 20px 60px 30px 40px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);

        }

        .container .content {
            align-items: center;
            justify-content: space-between;
        }

        .container .content .left-side {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            margin-top: 15px;
            position: relative;
        }

        .content .left-side .details {
            margin: 14px;
            text-align: center;
        }

        .content .left-side .details i {
            font-size: 30px;
            color: #3e2093;
            margin-bottom: 10px;
        }

        .content .left-side .details .topic {
            font-size: 18px;
            font-weight: 500;
        }

        .content .left-side .details .text-one,
        .content .left-side .details .text-two {
            font-size: 14px;
            color: #afafb6;
        }

        .logo__site {
            background: linear-gradient(159.48deg, #B57E10 23.83%, #F9DF7B 39.55%, #FFF3A6 58.34%, #F9DF7B 76.58%, #B57E10 93.86%);
            padding: 5px;
            border-radius: 4px;
            margin-top: 15px;
            display: inline-block;
        }

        .logo__site .logo__site--main {
            background-color: #2B2C5B;
            padding: 10px;
            transition: .4s ease-in;
            -webkit-transition: .4s ease-in;
            -moz-transition: .4s ease-in;
            -o-transition: .4s ease-in;
        }

        .logo__site .logo__site--main {
            background-color: #2B2C5B;
            padding: 10px;
            transition: .4s ease-in;
            -webkit-transition: .4s ease-in;
            -moz-transition: .4s ease-in;
            -o-transition: .4s ease-in;
        }

        @media (max-width: 950px) {
            .container {
                width: 90%;
                padding: 30px 40px 40px 35px;
            }

            .container .content .right-side {
                width: 75%;
                margin-left: 55px;
            }
        }

        @media (max-width: 820px) {
            .container {
                margin: 40px 0;
                height: 100%;
            }

            .container .content {
                flex-direction: column-reverse;
            }

            .container .content .left-side {
                width: 100%;
                flex-direction: row;
                margin-top: 40px;
                justify-content: center;
                flex-wrap: wrap;
            }

            .container .content .left-side::before {
                display: none;
            }

            .container .content .right-side {
                width: 100%;
                margin-left: 0;
            }
        }
    </style>
</head>
<body class="body">
<div class="container">
    <div class="content">
        <div class="logo__site">
            <div class="logo__site--main">
                <a href="{{route('home')}}" class="custom-logo-link" rel="home">
                    <img src="https://thenine.haiphatland.com.vn/userfiles/images/logo/logo.png" class="custom-logo"
                         alt="Logo" width="100">
                </a>
            </div>
        </div>
        <div class="left-side">
            @if($mail['name'])
                <div class="address details">
                    <div class="topic">Họ và tên</div>
                    <div class="text-one">{{$mail['name']}}</div>
                </div>
            @endif
            @if($mail['phone'])
                <div class="phone details">
                    <div class="topic">Số điện thoại</div>
                    <div class="text-one">{{$mail['phone']}}</div>
                </div>
            @endif
            @if($mail['email'])
                <div class="email details">
                    <div class="topic">Email</div>
                    <div class="text-one">{{$mail['email']}}</div>
                </div>
            @endif
            @if($mail['time'])
                <div class="email details">
                    <div class="topic">Thời gian gửi</div>
                    <div class="text-one">{{$mail['time']}}</div>
                </div>
            @endif
            @if(isset($mail['address']))
            <div class="email details">
                <div class="topic">Địa chỉ</div>
                <div class="text-one">{{$mail['address']}}</div>
            </div>
            @endif
            @if(isset($mail['can-ho']))
                <div class="email details">
                    <div class="topic">Căn hộ quan tâm</div>
                    <div class="text-one">{{$mail['can-ho']}}</div>

                </div>
            @endif
        </div>
        <div class="left-side">
            @if(isset($mail['note']))
                <div class="address details">
                    <div class="topic">Lời nhắn</div>
                    <div class="text-one">{{$mail['note']}}</div>
                </div>
            @endif
        </div>
    </div>
</div>

</body>
</html>
