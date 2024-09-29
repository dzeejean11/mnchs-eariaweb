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
    #back{
        position: absolute;
        margin-top:310px;
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
    .form1 #lbldec{
        font-size:50px;
        margin-top:20px;
        color:maroon;
    }
    #logout{
            width:50px;
            height:50px;
            margin-left:94%;
            margin-top:10px;
        }
    </style>
</head>
<body>
    <a id="alog" href="../index.php"><img id="logout" src="../UI/logout.png"/></a>
    <div class="box1">
        <form action="admin.php" method="post" class="form1">
            <label id="lbl1">STATUS:</label>
            <label id="lbldec">DECLINED</label>
            <label id="lbl1">DETAILS:</label>
            <label>Date:</label>
            <label>Time:</label>
            <label>Reason for declining:</label>
            <a id="back" href="./concernsmain.php">BACK</a>
        </form>
    </div>
</body>
</html>