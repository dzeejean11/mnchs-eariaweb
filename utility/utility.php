<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MNCHS EARIA</title>
    <style>
        body {
            background-image: url("../UI/3.png");
            background-size: 100%;
        }
        .btnhome{
            margin-top: 26%;
            display: flex;
           justify-content: center;
        }
        .btnhome button{
            width: 250px;
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
            background-color: #ddd;
           border-color: #ddd;
        }
        body:has(.a3:hover) .btn3{
            background-color: #ddd;
           border-color: #ddd;
        }
    </style>
</head>
<body>
    <div class="btnhome">
        <button class="btn1"><a class="a1" href="./utilitymember/utilitymember.php">MEMBER</a></button>
        <button class="btn2"><a class="a2" href="./utilityadmin/utilityadmin.php">UTILITY ADMIN</button>
        <button class="btn3"><a class="a3" href="../index.php">BACK</button>
    </div> 
</body>
</html>