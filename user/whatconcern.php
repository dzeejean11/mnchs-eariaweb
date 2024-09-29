<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MNCHS EARIA</title>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Anonymous+Pro" />
    <style>
        body {
            background-image: url("../UI/15.png");
            background-size: 100%;
        }
        .btnhome{
            margin-top: 20%;
            display: flex;
           justify-content: center;
        }
        .btnhome button{
            width: 250px;
            height: 70px;
            border-radius: 25px;
            border-color: #90c5f6;
            font-family: Anonymous Pro;
            font-size: 30px;    
            color: white;
            text-align: center;
            margin-left: 30px;
            margin-right: 15px;
            border-style:none;
        }
        .btnhome1{
            margin-top: 5%;
            display: flex;
           justify-content: center;
        }
        .btnhome1 button{
            width: 180px;
            height: 50px;
            border-style:none;
            border-radius: 25px;
            border-color: #90c5f6;
            font-family: Anonymous Pro;
            font-size: 20px;    
            color: white;
            text-align: center;
            margin-left: 30px;
            margin-right: 15px;
        }
        a{
            color: white;
            text-decoration: none;
        }
        a:hover{
            background-color: #ddd;
           border-color: #ddd;
            color: black;
            cursor: pointer;
        }
        body:has(.a1:hover) .btn1{
            background-color: #ddd;
           border-color: #ddd;
        }
        body:has(.a2:hover) .btn2{
            background-image: linear-gradient(to right, #ddd,#ddd);
            border-color: #ddd;
        }
        body:has(.a3:hover) .btn3{
            background-color: #ddd;
            border-color: #ddd;
        }
        body:has(.a4:hover) .btn4{
            background-color: #ddd;
            border-color: #ddd;
        }
        body:has(.a5:hover) .btn5{
            background-color: #ddd;
            border-color: #ddd;
        }
        .btn1{
            background-color:#38b6ff;
            border-color:#38b6ff;
        }
        .btn2{
            background-image: linear-gradient(to right, #5de0e6,#004aad);
            border-color:#38b6ff;
        }
        .btn3{
            background-color:#004aad;
            border-color:#004aad;
        }
        .btn4{
            background-color:#38b6ff;
            border-color:#38b6ff;
        }
        .btn5{
            background-color:#004aad;
            border-color:#004aad;
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
    <div class="btnhome">
        <button class="btn1"><a class="a1" href="./maintenance.php">MAINTENANCE</a></button>
        <button class="btn2"><a class="a2" href="./resource.php">RESOURCE</a></button>
        <button class="btn3"><a class="a3" href="./otherconcern.php">OTHER CONCERN</a></button>
    </div> 
    <div class="btnhome1">
        <button class="btn4"><a class="a4" href="./pending.php">PENDING</a></button>
        <button class="btn5"><a class="a5" href="./history.php">HISTORY</a></button>
    </div>
</body>
</html>