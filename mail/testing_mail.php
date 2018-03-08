<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>testing mail</title>
</head>
<body>
	<h2>leave us a message here!</h2>
	<form action="mail-process.php" method="post">
		name : <input type="text" placeholder="name" name="name"><br>
		email : <input type="email" placeholder="email" name="email"><br>
		message : <textarea name="msg" cols="30" rows="3"></textarea>
		<button type="submit" name="submit-btn">send</button>
	</form>
</body>
</html>