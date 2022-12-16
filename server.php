<a href="contact me.html">Back</a>
<?php
 $lastname = $_POST["lname"];
 $name = $_POST["fname"];
 $email= $_POST["email"];
 $description = $_POST["description"];
 
 $number = count(glob("./messages/*")) + 1;
 $file = fopen("./messages/$number.txt","w");
 //echo($number);
 echo("<br>");
 echo("name : $name<br>lastname : $lastname<br>email : $email<br>description : $description");
    fwrite($file,"name : $name\nlastname : $lastname\nemail : $email\ndescription : $description");
 fclose($file);
 ?>