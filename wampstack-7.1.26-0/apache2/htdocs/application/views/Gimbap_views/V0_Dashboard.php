<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>test_dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            background-color : rgb(53, 53, 53)
        }

        .a_tag {
            text-decoration: none;
        }

        .dashboard{
            display : flex;
            flex-direction: row;
        }
        
        .blank {
            flex-grow : 6;
            flex-shrink : 1;
        }

        .middle {
            flex-basis : 1000px;
            flex-shrink: 0;
            flex-grow : 3;
        }

        .title_area{
            text-align: center;
        }

        .menu_area {
            display : flex;
            flex-direction : row;
            text-align: center;
        }

        .menu-box {
            margin : 5px;
        }

        #logo{
            margin-top : 50px;
            margin-bottom : 50px;
            width : 900px;
        }


        .btn {
            line-height: 50px;
            height: 500px;
            text-align: center;
            width: 450px;
            cursor: pointer;
        }

        .menu_btn {
            color: #FFF;
            transition: all 0.5s;
            position: relative;
        }
        .menu_btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            background-color: rgba(255,255,255,0.1);
            transition: all 0.3s;
            border-radius: 10px;
        }
        .menu_btn:hover::before {
            opacity: 0 ;
            transform: scale(0.5,0.5);
        }
        .menu_btn::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            opacity: 0;
            transition: all 0.3s;
            border: 3px solid rgba(255,255,255,0.5);
            border-radius: 10px;
            transform: scale(1.2,1.2);
        }
        .menu_btn:hover::after {
            opacity: 1;
            transform: scale(1,1);
        }

        .menu_blank {
            flex-grow : 1;
            flex-shrink:0;
            width : 70px;
        }

        .menu_bar {
            border : 2px solid rgb(197, 197, 197);
            width : 300px;
        }

        .menu_info {
            margin-top : 40px;
            margin-left : 40px;
            margin-right : 40px;
            font-size : 20px;
        }

        .menu_title {
            padding-top:80px; 
            font-size: 40px;
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <div class="blank"></div>
        <div class="middle">
            <div class="title_area"><img id="logo" src="<?php echo base_url();?>/img/gimbap_images/dash_muffin.png"></div>
            <div class="menu_area">
                    <a class="a_tag" href="./gimbap_manage">
                        <div class="menu_box">
                                
                                    <div class="btn menu_btn playlist_btn">
                                    <div class="menu_title">Playlist 관리</div>
                                    <hr class="menu_bar">
                                    <div class="menu_info">
                                        <p>학습기의 수업 내용인 Playlist를<br>생성, 수정 및 삭제할 수 있습니다.
                                        <br>또한 Excel 파일을 활용하여<br>Contents를 생성하거나<br>삭제할 수 있습니다.</p>
                                    </div>
                            </div>
                        </div>
                    </a>
                    <div class="menu_blank"></div>
                    <a class="a_tag" href="./member_manage">
                        <div class="menu_box">
                                
                                    <div class="btn menu_btn member_btn">
                                    <div class="menu_title">회원 관리</div>
                                    <hr class="menu_bar">
                                    <div class="menu_info">
                                            <p>학습기를 사용하고 있는 학생들의<br>개인정보 , 학습기록 등을<br>조회할 수 있습니다.</p>
                                    </div>
                            </div>
                        </div>
                    </a>
            </div>
        </div>
        <div class="blank"></div>
    </div>

    
</body>
</html>