<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $fnamerror=$lnameerror=$ageerror=$designationerror=$planguagerror=$emailerror=$passworderror="";
    $firstname=$lastname=$age=$designation=$prefferedlanguage=$email=$password="";
    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        if (empty($_POST["name"])) {
            $nameErr = "First ame is required";
        } else {
            $name = test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                $nameErr = "Only letters and white space allowed";
            }
           
                else{
                    $name = test_input($_POST["name"]);
                }
            }
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST"){

            if (empty($_POST["name"])) {
                $nameErr = "Last ame is required";
            } else {
                $name = test_input($_POST["name"]);
                if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                    $nameErr = "Only letters and white space allowed";
                }
               
                    else{
                        $name = test_input($_POST["name"]);
                    }
                }
            }
            if (empty($_POST["designation"])) {
                $genderErr = "Designation is required";
            } else {
                $designation = test_input($_POST["designation"]);
            }
            if (empty($_POST["prefferedlanguage"])) {
                $genderErr = "preffered language is required";
            } else {
                $designation = test_input($_POST["prefferedlanguage"]);
            }
            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
            } else {
                $email = test_input($_POST["email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                    $email = "";
                }
            }
            if(isset($_POST["submit"]))  
    {  
      if(empty($_POST["firstname"]))  
      {  
           $error = "<h1 class='text-danger'>Enter Firstname</h1>";  
      }
      elseif (empty($_POST["lastname"]))
      {  
        $error = "<h1 class='text-danger'>Enter Lasrtname</h1>";  
   }

      else if(empty($_POST["age"]))  
      {  
           $error = "<label class='text-danger'>Enter Age</label>";  
      }  
      else if(empty($_POST["designation"]))  
      {  
           $error = "<label class='text-danger'>Designation cannot be empty</label>";  
      } 
      
      else if(empty($_POST["password"]))  
      {  
           $error = "<label class='text-danger'>Enter a password</label>";  
      }
    
        
    }
            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
              }
              ?>
        

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    <h2>Registration Form</h2>
    <hr>
    <table>
        <tr>
        <td>First Name </td>
        <td><input type="text" ></td>
        <td><span class="error">* <?php echo $fnamerror;?></span></td>
    </tr>
    <tr>
        <td>Last Name </td>
        <td><input type="text" ></td>
        <td> <span class="error">* <?php echo $lnameerror;?></span></td>
    </tr>
        <tr>
        <td>Age </td>
        <td><input type="text" ></td>
    </tr>
    </tr>
       
        <tr>
        <td>Designation</td>
        <td><input type="radio" name="Designation 1">junior programmer <input type="radio"name="Designation 1">Senior programmer<input type="radio"name="gender1">Project Lead</td>   
    </tr>
    <tr>
        <td>preffered language</td>
        <td><input type="checkbox"name=prefferedlanguage >Java<input type="checkbox"name=prefferedlanguage >Php <input type="checkbox"name=prefferedlanguage >C++</td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="text" ></td>
</tr>
<tr>
        <td>Password</td>
        <td><input type="password" ></td>

    <tr>
        <td>Please choose a file </td>
        <td><input type="file"></td>
    </tr>
    <tr>
        <td><input type="submit" value="Submit">  <input type="submit"value="Reset"></td>
    </tr>
    </form>
     
</body>
</html>