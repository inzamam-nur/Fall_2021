<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="mystyle.css">
</head>
<body>
 
<form action="" method="post"> 
    <div class="headeer">  <h1>ABC Management System</h1>
    <h4>We Create Future</h4>
    <header>
        <tr>
            <td>home</td>
    <td>About Us</td>
    <td>Shop</td>
    
</tr>
            </header></div>
  
<div class="form"> <h2>Registration Form</h2></div>
   
    <hr>
    <table>
        <tr class="table">
        <td>First Name </td>
        <td><input type="text"name="fname" ></td>
        
    </tr>
    <tr class="table">
        <td>Last Name </td>
        <td><input type="text" name="lname" ></td>
    </tr>
        <tr class="table">
        <td>Age </td>
        <td><input type="text"name="age"></td>
    </tr>
    </tr>
       
    <tr class="table">
        <td><label>Designation:</label></td>                       
                    <td>
                        <input type="radio" name="Dsignation" value="Junior Programmer">
                        <label for="jp">Junior Programmer</label>
                        <input type="radio"  name="Dsignation" value="Senior Programmer">
                        <label for="sp">Senior Programmer</label>
                        <input type="radio"  name="Dsignation" value="Project Lead">
                        <label for="pl">Project Lead</label>
                    </td>
                                                                                                          
                </tr>
    <tr class="table">
    <td><label for="prflan">Prefered Language:</label></td>
                    <td>
                        <input type="checkbox" name="language" value="JAVA">
                        <label>JAVA</label>
                        <input type="checkbox"name="language" value="PHP">
                        <label >PHP</label>
                        <input type="checkbox"  name="language" value="C++">
                        <label >C++</label>
    </tr>
    <tr class="table">
        <td>Email</td>
        <td><input type="text" name="email"></td>
</tr>
<tr class="table">
        <td>Password</td>
        <td><input type="password" name="pword" ></td>

    <tr class="table">
        <td>Please choose a file </td>
        <td><input type="file" name="file"></td>
    </tr>
    <tr>
        <td>
        <input type="button" class="button" value="Input Button">
        <input type="button" class="button" value="Input Button">
        </td>
    </tr>
</table>
    </form>
           
</body>
</html>