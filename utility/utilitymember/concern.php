<?php
date_default_timezone_set('Asia/Manila');
include '../../connect.php';

session_start();
$user_id= $_SESSION['user_id'];
$cid= $_GET['cid'];
$ruid= $_GET['ruid'];
$select_user = "SELECT * FROM `users` WHERE id='$ruid'";
$results = mysqli_query($conn, $select_user);
$row21 = mysqli_fetch_array($results);

$select_ass = "SELECT * FROM `assignment` WHERE cid='$cid' AND utilityid='$user_id'";
$results1 = mysqli_query($conn, $select_ass);
$row22 = mysqli_fetch_array($results1);
$assid = $row22['id'];
if(isset($_POST['submit'])){

    $date = date("d/m/Y");
    $time = date("h:i:sa");

    $query = "UPDATE concerns SET `status1`='Done' WHERE id='$cid'";
    mysqli_query($conn, $query);

    $query1 = "UPDATE assignment SET `status1`='Done',`datefinished`='$date',`timefinished`='$time' WHERE id='$assid'";
    mysqli_query($conn, $query1);
    header('location:thankyou.php?cid='.$cid.'&ruid='.$ruid.'&assid='.$assid);
}
$select_con = "SELECT * FROM `concerns` WHERE id='$cid'";
$results2 = mysqli_query($conn, $select_con);
$row23 = mysqli_fetch_array($results2);
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
            background-image: url("../../UI/29.png");
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
    .form1 #details{
        margin-top:7px;
        width: 450px;
        height:120px;
        font-family: Anonymous Pro;
        font-size:20px;
    }
    .form1 #buttons{
        text-align:right;
        position:absolute;
        margin-top:300px;
        margin-left:600px;  
    }
    .form1 #decline,#sendu{
        width: 150px;
        height:100px;
        
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
    .form1 #t1,#t2,#t3{
        font-family: Anonymous Pro;
        margin-top:7px;
        font-size:20px;
    }
    .form1 #tname{
        width:300px;
    }
    .form1 textarea{
        width:500px;
        height:100px;
    }
    #logout{
            width:50px;
            height:50px;
            margin-left:94%;
            margin-top:10px;
        }
    #can{
        text-decoration:none;
        color:black;
        background-color:maroon;
        border-radius:30px;
        height:50px;
        width:100px;
        font-family: Anonymous Pro;
        font-size:20px;
        border-style: none;
        margin-left:10px;
        margin-top:15px;
        padding:16px;
    }
    </style>
</head>
<body>
    <a id="alog" href="../../index.php"><img id="logout" src="../../UI/logout.png"/></a>
    <div class="box1">
        <form action="" method="post" class="form1">
            <label id="lbl1">WHERE?</label>
            <div id="t1"><label>NAME OF TEACHER:<?php echo $row21['ln'],", ",$row21['fn']," ",$row21['mn'];?></label></div>
            <div id="t2"><label>BLDG:<?php echo $row21['bldg'];?></div>
            <div id="t3"><label>ROOM:<?php echo $row21['room'];?></label></div>
            <div id="t3"><label>ESTIMATED DATE OF ARRIVAL:<?php echo $row22['datearrival'];?></label></div>
            <img id="prof" src="../../images/<?php echo $row21['img']?>">
            <label id="lbl1">DETAILS:</label>
            <div id="details"><?php echo $row23['details'];?></div>
            <div id="buttons"><input type="submit" value="DONE" name="submit" id="sendu"></div>
        </form>
    </div>
</body>
</html>