

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Page</title>
  
</head>
<body>

<form  method="post" >
@csrf
  <table >
  <tr>
      <td> Name </td>
      <td> <input type = "text" name = "name"> </td> 
  </tr>

  <tr>

  <td> Password </td>
  <td> <input type = "password" name= "password"> </td>

  </tr>
   <tr>
		   <td> <input type="submit" value="submit"></td>
	 </tr>
</table>



</form>

</body>
</html>






