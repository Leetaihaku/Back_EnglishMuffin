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
            margin: 5px;
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

        .text-setting {
            text-align: center;
            font-weight: bold;
        }

    </style>

</head>
<body>
    <section id="modify_profile" data-role="page" data-theme="b">
        <header data-role="header" style="text-align :right;">
            <a href="#panel-push-2" style="height:20px; margin-top:5px; padding-bottom:10px; padding-left : 20px; padding-right : 20px;"class="ui-btn ui-corner-all ui-shadow ui-icon-bars ui-btn-icon-bottom"></a>
            <img style="width:200px; margin:10px; margin-right:20px;" src="https://postfiles.pstatic.net/MjAxOTAyMTJfMTU5/MDAxNTQ5OTQ4MDYwMzIz.MknGc99ZDSfi6IYGPlDD8Urv_1Yh_8McCdNdKMWll6kg.VrefzJMmW0x6WXlXjuF7m-QBCIZxQL-dwCO24hsqZxog.PNG.wxyz03002/KakaoTalk_20190212_140234017.png?type=w580">
        </header>
    
        <div class="content" data-role="content">
            <h2>개인정보 설정</h2>
            <?php if(isset($name)) {?>
            <form id="modifyForm" method="post" action="">
                <ul data-role="listview" data-inset="true">
                    <li class="">
                        <label for="name">성함 :</label>
                        <input name="name" id="name" type="text" value="<?=$name?>" data-clear-btn="true">
                    </li>
                    <li class="">
                        <label for="birthday gender">주민등록번호 :</label>
                        <div style="display:flex;">
                            <div style="width : 80px; "><input class="input-birthday" name="birthday" id="birthday" type="text" value="<?=$birth?>" maxlength="6"></div>
                            <div style="padding : 5px; padding-top : 15px;">ㅡ</div>
                            <div style="float : right; width : 30px;"><input name="gender" id="gender" type="text" value="<?=$sex?>" maxlength="1"></div>
                            <div style="padding : 5px; padding-top : 15px; font-size : 25px;">******</div>
                        </div>
                    </li>
                    <li class="">
                        <label for="address">주소 :</label>
                        <textarea name="address" id="address" rows="8" cols="40"><?=$address?></textarea>
                    </li>
                    <li class="">
                        <label for="phone_number">휴대폰 번호 :</label>
                        <input name="phone_number" id="phone_number" type="text" value="<?=$phone?>" data-clear-btn="true">
                    </li>
                    <li class="ui-field-contain">
                        <label for="flip">학습 알림 :</label>
                        <select name="flip" id="study_alarm" data-role="slider">
                            <option value="off">Off</option>
                            <option value="on">On</option>
                        </select>
                    </li>
                    <li class="ui-body ui-body-b">
                        <div style="display : flex">
                            <div class="flex-grow"><button class="ui-btn ui-corner-all ui-btn-a btn btn-3" id="submit" >수정하기</button></div>
                        </div>
                    </li>
                </ul>
            </form>
            <?php }?>
        </div>
        <footer data-role="footer" style="text-align: center; margin : 5px;">Made by Co-Knit</footer>
        <div data-role="panel" id="panel-push-2" data-display="push" class="ui-panel ui-panel-position-left ui-panel-display-push ui-body-inherit ui-panel-animate ui-panel-open" data-position-fixed="true">
            <div class="ui-panel-inner">
                <ul data-role="listview" class="ui-listview">
                    <li data-icon="delete" class="ui-first-child"><a href="#" data-rel="close" class="ui-btn ui-btn-icon-right ui-icon-delete">Menu</a></li>
                    <li><a href="./mobile_mode" class="ui-btn ui-btn-icon-right ui-icon-home">메인 페이지</a></li>
                    <li><a href="./learning_status" class="ui-btn ui-btn-icon-right ui-icon-carat-r">학습 현황</a></li>
                    <li class="ui-last-child"><a href="#" class="ui-btn ui-btn-icon-right ui-icon-gear">개인정보 설정</a></li>
                </ul><br><br><button class="ui-btn ui-shadow ui-corner-all btn btn-1" style="color:rgb(78, 78, 78);">로그아웃</button>
            </div>
        </div>
    </section>
           
    <!-- <script type="text/javascript">
        $("#confirm").click(function (){
            if($("#password_confirm").val() == "test01"){
                location.href="#modify_profile";
            }
            else {
                alert("비밀번호가 틀립니다.");
                document.location.href="#";
            }
        });
    
        $("#submit").click(function (){
            console.log($("#modifyForm").serialize());

            var data = $("#modifyForm").serialize();

            $.ajax({
                url : "",
                data : data,
                type : "POST",
                success : function(){

                }
            });
        });
    </script> -->
</body>
</html>

<script>
    
</script>