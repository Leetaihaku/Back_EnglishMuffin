<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--JQuery CDN-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--JQuery Mobile CDN-->
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <!--W3School CDN-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>English Muffin Player</title>
    <style>
        a{
            text-decoration: none;
        }
        
        .btn {
	        all:unset;
            height : 50px;
            margin: 5px;
            padding: 5px;
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;
            /* text-shadow: 0px 0px 10px rgba(0,0,0,0.2);*/
            /* box-shadow: 0 0 20px #eee; */
            border-radius: 10px;
            font-size : 20px;
            font-weight: bold;
            /* margin-bottom: 50px; */
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
            background-image: linear-gradient(to right, #fcdfb6 0%, #faa184 51%, #fcdfb6 100%);
        }

        .flex-grow{
            flex-grow : 1;
        }

        .text-setting {
            text-align: center;
            font-weight: bold;
        }



        /* 이 밑으로 학습페이지 CSS*/
        .player_header {
            background-color : rgb(201, 74, 0);
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            height : 60px;
            color : white;
            text-align: center;
            font-size : 30px;
            padding-top : 15px;
        }

        .player_body{
            height : 500px;
            background-color :rgb(43, 43, 43);
            text-align: center;
        }

        .player_footer{
            height : 70px;
            background-color :rgb(43, 43, 43);
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
            display: flex;
            padding-top : 20px;
        }

        .loading_bar {
            height : 5px;
            background: black;
        }

        .end_btn_div {
            float : left;
            width : 100px;
        }

        .speaking_btn_div{
            width : 300px;
            font-size : 30px;
            font-weight: bolder;
            margin : auto;
            margin-top : 40px;
        }
        .speaking_btn {
            width : 200px;
            padding : 10px;
        }

        #loading_progress{
            width: 1%;
            height: 5px;
            background-color: rgb(107, 223, 111);
        }

        .edu_content{
            margin-top : 80px;
            margin-bottom : 100px;
            font-size : 30px;
        }

        i {
            border: solid rgb(255, 255, 255);
            border-width: 0 5px 5px 0;
            display: inline-block;
            padding: 6px;
            margin: 15px;
        }

        .right {
            transform: rotate(-45deg);
            -webkit-transform: rotate(-45deg);
        }

        .left {
            transform: rotate(135deg);
            -webkit-transform: rotate(135deg);
        }
        
        .arrow_btn{
            text-align: center;
            width : 50px;
            height : 50px;
            border-radius: 30px;
            background-color : rgb(32, 32, 32);
            flex-grow : 1;
            margin-right : 5px;
            margin-left : 5px;
        }

        .arrow_btn:active{
            background-color : rgb(26, 26, 26);
            position :relative;
            top : 2px;
        }

        .score_btn{
            flex-grow : 1;
            margin-right : 5px;
            margin-left : 5px;
        }

        .score_announcement{
            margin : 30px;
            font-size : 30px;
            font-weight : bold;
        }

        .score_rank{
            width : 180px;
            height : 180px;
            border-radius : 100px;
            background-color : rgb(29, 29, 29);
            text-align :center;
            margin : auto;
            margin-bottom : 60px;
        }

        #rank{
            font-size : 100px;
            background: #55ffaa;
            background: -webkit-linear-gradient(left, #55ff55, #55ffff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: bold;
            text-shadow : none;
            padding-top: 15px;
        }

        .score_number{
            font-size : 20px;
            color : silver;
        }
    </style>
