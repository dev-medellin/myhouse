<!DOCTYPE html>
<html lang="en">

<head>
    <title>[MyHome]Notice of issuing a temporary PIN</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html charset=UTF-8" />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet"> 
    <style>
        html {
        line-height: 1.15; /* 1 */
        -webkit-text-size-adjust: 100%; /* 2 */
        }

        body {
        margin: 0;
        }

        a {
        background-color: transparent;
        text-decoration: none;
        color: inherit;
        }

        b,
        strong {
        font-weight: bolder;
        }

        img {
        border-style: none;
        }
    </style>
</head>

<body style="font-family: 'Noto Sans', sans-serif; box-sizing: border-box;">
    <table role="presentation" cellpadding="0" cellspacing="0" style="max-width: 720px; width: 100%; margin: 0 auto; text-align: center;">
        <tr>
            <td>
                <a href="/static" style="padding: 15px 0; display: inline-block; margin: 0;">
                    <img src="{{ asset('assets/images/logo/logo2.png') }}" alt="Main Logo">
                </a>
            </td>
        </tr>
    </table>
    <table role="presentation" cellpadding="0" cellspacing="0" style="max-width: 720px; width: 100%; margin: 0 auto; border-top: 1px solid #d42941; padding: 30px 40px; text-align: center;">
        <tr>
            <td>
                <h2 style="font-size: 24px; font-weight: bold; color: #464646; margin: 0 0 25px; padding: 0;">Verification for Request Change Password!</h2>
                <p style="font-size: 15px; font-weight: 500; color: #5a5a5a; margin: 15px 0; padding: 0; line-height: 1.5em;">
                    Please find the verification code to <br>
                    change password.
                </p>
                <span style="display: inline-block; color: #464646; font-size: 29px; font-weight: 500; background: #f5f5f5; padding: 18px 0; margin: 20px 0 0; min-width: 324px;">{{$details['code']}}</span>
            </td>
        </tr>
    </table>
    <table role="presentation" cellpadding="0" cellspacing="0" style="max-width: 720px; width: 100%; margin: 15px auto 20px; text-align: center; border-top: 1px solid #dddddd;">
        <tr>
            <td>
                <p style="color: #b3b3b3; font-size: 14px; font-weight: 300;">Copyright © 2006-2020 MyHome. All Rights Reserved.</p>
                <p style="color: #b3b3b3; font-size: 14px; font-weight: 300;"><a href="localhost/">Unsubscribe Here</a></p>
                <a href="javascript:;" style="display: inline-block; vertical-align: middle; margin: 0 7px;"><img src="https://static.singaprinting.com/v2/images/email/icon_fb.png" alt="Facebook"></a>
                <a href="javascript:;" style="display: inline-block; vertical-align: middle; margin: 0 7px;"><img src="https://static.singaprinting.com/v2/images/email/icon_twitter.png" alt="Twitter"></a>
                <a href="javascript:;" style="display: inline-block; vertical-align: middle; margin: 0 7px;"><img src="https://static.singaprinting.com/v2/images/email/icon_insta.png" alt="Instagram"></a>
                <a href="javascript:;" style="display: inline-block; vertical-align: middle; margin: 0 7px;"><img src="https://static.singaprinting.com/v2/images/email/icon_pinterest.png" alt="Pinterest"></a>
                <a href="javascript:;" style="display: inline-block; vertical-align: middle; margin: 0 7px;"><img src="https://static.singaprinting.com/v2/images/email/icon_youtube.png" alt="Youtube"></a>
            </td>
        </tr>
    </table>
</body>
</html>