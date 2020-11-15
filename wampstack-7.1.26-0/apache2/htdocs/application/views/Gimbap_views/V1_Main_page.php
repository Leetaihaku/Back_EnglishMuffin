<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>

    

    <title>잉글리시머핀</title>

    <style>
        body {
            background-color: rgb(34, 34, 34);
        }

        /* #top-bar {
            background-color: rgb(95, 95, 95);
            padding-top: 7px;
            padding-bottom: 7px;
            padding-left: 10px;
            z-index: 1;
            width: 100%;
            display : flex;
        }

        .top-bar-table {
            border-right: 2px solid rgb(255, 255, 255);
            padding-top: 0px;
            padding-right: 12px;
            flex-basis: 264px;
            flex-shrink: 0;
            white-space: nowrap;
        }

        .top-title {
            font-family: "타이포_쌍문동", "휴먼둥근헤드라인";
            font-size: 50px;
            color: whitesmoke;
            font-weight: bold;
            flex-shrink: 0;
            white-space: nowrap;
        } */

        button:focus {
            outline: none;
        }

        #top_bar {
            background-color: rgb(95, 95, 95);
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
            /* font-weight: bold; */
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
            font-family: "나눔스퀘어라운드";
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

        .main_lists {
            display: flex;
            flex-direction: row;
        }

        .main-left-list {
            margin-top: 65px;
            margin-left: 50px;
            margin-bottom: 20px;
            background: rgb(78, 78, 78);
            height: 750px;
            width: 30%;
            flex-basis : 450px;
            flex-shrink : 0;
            flex-grow: 2;
            border-radius: 20px;
        }

        .playlist_title {
            font-size: 50px;
            position: relative;
            top: 10px;
            left: 30px;
            padding-left : 10px;
        }

        .playlist_bar {
            border: solid 2px rgb(172,172,172);
            width: 80%;
            border-radius: 10px;
            position: relative;
            top: 2px;
            left: -5px;
            margin-top : 0px;
        }

        .search_add {
            display: flex;
            flex-direction: row;
            white-space: nowrap;
        }

        .search_form {
            position: absolute;
            flex-grow: 2;
            flex-shrink: 0;
            white-space: nowrap;
        }

        .search_text {
            width: 250px;
            margin-left: 30px;
            white-space: nowrap;
        }

        .search_btn {
            height: 40px;
            background-color: rgb(64, 157, 163);
            font-size: 15px;
            color: white;
            white-space: nowrap;
        }

        .playlist_add_btn {
            float: right;
            width: 90px;
            height: 40px;
            /* position: relative; */
            font-family: '나눔스퀘어라운드', '맑은 고딕';
            font-size: 20px;
            margin-right: 70px;
            flex-grow: 1;
        }

        .playlist_list {
            background-color: rgb(255, 255, 255);
            padding-top: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
            width: 85%;
            height: 530px;
            border-radius: 20px;
            margin-top: 0px;
            margin-left: 40px;
            position: relative;
            top: 20px;
            overflow-y: scroll;
            border-radius: 10px;
        }

        .main-right-list {
            margin-top: 65px;
            margin-left: 20px;
            margin-bottom: 20px;
            margin-right: 100px;
            background: rgb(78, 78, 78);;
            height: 750px;
            border-radius: 20px;
            position: relative;
            left: 10px;
            flex-basis : 900px;
            flex-shrink: 0;
            flex-grow : 3;
        }

        .info_title {
            font-size: 50px;
            position: relative;
            top: 10px;
            left: 30px;
        }

        .info_bar {
            border: solid 2px rgb(172, 172, 172);
            width: 95%;
            border-radius: 10px;
            position: relative;
            top: 2px;
            right: 5px;
            flex-basis : 1000px;
            flex-shrink : 0px;
            margin-top:0px;
        }

        .info_list {
            background-color: rgb(255, 255, 255);
            top: 20px;
            width: 92%;
            height: 460px;
            border-radius: 20px;
            position: relative;
            overflow-y: scroll;
            z-index: 1;
        }

        .default_font {
            width: 25%;
            font-family: '나눔스퀘어라운드', '맑은 고딕';
            color: snow;
            /* font-weight: bold; */
            z-index: 2;
        }

        .playlist_info_data {

            font-size: 25px;
            font-weight: bold;
            color: black;
            position: relative;
            top: 140px;
            left: 0px;
            z-index : 10;
        }

        .delete_button {
            background-color:white;
            border: none;
            color: indianred;
            padding: 0px 8px 0px 8px;
            font-size: 20px;
            cursor: pointer;
            border-radius: 5px;
            right: 10px;
            position: absolute;
        }

        .delete_button:hover {
            background-color :indianred;
            color :white;
        }

        #wrapper {
            text-align: center;
            width: 500px;
            margin: auto;
        }

        #style-1::-webkit-scrollbar-track {
            box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            border-radius: 10px;
            background-color: #F5F5F5;
        }

        #style-1::-webkit-scrollbar {
            position: relative;
            left: 10px;
            width: 12px;
            background-color: rgb(104, 104, 104);
        }

        #style-1::-webkit-scrollbar-thumb {
            border-radius: 10px;
            box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
            background-color: #555;
        }

        .list-group-item {
            color: black;
            font-weight: bold;
            font-size: 20px;
        }

        .info_block {
            position: relative;
            display: flex;
        }

        .default_info {
            font-size: 25px;
            font-weight: bold;
            color: white;
            position: relative;
            left: 30px;
            flex-shrink: 1;
            flex-grow: 1;
            white-space: nowrap;
            margin-right: 10px;
        }

        .playlist_info_data {
            font-size: 25px;
            font-weight: bold;
            color: rgb(0, 0, 0);
            position: relative;
            top: 0px;
            left: 40px;
            flex-shrink: 0;
            flex-grow: 2;
            white-space: nowrap;
        }

        .info_modify {
            flex-shrink: 0;
            flex-grow: 1;
            margin-right: 50px;
            margin-top: 50px;
            white-space: nowrap;
        }

        .playlist_modify_btn {
            float : right;
            width: 150px;
            height: 60px;
            font-size: 28px;
            font-weight: bold;
        }

        .blank_div {
            flex-shrink: 1;
            flex-grow: 1;
        }

        .info_list {
            background-color: rgb(255, 255, 255);
            width: 94%;
            height: 460px;
            border-radius: 20px;
            margin-left: 30px;
            margin-bottom: 30px;
            position: relative;
            overflow-y: scroll;
            z-index: 1;
        }

        #sortable {
            /*list-style-type: none;*/
            margin: 5px;
            padding: 10px;
            width: 50%;
            position: relative;
            margin: 1em 0px 1px;
            list-style: outside none none;
            counter-reset: big-numba;
            padding-left: 0px;
            width: 100%;
            padding: 10px;
        }

        #sortable li {
            margin: 3px 0px 10px 40px;
            /*padding-left: 1em;*/
            font-size: 1.4em;
            /*height: 18px;*/
            display: flex;
            width: 95%;
            padding: 5px;
            border-radius: 5px;
        }

        .blog-blau-liste {
            position: absolute;
            margin: 2em 0px 0px;
            list-style: outside none none;
            counter-reset: big-numba;
            padding-left: 0px;
        }

        .blog-blau-liste-item {
            position: relative;
            margin: 1em 0px 0px -3em;
            list-style: outside none none;
        }

        .blog-blau-liste-item::before {
            content: counter(big-numba, decimal);
            counter-increment: big-numba;
            position: absolute;
            top: 4px;
            font-size: 19px;
            left: -2em;
            box-sizing: border-box;
            width: 1.5em;
            height: 1.5em;
            line-height: 1.5;
            color: #FFF;
            background: rgb(134, 134, 134) none repeat scroll 0% 0%;
            font-weight: 600;
            text-align: center;
            border-radius: 50%;
        }

        .main-blank {
            flex-grow : 2;
            flex-basis : 80px;
        }

        button {
            all:unset;
        }  
        
        .btn {
            width : 100px;
            height : 40px;
            margin: 5px;
            padding: 5px;
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;
            /* text-shadow: 0px 0px 10px rgba(0,0,0,0.2);*/
            box-shadow: 0 0 20px #eee;
            border-radius: 10px;
            font-size : 20px;
            font-weight: bold;
        }


        .btn:hover {
        background-position: right center; /* change the direction of the change here */
        }

        .btn-1 {
        background-image: linear-gradient(to right, #f6d365 0%, #fda085 51%, #f6d365 100%);
        }

        .btn-2 {
        background-image: linear-gradient(to right, #fd9ce2 0%, #7ca6ee 51%, #fc94de 100%);
        }

        .btn-3 {
        background-image: linear-gradient(to right, #85ffb2 0%, #8fd3f4 51%, #84fab0 100%);
        }

        .btn-4 {
        background-image: linear-gradient(to right, #70a7ff 0%, #94dbfc 51%, #73a7fa 100%);
        }

        .btn-5 {
        background-image: linear-gradient(to right, #ffecd2 0%, #fcb69f 51%, #ffecd2 100%);
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
            <div class="logout_btn"><div class="logout_font"><a href="./log_out">로그아웃</a></div></div>
        </div>

        <div class="main_lists">
        <div class='main-blank'></div>
            <div class='main-left-list'>
                <div>
                    <span class="default_font playlist_title">Playlist</span>
                    <hr class="playlist_bar">
                </div>
                <div calss="search_add">
                    <a href="./making_mode"><button class="btn btn-4 playlist_add_btn" style="margin-right: 30px;">생성</button></a>
                </div> 
                <div class='playlist_list' id="style-1">
                    <!-- List group -->
                    <div class="list-group" id="myList" role="tablist">
                        <?php
                        if(isset($gimbap_list))
                        {
                            foreach ($gimbap_list as $key) {
                        ?>
                            <a class="list-group-item list-group-item-action gimbap_btn" data-toggle="list" value="<?=$key->label?>" role="tab"><?=$key->label?>
                                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                <button class="remove_btn list_delete delete_button" data-toggle="modal" data-target="#delete_modal"><i class="fa fa-close"></i></button>
                            </a>
                        <?php 
                            }
                        }
                        else {
                        echo "<script>데이터를 받는데 실패하였습니다.</script>";
                        }
                        ?>

                        <div class="modal fade" id="delete_modal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel">Playlist 삭제</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h6><span class="target_name"></span></h6>
                                    정말로 삭제시겠습니까?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">취소</button>
                                    <button type="button" class="btn btn-danger list_delete_db">삭제</button>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>                                               
                </div>
            </div>

            <div class='main-right-list'>                    
                <div>
                    <span class="default_font info_title">Information</span>
                    <hr class="info_bar">
                </div>
                <div class="info_block">
                    <div class="default_info">
                        제목 : <br>
                        작성자 : <br>
                        최근 수정일 : 
                    </div>        
                        <div class="default_font playlist_info_data">
                            <!--정보 표출-->            
                    </div>
                    <div class="blank_div"></div>                     
                    <!--김밥을 선택하여야지만 페이지 이동, 아니면 이벤트-->
                    <div class="info_modify">
                        <form action="./modifying_mode" method="GET">
                            <input id="gimbap_name" name="gimbap_name" type="hidden" value="">
                            <button class="btn btn-2 default_font playlist_modify_btn">수정</button>
                        </form>
                    </div>
                </div>
                
                <div class='info_list' id="style-1">
                    <link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
                    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
                    <script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
                    <ol class="blog-blau-liste" id="sortable">
                        
                    </ol>
                </div>                
            </div>
            <div class='main-blank'></div>                     
        </div>
                        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            var target_name = null;

            $(".list_delete").click(function () {
                target_name = null;
                target_name = $(this).parent().attr("value");
                $('.target_name').html(`<strong>` + target_name + `</strong>`);
            })

            $(".list_delete_db").click(function () {
                $.ajax({
                    url: "./gimbap_delete_btn",
                    data: {'target_name' : target_name},
                    type: "POST",

                    success: function (data) {
                        location.reload();                        
                    },
                    error: function () {
                    },
                    complete: function () {
                    }
                })
            })

            $(document).ready(function(){
                $('.info_modify').hide();
            })

            var gimbap_name = null;

            $(".gimbap_btn").click(function(){
                gimbap_name = $(this).attr("value");
                $('#gimbap_name').val(gimbap_name);
                $('.info_modify').show();
                $.ajax({
                    url: "./gimbap_manage",
                    data: {'gimbap_name' : gimbap_name},
                    type: "GET",

                    success: function (data) {
                        
                        var parsedJson = JSON.parse(data);

                        var info_title = null;
                        var info_gimbap_class = null;
                        var info_group_maker = null;
                        var info_date = null;
                        var contents= null;
                        var interpreter= null;

                        info_title = parsedJson.information_gimbap_head[0].label;
                        info_gimbap_class = parsedJson.information_gimbap_head[0].class;
                        info_group_maker = parsedJson.information_gimbap_head[0].group_maker;
                        info_date = parsedJson.information_gimbap_head[0].date;
                        
                        $('.playlist_info_data *').remove();
                        $('#sortable *').remove();
                        $('.playlist_info_data').append(`<strong>${info_title}(${info_gimbap_class})</strong><br>`);
                        $('.playlist_info_data').append(`<strong>${info_group_maker}</strong><br>`);
                        $('.playlist_info_data').append(`<strong>${info_date}</strong>`);

                        for (var b = 0; b < parsedJson.information_gimbap_body.length; b++)
                        {
                            contents = parsedJson.information_gimbap_body[b].data_name;
                            interpreter = parsedJson.information_gimbap_body[b].interpreter_name;
                            $("#sortable").append(
                            `<li class="ui-state-default blog-blau-liste-item">
                                <span value="${contents}+${interpreter}">${contents} ▶ ${interpreter}</span>
                            </li>`
                            );

                        }
                    },
                    error: function () {
                    },
                    complete: function () {
                    }
                })
            })


            $(".playlist_modify_btn").click(function() {
                if(gimbap_name == null) {
                    alert("김밥을 선택해주세요");
                    location.reload();
                }
            })

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
    </body>
</html>