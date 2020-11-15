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

    <title>모바일 잉글리시 머핀 대시보드</title>
    <style>
        /****사용자 메뉴****/
        .user_menu {
            height: 251px;
            border: solid 1px rgb(26, 26, 26);
            border-radius: 10px;
            margin-top: 30px;
            margin-bottom: 30px;
            background-color: rgb(43, 43, 43);
        }

        /****사용자 정보****/
        .user_info {
            height: 158px;
            display : flex;
            flex-direction: row;
        }

        /****사용자 이미지 div****/
        .user_img_div {
            margin-top: 30px;
            margin-left: 30px;
        }

        /****사용자 이미지****/
        .user_img {
            width: 100px;
            border-radius: 10px;
        }

        /****사용자 이름, 레벨 정보 div****/
        .user_rank {
            margin-top: 35px;
            margin-left: 25px;
        }

        /****사용자 이름****/
        .user_name {
            font-size: 25px;
        }

        /****사용자 레벨****/
        .user_level {
            font-size: 25px;
            color: rgb(255, 208, 0);
        }

        /****사용자 경험치 div****/
        .user_exp {
            height: 42px;
            display : flex;
            flex-direction: row;
        }

        /****사용자 경험치 폰트****/
        .exp_font {
            font-size: 25px;
            margin-left: 15px;
        }

        /****사용자 경험치 bar****/
        .exp_bar {
            width: 285px;
            margin-top: 2px;
        }

        /****사용자 경험치, 플레이리스트 진행률 bar 바탕****/
        .w3-black {
            width: 100%;
            margin-top: 8px;
            margin-left: 15px;
            height: 15px;
        }

        /****사용자 경험치, 플레이리스트 진행률 bar 퍼센트 표시****/
        .w3-container {
            height: 15px;
        }

        /****사용자 학습 현황 확인 버튼****/
        .user_check_btn {
            margin-top: 0px;
            height: 49px;
            border-radius: 0px 0px 7px 7px; 
            text-align: left;
        }

        /****사용자 학습 현황 확인, 플레이리스트 학습하기 버튼 폰트****/
        .btn_font {
            margin-bottom: 3px;
            font-size: 20px;
        }

        /****플레이리스트 타이틀****/
        .playlist_title {
            font-size: 30px;
            font-weight: bold;
        }

        /****플레이리스트 메뉴****/
        .Playlist_menu {
            height: 246px;
            border: solid 1px none;
            border-radius: 10px;
            margin-top: 30px;
            margin-bottom: 30px;
        }

        /****플레이리스트 제목 div****/
        .Playlist_header {
            height: 65px;
            border-radius: 10px 10px 0px 0px;
        }

        /****고급 난이도 플레이리스트 제목 div 배경색****/
        #advanced_class {
            
        }

        /****중급 난이도 플레이리스트 제목 div 배경색****/
        #middle_class {
            
        }

        /****초급 난이도 플레이리스트 제목 div 배경색****/
        #beginner_class {
            
        }

        .blank_div {
            height: 10px;
        }

        /****플레이리스트 제목****/
        .Playlist_header_name {
            margin-left: 10px;
            font-size: 32px;
        }

        /****플레이리스트의 첫 문장, 진행률이 표시되는 div****/
        .Playlist_body {
            border-left: solid 1px rgb(26, 26, 26);
            border-right: solid 1px rgb(26, 26, 26);
            height: 131px;
            background-color: rgb(43, 43, 43);
        }

        /****플레이스트의 첫 문장이 출력되는 div****/
        .sentence_div {
            height: 75px;
        }

        .blank_div_1 {
            height: 21px;
        }

        /****첫 문장 폰트****/
        .start_sentence {
            margin-left: 15px;
            font-size: 25px;
            color: rgb(248, 212, 145);
        }

        /****진행 정보가 표시되는 div****/
        .progress_div {
            height: 56px;
            border-bottom: solid 1px rgb(26, 26, 26);
        }

        .blank_div_2 {
            height: 15px;
        }

        .progress_status {
            display : flex;
            flex-direction: row;
        }

        /****진행률 폰트****/
        .progress_font {
            margin-left: 10px;
            font-size: 20px;
        }

        /****플레이리스트 진행률 bar div****/
        .progress_bar {
            width: 270px;
        }

        /****플레이리스트 학습하기 버튼 div****/
        .Playlist_footer {
            border: solid 1px rgb(26, 26, 26);
            border-top: 0px;
            height: 50px;
            border-radius: 0px 0px 10px 10px;
            margin-top: 0px;
        }

        /****플레이리스트 학습하기 버튼****/
        .Playlist_btn {
            margin-top: 0px;
            height: 49px;
            border-radius: 0px 0px 10px 10px;
            text-align: left;
        }

    </style>
