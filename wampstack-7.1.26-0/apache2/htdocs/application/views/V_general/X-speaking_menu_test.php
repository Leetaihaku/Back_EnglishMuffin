<html>

<head>
    <style>
        @media screen (min-width:0%) and (max-width:100%){
            .totalbox{display:none;}
            .menulist{display:none;} 
            .user_button_list{display:none;}
            .watermark{display:none;}
            .menu{display:none;}
            .menu:hover{display:none;}
            .user_button_1{display:none;}
            .user_button_2{display:none;}
        }

        .totalbox{display:block; position:absolute; width:100%; padding: 20px 20px 20px 20px; border-bottom: 1px solid gray;}

        .menulist{display:inline-block; width: 79%;}


        .user_button_list{display:inline-block; width: 20%;}


        .watermark {
            display: inline-block;
            font-size: 18px;
            color: gray;
            padding: 0px 50px 0px 10px;
        }
        

        .menu {
            display: inline-block;
            font-size: 15px;
            color: black;
            padding: 20px;
            background-color: white;
            border: none;
            border-radius: 2px;
        }


        .menu:hover{
            display: inline-block;
            font-size: 15px;
            color: white;
            padding: 20px;
            background-color: skyblue;
            border: none;
            border-radius: 2px;
        }
        .user_name{
            display: inline-block;
            font-size: 12px;
            color: black;
            padding: 0px 10px 0px 10px;
        }


        .user_button_1{
        display: inline-block;
        font-size: 12px;
        color: white;
        padding: 5px;
        border-radius: 2px;
        border: none;
        background-color: skyblue;}


         .user_button_2{
        display: inline-block;
        font-size: 12px;
        color: white;
        padding: 5px;
        border-radius: 2px;
        border: none;
        background-color: gray;}
    </style>
</head>

<body>
    <div class="totalbox">
        <div class="menulist">
            <h1 class="watermark">X speaking 관리자</h1>
            <input type="button" class="menu" value="수업과제">
            <input type="button" class="menu" value="선생관리">
            <input type="button" class="menu" value="회원관리">
        </div>
            <div class="user_button_list">
            <h3 class="user_name">홍성빈 님</h3>
            <input type="button" class="user_button_1" value="회원수정">
            <input type="button" class="user_button_2" value="로그아웃">
        </div>
    </div>
</body>

</html>