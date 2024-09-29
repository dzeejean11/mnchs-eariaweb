<?php

include '../connect.php';

session_start();
$user_id= $_SESSION['user_id'];
$cid = $_GET['cid'];
$uid = $_GET['uid'];
$select_user = "SELECT * FROM `users` WHERE id='$uid'";
$results = mysqli_query($conn, $select_user);
$row21 = mysqli_fetch_array($results);

$select_concern = "SELECT * FROM `concerns` WHERE id='$cid' ORDER BY `id` DESC LIMIT 1";
$results1 = mysqli_query($conn, $select_concern);
$row22 = mysqli_fetch_array($results1);

if(isset($_POST['approve'])){

    $det = $row22['details'];
    $file =  $row22['files'];
    $ctype =  $row22['concerntype'];
    $date =  $row22['date'];
    $time =  $row22['time'];
    $est =  $row22['estimatedatetime'];

    $query = "UPDATE concerns SET `u_id`='$uid',`details`='$det',`status1`='Approved',`files`='$file',`concerntype`='$ctype',`date`='$date',`time`='$time',`estimatedatetime`='',`reason`='' WHERE id='$cid'";
    mysqli_query($conn, $query);
    header('location:response1.php?cid='.$cid.'&uid='.$uid);
}

if(isset($_POST['decline'])){

    header('location:reason.php?cid='.$cid.'&uid='.$uid);
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
            background-image: url("../UI/11.png");
            background-size: 100%;
        }
    .box1{
        margin-top: 7%;
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
        position: absolute;
        margin-top:300px;
        margin-left:380px;
    }
    .form1 #lbl1{
        font-family: Copperplate, "Copperplate Gothic Light", fantasy;
        font-style: normal; font-variant: normal; font-weight: 700; line-height: 26.4px; 
    }
    .form1 #decline,#sendu{
        border-radius:30px;
        height:50px;
        width:150px;
        font-family: Anonymous Pro;
        font-size:20px;
        border-style: none;
        margin-left:10px;
    }
    .form1 #decline{
        background-color:maroon;
    }
    .form1 #sendu{
        background-color:green;
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
        background-color:blue;
        border-radius:30px;
        font-family: Anonymous Pro;
        font-size:20px;
        border-style: none;
        padding-top:15px;
        padding-bottom:15px;
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
        <form action="" method="post" class="form1">
            <label id="lbl1">WHERE?</label>
            <label>NAME OF TEACHER:<?php echo $row21['ln'],", ",$row21['fn']," ",$row21['mn'];?></label>
            <label>BLDG:<?php echo $row21['bldg'];?></label>
            <label>ROOM:<?php echo $row21['room'];?></label>
            <label>DATE:<?php echo $row22['date'];?></label>
            <label>TIME:<?php echo $row22['time'];?></label>
            <img id="prof" src="../images/<?php echo $row21['img']?>">
            <label id="lbl1">DETAILS:</label>
            <div id="details"><?php echo $row22['details'];?></div>
            <div id="buttons"><a id="back" href="./concernsres.php">BACK</a><input type="submit" value="DECLINE" name="decline" id="decline"><input type="submit" value="APPROVE" name="approve" id="sendu"></div>
        </form>
    </div>
</body>
</html>