<!DOCTYPE html>
<html lang="en">
<head>
 <title>Festifavs</title>
 <style>
 body {
 font-family: Arial, Helvetica, sans-serif;
 }
 </style>
</head>
<body class="contact">
<img src="{{ asset('assets/img/logo.jpg')}}">
<h1>We received your contact request!</h1>
<div><b>Your name: </b>{{$name}}</div>
<div><b>Your Question: </b>{{$question}}</div>
<div><br><br>We will reply as soon as possible,<br><b> the Festifavs Team.</b>
<a style="color:#d8702a" href="http://localhost:8000/home">Festifavs</a>
</div>
</body>
</html>