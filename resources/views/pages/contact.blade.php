<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name', 'PHPTestApp')}}</title>

</head>
<body>

	<h2>Contact</h2>
	<p><span class="error">* required field</span></p>
	<form method="post" action="#">  
	  Name: <input type="text" name="name" value="">
	  <span class="error">* </span>
	  <br><br>
	  E-mail: <input type="text" name="email" value="">
	  <span class="error">* </span>
	  <br><br>  
	  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
	  <br><br>
	  
	  <input type="submit" name="submit" value="Submit">  
	</form>
</body>
</html>