</head>
<body>
        <section id="login" data-role="page" data-theme="b">
                <header data-role="header" style="text-align: center;"><img style="width:250px; margin:10px;" src="<?php echo base_url();?>/img/Gimbap_images/title_muffin.png"></header>                   
                <div class="content" data-role="content">
                    <h2>로그인</h2>
                    <form id="loginForm" method="post" action="./mobile_mode">
                        <ul data-role="listview" data-inset="true">
                            <li class="">
                                <label for="userid">아이디</label>
                                <input name="userid" id="userid" type="text" value="" data-theme="a" class="text-setting">
                                <label for="userpw">비밀번호</label>
                                <input name="userpw" id="userpw" type="password" value="" data-theme="a" class="text-setting">
                            </li>
                            <li class="">
                                <fieldset class="">
                                    <div class=""><button class="ui-btn ui-corner-all ui-btn-a btn btn-5" style="color: black; border-radius:10px;" id="login_btn">로그인</button></div>
                                </fieldset>
                                <fieldset class="">
                                    <div class=""><a href=“­#register”><button class="ui-btn  ui-btn-a btn btn-2 register_btn" style="color: black" rel=­“ex­ter­nal­”>회원가입</button></a></div>
                                </fieldset>
                            </li>
                        </ul>
                    </form>
                </div>
                <footer data-role="footer" style="text-align: center; margin : 5px;">Made by Co-Knit</footer>
            </section>
                   
            <script type="text/javascript">
                $('.register_btn').click(function(){
                    $.mobile.changePage("#register");
                });
            </script>

       
           <section id="register" data-role="page" data-theme="b">
               <header data-role="header" style="text-align: center;"><img style="width:200px; margin:10px;" src="<?php echo base_url();?>/img/Gimbap_images/header_muffin.png">
            </header>                   
               <div class="content" data-role="content">
                   <h2>회원가입</h2>
                   <form id="registerForm">
                       <ul data-role="listview" data-inset="true">
                            <li class="">
                                <label for="regid">아이디 :</label>
                                <input name="regid" id="regid" type="text" value="" data-clear-btn="true" maxlength="15">
                            </li>
                            <li class="">
                                <label for="regpw">비밀번호 :</label>
                                <input name="regpw" id="regpw" type="password" value="" data-clear-btn="true" maxlength="15">
                            </li>
                            <li class="">
                                <label for="name">성함 :</label>
                                <input name="name" id="name" type="text" value="" data-clear-btn="true">
                            </li>
                            <li class="">
                                <label for="birthday gender">주민등록번호 :</label>
                                <div style="display:flex;">
                                    <div style="width : 80px; "><input class="input-birthday" name="birthday" id="birthday" type="text" value="" maxlength="6"></div>
                                    <div style="padding : 5px; padding-top : 15px;">ㅡ</div>
                                    <div style="float : right; width : 30px;"><input name="gender" id="gender" type="text" value="" maxlength="1"></div>
                                    <div style="padding : 5px; padding-top : 15px; font-size : 25px;">******</div>
                                </div>
                            </li>
                            <li class="">
                                <label for="address">주소 :</label>
                                <textarea name="address" id="address" rows="8" cols="40"></textarea>
                            </li>
                            <li class="">
                                <label for="phone_number">휴대폰 번호 :</label>
                                <input name="phone_number" id="phone_number" type="text" value="" data-clear-btn="true">
                            </li>
                            <li class="ui-field-contain">
                                <label for="flip">학습 알림 :</label>
                                <select name="flip" id="study_alarm" data-role="slider">
                                   <option value="off">Off</option>
                                   <option value="on">On</option>
                                </select>
                            </li>

                           <li class="ui-field-contain">
                               <div><label class="select" for="select-choice-1">영어 회화를 배우는 목적은?</label></div>
                               <div>
                                   <select name="select-choice-1" id="select-choice-1">
                                   <option value="1">외국인과 대화를 하고 싶어서!</option>
                                   <option value="2">해외 업무 수행을 위해!</option>
                                   <option value="3">자막 없이 외국 콘텐츠를 즐기고 싶어서!</option>
                                   <option value="etc">기타</option>
                               </select>
                            </div>
                           </li>
                           <li class="ui-body ui-body-b">
                               <div style="display : flex">
                                    <div class="flex-grow"><button class="ui-btn ui-corner-all ui-btn-a btn btn-3" id="submit">가입하기</button></div>
                               </div>
                           </li>
                       </ul>
                   </form>
               </div>
               <footer data-role="footer" style="text-align: center; margin : 5px;">Made by Co-Knit</footer>
           </section>
</body>
</html>