<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="main.php"mathod="post">
    <h2>Registration Form</h2>
    <hr>
    <table>
        <tr>
        <td>First Name </td>
        <td><input type="text"name="fname" ></td>
        
    </tr>
    <tr>
        <td>Last Name </td>
        <td><input type="text" name="lname" ></td>
    </tr>
        
    <tr>
        <td>Email</td>
        <td><input type="text" name="email"></td>
</tr>
    <tr>
        <td><label>Gender</label></td>                       
                    <td>
                        <input type="radio" name="gender" value="Male">
                        <label for="Male">Male</label>
                        <input type="radio"  name="gender" value="Female">
                        <label for="Female">Female</label>
                    </td>
                                                                                                          
                </tr>
                <tr>
        <td>Mobile No</td>
        <td><input type="text" name="mno"></td>
</tr>
                <tr> 
                    <td><label for="birthday">Date OF Birthday </label></td>
                     <td><input type="date" id="birthday" name="birthday"></td>                     
                    <td>
                        
                    </td>
                                                                                                          
                </tr>
                <tr>
        <td>H.S.C Result</td>
        <td><input type="text" name="hscresult"></td>
</tr>
<tr>
        <td>S.S.C Result</td>
        <td><input type="text" name="sscresult"></td>
</tr>
<tr>
       <td><label for="course">Select a course you want to enroll</label></td> 
       <td>   
    <select name="course" >  
    <option value="WEb tech">Web tech</option>
    <option value="C#">C#</option>
    <option value="Chemistry">Chemistry</option>
    <option value="English">English</option></select></td>

</tr>
<tr>
       <td><label for="eyear">Choose a enrolling year</label></td> 
       <td>   
    <select name="eyear" >  
    <option value="2021">2021</option>
    <option value="2020">2020</option>
    <option value="2019">2019</option>
    <option value="2018">2018</option></select></td>

</tr>
<tr>
       <td><label for="semester">Choose a enrolling year</label></td> 
       <td>   
    <select name="semester" >  
    <option value="summer">summer</option>
    <option value="Fall">Fall</option>
    <option value="spring">spring</option>
</td>

</tr
    
    <tr>
        <td><input type="submit" value="Insert Data"> </td>
    </tr>
</table>
    </form>
   
</body>
</html>
