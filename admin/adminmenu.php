<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MNCHS EARIA</title>
    <style>
        body {
            background-image: url("../UI/2.1.png");
            background-size: 100%;
        }
        .btnhome{
            margin-top: 20%;
            display: flex;
           justify-content: center;
        }
        .btnhome button{
            width: 300px;
            height: 130px;
            border-radius: 25px;
            background-color: #90c5f6;
            border-color: #90c5f6;
            font-family: copperplate gothic;
            font-size: 40px;    
            color: white;
            text-align: center;
            margin-left: 40px;
            margin-right: 40px;
        }
        .a1, .a2{
            color: white;
            text-decoration: none;
        }
        .a1:hover,.a2:hover{
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
            background-color: #ddd;
           border-color: #ddd;
        }
        #logout{
            width:70px;
            height:70px;
            margin-left:94%;
            margin-top:10px;
        }
    </style>
</head>
<body>
    <a id="alog" href="../index.php"><img id="logout" src="../UI/logout.png"/></a>
    <div class="btnhome">
        <button class="btn1"><a class="a1" href="./users.php">USERS</a></button>
        <button class="btn2"><a class="a2" href="./concernsmain.php">CONCERNS</button>
    </div> 
</body>
</html>