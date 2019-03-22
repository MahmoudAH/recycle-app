<!DOCTYPE html>
<html>
<head>
    <title>Welcome Email</title>
</head>
 
<body>
<h2>Welcome  {{$user->name}} </h2>
</br>
<p style="font-size: 15px;">Thank you for Registeration</p>
<p style="margin-bottom:30px; ">Your registered email is {{$user->email}} , Please click on the below link to verify your email account .</p>
<br>

<a href="{{url('user/verify', $user->verifyToken)}}" style=" text-decoration: none;padding: 10px;background-color:#81C784 ;margin-bottom: 100px;margin-left: 300px;font-size: 20px;color: #FAFAFA">Verify Email</a>
<br><br>


 Thanks,<br>
{{ config('app.name') }} 
</body>
 
</html>
