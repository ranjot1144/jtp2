<html>
<head></head>
<body style="padding:1em;">
<img src="{{public_path()}}/assets/images/logo.png" height="80" width="200" alt="logo">
<hr>
<h4>We've had a message...</h4>
<h2>Subject - {{$subject}}</h2>
<h3>Name:</h3> {{$name}}  
<h3>Supplied contact email :</h3> {{$email}} 
<h3>Company:</h3> {{$company}}
<h3>Country:</h3> {{$country}}
<h3>Message: </h3> {!! nl2br($details) !!}


</body>
</html>