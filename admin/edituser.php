<?php
date_default_timezone_set('Asia/Manila');
include '../connect.php';

session_start();
$uid = $_GET['uid'];
$select_user = "SELECT * FROM `users` WHERE id='$uid'";
$results = mysqli_query($conn, $select_user);
$row21 = mysqli_fetch_array($results);
if(isset($_POST['submit'])){
    $name=$_FILES['imageUpload']['name'];
	$size=$_FILES['imageUpload']['size'];
	$type=$_FILES['imageUpload']['type'];
	$temp=$_FILES['imageUpload']['tmp_name'];
    $move =  move_uploaded_file($temp,"../images/".$name);
    $empid = mysqli_real_escape_string($conn, $_POST['empid']);
    $fn = mysqli_real_escape_string($conn, $_POST['fn']);
    $mn = mysqli_real_escape_string($conn, $_POST['mn']);
    $ln = mysqli_real_escape_string($conn, $_POST['ln']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);
    $cp = mysqli_real_escape_string($conn, $_POST['cp']);
    $room = mysqli_real_escape_string($conn, $_POST['room']);
    $bldg = mysqli_real_escape_string($conn, $_POST['bldg']);
    $pos = mysqli_real_escape_string($conn, $_POST['pos']);
    $utype = mysqli_real_escape_string($conn, $_POST['utype']);
    $exp = mysqli_real_escape_string($conn, $_POST['exp']);
    $img = $row21['img'];
    if($name==''){
        $query = "UPDATE users SET `emp_id`='$empid', `fn`='$fn', `mn`='$mn', `ln`='$ln', `pass`= '$pass', `cpno`='$cp', `room`='$room', `bldg`='$bldg', `pos`='$pos',`utype`='$utype',`expertise`='$exp',`img`='$img' WHERE id='$uid'";
        mysqli_query($conn, $query);
        header('location:users.php');
    }
    else{
        $query = "UPDATE users SET `emp_id`='$empid', `fn`='$fn', `mn`='$mn', `ln`='$ln', `pass`= '$pass', `cpno`='$cp', `room`='$room', `bldg`='$bldg', `pos`='$pos',`utype`='$utype',`expertise`='$exp',`img`='$name' WHERE id='$uid'";
        mysqli_query($conn, $query);
        header('location:users.php');
    }
    
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
            background-image: url("../UI/7.1.png");
            background-size: 100%;
        }
    .box1{
        margin-top: 5%;
        margin-left:8%;     
        width:850px;
        height:400px;
        background-color:rgb(190,203,223);
        border-radius:30px;
    }
    .form1{
        margin:30px;
        text-align:left;
        display: grid;  
    }
    .form1 #lbl1{
        margin-top:10px;
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
        position: absolute;
        margin-left:550px;
        margin-top:330px;
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
        width:100px;
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
    .form1 #t1,#t2,#t3,#t4,#t5,#t6,#t7,#t8,#t9,#t10{
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
    }
    select{
        margin-top:7px;
        font-size:20px;
    }
    #browse{
        position: absolute;
        width:150px;
        height:150px;
        margin-left:600px;
        margin-top:180px;
    }
    </style>
</head>
<body>
    
    <a id="alog" href="../index.php"><img id="logout" src="../UI/logout.png"/></a>
    <div class="box1">
        <form action="" method="post" class="form1" enctype="multipart/form-data">
            <label id="lbl1">INFORMATION</label>
            <div id="t1"><label>EMPLOYEE ID:</label><input name="empid" type="text" id="empid" value="<?php echo $row21['emp_id']?>"></div>
            <div id="t2"><label>FIRST NAME:</label><input name="fn" type="text" id="fn" value="<?php echo $row21['fn']?>"></div>
            <div id="t3"><label>MIDDLE NAME:</label><input name="mn" type="text" id="mn" value="<?php echo $row21['mn']?>"></div>
            <div id="t3"><label>LAST NAME:</label><input name="ln" type="text" id="ln" value="<?php echo $row21['ln']?>"></div>
            <div id="t4"><label>PASSWORD:</label><input name="pass" type="text" id="pass" value="<?php echo $row21['pass']?>"></div>
            <div id="t5"><label>CP NUMBER:</label><input name="cp" type="text" id="cp" value="<?php echo $row21['cpno']?>"></div>
            <div id="t6"><label>ROOM:</label><input name="room" type="text" id="room" value="<?php echo $row21['room']?>"></div>
            <div id="t7"><label>BUILDING:</label><input name="bldg" type="text" id="bldg" value="<?php echo $row21['bldg']?>"></div>
            <div id="t8"><label>POSITION:</label><input name="pos" type="text" id="pos" value="<?php echo $row21['pos']?>"></div>
            <div id="t9"><label>USER TYPE:</label><select name="utype">
                <option value="<?php echo $row21['utype']?>"><?php echo $row21['utype']?></option>
                <option value="Admin">Admin</option>
                <option value="Utility Admin">Utility Admin</option>
                <option value="Utility">Utility</option>
                <option value="User">User</option>
            </select></div>
            <div id="t10"><label>EXPERTISE:</label><input name="exp" type="text" id="exp" value="<?php echo $row21['expertise']?>"></div>
            <img id="prof" src="../images/<?php echo $row21['img']?>">
            <div id="browse" ><input type="file" id="img" name="imageUpload" onchange="loadFile(event)" class="img" accept="image/*"></div>
            <div id="buttons"><button id="decline"><a id="can" href="./users.php">CANCEL</a></button><input type="submit" value="EDIT" name="submit" id="sendu"></div>
        </form>
    </div>
</body>
</html>
<script>
  var loadFile = function(event) {
    var output = document.getElementById('prof');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>