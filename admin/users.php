<?php

include '../connect.php';

session_start();
$user_id= $_SESSION['user_id'];
$select_user = "SELECT * FROM `users`";
$results = mysqli_query($conn, $select_user);
if(isset($_POST['searchuser'])){
    $empid = mysqli_real_escape_string($conn, $_POST['searchemp']);
    $select_user = "SELECT * FROM `users` WHERE emp_id='$empid'";
    $results = mysqli_query($conn, $select_user);
}
else if(isset($_POST['refresh'])){
    $select_user = "SELECT * FROM `users`";
    $results = mysqli_query($conn, $select_user);
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
        margin-top: 12%;
        margin-left:8%;     
        width:850px;
        height:380px;
        background-color:rgb(190,203,223);
        border-radius:30px;     
    }
    .box2{
        margin-top:50px;
        overflow-x:scroll;
        overflow-x:hidden;
        width:850px;
        height:280px;
        position:absolute;
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
        border-right:0px solid #e9ecf4;
        border-left:3px solid #e9ecf4;
        height:30px;
    }
   
    th{
        font-family: Arial;  
        font-size:20px; 
        background-color:white;    
    }
    td{
        font-size:18px;
    }
    img{
        width:20px;
        height:20px;
    }
    a{
            color: black;
            text-decoration: none;
        }
    table tr:last-child td{
        border-bottom:3px solid #e9ecf4;
    }
    table tr td:last-child{
        border-right:3px solid #e9ecf4;
        text-align:center;
        font-size:15px;
    }
    #back{
        position: absolute;
        margin-top:335px;
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
    #adduser{
        position: absolute;
        background-color:green;
        border-radius:30px;
        font-family: Anonymous Pro;
        font-size:20px;
        border-style: none;
        margin-left:700px;
        margin-top:5px;
        padding-top:10px;
        padding-bottom:10px;
        padding-left:20px;
        padding-right:20px;
    }
    #formsearch{
        margin-top:10px;
        margin-left:20px;
        position:absolute;
    }
    #formsearch input,button{
        font-size:20px;
    }
    </style>
</head>
<body>
    <div class="box1">
    <form id="formsearch" action="" method="post" required>
				<input type="text" placeholder="Search Employee ID" name="searchemp"/>
				<input type="submit" value="SEARCH" name="searchuser" id="searchuser">
                <input type="submit" value="REFRESH" name="refresh" id="refresh">
	</form>
    <a id="adduser" href="./createuser.php">ADD USER</a>
    <div class="box2">
        <table class="table">
            <tr>
                <th>Employer ID</th>
                <th>Lastname</th>
                <th>Firstname</th>
                <th>M.I.</th>       
                <th>Usertype</th>
                <th>Action</th>
            </tr>
            <?php
              while($row4=mysqli_fetch_array($results))
				{
                    ?>
            <tr>
                <td><?php echo $row4['emp_id']?></td>
                <td><?php echo $row4['ln']?></td>
                <td><?php echo $row4['fn']?></td>
                <td><?php echo $row4['mn']?></td>
                <td><?php echo $row4['utype']?></td>
                <td><a href="./viewuser.php?uid=<?php echo $row4['id']?>">View</a>|<a href="./edituser.php?uid=<?php echo $row4['id']?>">Edit</a></td>
            </tr>
            <?php
                }?>
        </table>
        
    </div>
    <a id="back" href="./adminmenu.php">BACK</a>
    </div>
</body>
</html>