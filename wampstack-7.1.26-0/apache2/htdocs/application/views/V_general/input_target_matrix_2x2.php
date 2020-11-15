<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>2x2행렬</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            background-color : rgb(53, 53, 53)
        }

        .head{display: block; padding: 80px;}
        .foot{display: block; padding: 80px;}
        .body{display: block; padding: 80px;}

        .input_name{position:relative; left:610px; width: 130px;}
        .input_name::placeholder{color: black;}
        .input{width: 50px; height: 50px; position: relative; left: 600px; margin: 10px; text-align: center; font-size: 30px;}
        .input_space{display: block; padding: 10px;}

        h1{text-align: center; color: white}
        .btn{padding: 5px 31px; background-color: coral; border-radius: 5px; position: relative; left: 610px; border-color: coral; text-align: center; color: white; font-size: 23px;}
        .btn:hover{background-color: orange; border-color: orange;}

        .size{display:none;}
    </style>
</head>
<body>
    <div class="head"></div>
    <div class="body">
        <div><h1>2x2 행렬을 입력하세요</h1></div>
        <form action="./get_original_matrix_data" method="post" class="form_position">
            <input type="text" class="input_name" placeholder="행렬 이름" name="name"><br><br>
            <input type="text" class="input" name="1">
            <input type="text" class="input" name="2">
            <br><span class="input_space"></span>
            <input type="text" class="input" name="3">
            <input type="text" class="input" name="4">
            <br><br>
            <input class="size" name="size" value="<?=$size?>">
            <button type="submit" class="btn">보내기</button>
        </form>
    </div>
    <div class="foot"></div>
</body>
</html>