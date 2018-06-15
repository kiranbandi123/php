 <html>
	 <style>
	 .error{
		 color:red;
	 }
	 
	 
	 </style>
	 <?php
	 $name="";
	 $nameErr="";
	 if($_SERVER["REQUEST_METHOD"]=="POST")
	 {
	 if(empty($_POST["name"])){
		 $nameErr="Name Required";
	 }
	 else
	 {
		 $name=test_input($_POST["name"]);
	 }
 }
 
 function test_input($data)
 {
	 $data=htmlspecialchars($data);
	 return $data;
	 
 }
 ?>
 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> ">
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br> <input type="submit">
 </form>
 <?php
 echo $name;
 ?>
	
	 


 </html>
