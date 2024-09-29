<?php

include '../../connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

if(isset($_POST['submit'])){

   $empid = $_POST['emp_id'];
   $empid = filter_var($empid, FILTER_SANITIZE_STRING);
   $pass = $_POST['pass'];
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);
   $cp = $_POST['cpno'];
   $cp = filter_var($cp, FILTER_SANITIZE_STRING);

   $select_user = "SELECT * FROM `users` WHERE emp_id='$empid' AND pass='$pass' AND cpno='$cp'";
   $results = mysqli_query($conn, $select_user);
   $row21 = mysqli_fetch_array($results);

   if(mysqli_num_rows($results) > 0){
      $_SESSION['user_id'] = $row21['id'];
      header('location:approvedconcerns.php');
   }else{
      $message[] = 'incorrect username or password!';
   }

}
if(isset($_POST['back'])){

    
    header('location:../utility.php');
 
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MNCHS EARIA</title>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Anonymous+Pro" />
    <style>
        body {
            background-image: url("../../UI/5.png");
            background-size: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .btnhome{
            margin-top: 24%;
            display: grid;        
        }
        .btnhome button, input[type=submit]{
            width: 100px;
            height: 30px;
            border-radius: 15px;
            background-color: #90c5f6;
            border-color: #90c5f6;
            font-family: copperplate gothic;
            font-size: 15px;    
            color: white;
            text-align: center;
            margin-left: 10px;
        }
        .btnhome button:hover, input[type=submit]:hover{
            background-color: #ddd;
           border-color: #ddd;
            color: black;
            cursor: pointer;
        }
        .btnhome label{
            color: white;
            font-family: Anonymous Pro;
        }
        .btnhome div{
            margin-top: 15px;
            font-size: 20px;
        }
        .btnhome input[type=text],input[type=password]{
            width: 300px;
            height: 15px;   
            background-color: #e9ecf4;
            border-radius: 20px;
            border-style: none;
            font-family: Anonymous Pro;
            font-size: 20px;
            padding: 10px;
        }
    </style>
</head>
<body>
        <form action="" method="post" class="btnhome">
            <div><label>EMPLOYER ID:</label><input type="text" name="emp_id" style="margin-left: 10px;"/></div>
            <div><label>PASSWORD:</label><input type="password" name="pass" style="margin-left: 42px;"/></div>
            <div><label>CP NUMBER:</label><input type="text" name="cpno" style="margin-left: 32px;"/></div>
            <div style="margin-left: 50%;"> <input type="submit" value="LOGIN" name="submit"><input type="submit" value="BACK" name="back"></div>
        </form>      
</body>
</html>