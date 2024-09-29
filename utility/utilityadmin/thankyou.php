<?php

include '../../connect.php';

session_start();
$user_id= $_SESSION['user_id'];
$cid = $_GET['cid'];
$uid = $_GET['uid'];
$utid = $_GET['utid'];
$datearr = $_GET['datearr'];
$select_user = "SELECT * FROM `users` WHERE id='$uid'";
$results = mysqli_query($conn, $select_user);
$row21 = mysqli_fetch_array($results);

$select_concern = "SELECT * FROM `concerns` WHERE id='$cid' ORDER BY `id` DESC LIMIT 1";
$results1 = mysqli_query($conn, $select_concern);
$row22 = mysqli_fetch_array($results1);

$select_uti = "SELECT * FROM `users` WHERE id='$utid'";
$results2 = mysqli_query($conn, $select_uti);
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
            background-image: url("../../UI/10.1.png");
            background-size: 100%;
        }
    .box1{
        margin-top: 7%;
        margin-left:8%;     
        width:500px;
        height:380px;
        background-color:rgb(190,203,223);
        border-radius:30px;
        position: absolute;
    }
    .box2{
        margin-top: 7%;
        margin-left:50%;     
        width:370px;
        height:380px;
        background-color:rgb(190,203,223);
        border-radius:30px;
        position:absolute;
    }
    table{
        font-family: Anonymous Pro;       
        width:500px;
        height:303px;
        border-spacing:0px;
        border-radius:30px;
    }
    td,th{
        border-top:3px solid #e9ecf4;
        border-spacing:0px;
        border-right:3px solid #e9ecf4;
        border-left:3px solid #e9ecf4;
    }
    th{
        font-family: Arial;  
        font-size:25px; 
        background-color:white;    
    }
    td{
        font-size:20px;
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
        width: 460px;
        height:120px;
        font-family: Anonymous Pro;
        font-size:20px;
    }
    .form1 #buttons1{
        margin-left:200px;
        margin-top:210px;
        position:absolute;
    }
    .form1 #lbl1{
        font-family: Copperplate, "Copperplate Gothic Light", fantasy;
        font-style: normal; font-variant: normal; font-weight: 700; line-height: 26.4px; 
    }
    .form1 #decline{
        background-color:maroon;
    }
    .form1 #sendu{
        background-color:green;
    }
    .form2{
        margin-left:30px;
        margin-top:70px;
        text-align:left;
        display: grid;  
    }
    .form2 #lbl1{
        margin-top:30px;
        font-size:25px;
        font-weight:bold;
    }
    .form2 label{
        font-family: Anonymous Pro;
        margin-top:7px;
        font-size:20px;
    }
    .form2 #details{
        margin-top:7px;
        width: 460px;
        height:120px;
        font-family: Anonymous Pro;
        font-size:20px;
    }
    .form2 #buttons1{
        margin-left:230px;
        margin-top:230px;
        position:absolute;
    }
    .form2 #lbl1{
        font-family: Copperplate, "Copperplate Gothic Light", fantasy;
        font-style: normal; font-variant: normal; font-weight: 700; line-height: 26.4px; 
    }
    .form2 #decline{
        background-color:maroon;
    }
    .form2 #sendu{
        background-color:green;
    }
    #prof{
        position: absolute;
        width:150px;
        height:150px;
        margin-left:300px;
        margin-top:20px;
    }
    #prof2{
        width:100px;
        height:100px;
        margin-left:200px;
        position:absolute;
        margin-top:-40px;
    }
    #logout{
            width:50px;
            height:50px;
            margin-left:94%;
            margin-top:10px;
        }
    table td:last-child{
        border-bottom-left-radius:30px;
        border-bottom-right-radius:30px;
    }
    #prof1{
        width:20px;
        height:20px;
        margin-left:10px;
    }
    #back{
        background-color:green;
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
        position: absolute;
    }
    .form1 #sendu{
        border-radius:30px;
        height:50px;
        width:150px;
        font-family: Anonymous Pro;
        font-size:20px;
        border-style: none;
        margin-left:10px;
        position: absolute;
        margin-left:90px;
    }
    </style>
</head>
<body>
    <a id="alog" href="../../index.php"><img id="logout" src="../../UI/logout.png"/></a>
    <div class="box1">
        <form action="" method="post" class="form1">
            <label id="lbl1">WHERE?</label>
            <label>NAME OF TEACHER:<?php echo $row21['ln'],", ",$row21['fn']," ",$row21['mn'];?></label>
            <label>BLDG:<?php echo $row21['bldg'];?></label>
            <label>ROOM:<?php echo $row21['room'];?></label>
            <img id="prof" src="../../images/<?php echo $row21['img']?>">
            <label id="lbl1">DETAILS:</label>
            <div id="details"><?php echo $row22['details'];?></div>
        </form>
    </div>
    <div class="box2">
        <form action="" method="post" class="form2">
            <label id="lbl1">ASSIGNED</label>
            <img id="prof2" src="../../images/<?php echo $row23['img']?>">
            <label id="lbl2">NAME OF UTILITY:<?php echo $row23['ln'],", ",$row23['fn']," ",$row23['mn'];?></label>
            <label id="lbl2">EXPERTISE:<?php echo $row23['expertise'];?></label>
            <label id="lbl2">DETAILS:<?php echo $datearr;?></label>
            <div id="buttons1"><a id="back" href="./approvedconcerns.php">DONE</a></div>
        </form>
    </div>
</body>
</html>