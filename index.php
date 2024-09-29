<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MNCHS EARIA</title>
    <style>
        body {
            background-image: url("./UI/1.png");
            background-size: 100%;
        }
        .btnhome{
            margin-top: 26%;
            display: flex;
           justify-content: center;
        }
        .btnhome button{
            width: 300px;
            height: 150px;
            border-radius: 25px;
            background-color: #90c5f6;
            border-color: #90c5f6;
            font-family: copperplate gothic;
            font-size: 40px;    
            color: white;
            text-align: center;
            margin-left: 15px;
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
        <button class="btn1"><a class="a1" href="./admin/admin.php">ADMIN</a></button>
        <button class="btn2"><a class="a2" href="./utility/utility.php">UTILITY PERSONNEL</a></button>
        <button class="btn3"><a class="a3" href="./user/user.php">USER</a></button>
    </div> 
</body>
</html>