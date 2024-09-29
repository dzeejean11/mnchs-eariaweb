<?php
date_default_timezone_set('Asia/Manila');
include '../connect.php';

session_start();
$user_id= $_SESSION['user_id'];
$select_user = "SELECT * FROM `users` WHERE id='$user_id'";
$results = mysqli_query($conn, $select_user);
$row21 = mysqli_fetch_array($results);

if(isset($_POST['submit'])){

    $details = mysqli_real_escape_string($conn, $_POST['details']);
    $file = '';
    $date = date("d/m/Y");
    $time = date("h:i:sa");


    $query = "INSERT INTO concerns (`u_id`, `details`, `status1`, `files`, `concerntype`,`date`,`time`,`estimatedatetime`,`reason`) 
  			  VALUES('$user_id', '$details', 'Pending', '$file', 'Resources', '$date','$time','','')";
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
    .form1 #decline,#sendu{
        width: 150px;
        height:100px;
        margin-top:-300px;
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
    <a id="alog" href="../index.php"><img id="logout" src="../UI/logout.png"/></a>
    <div class="box1">
        <form action="" method="post" class="form1">
            <label id="lbl1">WHERE?</label>
            <div id="t1"><label>NAME OF TEACHER:</label><input type="text" id="tname" name="tname" value="<?php echo $row21['ln'],", ",$row21['fn']," ",$row21['mn'];?>"></div>
            <div id="t2"><label>BLDG:</label><input type="text" name="bldg" value="<?php echo $row21['bldg'];?>"></div>
            <div id="t3"><label>ROOM:</label><input type="text" name="room" value="<?php echo $row21['room'];?>"></div>
            <img id="prof" src="../images/<?php echo $row21['img']?>">
            <label id="lbl1">DETAILS:</label>
            <div id="details"><textarea name="details"></textarea></div>
            <div id="buttons"><a id="can" href="./whatconcern.php">CANCEL</a><input type="submit" value="SUBMIT" name="submit" id="sendu"></div>
        </form>
    </div>
</body>
</html>