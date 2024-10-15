<!DOCTYPE html>
<html>
<body>
<p>
<?= $_SERVER['HTTP_USER_AGENT']  ?>

<form action="/hellowold/badoom.php" method="post">
	<label for="Prayers">Have your prayed today:</label><br>
	<input type="text" id="Prayers" name="Prayers" value="cheese"><br>

	
	<input type="submit" value="confess">


</form>

GET:<?=var_dump($_GET) ?> </p>
POST: <?= var_dump($_POST) ?> </p>

</p>
</body>
</html>

