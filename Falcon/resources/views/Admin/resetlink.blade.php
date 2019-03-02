<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Reset Password</h1>
	<a href="{{ route('password.reset', [$data->token]) }}">Click here to reset your Password</a>
</body>
</html>