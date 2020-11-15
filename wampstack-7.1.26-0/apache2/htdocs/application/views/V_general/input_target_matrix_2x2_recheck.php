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

        .head{display: block; padding: 49px;}
        .foot{display: block; padding: 80px;}
        .body{display: block; padding: 49px;}

        .input_name{position:relative; left:660px; width: 130px; color: white; text-align:left;}
        .input_name::placeholder{color: black;}
        .input{width: 50px; height: 50px; position: relative; left: 650px; margin: 10px; text-align: center; font-size: 30px; display: inline-flex; color:white;}
        .input_space{display: block; padding: 10px;}
        .btn_space{display: inline-flex; padding: 10px;}

        h1{text-align: center; color: white}
        .btn{padding: 5px 20px; background-color: coral; border-radius: 5px; position: relative; left: 610px; border-color: coral; text-align: center; color: white; font-size: 23px;}
        .btn:hover{background-color: orange; border-color: orange;}
        #btn-ing{position:relative; left:60px; }
        #matrix_name{display:none;}
        .size{display:none;}
    </style>
</head>
<body>
    <div class="head"></div>
    <div class="body">
        <div><h1>입력한 행렬</h1></div><br>
        <?php
        if(isset($matrix))
        {
        ?>
        <h2 class="input_name"><?=$name?></h2><br>
        <h4 class="input"><?=$matrix[1][1]?></h4>
        <h4 class="input"><?=$matrix[1][2]?></h4>
        <br><span class="input_space"></span>
        <h4 class="input"><?=$matrix[2][1]?></h4>
        <h4 class="input"><?=$matrix[2][2]?></h4>
        <br><br>
        <?php } ?>
        
        
        <a href="./calculate_and_save_inverse_matrix"  id="btn-ing" ><button class="btn"type="submit">진행</button></a>
        
    </div>
    <div class="foot"></div>
</body>
</html>