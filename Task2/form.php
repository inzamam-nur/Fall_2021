<?php include "contoll/Task 1.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
<form action="" method="post"> 
    <h2>Registration Form</h2>
    <hr>
    <table>
        <tr>
        <td>First Name </td>
        <td><input type="text"name="fname" ><?php echo $validatefname; ?></td>
        
    </tr>
    <tr>
        <td>Last Name </td>
        <td><input type="text" name="lname" ><?php echo $validatelname; ?></td>
    </tr>
        <tr>
        <td>Age </td>
        <td><input type="text"name="age"><?php echo $validateage; ?></td>
    </tr>
    </tr>
       
    <tr>
        <td><label>Designation:</label></td>                       
                    <td>
                        <input type="radio" name="Dsignation" value="Junior Programmer">
                        <label for="jp">Junior Programmer</label>
                        <input type="radio"  name="Dsignation" value="Senior Programmer">
                        <label for="sp">Senior Programmer</label>
                        <input type="radio"  name="Dsignation" value="Project Lead">
                        <label for="pl">Project Lead</label>
                        <td><?php echo $validateradio ;?></td>
                    </td>
                                                                                                          
                </tr>
    <tr>
    <td><label for="prflan">Prefered Language:</label></td>
                    <td>
                        <input type="checkbox" name="language" value="JAVA">
                        <label>JAVA</label>
                        <input type="checkbox"name="language" value="PHP">
                        <label >PHP</label>
                        <input type="checkbox"  name="language" value="C++">
                        <label >C++</label>
                   <?php echo $validatecheckbox;?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="text" name="email"><?php echo $validateemail;?></td>
</tr>
<tr>
        <td>Password</td>
        <td><input type="password" name="pword" ><?php echo $validatepassword; ?></td>

    <tr>
        <td>Please choose a file </td>
        <td><input type="file" name="file"></td>
    </tr>
    <tr>
        <td><input type="submit" value="Submit">  <input type="submit"value="Reset"></td>
    </tr>
</table>
    </form>
           
</body>
</html>