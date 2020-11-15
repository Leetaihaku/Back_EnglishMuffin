<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>행렬 크기 선택</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            background-color : rgb(53, 53, 53)
        }

        h1{margin-bottom: 0px;}

        h4{margin-top: 0px;}

        button{display:none}

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
            padding: 100px;
            font-size: 20px;
            color:#FFF;
        }

        .menu_area {
            display : flex;
            flex-direction : row;
            text-align: center;
        }

        .menu-box {
            margin : 5px;
        }

        .btn {
            line-height: 50px;
            height: 200px;
            text-align: center;
            width: 300px;
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
            width : 150px;
        }

        .menu_info {
            margin-top : 15px;
            margin-left : 40px;
            margin-right : 40px;
            font-size : 15px;
        }

        .menu_title {
            padding-top:10px;
            font-size: 30px;
        }

        .anchor{
            text-decoration:none;
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <div class="blank"></div>
        <div class="middle">
            <div class="title_area">
                <h1>이산수학과제 - 역행렬 구하기</h1><br>
                <h4>연산의 대상이되는 행렬크기를 선택하세요</h4>
            </div>

            <div class="menu_area">
                    
                <a class="anchor" href="./input_target_matrix2">
                    <span>
                        <div class="menu_box">
                            <div class="btn menu_btn btn2">
                            <div class="menu_title">2 x 2</div>
                            <hr class="menu_bar">
                                <div class="menu_info">
                                        <p>2차 정방행렬 연산공식으로<br>역행렬을 구합니다</p>
                                </div>
                            </div>
                        </div>
                    </span>
                </a>
                    <div class="menu_blank"></div>
                <a class="anchor" href="./input_target_matrix3">
                    <span>
                        <div class="menu_box">
                            <div class="btn menu_btn btn3">
                                <div class="menu_title">3 x 3</div>
                                <hr class="menu_bar">
                                <div class="menu_info">
                                        <p>사루스 법칙을 이용하여<br>역행렬을 구합니다</p>
                                </div>
                            </div>
                        </div>
                    </span>
                </a>
                    <div class="menu_blank"></div>
                <a class="anchor" href="./input_target_matrix4">
                    <span>
                        <div class="menu_box">
                                <div class="btn menu_btn btn4">
                                <div class="menu_title">4 x 4</div>
                                <hr class="menu_bar">
                                    <div class="menu_info">
                                            <p>소행렬식과 여인수를 응용하여<br>역행렬을 구합니다</p>
                                    </div>
                                </div>
                            </div>
                    </span>
                </a>
            </div>
        </div>
    <div class="blank"></div>
</body>
</html>