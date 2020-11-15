<!-- jQuery Mobile은 HTML5에 최적화 되어 있기 때문에 doctype으로 HTML5를 사용한다 -->
<!DOCTYPE html> 
<html> 
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

    <title>English Muffin Playlist</title>
</head> 
<body>
    <section id="Playlist_page" data-role="page" data-theme="b">
        <!--학습기 대시보드 페이지 헤더-->
        <!--한 파일에 페이지 2개 이상일 때 패널 id 다르게 설정 할 것!-->
        <header data-role="header" style="text-align :right;">
            <a href="#panel-push" style="height:37px; margin-top:5px; padding-bottom:10px; padding-left : 20px; padding-right : 20px;" class="ui-btn ui-corner-all ui-shadow ui-icon-bars ui-btn-icon-bottom"></a>
            <img style="width:200px; margin:10px; margin-right:20px;" src="<?php echo base_url();?>/img/gimbap_images/header_muffin.png">
        </header>
        <!--panel 메뉴-->
        <div data-role="panel" id="panel-push" data-display="push" class="ui-panel ui-panel-position-left ui-panel-display-push ui-body-inherit ui-panel-animate ui-panel-open" data-position-fixed="true">
            <div class="ui-panel-inner">
                <ul data-role="listview" class="ui-listview">
                    <li data-icon="delete" class="ui-first-child"><a href="#" data-rel="close" class="ui-btn ui-btn-icon-right ui-icon-delete">Menu</a></li>
                    <li><a href="./mobile_mode" class="ui-btn ui-btn-icon-right ui-icon-home">메인 페이지</a></li>
                    <li><a id="learning_status_btn" href="#" class="ui-btn ui-btn-icon-right ui-icon-carat-r">학습 현황</a></li>
                    <li class="ui-last-child"><a href="./client_info_intro" class="ui-btn ui-btn-icon-right ui-icon-gear">개인정보 설정</a></li>
                </ul><br><br>
                <button class="ui-btn ui-shadow ui-corner-all btn btn-1" style="color:rgb(78, 78, 78);">로그아웃</button>
            </div>
        </div>                   
        <div class="content" data-role="content">
            <span class="learning_record_title" style="font-size: 25px; font-weight: bold;">학습 현황</span>
            <!-- 사용자 메뉴 -->
            <div class="user_status_menu" style="height: 240px; border: solid 1px rgb(26, 26, 26); border-radius: 10px; margin-top: 10px; margin-bottom: 30px; background-color: rgb(43, 43, 43);">
                <div class="user_header">
                    <!-- 사용자 정보 -->
                    <div class="user_info" style="height: 180px; display : flex; flex-direction: row;">
                        <!-- 사용자 이미지 div -->
                        <div class="user_img_div" style="margin-top: 30px; margin-left: 30px;">
                            <img class="user_img" src="<?php echo base_url();?>/img/gimbap_images/user_muffin.png" style="width: 100px; border-radius: 10px;">
                        </div>
                        <!-- 사용자 이름, 레벨 정보 div -->
                        <div class="user_rank" style="margin-top: 35px; margin-left: 25px;">
                            <div class="user_name_div">
                                <!-- 사용자 이름 -->
                                <span class="user_name" style="font-size: 25px;">홍길동</span>
                            </div>
                            <div class="user_level_div">
                                <!-- 사용자 레벨 -->
                                <span class="user_level" style="font-size: 25px; color: rgb(255, 208, 0);">LV. 1</span><br>
                                <span class="user_class" style="font-size: 18px; color: rgb(255, 208, 0);">신입생</span>
                            </div>
                        </div>
                        <!-- 사용자 랭크 div -->
                        <div class="rank_div">
                            <!-- 사용자 랭크 주위 원 div -->
                            <div class="rank_circle" style="border : solid 1px black; border-radius: 80px; margin-top: 25px; margin-left: 20px; width: 110px; height: 110px; background-color: rgb(58, 58, 58); text-align: center;">
                                <!-- 사용자 랭크 이미지 -->
                                <img class="rank_img" src="<?php echo base_url();?>/img/gimbap_images/class.png" style="margin-top: 30px; width: 50px; height: 50px;">
                            </div>
                            <!-- RANK 글자 -->
                            <span class="rank_font" style="margin-left: 47px; font-size: 20px; color: black;">RANK</span>
                        </div>
                    </div>
                    <!-- 사용자 경험치 div -->
                    <div class="user_exp" style="height: 42px; display : flex; flex-direction: row;">
                        <!-- 사용자 경험치 폰트 -->
                        <span class="exp_font" style="font-size: 25px; margin-left: 15px;">EXP</span>
                        <!-- 사용자 경험치 bar -->
                        <div class="exp_bar" style="width: 285px; margin-top: 2px;">
                            <!-- 사용자 경험치 bar 바탕 -->
                            <div class="w3-black w3-round-xlarge" style="width: 100%; margin-top: 8px; margin-left: 15px; height: 15px;">
                                <!-- 사용자 경험치 bar 퍼센트 표시 -->
                                <div class="w3-container w3-blue w3-round-xlarge" style="height: 15px; width:80%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 학습 기록 div -->
            <div class="learning_record_div">
                <!-- 학습 기록 타이틀 폰트 -->
                <span class="learning_record_title" style="font-size: 25px; font-weight: bold;">학습 기록</span>
                <!-- 학습 기록 목록 -->
                <div class="learning_record" style="margin-top: 10px;">
                    <!-- 미완료, 완료 학습 선택 메뉴 -->
                    <div data-role="tabs" id="tabs">
                        <div data-role="navbar">
                            <ul>
                                <li><a id="incomplete_list_btn" href="#incomplete_list" data-ajax="false" class="ui-btn-active ui-icon-grid ui-btn-icon-right">미완료 학습</a></li>
                                <li><a id="complete_list_btn" href="#complete_list" data-ajax="false" class="ui-icon-star ui-btn-icon-right">완료 학습</a></li>
                            </ul>
                        </div>

                        
                        <!-- 미완료 학습 메뉴 -->
                        <div id="incomplete_list" class="ui-body-d ui-content">
                            <!-- 플레이리스트 div -->
                            <div class="playlist_div  ui-btn ui-icon-carat-r ui-btn-icon-right" style="height: 100px; display : flex; flex-direction: row; margin-top: 0px; margin-bottom: 10px;">
                                <!-- 플레이리스트 이미지 배경색 div -->
                                <div class="playlist_img_back_div advanced_class" style="width: 100px; height: 100px; margin-top: -10px; margin-left: -15px; text-align: center; background-color: rgb(194, 74, 4);">
                                    <!-- 플레이리스트 이미지 주위 원 div -->
                                    <div class="playlist_img_circle" style="width: 90px; height: 90px; border: solid 1px none; border-radius: 75px; margin-top: 5px; margin-left: 5px; background-color: rgb(92, 40, 40); text-align: center;">
                                        <!-- 플레이리스트 이미지 -->
                                        <img class="playlist_img" src="<?php echo base_url();?>/img/gimbap_images/player_muffin.png" style="width: 70px; height: 70px; margin-top: 5px;">
                                    </div>
                                </div>
                                <!-- 플레이리스트 정보 div -->
                                <div class="playlist_info" style="margin-top: 10px; margin-left: 10px;">
                                    <!-- 플레이리스트 제목 -->
                                    <div class="playlist_name" style="font-size: 20px; margin-bottom: 10px;">
                                        <span>일상영어 50문장</span>
                                    </div>
                                    <!-- 플레이리스트 난이도 -->
                                    <div class="playlist_difficulty" style="font-size: 15px; margin-top: 10px; margin-right: 120px;">
                                        <span>고급</span>
                                    </div>
                                </div>
                            </div>


                            <div class="playlist_div  ui-btn ui-icon-carat-r ui-btn-icon-right" style="height: 100px; display : flex; flex-direction: row; margin-top: 0px; margin-bottom: 10px;">
                                <div class="playlist_img_back_div middle_class" style="width: 100px; height: 100px; margin-top: -10px; margin-left: -15px; text-align: center; background-color: rgb(185, 154, 17);">
                                    <div class="playlist_img_circle" style="width: 90px; height: 90px; border: solid 1px none; border-radius: 75px; margin-top: 5px; margin-left: 5px; background-color: rgb(92, 40, 40); text-align: center;">
                                        <img class="playlist_img" src="<?php echo base_url();?>/img/gimbap_images/player_muffin.png" style="width: 70px; height: 70px; margin-top: 5px;">
                                    </div>
                                </div>
                                <div class="playlist_info" style="margin-top: 10px; margin-left: 10px;">
                                    <div class="playlist_name" style="font-size: 20px; margin-bottom: 10px;">
                                        <span>기본영어 20문장</span>
                                    </div>    
                                    <div class="playlist_difficulty" style="font-size: 15px; margin-top: 10px; margin-right: 120px;">
                                        <span>중급</span>
                                    </div>    
                                </div>
                            </div>


                            <div class="playlist_div  ui-btn ui-icon-carat-r ui-btn-icon-right" style="height: 100px; display : flex; flex-direction: row; margin-top: 0px; margin-bottom: 10px;">
                                <div class="playlist_img_back_div beginner_class" style="width: 100px; height: 100px; margin-top: -10px; margin-left: -15px; text-align: center; background-color: rgb(38, 103, 177);">
                                    <div class="playlist_img_circle" style="width: 90px; height: 90px; border: solid 1px none; border-radius: 75px; margin-top: 5px; margin-left: 5px; background-color: rgb(92, 40, 40); text-align: center;">
                                        <img class="playlist_img" src="<?php echo base_url();?>/img/gimbap_images/player_muffin.png" style="width: 70px; height: 70px; margin-top: 5px;">
                                    </div>
                                </div>
                                <div class="playlist_info" style="margin-top: 10px; margin-left: 10px;">
                                    <div class="playlist_name" style="font-size: 20px; margin-bottom: 10px;">
                                        <span>기본영어 20문장</span>
                                    </div>    
                                    <div class="playlist_difficulty" style="font-size: 15px; margin-top: 10px; margin-right: 120px;">
                                        <span>초급</span>
                                    </div> 
                                </div>
                            </div>


                            <div class="playlist_div  ui-btn ui-icon-carat-r ui-btn-icon-right" style="height: 100px; display : flex; flex-direction: row; margin-top: 0px; margin-bottom: 10px;">
                                <div class="playlist_img_back_div middle_class" style="width: 100px;height: 100px;margin-top: -10px;margin-left: -15px;text-align: center; background-color: rgb(185, 154, 17);">
                                    <div class="playlist_img_circle" style="width: 90px; height: 90px; border: solid 1px none; border-radius: 75px; margin-top: 5px; margin-left: 5px; background-color: rgb(92, 40, 40); text-align: center;">
                                        <img class="playlist_img" src="<?php echo base_url();?>/img/gimbap_images/player_muffin.png" style="width: 70px; height: 70px; margin-top: 5px;">
                                    </div>
                                </div>
                                <div class="playlist_info" style="margin-top: 10px; margin-left: 10px;">
                                    <div class="playlist_name" style="font-size: 20px; margin-bottom: 10px;">
                                        <span>기본영어 20문장</span>
                                    </div>    
                                    <div class="playlist_difficulty" style="font-size: 15px; margin-top: 10px; margin-right: 120px;">
                                        <span>중급</span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- 완료 학습 메뉴 -->
                        <div id="complete_list" class="ui-body-d ui-content">
                            <div class="playlist_div  ui-btn ui-icon-carat-r ui-btn-icon-right" style="height: 100px; display : flex; flex-direction: row; margin-top: 0px; margin-bottom: 10px;">
                                <div class="playlist_img_back_div middle_class" style="width: 100px; height: 100px; margin-top: -10px; margin-left: -15px; text-align: center; background-color: rgb(185, 154, 17);">
                                    <div class="playlist_img_circle" style="width: 90px; height: 90px; border: solid 1px none; border-radius: 75px; margin-top: 5px; margin-left: 5px; background-color: rgb(92, 40, 40); text-align: center;">
                                        <img class="playlist_img" src="<?php echo base_url();?>/img/gimbap_images/player_muffin.png" style="width: 70px; height: 70px; margin-top: 5px;">
                                    </div>
                                </div>
                                <div class="playlist_info" style="margin-top: 10px; margin-left: 10px;">
                                    <div class="playlist_name" style="font-size: 20px; margin-bottom: 10px;">
                                        <span>기본영어 20문장</span>
                                    </div>    
                                    <div class="playlist_difficulty" style="font-size: 15px; margin-top: 10px; margin-right: 120px;">
                                        <span>중급</span>
                                    </div>    
                                </div>
                            </div>


                            <div class="playlist_div  ui-btn ui-icon-carat-r ui-btn-icon-right" style="height: 100px; display : flex; flex-direction: row; margin-top: 0px; margin-bottom: 10px;">
                                <div class="playlist_img_back_div beginner_class" style="width: 100px; height: 100px; margin-top: -10px; margin-left: -15px; text-align: center; background-color: rgb(38, 103, 177);">
                                    <div class="playlist_img_circle" style="width: 90px; height: 90px; border: solid 1px none; border-radius: 75px; margin-top: 5px; margin-left: 5px; background-color: rgb(92, 40, 40); text-align: center;">
                                        <img class="playlist_img" src="<?php echo base_url();?>/img/gimbap_images/player_muffin.png" style="width: 70px; height: 70px; margin-top: 5px;">
                                    </div>
                                </div>
                                <div class="playlist_info" style="margin-top: 10px; margin-left: 10px;">
                                    <div class="playlist_name" style="font-size: 20px; margin-bottom: 10px;">
                                        <span>기본영어 20문장</span>
                                    </div>    
                                    <div class="playlist_difficulty" style="font-size: 15px; margin-top: 10px; margin-right: 120px;">
                                        <span>초급</span>
                                    </div> 
                                </div>
                            </div>


                            <div class="playlist_div  ui-btn ui-icon-carat-r ui-btn-icon-right" style="height: 100px; display : flex; flex-direction: row; margin-top: 0px; margin-bottom: 10px;">
                                <div class="playlist_img_back_div middle_class" style="width: 100px; height: 100px; margin-top: -10px; margin-left: -15px; text-align: center; background-color: rgb(185, 154, 17);">
                                    <div class="playlist_img_circle" style="width: 90px; height: 90px; border: solid 1px none; border-radius: 75px; margin-top: 5px; margin-left: 5px; background-color: rgb(92, 40, 40); text-align: center;">
                                        <img class="playlist_img" src="<?php echo base_url();?>/img/gimbap_images/player_muffin.png" style="width: 70px; height: 70px; margin-top: 5px;">
                                    </div>
                                </div>
                                <div class="playlist_info" style="margin-top: 10px; margin-left: 10px;">
                                    <div class="playlist_name" style="font-size: 20px; margin-bottom: 10px;">
                                        <span>기본영어 20문장</span>
                                    </div>    
                                    <div class="playlist_difficulty" style="font-size: 15px; margin-top: 10px; margin-right: 120px;">
                                        <span>중급</span>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
        <footer data-role="footer" style="text-align: center; margin : 5px;">Made by Co-Knit</footer>
        <script>
            // 학습 기록 버튼 동작
            $(document).ready(function(){
                $('#incomplete_list').show();
                $('#complete_list').hide();

                $('#incomplete_list_btn').click(function(){
                    $('#incomplete_list').show();
                    $('#complete_list').hide();
                })

                $('#complete_list_btn').click(function(){
                    $('#incomplete_list').hide();
                    $('#complete_list').show();
                })
            })
        </script>
    </section>
</body>
</html>