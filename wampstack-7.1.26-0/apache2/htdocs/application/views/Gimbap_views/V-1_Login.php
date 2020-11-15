<html>
<meta charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<head>
    <style>
        body{
            background-color : rgb(51, 51, 51);
        }

        a{
            text-decoration: none;
        }
        #login_page{
            display : flex;
            flex-direction: row;
        }

        .blank {
            flex-shrink : 1;
            flex-grow : 1;        
        }

        .middle {
            flex-grow : 2;
            flex-shrink : 0;
            flex-basis : 1100px;
            padding-top : 150px;
            padding-bottom : 150px;
        }

        .login_section {
            background-color :rgb(92, 92, 92);
            width : 1100px;
            height : 600px;
            border-radius: 50px;
            margin : auto;
            display : flex;
            flex-direction: row;
        }

        .section-left {
            flex-shrink : 0;
            flex-grow : 1;
            text-align : center;
            padding-top : 80px;
        }

        .section-right {
            flex-shrink : 0;
            flex-grow : 1;
            text-align : center;
            padding-top : 110px;
            background-color: rgb(82, 82, 82);
            border-top-right-radius: 50px;
            border-bottom-right-radius: 50px;
        }

        .inputbox {
            all:unset;
            height : 50px;
            width : 300px;
            border-radius : 50px;
            background-color : rgb(238, 238, 238);
            margin : 10px;
            font-weight: bold;
        }

        .inputbox:hover {
            all:unset;
            height : 50px;
            width : 300px;
            border-radius : 50px;
            background-color : rgb(219, 219, 219);
            margin : 10px;
        }
        
        button {
            all:unset;
        }  
        
        .btn {
            width : 280px;
            height : 50px;
            margin: 5px;
            padding: 5px;
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;
            box-shadow: 0 0 20px #eee;
            border-radius: 10px;
            font-size : 20px;
            font-weight: bold;
            margin-bottom: 50px;
        }


        .btn:hover {
        background-position: right center; /* change the direction of the change here */
        }

        .btn-1 {
        background-image: linear-gradient(to right, #f6d365 0%, #fda085 51%, #f6d365 100%);
        }

        .btn-2 {
        background-image: linear-gradient(to right, #fbc2eb 0%, #a6c1ee 51%, #fbc2eb 100%);
        }

        .btn-3 {
        background-image: linear-gradient(to right, #84fab0 0%, #8fd3f4 51%, #84fab0 100%);
        }

        .btn-4 {
        background-image: linear-gradient(to right, #a1c4fd 0%, #c2e9fb 51%, #a1c4fd 100%);
        }

        .btn-5 {
        background-image: linear-gradient(to right, #ffecd2 0%, #fcb69f 51%, #ffecd2 100%);
        }

        

    

    </style>
    </head>

<body>
    <div id="login_page">
        <div class="blank"></div>
        <div class="middle">
            <div class="login_section">
                <div class="section-left">
                    <img style="width:600px;"src="<?php echo base_url();?>/img/Gimbap_images/title_muffin.png">
                </div>
                <div class="section-right">
                     <form method="POST" action="./pc_mode">
                        <input class="inputbox" type="input" name="userID" maxlength="15" placeholder="아이디"><br>
                        <input class="inputbox" type="password" name="userPASSWORD" minlength="5" maxlength="15" placeholder="비밀번호" style="margin-bottom : 20px;"><br>
                        <button class="btn btn-1" id="login_button" onclick="submit">로그인</button>
                    </form>
                    <a href="./sign_up_pc"><button class="btn btn-2">회원가입</button></a>
                </div>
            </div>
            <div style="text-align : center;"><span style="color:gray;font-weight: bold;">Made by Co-Knit</span></div>
          </div>
        <div class="blank"></div>
    </div>
    

</body>
</html>