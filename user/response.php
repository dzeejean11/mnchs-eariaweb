<?php
date_default_timezone_set('Asia/Manila');
include '../connect.php';

session_start();
$user_id= $_SESSION['user_id'];
$select_user = "SELECT * FROM `users` WHERE id='$user_id'";
$results = mysqli_query($conn, $select_user);
$row21 = mysqli_fetch_array($results);

$select_concern = "SELECT * FROM `concerns` WHERE u_id='$user_id' ORDER BY `id` DESC LIMIT 1";
$results1 = mysqli_query($conn, $select_concern);
$row22 = mysqli_fetch_array($results1);
if(isset($_POST['submit'])){

    $details = mysqli_real_escape_string($conn, $_POST['details']);
    $file = '';
    $date = date("d/m/Y");
    $time = date("h:i:sa");


    $query = "INSERT INTO concerns (`u_id`, `details`, `status`, `files`, `concerntype`,`date`,`time`) 
  			  VALUES('$user_id', '$details', 'Pending', '$file', 'Maintenance', '$date','$time')";
    mysqli_query($conn, $query);
    header('location:response.php');

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
            background-image: url("../UI/13.png");
            background-size: 100%;
        }
    .box1{
        margin-top: 8%;
        margin-left:8%;     
        width:850px;
        height:380px;
        background-color:rgb(190,203,223);
        border-radius:30px;
    }
    .form1{
        margin:30px;
        text-align:left;
        display: grid;  
    }
    .form1 #lbl1{
        margin-top:30px;
        font-size:25px;
        font-weight:bold;
    }
    .form1 label{
        font-family: Anonymous Pro;
        margin-top:7px;
        font-size:20px;
    }
    .form1 #details{
        margin-top:7px;
        width: 450px;
        height:120px;
        font-family: Anonymous Pro;
        font-size:20px;
    }
    .form1 #buttons{
        text-align:right;
    }
    .form1 #lbl1{
        font-family: Copperplate, "Copperplate Gothic Light", fantasy;
        font-style: normal; font-variant: normal; font-weight: 700; line-height: 26.4px; 
    }
    .form1 #sendu{
        width: 150px;
        height:100px;
        margin-top:80px;
        background-color:green;
        border-radius:30px;
        height:50px;
        width:150px;
        font-family: Anonymous Pro;
        font-size:20px;
        border-style: none;
        margin-left:10px;
    }
    .form1 #lbldec{
        font-size:50px;
        margin-top:20px;
        color:maroon;
    }
    #prof{
        position: absolute;
        width:150px;
        height:150px;
        margin-left:600px;
        margin-top:20px;
    }
    #logout{
            width:50px;
            height:50px;
            margin-left:94%;
            margin-top:10px;
        }
    #back{
        position: absolute;
        margin-top:300px;
        background-color:green;
        border-radius:30px;
        font-family: Anonymous Pro;
        font-size:20px;
        border-style: none;
        margin-left:700px;
        padding-top:10px;
        padding-bottom:10px;
        padding-left:20px;
        padding-right:20px;
        text-decoration:none;
        color:black;
    }
    </style>
</head>
<body>
    <a id="alog" href="../index.php"><img id="logout" src="../UI/logout.png"/></a>
    <div class="box1">
        <form action="admin.php" method="post" class="form1">
            <label id="lbl1">SUMMARY OF DETAILS:</label>
            <label>NAME OF TEACHER:<?php echo $row21['ln'],", ",$row21['fn']," ",$row21['mn'];?></label>
            <label>BLDG:<?php echo $row21['bldg'];?></label>
            <label>ROOM:<?php echo $row21['room'];?></label>
            <label>DATE:<?php echo $row22['date'];?></label>
            <label>TIME:<?php echo $row22['time'];?></label>
            <label>DETAILS:<?php echo $row22['details'];?></label>
            <img id="prof" src="../images/<?php echo $row21['img']?>">
            <a id="back" href="./whatconcern.php">BACK</a>
        </form>
    </div>
</body>
</html>