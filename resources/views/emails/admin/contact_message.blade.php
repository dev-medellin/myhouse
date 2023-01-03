<!DOCTYPE html>
<html lang="en">

<head>
  <title>New Message from {{$details['client']}} - Order No. 022107210001</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="Content-Type" content="text/html charset=UTF-8" />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet"> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
          <img src="{{ url('assets/images/logo/logo2.png') }}" alt="Main Logo">
        </a>
      </td>
    </tr>
  </table>
  <table role="presentation" cellpadding="0" cellspacing="0" style="max-width: 720px; width: 100%; margin: 0 auto; border-top: 1px solid #d42941; padding: 40px 40px 15px;">
    <tr>
      <td>
        <h2 style="font-size: 24px; font-weight: bold; color: #464646; margin: 0 0 25px; padding: 0; color: #000000; text-align: center;">You have a new message</h2>
      </td>
    </tr>
  </table>
  <table role="presentation" cellpadding="0" cellspacing="0" style="max-width: 720px; width: 100%; margin: 0 auto 25px; background: #f5f5f5; padding: 30px 40px;">
    <tr>
      <td style="vertical-align: top; padding-left: 20px; text-align: center;">
      <?php
        $string = "Arthur Medellin";

        function initials($str) {
            $ret = '';
            foreach (explode(' ', $str) as $word)
                $ret .= strtoupper($word[0]);
            return $ret;
        }
      ?>
        <span style="display: block; background: #cccccc; color: #ffffff; font-size: 39px; font-weight: bold; line-height: 1.5em; padding: 10px 0px; border-radius: 50%; display: block; max-width: 80px; max-height: 80px; text-align: center; margin: 0 auto;">{{initials($string)}}</span>
        <h3 style="color: #000000; font-size: 16px; margin: 15px 0 0; padding: 0; line-height: 1.5em;">{{$details['client']}}</h3>
        <p style="color: #5a5a5a; font-size: 14px; margin: 0; padding: 0; line-height: 1.5em;">New Contact Message</p>
        <p style="color: #5a5a5a; font-size: 14px; margin: 20px 0 30px; padding: 0; line-height: 1.5em;">{{$details['message']}}</p>
        <a href="mailto:{{$details['sender']}}" style="border: 1px solid #d42941; background: #d42941; display: inline-block; color: #ffffff; padding: 15px; text-align: center; border-radius: 2px; font-size: 17px; font-weight: 500;">REPLY CUSTOMER</a>
      </td>
    </tr>
  </table>
  <table role="presentation" cellpadding="0" cellspacing="0" style="max-width: 720px; width: 100%; margin: 15px auto 20px; text-align: center; border-top: 1px solid #f2f2f2;">
    <tr>
      <td>
        <p style="color: #b3b3b3; font-size: 14px; font-weight: 300;">Copyright © 2006- <?php echo date('Y');?> MyHome. All Rights Reserved.</p>
        <p style="color: #b3b3b3; font-size: 14px; font-weight: 300;"><a href="localhost/">Unsubscribe Here</a></p>
      </td>
    </tr>
  </table>
</body>
</html>