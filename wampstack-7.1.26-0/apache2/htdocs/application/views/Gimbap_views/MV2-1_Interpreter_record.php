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
    <title>English Muffin Player</title>
    <style>
        a{
            text-decoration: none;
        }
        
        .btn {
            all:unset;
            height : 50px;
            padding: 5px;
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: rgb(43, 43, 43);
            /* text-shadow: 0px 0px 10px rgba(0,0,0,0.2);*/
            /* box-shadow: 0 0 20px #eee; */
            border-radius: 10px;
            font-size : 20px;
            font-weight: bold;
            margin-top : 50px;
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

        .btn-3:hover{
            cursor: pointer;
        }
        .btn-3:active{
            position : relative;
            top : 2px;
        }

        .text-setting {
            text-align: center;
            font-weight: bold;
        }
        .player_contents{

        }

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
    <section id="study-player" data-role="page" data-theme="b">
        <header data-role="header" style="text-align: center;">
            <img style="width:200px; margin:10px;" src="https://postfiles.pstatic.net/MjAxOTAyMTJfMTU5/MDAxNTQ5OTQ4MDYwMzIz.MknGc99ZDSfi6IYGPlDD8Urv_1Yh_8McCdNdKMWll6kg.VrefzJMmW0x6WXlXjuF7m-QBCIZxQL-dwCO24hsqZxog.PNG.wxyz03002/KakaoTalk_20190212_140234017.png?type=w580">
        </header>                   
        <div class="content" data-role="content">
            <form id="study-playerForm">
                <div class="player_contents">
                    <div class="player_header">
                        일상 영어 50문장
                    </div>
                    <div class="player_body">
                        <div class="loading_bar">
                            <div id="loading_progress"></div>
                        </div>
                        <div class="edu_content">
                            Where is the station?
                        </div>
                        <img src="C:\Users\imaicrew\Desktop\microphone-3404243_960_720.png" style="width : 80px;">
                        <div class="speaking_btn_div">
                            <div class="speaking_btn btn btn-3">누르고 말하기</div>
                        </div>
                    </div>
                    <div class="player_footer">
                        <div class="arrow_btn"><i class="left"></i></div>
                        <div class="arrow_btn"><i class="right"></i></div>
                    </div>
                </div>
                <div class="end_btn_div"><a href=“­#”><button class="ui-btn ui-corner-all ui-btn-a end_btn btn btn-1">종료</button></a></div>
            </form>
        </div>
        <footer data-role="footer" style="text-align: center; margin : 5px;">Made by Co-Knit</footer>

        <script>
            $('.speaking_btn_div').click(function(){
                var elem = document.getElementById("loading_progress");   
                var width = 1;
                var id = setInterval(frame, 10);
                function frame() {
                    if (width >= 70) {
                        clearInterval(id);
                    } else {
                        width++; 
                        elem.style.width = width + '%'; 
                    }
                }
            });

            $(".arrow_btn").click(function(){
                $.mobile.navigate("#study-score");
            });
        </script>
    </section>



    <section id="study-score" data-role="page" data-theme="b">
        <header data-role="header" style="text-align: center;">
            <img style="width:200px; margin:10px;" src="<?php echo base_url();?>/img/gimbap_images/header_muffin.png">
        </header>                   
        <div class="content" data-role="content">
            <form id="study-scoreForm">
                <div class="player_contents">
                    <div class="player_header">일상영어</div>
                    <div class="player_body" style="height:400px;">
                        <div class="loading_bar">
                            <div id="loading_progress" style="width:100%;"></div>
                        </div>
                        <div class="score">
                            <div class="score_announcement">Good Job!</div>
                            <div class="score_rank"><div id="rank">A</div></div>
                            <div class="score_number">29 / 30</div>
                        </div>
                    </div>
                    <div class="player_footer" style="height:120px;">
                        <div class="score_btn"><a href=“player_UI.html”><button class="ui-btn ui-corner-all ui-btn-a end_btn btn btn-2">다시하기</button></a></div>
                        <div class="score_btn"><a href=“­#”><button class="ui-btn ui-corner-all ui-btn-a end_btn btn btn-5">학습종료</button></a></div>
                    </div>
                </div>
            </form>
        </div>
        <footer data-role="footer" style="text-align: center; margin : 5px;">Made by Co-Knit</footer>

        
    </section>
</body>
</html>
