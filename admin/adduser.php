<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MNCHS EARIA</title>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Anonymous+Pro" />
    <style>
    body {
            background-image: url("../UI/7.2.png");
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
    .form1 #t1,#t2,#t3,#t4,#t5,#t6,#t7,#t8,#t9{
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
    </style>
</head>
<body>
    <a id="alog" href="../index.php"><img id="logout" src="../UI/logout.png"/></a>
    <div class="box1">
        <form action="adduser.php" method="post" class="form1">
            <label id="lbl1">INFORMATION</label>
            <div id="t1"><label>EMPLOYEE ID:</label><input type="text" id="empid"></div>
            <div id="t2"><label>FIRST NAME:</label><input type="text" id="fn"></div>
            <div id="t3"><label>MIDDLE NAME:</label><input type="text" id="mn"></div>
            <div id="t4"><label>PASSWORD:</label><input type="text" id="pass"></div>
            <div id="t5"><label>CP NUMBER:</label><input type="text" id="cp"></div>
            <div id="t6"><label>ROOM:</label><input type="text" id="room"></div>
            <div id="t7"><label>BUILDING:</label><input type="text" id="bldg"></div>
            <div id="t8"><label>POSITION:</label><input type="text" id="pos"></div>
            <div id="t9"><label>USER TYPE:</label>
                <select name="cars" id="cars">
                    <option value="Admin">Administrator</option>
                    <option value="User">User</option>
                    <option value="Utility">Utility</option>
                    <option value="Utility Admin">Utility Admin</option>
                </select>
            </div>
            <img id="prof" src="../UI/profile1.png">
            <div id="buttons"><button id="decline"><a id="can" href="./users.php">CANCEL</a></button><input type="submit" value="SAVE" name="save" id="sendu"></div>
        </form>
    </div>
</body>
</html>