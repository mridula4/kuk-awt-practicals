<!DOCTYPE html>
<html lang=eng>
<head><style>
html, body{
width: 100%;
height: 100%;
margin: 0%;
font-family:"helvetica", "verdana", "calibri", "san serif"; overflow: hidden;
padding: 0%;
border: 0%;
}
#drop{
margin: 0 auto; height: 320px; width: 350px; padding: 10px;
border:2px solid gray; border-radius: 0.5em;
}
input{
border:2px solid silver; border-radius: 0.6em;
}
</style>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user- scalable=no, target-densitydpi=device-dpi"/>
<title>HTML Form</title>
</head>
<body>
<?php if(isset($_POST["submit"])){ echo $_POST["gender"]."<br>";
}
?>
<h2 align="center">Dropdown/Checkbox</h2>
<div id="drop">
<form action="dropdown.php" method ="post"> Name:<br>
<input type="text" name="name" id="name"><br> DOB:<br>
<input type="date" name="dob" id="dob"><br> Email-id:<br>
<input type="email" name="email" id="email"><br> SEX:
<select name=gender>

<option value= Female> Female </option>

<option value= Male> Male </option>
</select><br><br> Skills:
<input type="checkbox" name="skill1" value="C" checked> C<br>
<input type="checkbox" name="skill2" value="C++"> C++<br>
<input type="checkbox" name="skill3" value="Java" > JAVA<br>
<input type="checkbox" name="skill4" value="HTML" checked> HTML<br>
<input type="checkbox" name="skill5" value="CSS"> CSS<br>
<input type="checkbox" name="skill6" value="PHP/JAVASCRIPT" >PHP/JAVASCRIPT<br>
<input type="submit" value=submit name=submit>
</form>
</div></body>
</html>