</head> 
<body> 
<!-- data-role는 jQuery mobile에서 해당 엘리먼트가 어떤 UI인지를 지정한다. 아래 page는 이 엘리먼트가 가장 큰 단위인 페이지임을 의미한다. -->
    <section id="Playlist_page" data-role="page" data-theme="b">
        <!--학습기 대시보드 페이지 헤더-->
        <!--한 파일에 페이지 2개 이상일 때 패널 id 다르게 설정 할 것!-->
        <header data-role="header" style="text-align :right;">
        <a href="#panel-push" style="height:37px; margin-top:5px; padding-bottom:10px; padding-left : 20px; padding-right : 20px;"class="ui-btn ui-corner-all ui-shadow ui-icon-bars ui-btn-icon-bottom"></a>
            <img style="width:200px; margin:10px; margin-right:20px;" src="">
        </header>
        <!--panel 메뉴-->
        <div data-role="panel" id="panel-push" data-display="push" class="ui-panel ui-panel-position-left ui-panel-display-push ui-body-inherit ui-panel-animate ui-panel-open" data-position-fixed="true">
            <div class="ui-panel-inner">
                <ul data-role="listview" class="ui-listview">
                    <li data-icon="delete" class="ui-first-child"><a href="#" data-rel="close" class="ui-btn ui-btn-icon-right ui-icon-delete">Menu</a></li>
                    <li><a href="./mobile_mode" class="ui-btn ui-btn-icon-right ui-icon-home">메인 페이지</a></li>
                    <li><a id="learning_status_btn" href="./learning_status" class="ui-btn ui-btn-icon-right ui-icon-carat-r">학습 현황</a></li>
                    <li class="ui-last-child"><a href="./client_info_intro" class="ui-btn ui-btn-icon-right ui-icon-gear">개인정보 설정</a></li>
                </ul><br><br>
                <button class="ui-btn ui-shadow ui-corner-all btn btn-1" style="color:rgb(78, 78, 78);">로그아웃</button>
            </div>
        </div>                   
        <div class="content" data-role="content">
            <div class="ui-body ui-body-b ui-corner-all" style="padding : 0px;">
                   <!-- 사용자 메뉴 -->
                   <div class="user_header">
                        <!-- 사용자 정보 -->
                        <div class="user_info" style="height: 158px; display : flex; flex-direction: row;">
                            <!-- 사용자 이미지 div -->
                            <div class="user_img_div" style=" margin-top: 30px; margin-left: 30px;">
                                <img style="width: 100px; border-radius: 10px;" src="<?php echo base_url();?>/img/gimbap_images/user_muffin.png">
                            </div>
                            <!-- 사용자 이름, 레벨 정보 div -->
                            <div class="user_rank" style="margin-top: 35px; margin-left: 25px;">
                                <div class="user_name_div">
                                    <!-- 사용자 이름 -->
                                    <span class="user_name" style="font-size: 25px;">홍길동</span>
                                </div>
                                <div class="user_level_div">
                                    <!-- 사용자 레벨 -->
                                    <span class="user_level" style="font-size: 25px; color: rgb(255, 208, 0);">LV. 1 신입생</span>
                                </div>
                            </div>
                        </div>
                        <!-- 사용자 경험치 div -->
                        <div class="user_exp" style=" height: 42px; display : flex; flex-direction: row;">
                            <!-- 사용자 경험치 폰트 -->
                            <span class="exp_font" style="font-size: 25px; margin-left: 15px;">EXP</span>
                            <!-- 사용자 경험치 bar -->
                            <div class="progress_bar" style="width: 75%;">
                                <!-- 플레이리스트 진행률 bar 바탕 -->
                                <div class="w3-black w3-round-xlarge" style="width: 100%;margin-top: 8px;margin-left: 15px; height: 15px; background-color : black; border-radius : 10px;">
                                    <!-- 플레이리스트 진행률 bar 퍼센트 표시 -->
                                    <div class="w3-container w3-green w3-round-xlarge" style="background-color:rgb(74, 142, 219); width:97%; height : 15px; border-radius : 10px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="user_check">
                        <!-- 사용자 학습 현황 확인 버튼 -->
                        <a href="./learning_status"><div class="user_check_btn ui-btn ui-icon-carat-r ui-btn-icon-right" style="margin-top: 0px; border-radius: 0px 0px 7px 7px; text-align: left; margin:0px;">
                            <!-- 사용자 학습 현황 확인 버튼 폰트-->
                            <span class="btn_font" style="margin-bottom: 3px; font-size: 20px;">학습 현황</span>
                        </div></a>    
                    </div>
            </div>

         
            

            <div>
                <h2>학습 Playlist</h2>
            </div>


            <?php
            if(isset($gimbap_data))
            {
                for ($i=0; $i<$gimbap_count; $i++)
                {
                    $color = "default";
                    if($gimbap_data[$i]['class'] == '초급')
                    {
                        $color = 'background-color: rgb(38, 103, 177)';
                    }
                    else if($gimbap_data[$i]['class'] == '중급')
                    {
                        $color = 'background-color: rgb(185, 154, 17)';
                    }
                    else
                    {
                        $color = 'background-color: rgb(194, 74, 4)';
                    }
                    // var_dump($gimbap_data[$i]['info'][3]);
            ?>
            <!--플레이리스트 메뉴-->
            <div class="Playlist_menu ui-body ui-corner-all" style="padding:0px; height: 246px; border: solid 1px none; border-radius: 10px; margin-top: 30px; margin-bottom: 30px;">
                <!-- 플레이리스트 제목 div -->
                <div class="Playlist_header" style=" height: 65px; border-radius: 10px 10px 0px 0px; <?=$color?>;">
                    <div class="blank_div" style="height: 10px;"></div>
                    <!-- 플레이리스트 제목 -->
                    <span class="Playlist_header_name" style=" margin-left: 10px;font-size: 32px;"><?=$gimbap_data[$i]['gimbap']?></span>
                </div>
                <!-- 플레이리스트의 첫 문장, 진행률이 표시되는 div -->
                <div class="Playlist_body" style="border-left: solid 1px rgb(26, 26, 26); border-right: solid 1px rgb(26, 26, 26); height: 131px; background-color: rgb(43, 43, 43);">
                    <!-- 플레이스트의 첫 문장이 출력되는 div -->
                    <div class="sentence_div" style="height: 75px;">
                        <div class="blank_div_1" style="height: 21px;"></div>
                        <!-- 플레이리스트의 첫 문장 폰트 -->
                        <span class="start_sentence" style="margin-left: 15px; font-size: 25px; color: rgb(248, 212, 145);">"<?=$gimbap_data[$i]['sample']?>"</span>
                    </div>
                    <!-- 진행 정보가 표시되는 div -->
                    <div class="progress_div" style="height: 56px; border-bottom: solid 1px rgb(26, 26, 26);">
                        <div class="blank_div_2" style="height: 15px;"></div>
                        <div class="progress_status" style="display : flex; flex-direction: row;">
                            <!-- 진행률 폰트 -->
                            <span class="progress_font" style=" font-size: 20px; margin-left: 10px;">진행률</span>
                            <!-- 플레이리스트 진행률 bar div -->
                            <div class="progress_bar" style="width: 75%;">
                                <!-- 플레이리스트 진행률 bar 바탕 -->
                                <div class="w3-black w3-round-xlarge" style="width: 100%;margin-top: 8px;margin-left: 15px; height: 15px; background-color : black; border-radius : 10px;">
                                    <!-- 플레이리스트 진행률 bar 퍼센트 표시 -->
                                    <div class="w3-container w3-green w3-round-xlarge" style="background-color:rgb(73, 175, 73); width:<?=$gimbap_data[$i]['process']?>%; height : 15px; border-radius : 10px;"></div>
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
                <!-- 플레이리스트 학습하기 버튼 div -->
                <div class="Playlist_footer">
                    <!-- 플레이리스트 학습하기 버튼 -->
                    <div class="Playlist_btn ui-btn ui-icon-carat-r ui-btn-icon-right" style="margin:0px; border-radius: 0px 0px 7px 7px; text-align:left;">
                        <!-- 플레이리스트 학습하기 버튼 폰트 -->
                        <a href="" style="text-decoration: none; color: white;"><span class="btn_font" style="margin-bottom: 3px; font-size: 20px;">학습 하기</span></a>
                    </div>    
                </div>    
            </div>
            <?php
                }
            }
            ?>
        <footer data-role="footer" style="text-align: center; margin : 5px;">Made by Co-Knit</footer>

        <!-- <script>
            $(document).ready(function(){
                if(#$gimbap_data[$i]['info'][3]?> == '초급'){
                    $('.Playlist_header').addClass('beginner_class');
                }
                else if(#$gimbap_data[$i]['info'][3]?> == '중급'){
                    $('.Playlist_header').addClass('middle_class');
                }
                else{
                    $('.Playlist_header').addClass('advanced_class');
                }
            })
        </script> -->
    </section>
 
</body>
</html>