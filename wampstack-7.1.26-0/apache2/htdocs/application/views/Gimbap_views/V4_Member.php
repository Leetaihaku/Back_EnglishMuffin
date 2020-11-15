<!DOCTYPE html>
<html>

    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/innks/NanumSquareRound/master/nanumsquareround.min.css">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>

    <title>김밥제작소 홈페이지</title>

        <style>
        body {
            background-color: rgb(34, 34, 34);
        }

        button:focus {
            outline: none;
        }

        #top_bar {
            background-color: rgb(87, 87, 87);
            z-index: 1;
            width: 100%;
            display : flex;
        }

        .title:hover {
            text-decoration: none;
        }

        .top_title {
            all: unset;
            background-color: rgb(112, 111, 111);
            padding-top: 7px;
            padding-bottom: 7px;
            padding-left: 10px;
            padding-right: 10px;
            border-right: 1px solid black;
            font-family: "타이포_쌍문동", "휴먼둥근헤드라인";
            font-size: 50px;
            color: whitesmoke;
            flex-shrink: 0;
            white-space: nowrap;
        }

        .menu_a:hover {
            text-decoration: none;
        }

        .top_menu {            
            all: unset;
            font-family: 'NanumSquareRound', sans-serif;
            font-size: 30px;
            padding-top: 0px;
            padding-left: 40px;
            padding-right: 40px;
            border-right: 1px solid black;
            color: whitesmoke;
            flex-shrink: 0;
            white-space: nowrap;
            flex-grow: 0;
            cursor: pointer;
            height: 100%;
        }

        .top_menu:hover {
            background-color: rgb(155, 154, 154);
        }

        .blank_menu {
            width: 60px;
            flex-grow: 5;
        }

        .user_info {
            all: unset;
            font-family: '푸른전남', 'NanumSquareRound',sans-serif;
            font-size: 28px;
            padding-left: 20px;
            padding-right: 20px;
            color: whitesmoke;
            font-weight: bold;
            flex-shrink: 0;
            text-align: right;
        }

        .user_info:hover {
            background-color: rgb(110, 110, 110);
            cursor: pointer;
        }

        .user_img {
            padding-bottom: 3px;
            width: 45px;
            border-radius: 25px;
        }

        .logout_btn {
            width: 130px; 
            height: 60px;
            border: 0px none;
            background-color: rgb(255, 126, 126);
            position: relative;
            right: 0px;
            top: 90px;
            display: none;
            z-index: 5;
            flex-shrink: 1;
            flex-basis: 200px;
            white-space: nowrap;
        }

        .logout_btn:hover {
            background-color: rgb(255, 81, 81);
            cursor: pointer;
        }

        .logout_font {
            margin-left: 60px;
            margin-top: 13px;
            font-size: 20px;
            font-weight: bold;
            color: whitesmoke;
            white-space: nowrap;
        }

        .page_main {
            display: flex;
            flex-direction: row;
        }

        .main_center {
            margin-top: 5px;
            flex-grow : 2;
            flex-shrink: 0;
            flex-basis: 500px;
            white-space: nowrap;
        }

        .main_list {
            background: rgb(78, 78, 78);
            height: 715px;
            border-radius: 20px;
            position: relative;
            white-space: nowrap;
        }
        
        .blank_div {
            flex-shrink: 1;
            flex-grow : 1;
        }

        .user_title {
            font-family: "나눔스퀘어라운드";
            font-size: 30px;
            position: relative;
            color: rgb(216, 216, 216);
            font-weight: bold;
            top: 10px;
            left: 0px;
        }

        .user_bar {
            border: solid 2px rgb(150, 146, 146);
            border-radius: 10px;
            top: 2px;
            flex-basis: 20px;
            position: relative;
        }
        
        .user_list {
            background-color: rgb(255, 255, 255);
            width: 94%;
            height: 590px;
            border-radius: 20px;
            margin-top: -10px;
            margin-left: 30px;
            margin-bottom: 0px;
            position: relative;
            overflow-y: scroll;
            z-index: 1;
        }

        .top_blank {
            height: 35px;
        }

        .pre_div {
            display: flex;
            height: 75px;
            width: 100%;
        }

        .pre_blank_div {
            position: relative;
            flex-grow: 0.1;
        }

        .user_sort {
            position: relative;
            flex-grow: 2;
        }

        .select_menu {
            width: 120px;
            height: 40px;
            font-size: 20px;
            margin-left: 50px;
        }

        .search_text {
            all: unset;
            border: solid 1px black;
            background-color: white;
            border-radius: 3px;
            margin-left: 50px;
            width: 770px;
            height: 40px;
        }

        .search_btn {
            all: unset;
            margin-left: -2px;
            text-align: center;
            border: solid 1px black;
            border-radius: 3px;
            background-color: rgb(134, 191, 230);
            width: 40px;
            height: 40px;
        }

        .search_icon {
            width: 40px;
            height: 40px;
        }

        .list_bar {
            border: solid 1px rgb(150, 146, 146);
            border-radius: 10px;
            margin-top: 15px;
            width: 90%;
        }

        .col_list {
            margin-left: 20px;
            margin-right: 30px;
            text-align: center;
        }

        .col_name {
            all: unset;
            width: 140px;
            margin-left: 10px;
            margin-right: 10px;
            font-family: "나눔";
            font-weight: bold;
        }

        .member_sex .member_rank .member_class .member_address .member_phone {
            display: none;
        }

        .member_details {
            all: unset;
            width: 120px;
            margin-left: 20px;
            margin-right: 20px;
            font-family: "나눔";
            font-weight: bold;
            border-radius: 5px;
            color: rgb(115, 165, 194);
        }

        .member_details:hover {
            cursor: pointer;
            color: whitesmoke;
            background-color: rgb(115, 165, 194);
        }

        .list_middle_bar {
            border: solid 2px rgb(150, 146, 146);
            border-radius: 10px;
            margin-top: 15px;
            margin-bottom: 5px;
            width: 90%;
        }

        .member_info {
            padding-top: 5px;
            padding-bottom: 5px;
            margin-left: 20px;
            margin-right: 30px;
            border-radius: 15px;
            text-align: center;
        }

        .member_info:hover {
            background-color: rgb(224, 221, 221);
        }

        .underbar {
            border: solid 1px rgb(171, 171, 172);
            border-radius: 25px;
            margin-top: 5px;
            margin-bottom: 5px;
            width: 90%;
        }

        .list_btn_all {
            margin-top: 10px;
            text-align: center;
        }

        .list_btn {
            all: unset;
            padding-left: 10px;
            padding-right: 10px;
            margin-left: 5px;
            margin-right: 5px;
            border-radius: 3px;
            font-size: 21px;
            font-family: "나눔";
            background-color: rgb(228, 224, 224);
        }

        .list_btn:hover {
            cursor: pointer;
        }

        .pre_list {
            all: unset;
            padding-left: 5px;
            padding-right: 8px;
            margin-left: 5px;
            margin-right: 5px;
            border-radius: 3px;
            font-size: 21px;
            font-family: "나눔";
            background-color: rgb(228, 224, 224);
        }

        .pre_list:hover {
            cursor: pointer;
        }

        .next_list {
            all: unset;
            padding-left: 8px;
            padding-right: 5px;
            margin-left: 5px;
            margin-right: 5px;
            border-radius: 3px;
            font-size: 21px;
            font-family: "나눔";
            background-color: rgb(228, 224, 224);
        }

        .next_list:hover {
            cursor: pointer;
        }

        .hidden {
            display: none;
        }

        #wrapper {
            text-align: center;
            width: 500px;
            margin: auto;
        }

        #style-1::-webkit-scrollbar-track {
            box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            border-radius: 25px;
            background-color: #F5F5F5;
        }

        #style-1::-webkit-scrollbar {
            position: relative;
            left: 10px;
            width: 12px;
            background-color: silver;
            border-radius: 25px;
        }

        #style-1::-webkit-scrollbar-thumb {
            border-radius: 25px;
            box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
            background-color: #555;
        }

        .list-group-item {
            color: black;
            font-weight: bold;
            font-size: 20px;
        }

        @import "bourbon";

        button {
                all : unset;
        }

        .md-modal {
                margin : auto;
                position: fixed;
                top : 0;
                left: 0;
                right: 0;
                height: 969px;
                z-index: 2000;
                visibility: hidden;
                -webkit-backface-visibility: hidden;
                -moz-backface-visibility: hidden;
                backface-visibility: hidden;
                display : flex;
                overflow-y : auto;
                max-height: calc(100vh - 0px);
        }

        .md-show {
                visibility: visible;
        }

        .md-overlay {
                position: fixed;
                width: 100%;
                height: 969px;
                visibility: hidden;
                top: 0;
                left: 0;
                z-index: 1000;
                opacity: 0;
                background: rgba(#e4f0e3, 0.8);
                -webkit-transition: all 0.3s;
                -moz-transition: all 0.3s;
                transition: all 0.3s;
        }

        .md-show ~ .md-overlay {
                opacity: 1;
                visibility: visible;
        }

        .md-effect-12 .md-content {
                -webkit-transform: scale(0.8);
                -moz-transform: scale(0.8);
                -ms-transform: scale(0.8);
                transform: scale(0.8);
                opacity: 0;
                -webkit-transition: all 0.3s;
                -moz-transition: all 0.3s;
                transition: all 0.3s;
        }

        .md-show.md-effect-12 ~ .md-overlay {
                background-color: rgb(223, 222, 222);
        } 

        .md-effect-12 .md-content h3,
        .md-effect-12 .md-content {
                background: transparent;
        }

        .md-show.md-effect-12 .md-content {
                -webkit-transform: scale(1);
                -moz-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(1);
                opacity: 1;
        }

        .member_info_header{
                padding-top : 15px; 
                
        }

        .member_info_title{
                color : rgb(73, 73, 73);
                font-size : 30px;
                text-align: center;

        }
        
        #modal_line {
                border : solid 1px rgb(73, 73, 73);
                width : 100%;
        }

        .profile_img {
                width : 230px;
                height : 230px;
                border-radius : 10px;
        }

        .profile {
                display : flex;
                flex-direction: row;
        }

        .profile_info {
                float : right;
                flex-basis : 500px;
                flex-shrink : 0;
                display : flex;
                flex-direction : row;

        }

        .profile_info_key{
                color : rgb(70,70,70);
                font-size : 18px;
                margin-left : 20px;
                padding-right : 20px;
                width : 80px;
        }

        .profile_info_data{
                width : 900px;
                font-size : 18px;
                margin-left : 30px;
        }

        .key_div {
                margin-top : 9px;
                margin-bottom : 9px;
                white-space : nowrap;
        }

        .data_div {
                margin-top : 7px;
                margin-bottom : 7px;
                font-weight: bold;
        }

        .md-content {
                height : 900px;
        }

        .nav_list_btn:hover{
                text-decoration: none;
                color : white;
        }

        .input_box {
                border : none;
                border-radius : 5px;
                padding-left : 10px;
                font-weight: bold;
        }

        #close { 
                float : right; 
                display:inline-block; 
                padding:2px 5px; 
                font-weight: 700; 
                text-shadow: 0 1px 0 #fff; 
                font-size: 1.7rem; 
                color : rgb(219, 31, 31);
        } 
        #close:hover { 
                border: 0; 
                cursor:pointer; 
                opacity: .75; 
        }

        .member_data_save_btn{
                float : right; 
                display:inline-block; 
                padding:2px 5px; 
                height : 50px;
                margin-top : 200px;
                width : 100px;

        }

        .member_data_save_btn:active{
                background-color: rgb(0, 70, 0);
                position : relative;
                top : 2px;

        }

        .member_info_body_bottom {
                margin-top : 10px;
                width : 100%;
                height : 520px;
                background-color : rgb(88, 88, 88);
                border-radius : 10px;
        }

        .blank{
                flex-grow: 2;
                flex-shrink : 1;
        }

        .middle{
                flex-basis : 900px;
                flex-grow : 8;
                flex-shrink :0;
        }
        .nav_bar {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #333;
                display: flex;
                border-top-right-radius: 10px;
                border-top-left-radius: 10px;
        }

        .nav_list {
                float: left;
                flex-grow : 1;
        }

        .nav_list_btn {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
        }

        .nav_list_btn:hover {
                background-color: rgb(70, 69, 69);
        }

        .circle {
            width: 100px;
            margin: 6px 6px 20px;
            display: inline-block;
            position: relative;
            text-align: center;
            line-height: 1.2;
        }

        .circle strong {
            position: absolute;
            top: 30px;
            left: 0;
            width: 100%;
            text-align: center;
            line-height: 40px;
            font-size: 30px;
            font-weight: bold;
            color: #fff;
        }

        .circle strong i {
            font-style: normal;
            font-size: 0.6em;
            font-weight: normal;
        }
        </style>
    </head>
    <body>
        <div id="top_bar">
            <a href="./pc_mode" class="title"><button class="top_title"><img style="width:300px; margin-left : 10px; margin-right : 10px;" src="<?php echo base_url();?>/img/gimbap_images/header_muffin.png"></button></a>
            <a href="./member_manage" class="menu_a"><button class="top_menu">회원 관리</button></a>
            <a href="./gimbap_manage" class="menu_a"><button class="top_menu">Playlist 관리</button></a>
            <span class="blank_menu"></span>
            <button class="user_info">관리자님 <img class="user_img" src="<?php echo base_url();?>/img/gimbap_images/user_muffin.png"></button>
            <div class="logout_btn"><div class="logout_font">로그아웃</div></div>
        </div>
        <div class="page_main">
            <div class="blank_div"></div>
            <div class="main_center">
                <div>
                    <ul class="user_title">
                        <li><span>회원 관리</span></li>
                    </ul>
                    <hr class="user_bar">
                </div>
                <div class='main_list'>
                    <div class="top_blank"></div>
                    <div class="pre_div">
                        <div class="pre_blank_div"></div>
                        <div calss="user_sort">
                            <select class="select_menu">
                                <option value="정렬">정렬</option>
                                <option value="이름순">이름순</option>
                                <option value="상태순">상태순</option>
                                <option value="등록일순">등록일순</option>
                            </select>
                        </div>
                        <input class="search_text" type="text" placeholder=" 이름 검색...">
                        <button class="search_btn"><img class="search_icon" src="<?php echo base_url();?>/img/gimbap_images/sauron.gif"></button>
                    </div>
                    <div class="user_list" id="style-1">
                        <hr class="list_bar">
                        <div class="col_list">
                            <button class="col_name">회원 이름</button>
                            <button class="col_name">생년월일</button>
                            <button class="col_name">아이디</button>
                            <button class="col_name">회원상태</button>
                            <button class="col_name">등록일</button>
                            <button class="col_name">정보</button>
                        </div>
                        <hr class="list_middle_bar">
                        <?php
                        $member_number = $member_count;
                        for ($i=1; $i <= $member_number; $i++) {
                            if(isset($member_data[$i])) {
                        ?>
                                <div class="member_info" data-sort="<?=$i?>">
                                    <button class="col_name member_name"><?=$member_data[$i]['name']?></button>
                                    <button class="col_name member_birth"><?=$member_data[$i]['birth']?></button>
                                    <button class="col_name member_id"><?=$member_data[$i]['id']?></button>
                                    <button class="col_name member_status"><?=$member_data[$i]['status']?></button>
                                    <button class="col_name member_date"><?=$member_data[$i]['date']?></button>
                                    <span class="member_class" value="<?=$member_data[$i]['class']?>"></span>
                                    <span class="member_address" value="<?=$member_data[$i]['address']?>"></span>
                                    <span class="member_phone" value="<?=$member_data[$i]['phone']?>"></span>
                                    <span class="member_sex" value="<?=$member_data[$i]['sex']?>"></span>
                                    <span class="member_rank" value="<?=$member_data[$i]['rank']?>"></span>
                                    <input id="member_average_process_rate" type="hidden" value="<?=$member_data[$i]['average_process_rate']?>">
                                    <input id="member_average_score" type="hidden" value="<?=$member_data[$i]['average_score']?>">
                                    <button class="member_details md-trigger" data-modal="modal-12">자세히보기</button>
                                    <hr class="underbar">
                                </div>
                        <?php
                            }
                        }
                        ?>
                        <div class="list_btn_all">
                            <button class="pre_list">◀</button>
                            <?php
                            if($member_number % 10 != 0){
                                $page_selector = $member_number / 10 + 1;
                            }
                            else{
                                $page_selector = $member_number / 10;
                            }
                            for ($i=1; $i <= $page_selector; $i++) {
                            ?>
                            <button class="list_btn" data-tab="menu<?=$i?>" value="<?=$i?>"><?=$i?></button>
                            <?php
                            }
                            ?>
                            <button class="next_list">▶</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blank_div"></div>


            <!--Fullscreen Modal Code-->
            <div class="md-modal md-effect-12" aria-labelledby="exampleModalLongTitle" id="exampleModalLong"> 
                <div class="blank"></div>
                <div class="middle">
                    <div class="md-content">
                        <div class="member_info_header">
                            <div class="member_info_title"><strong>회원 정보</strong><button class="md-close" id="close">X</button></div> 
                        </div>
                        <hr id="modal_line">
                        <div class="member_info_body">
                            <div class="member_info_body_top">
                                <div class="profile">
                                    <div class="profile_img_div">
                                        <img class="profile_img" src="<?php echo base_url();?>/img/gimbap_images/user_muffin.png">
                                    </div>
                                    <div class="profile_info">
                                        <div class="profile_info_key">
                                            <div class="key_div">회원 이름 : </div> 
                                            <div class="key_div">주민 번호 : </div>
                                            <div class="key_div">주소 :</div>      
                                            <div class="key_div">연락처 :</div>
                                            <div class="key_div">반 :    </div>
                                            <div class="key_div">권한 : </div>
                                            <div class="key_div">등록일:   </div>
                                        </div>

                                        <div class="profile_info_data">
                                            <div class="data_div"><input class="input_box modal_name" type="text"></div>
                                            <div class="data_div"><input class="input_box modal_birth" type="text"  style="width : 80px;" readonly> - <input class="input_box modal_sex" type="text" readonly style="width : 30px;"> ****** </div>
                                            <div class="data_div"><input class="input_box modal_address" type="text" style="width : 800px;"></div>
                                            <div class="data_div"><input class="input_box modal_phone" type="text" value=<?=$member_data[$i]['phone']?>></div>
                                            <div class="data_div">
                                                <select class="modal_class">
                                                    <option value="초급">초급</option>
                                                    <option value="중급">중급</option>
                                                    <option value="고급">고급</option>
                                                </select>
                                            </div>
                                            <div class="">
                                                <select class="modal_rank">
                                                    <option value="학생">학생</option>
                                                    <option value="선생님">선생님</option>
                                                    <option value="관리자">관리자</option>
                                                </select>
                                            </div>
                                            <div class="data_div"><input class="input_box modal_date" type="text" readonly style="width : 200px;"></div>
                                        </div>                                           
                                    </div>
                                    <div class="blank"></div>
                                    <button type="button" class="btn btn-success member_data_save_btn">개인정보 저장</button>
                                </div>
                            </div>
                        </div>       

                        <div class="member_info_body_bottom">
                            <div>
                                <!-- <ul class="nav_bar">
                                    <li class="nav_list"><a class="nav_list_btn active" href="#home">학습진행</a></li>
                                    <li class="nav_list"><a class="nav_list_btn" href="#news">수납유무</a></li>
                                    <li class="nav_list"><a class="nav_list_btn" href="#contact">학적기록</a></li>
                                    <li class="nav_list"><a class="nav_list_btn" href="#about">입출기록</a></li>
                                    <li class="nav_list"><a class="nav_list_btn" href="#about">성적추이</a></li>
                                    <li class="nav_list"><a class="nav_list_btn" href="#about">개인지도평가</a></li>
                                </ul> -->
                                <div class="circles">
                                        <div class="first circle">
                                        <strong><?=(int)$member_data[$i]['average_process_rate']*100?><i>%</i></strong>
                                        <span style="color:rgb(49, 49, 49); font-weight:bold;">Alpha</span>
                                        </div>
                                    
                                        <div class="second circle">
                                        <strong><?=(int)$member_data[$i]['average_score']*100?><i>%</i></strong>
                                        <span style="color:rgb(49, 49, 49); font-weight:bold;">Beta</span>
                                        </div>
                                    
                                        <div class="third circle">
                                        <strong>.75</strong>
                                        <span style="color:rgb(49, 49, 49); font-weight:bold;">Gamma</span>
                                        </div>
                                    
                                        <div class="forth circle">
                                        <span style="color:rgb(49, 49, 49); font-weight:bold;">Delta</span>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="blank"></div>
            </div>
            
            <div class="md-overlay">
                            
            </div>
        </div>                
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>

            //페이지 로드시 처음 열명만 출력
            var name_len = $(".member_info").length;
            for(i=0; i < name_len; i++) {
                if(i > 9) {
                    $(".member_info:eq("+i+")").addClass('hidden');
                }    
            }

            //// 정렬 기능
            $(".select_menu").change(function() {
                if ($(this).val() == "정렬"){
                    $(".list_btn_all").removeClass('hidden');
                    $(".member_info").addClass('hidden');

                    for(i=0; i<10; i++) {
                        $(".member_info:eq("+i+")").removeClass('hidden');
                    }
                }
                //// 이름 순으로 정렬
                else if ($(this).val() == "이름순") {
                    $(".member_info").addClass('hidden');
                    $(".list_btn_all").addClass('hidden');

                    var pre_name = new Array; // 정렬하기 전 이름 배열
                    
                    for(i=0; i < name_len; i++) {
                        pre_name[i] = $(".member_info:eq("+i+") > .col_name:nth-child(1)").text();
                    }
                    pre_name.sort();

                    for(i=0; i < name_len; i++) {
                        $(".member_info > .col_name:nth-child(5n+1):contains("+pre_name[i]+")").parent().attr('data-sort', i+1);
                    }

                    $('.member_info').sort(function (a, b) {
                        var contentA =parseInt($(a).attr('data-sort'));
                        var contentB =parseInt($(b).attr('data-sort'));
                        return (contentA < contentB) ? -1 : (contentA > contentB) ? 1 : 0;
                    }).appendTo(".user_list");

                    $(".list_btn_all").appendTo(".user_list");

                    $(".member_info").removeClass('hidden');

                    for(i=0; i < name_len; i++) {
                        if(i > 9) {
                            $(".member_info:eq("+i+")").addClass('hidden');
                        }
                    }

                    $(".list_btn_all").removeClass('hidden');
                }
                //// 등록 순으로 정렬
                else if ($(this).val() == "등록일순") {
                        $(".member_info").addClass('hidden');
                        $(".list_btn_all").addClass('hidden');

                        var pre_name = new Array; // 정렬하기 전 이름 배열
                        
                        for(i=0; i < name_len; i++) {
                            pre_name[i] = $(".member_info:eq("+i+") > .col_name:nth-child(5)").text();
                    }
                    pre_name.sort();

                    for(i=0; i < name_len; i++) {
                        $(".member_info > .col_name:nth-child(5n+5):contains("+pre_name[i]+")").parent().attr('data-sort', i+1);
                    }

                    $('.member_info').sort(function (a, b) {
                        var contentA =parseInt($(a).attr('data-sort'));
                        var contentB =parseInt($(b).attr('data-sort'));
                        return (contentA < contentB) ? -1 : (contentA > contentB) ? 1 : 0;
                    }).appendTo(".user_list");

                    $(".list_btn_all").appendTo(".user_list");

                    $(".member_info").removeClass('hidden');

                    for(i=0; i < name_len; i++) {
                        if(i > 9) {
                            $(".member_info:eq("+i+")").addClass('hidden');
                        }
                    }

                    $(".list_btn_all").removeClass('hidden');
                }
                //
                else if ($(this).val() == "상태순") {
                    $(".member_info").addClass('hidden');
                    $(".list_btn_all").addClass('hidden');

                    var pre_name = new Array; // 정렬하기 전 이름 배열
                    
                    for(i=0; i < name_len; i++) {
                        pre_name[i] = $(".member_info:eq("+i+") > .col_name:nth-child(4)").text();
                    }
                    pre_name.sort();

                    for(i=0; i < name_len; i++) {
                        $(".member_info > .col_name:nth-child(5n+4):contains("+pre_name[i]+")").parent().attr('data-sort', i+1);
                    }

                    $('.member_info').sort(function (a, b) {
                        var contentA =parseInt($(a).attr('data-sort'));
                        var contentB =parseInt($(b).attr('data-sort'));
                        return (contentA < contentB) ? -1 : (contentA > contentB) ? 1 : 0;
                    }).appendTo(".user_list");

                    $(".list_btn_all").appendTo(".user_list");

                    $(".member_info").removeClass('hidden');

                    for(i=0; i < name_len; i++) {
                        if(i > 9) {
                            $(".member_info:eq("+i+")").addClass('hidden');
                        }
                    }

                    $(".list_btn_all").removeClass('hidden');
                }
            })

            //// 검색 기능
            $("document").ready(function () {
                $(".search_text").keyup(function () {
                    var name = $(".search_text").val();
                    $(".member_info").hide();

                    var temp = $(".member_info > .col_name:nth-child(5n+1):contains('" + name + "')");

                    if(name == ''){
                        $(".list_btn_all").removeClass('hidden');
                        $(".member_info").addClass('hidden');
                        for(i=0; i<10; i++) {
                            $(".member_info").removeAttr('style');
                            $(".member_info:eq("+i+")").removeClass('hidden');
                        }
                    }
                    else{
                        $(".list_btn_all").addClass('hidden');
                        $(temp).parent().removeClass('hidden');
                        $(temp).parent().show();
                    }
                })
            })

            //// 페이지 버튼 기능
            $('.list_btn').click(function() {
                $(".member_info").addClass('hidden');
                var activeTab = $(this).attr('value');

                $(".list_btn").removeClass('current');
                $("button[data-tab='"+'menu'+activeTab+"']").addClass('current');

                for(i = activeTab*10 - 10; i < activeTab*10; i++) {
                    $(".member_info:eq("+i+")").removeClass('hidden');
                }
            })

            //// 이전 페이지 버튼 클릭 시
            $('.pre_list').click(function() {
                var currentTab = $('.current').attr('value');
                if(currentTab != "1") {
                    var preTabValue = Number(currentTab) - 1;
                    $('.list_btn').removeClass('current');
                    $("button[data-tab='"+'menu'+preTabValue+"']").addClass('current');
                }
            })

            //// 자세히보기 modal
            $(function () {
                $('.md-trigger').on('click', function () {
                    $('.md-modal').addClass('md-show');
                    $('.modal_name').attr('value', $(this).closest('div').find('.member_name').text());
                    $('.modal_birth').attr('value', $(this).closest('div').find('.member_birth').text());
                    $('.modal_sex').attr('value', $(this).closest('div').find('.member_sex').attr('value'));
                    $('.modal_address').attr('value', $(this).closest('div').find('.member_address').attr('value'));
                    $('.modal_phone').attr('value', $(this).closest('div').find('.member_phone').attr('value'));

                    //// 반 초기 선택값
                    if($(this).closest('div').find('.member_class').attr('value') == "초급"){
                        $('.modal_class > option:nth-child(1)').attr('selected', "");
                    }
                    else if($(this).closest('div').find('.member_class').attr('value') == "중급"){
                        $('.modal_class > option:nth-child(2)').attr('selected', "");
                    }
                    else if($(this).closest('div').find('.member_class').attr('value') == "고급"){
                        $('.modal_class > option:nth-child(3)').attr('selected', "");
                    }

                    //// 권한 초기 선택값
                    if($(this).closest('div').find('.member_rank').attr('value') == "학생"){
                        $('.modal_rank > option:nth-child(1)').attr('selected', "");
                    }
                    else if($(this).closest('div').find('.member_rank').attr('value') == "선생님"){
                        $('.modal_rank > option:nth-child(2)').attr('selected', "");
                    }
                    else if($(this).closest('div').find('.member_rank').attr('value') == "관리자"){
                        $('.modal_rank > option:nth-child(3)').attr('selected', "");
                    }
                    
                    $('.modal_date').attr('value', $(this).closest('div').find('.member_date').text());
                });

                //// 반 선택 값 변경 시 동작
                $('.modal_class').change(function() {
                    $('.modal_class > option').removeAttr('selected');
                    if($(this).val() == "초급"){
                        $('.modal_class > option:nth-child(1)').attr('selected', "");
                    }
                    else if($(this).val() == "중급"){
                        $('.modal_class > option:nth-child(2)').attr('selected', "");
                    }
                    else if($(this).val() == "고급"){
                        $('.modal_class > option:nth-child(3)').attr('selected', "");
                    }
                })

                //// 권한 선택 값 변경 시 동작
                $('.modal_rank').change(function() {
                    $('.modal_rank > option').removeAttr('selected');
                    if($(this).val() == "학생"){
                        $('.modal_rank > option:nth-child(1)').attr('selected', "");
                    }
                    else if($(this).val() == "선생님"){
                        $('.modal_rank > option:nth-child(2)').attr('selected', "");
                    }
                    else if($(this).val() == "관리자"){
                        $('.modal_rank > option:nth-child(3)').attr('selected', "");
                    }
                })

                //// modal 변경 내용 저장
                $('.member_data_save_btn').click(function() {
                    var change_class = $('.modal_class').val();
                    var change_rank = $('.modal_rank').val();
                    var index_phone = $('.modal_phone').val();

                    var data = new FormData();
                    
                    data.append("change_class",change_class);
                    data.append("change_rank",change_rank);
                    data.append("index_phone",index_phone);
                    
                    console.log(data);
                    //변경된 반, 권한 정보 전송
                    $.ajax({
                        url: "./revise_member_data",
                        data: data,
                        type: "POST",
                        contentType : false,
                        processData : false,

                        success: function(data){
                            alert("저장되었습니다.");
                            location.reload();
                            //console.log(data);
                            //alert(data);
                        },
                        error: function(){

                        },
                        complete: function(){
                            
                        }
                    })
                })

                //// modal 닫기
                $('.md-close').on('click', function () {
                    $('.md-modal').removeClass('md-show');
                    //location.reload();
                });
            });

            $('.user_info').click(function(){
                if($(".logout_btn").css('display') === 'none'){
                    $(".logout_btn").css('display', 'block');
                    $(".user_info").css('margin-right', '-200px');
                }
                else if($(".logout_btn").css('display') === 'block') {
                    $(".logout_btn").css('display', 'none');
                    $(".user_info").css('margin-right', '0px');
                }
            })
        </script>

        <script src="https://rawgit.com/kottenator/jquery-circle-progress/1.2.2/dist/circle-progress.js"></script>
        <script>
        $(".member_details").click(function(){
        
        var process_rate = $(this).parent().children("#member_average_process_rate").val();
        var average_score = $(this).parent().children("#member_average_score").val();
        
        $('.first.circle').circleProgress({
        value: process_rate,
        lineCap: 'round',
        //fill: {gradient: ['#ff1e41', '#ff5f43']}
        }).on('circle-animation-progress', function(event, progress) {
        $(this).find('strong').html(Math.round((100 * process_rate)* progress) + '<i>%</i>');
        });

        //setTimeout(function() { $('.first.circle').circleProgress('value', process_rate); }, 0);

        

        $('.second.circle').circleProgress({
        value: average_score,
        lineCap: 'round',
        fill: {gradient: [['#0681c4', .5], ['#4ac5f8', .5]], gradientAngle: Math.PI / 4}
        }).on('circle-animation-progress', function(event, progress) {
        $(this).find('strong').html(Math.round((100 * average_score) * progress) + '<i>%</i>');
        });

        //setTimeout(function() { $('.second.circle').circleProgress('value', average_score); }, 0);

        /*
        * Example 3:
        *
        * - very custom gradient
        * - listening to `circle-animation-progress` event and display the dynamic change of the value: from 0 to 0.8
        */
        $('.third.circle').circleProgress({
        value: 0.0,
        lineCap: 'round',
        fill: {gradient: ['#ff1e41', '#ff5f43']}
        }).on('circle-animation-progress', function(event, progress) {
        $(this).find('strong').html(Math.round(35 * progress) + '<i>%</i>');
        });

        setTimeout(function() { $('.third.circle').circleProgress('value', 0.35); }, 800);


        var c4 = $('.forth.circle');

        c4.circleProgress({
        startAngle: -Math.PI / 4 * 3,
        value: 0.5,
        lineCap: 'round',
        fill: {color: '#ffa500'}
        });

        // Let's emulate dynamic value update
        setTimeout(function() { c4.circleProgress('value', 0.7); }, 1000);
        setTimeout(function() { c4.circleProgress('value', 1.0); }, 1100);
        setTimeout(function() { c4.circleProgress('value', 0.5); }, 2100);

        });
        </script>
    </body>
</html>