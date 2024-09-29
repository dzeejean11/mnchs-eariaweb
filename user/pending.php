<?php
date_default_timezone_set('Asia/Manila');
include '../connect.php';

session_start();
$user_id= $_SESSION['user_id'];
$select_user = "SELECT * FROM `users` WHERE id='$user_id'";
$results = mysqli_query($conn, $select_user);
$row21 = mysqli_fetch_array($results);

$select_concern = "SELECT * FROM `concerns` WHERE u_id='$user_id' AND status1='Pending'";
$results1 = mysqli_query($conn, $select_concern);
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
            background-image: url("../UI/20.png");
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
    table{
        font-family: Anonymous Pro;       
        width:850px;
        height:330px;
        border-spacing:0px;
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
    #prof{
        width:20px;
        height:20px;
    }
    a{
            color: black;
            text-decoration: none;
        }
    table tr:last-child td:first-child {
        border-bottom:3px solid #e9ecf4;
    }
    #back{
        position: absolute;
        margin-top:5px;
        background-color:green;
        border-radius:30px;
        font-family: Anonymous Pro;
        font-size:20px;
        border-style: none;
        margin-left:740px;
        padding-top:10px;
        padding-bottom:10px;
        padding-left:20px;
        padding-right:20px;
    }
    #logout{
            width:50px;
            height:50px;
            margin-left:94%;
            margin-top:10px;
        }
    table tr:first-child td:first-child {
        border-top-left-radius:30px;
        border-top-right-radius:30px;
    }
    </style>
</head>
<body>
    <a id="alog" href="../index.php"><img id="logout" src="../UI/logout.png"/></a>
    <div class="box1">
        <table class="table">
        <?php
              while($row4=mysqli_fetch_array($results1))
				{
                    ?>
            <tr>    
                <td><?php echo $row4['date'],", ",$row4['time'];?></td>
            </tr>
            <?php
                }?>
        </table>
        <a id="back" href="./whatconcern.php">BACK</a>
    </div>
</body>
</html>