 <html>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> ">
Name: <input type="text" name="name"><br>
E-mail: <input type="email" name="email"><br>
<input type="submit">
</form>
First Name: <?php echo $name; ?>
</body>
</html> 
