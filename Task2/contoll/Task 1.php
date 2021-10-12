<?php
    $validatefname="";
    $validatelname="";
    $validateage="";
    $validateradio="";
    $validatecheckbox="";
    $validateemail="";
    $validatepassword="";
    $v1=$v2=$v3=$email=$pword="";
    $Firstname=$Lastname=$Age=$designation=$Email=$password="";
    $email=($_REQUEST["email"]);
    $pword=($_REQUEST["pword"]);
    if(empty($_REQUEST["fname"]) || (strlen($_REQUEST["fname"])<5))
    {
        $validatefname= "*First name required";
    
    }
    else
    {
        $Firstname="your First Name is ".$_REQUEST["fname"];
    }
    if(empty($_REQUEST["lname"]) || (strlen($_REQUEST["lname"])<2))
    {
        $validatelname= "*Last name required";
    
    }
    else
    {
        $Lastname="your Last Name is ".$_REQUEST["lname"];
    }
    if(empty($_REQUEST["age"]) || (strlen($_REQUEST["age"])<2))
    {
        $validateage= "*Age required";
    
    }
    else
    {
        $Age="your Age is ".$_REQUEST["age"];
    }
if(isset($_REQUEST["Dsignation"]))
{
  
       $designation= "your First Name is ".$_REQUEST["Dsignation"];
}
else{
    
    $validateradio= "*Designation Required";
}
if(!isset($_REQUEST["java"])&&!isset($_REQUEST["php"])&&!isset($_REQUEST["c++"]))
{
    $validatecheckbox = "*Language required";
    
}
else{
    
   if(isset($_REQUEST["language"]))
   {
       $v1= "Your Preffered Language is :".$_REQUEST["language"];
   }
   if(isset($_REQUEST["language"]))
   { 
       $v2= "Your Preffered Language is :".$_REQUEST["language"];
   }
   if(isset($_REQUEST["language"]))
   {
    $v3= "Your Preffered Language is :".$_REQUEST["language"];
   }
}

if(empty($_REQUEST["email"])|| !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $validateemail="*Valid Email required";
}
else
{
    $Email= "Your Email is :".$email;
}
if(empty($_REQUEST["pword"]) ||!preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $pword))
{
$validatepassword="*Password required";
}
else
{
    $password="Password is".$pword;
}

//jason filee calling 
$formdata = array(
    'fname'=> $_POST["fname"],
    'lname'=> $_POST["lname"],
    'age'=>$_POST["age"],
    'Dsignation'=> $_POST["Dsignation"],
    'language'=> $_POST["language"],
    'email'=> $_POST["email"],
    'pword'=> $_POST["pword"],
    'file'=> $_POST["file"]

   );
   $existingdata = file_get_contents('mydata.json');
   $tempJSONdata = json_decode($existingdata);
   $tempJSONdata[] =$formdata;
   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
   
   if(file_put_contents("mydata.json", $jsondata)) {
        echo "Data successfully saved <br>";
    }
   else 
   {
        echo "no data saved";
   }
   $data = file_get_contents("mydata.json");
 $mydata = json_decode($data);


    ?>

