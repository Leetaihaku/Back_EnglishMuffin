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

    <title>Playlist 변경</title>

    <style>
        body {
            background-color: rgb(34, 34, 34);
        }
        
        #top{
            display:flex;
        }

        #top-bar {
            background-color: rgb(95, 95, 95);
            padding-top: 7px;
            padding-bottom: 7px;
            padding-left: 10px;
            z-index: 1;
            width: 100%;
            display : flex;
            flex-basis : 1280px;
            flex-shrink: 0;
            flex-grow : 1;
            }

        #title-box{
            flex-shrink: 0;
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
        }

        .top-bar-sub-title {
            top: 2px;
            margin-top : 10px;
            margin-left : 10px;
            font-family: '나눔스퀘어라운드', '맑은 고딕';
            font-size: 35px;
            color: whitesmoke;
            width: 250px;
            flex-shrink: 0;
            white-space: nowrap;
        }
        .top-blank{
            flex-shrink : 0;
            flex-grow : 3;
        }
        .cancel_btn {
            float: right;
            width: 100px;
            height: 50px;
            margin-top : 8px;
            margin-right : 30px;
            color: white;
            margin-left:30px;
            font-size: 25px;
            font-family: '나눔스퀘어라운드', '맑은 고딕';
            border-radius: 10px;
        }

        .main_lists {
            display: flex;
            flex-direction: row;
        }

        .main-left-list {
            margin-top: 70px;
            margin-left: 20px;
            margin-bottom: 20px;
            background: rgb(65, 65, 65);
            height: 750px;
            flex-basis : 330px;
            flex-shrink : 0;
            flex-grow : 1;
            border-radius: 20px;
        }

        .contents_title {
            font-size: 2.5em;
            position: relative;
            top: 20px;
            left: 30px;
        }

        .playlist_bar {
            border: solid 3px rgb(172,172,172);
            width: 80%;
            border-radius: 10px;
            position: relative;
            top: 2px;
            left: -5px;
        }

        .contents_bar {
            border: solid 2px rgb(172,172,172);
            width: 80%;
            border-radius: 10px;
            position: relative;
            top: 2px;
            left: -5px;
            margin-top : 10px;
        }

        .interpreter_bar {
            border: solid 2px rgb(172,172,172);
            width: 80%;
            border-radius: 10px;
            position: relative;
            top: 17px;
            left: -5px;
            margin-top : 10px;
            margin-bottom : 25px;
        }

        .playlist_list {
            background-color: rgb(255, 255, 255);
            padding-top: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
            width: 85%;
            height: 600px;
            border-radius: 20px;
            margin-top: 0px;
            margin-left: 30px;
            position: relative;
            top: 10px;
            overflow-y: scroll;
            border-radius: 10px;
        }

        .remove_btn {
            background-color:white;
            border: none;
            color: indianred;
            padding: 0px 8px 0px 8px;
            font-size: 20px;
            cursor: pointer;
            border-radius: 40px;
            right: 10px;
            position: absolute;
        }

        .remove_btn:hover {
            background-color :indianred;
            color :white;
        }

        .main-right-list {
            margin-top: 70px;
            margin-left: 20px;
            margin-bottom: 20px;
            margin-right : 30px;
            padding-right : 35px;
            background: rgb(85, 85, 85);
            height: 750px;
            flex-basis : 650px;
            flex-grow : 1.5;
            border-radius: 20px;
            position: relative;
            left: 10px;
        }

        .right-top {
            display: flex;
            flex-direction: row;
        }

        .info_title {
            padding-top : 30px;
            width : 400px;
            font-size: 30px;
            position: relative;
            top: 10px;
            margin-left: 50px;
            background-color: transparent;
            border: none;
        }

        .info_title:focus {
            outline: none;
        }

        .info_bar {
            border: solid 2px rgb(172,172,172);
            width: 110%;
            border-radius: 10px;
            position: relative;
            top: 2px;
            margin-left: 40px;
        }

        .sel_class {
            background-image: linear-gradient(to right, #d56fee, #e72184);
            border: none;
            color: whitesmoke;
            width: 100px;
            height: 40px;
            padding-left: 20px;
            margin-top: 48px;
            margin-left: 120px;
            font-size: 20px;
            font-weight: bold;
            border-radius: 15px;
        }

        .sel_class:focus {
            outline: none;
        }

        option {
            color: black;
            font-weight: bold;
        }

        .info_list {
            background-color: rgb(255, 255, 255);
            width: 92%;
            height: 100px;
            border-radius: 20px;
            margin-top: 30px;
            margin-left: 30px;
            position: relative;
            top: 200px;
            overflow-y: scroll;
            z-index: 1;
        }

        .default_font {
            font-family: '나눔스퀘어라운드', '맑은 고딕';
            color: snow;
            z-index: 2;
        }

        .playlist_info_data {
            font-size: 25px;
            font-weight: bold;
            color: white;
            position: relative;
            top: 140px;
            left: 30px;
        }
        
        .interpreter_icon {
            position: absolute;
            top: 15px;
            right: 10px;
            width: 20px;
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
            top: 0px;
            left: 0px;
            display: flex;
            flex-direction: row;
        }

        .default_info {
            font-size: 25px;
            font-weight: bold;
            color: white;
            position: relative;
            left: 30px;
        }

        .playlist_info_data {
            font-size: 25px;
            font-weight: bold;
            color: rgb(0, 0, 0);
            position: relative;
            top: 0px;
            left: 40px;
        }

        .playlist_modify_btn {
            width: 15%;
            height: 10%;
            position: relative;
            top: 60px;
            left: 360px;
            font-size: 28px;
            font-weight: bold;
        }

        .info_list {
            background-color: rgb(255, 255, 255);
            padding-top: 20px;
            padding-bottom: 20px;
            padding-left: 20px;
            width: 95%;
            height: 520px;
            border-radius: 20px;
            margin-top: 30px;
            margin-left: 30px;
            position: relative;
            top: 0px;
            overflow-y: scroll;
            z-index: 1;
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

        #sortable {
                margin: 5px;
                padding: 10px;
                width: 50%;
                position: relative;
                margin: 0em 0px 1px;
                list-style: outside none none;
                counter-reset: big-numba;
                padding-left: 0px;
                width: 100%;
                padding: 10px;
        }

        #sortable li {
                margin: 2px 0px 10px 20px;
                font-size: 1.4em;
                display: flex;
                width: 95%;
                padding: 5px;
                border-radius: 5px;
        }

        .info_img {
            width: 40px;
        }

        .remove_ing_btn {
            background-color:whitesmoke;
            border: none;
            color: indianred;
            padding: 0px 8px 0px 8px;
            font-size: 20px;
            cursor: pointer;
            border-radius: 5px;
            right: 10px;
            position: absolute;
        }

        .remove_ing_btn:hover {
            background-color :indianred;
            color :white;
        }

        .modal-title {
            font-family: "HYHeadLine 중간";
            font-weight: bold;
        }

        .background {
            width: 100%;
            height: 600px;
            background: silver;
            border-radius : 20px;
        }

        .preview_title {
            font-family: "HYHeadLine 중간";
            font-weight: bold;
            font-size: 25px;
            color: white;
            padding-top: 12px;
            padding-left: 35px;
        }

        .preview {
            width: 85%;
            height: 500px;
            overflow-y : scroll;
            background: whitesmoke;
            margin-top: 2%;
            margin-left: 5%;
            position: absolute;
        }
        
        .horizen {
            display: inline-block;
            width: 85%;
            height: 3px;
            background-color:white;
            margin-left: 5%;
            border-radius: 2px;
            position:absolute;
        }

        .filebox label { 
            display: inline-block; 
            padding: .5em .75em; 
            color: white;
            font-size: inherit;
            line-height: normal; 
            vertical-align: middle; 
            background-color: #1465fc; 
            cursor: pointer; 
            border: 1px solid #ebebebee; 
            border-bottom-color: #e2e2e2; 
            border-radius: .25em; } 


        .filebox input[type="file"] { 
            /* 파일 필드 숨기기 */ 
            position: absolute; 
            width: 1px; 
            height: 1px; 
            padding: 0; 
            margin: -1px; 
            overflow: hidden; 
            clip:rect(0,0,0,0); 
            border: 0; 
            }

        .namebox {
            display: inline-block;
            font-size: 25px;
            font-family: inherit;
            line-height: normal;
            vertical-align: middle;
            background-color: #f5f5f5;
            border: 1px solid #ebebeb;
            border-bottom-color: #e2e2e2;
            border-radius: .25em;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            width : 70%;
        }

        .contents_menu_block {
            display: flex;
            flex-direction: row;
        }

        .excel_upload_btn {
            float : right;
            width: 80px;
            margin-top : 30px;
            margin-right : 10%;
            margin-bottom : 0px;
            font-size: 20px;
            font-family: '나눔스퀘어라운드', '맑은 고딕';
            
        }

        .add_save_btn {
            float : right;
            margin-top : 15px;
            font-size: 25px;
            border-radius: 10px;
            padding-top : 10px;
        }

        .delete_button {
            background-color:whitesmoke;
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

        .main-blank {
            flex-grow : 2;
            flex-basis : 80px;
        }

        button {
            all:unset;
        }  
        
        .btn {
            
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;
            box-shadow: 0 0 20px #eee;
            border-radius: 10px;
        }


        .btn:hover {
        background-position: right center; /* change the direction of the change here */
        }

        .btn-1 {
        background-image: linear-gradient(to right, #e7a84a 0%, #f14a1c 51%, #e7a84a 100%);
        }

        .btn-2 {
        background-image: linear-gradient(to right, #fd9ce2 0%, #7ca6ee 51%, #fc94de 100%);
        }

        .btn-3 {
        background-image: linear-gradient(to right, #41da79 0%, #38a4da 51%, #41d477 100%);
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
<div id="top">
        <div id="top-bar">
            <div id="title-box">
            <table>
                <tr style="vertical-align:top">
                    <td class="top-bar-table"><img style="width:300px; margin-left : 10px; margin-right : 10px; margin-top : 10px;"  src="<?php echo base_url();?>/img/gimbap_images/title_muffin.png"></td>
                    <td style="padding-left:10px"></td>
                    <td class="top-bar-sub-title"><div class="top-bar-sub-title">Playlist 변경</div></td>
                </tr>
            </table>
        </div>
        <div class="top-blank"></div>
            <a href="./gimbap_manage"><button class="btn btn-1 cancel_btn">취소 X</button></a>
        </div>
    </div>

    <input id="admin" style="hidden" value="<?=$admin?>">

    <div class="main_lists">
    <div class='main-blank'></div>
        <div class='main-left-list'>
            <div style="height:98px;">
                <div class="contents_menu_block">
                    <span class="default_font contents_title">Contents</span>
                    <div class="container">
                        <!-- Trigger the modal with a button -->
                        <button type="button" class="btn btn-4 excel_upload_btn" data-toggle="modal" data-target="#myModal">추가</button>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">엑셀 업로드</h5>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="filebox">
                                            <label for="fileUpload">파일 선택</label>
                                            <input type="file" id="fileUpload">
                                            <input type="text" class="namebox" id="filename" readonly>
                                        </div><!-- 엑셀 파일 선택 버튼 -->
                                        <hr />
                                        <div class="background">
                                            <h3 class="preview_title">미리보기</h3>
                                            <div class="horizen"></div>
                                            <div class="preview style-1" id="dvExcel"></div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" id="upload_btn">업로드</button>
                                        <!-- 엑셀 파일 업로드 버튼 -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.13.5/xlsx.full.min.js"></script>
                    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.13.5/jszip.js"></script>
                    <script type="text/javascript">
                        $('#fileUpload').on("change", function () {

                            var fileUpload = document.getElementById("fileUpload");

                            //파일 이름 추출
                            var fileValue = $("#fileUpload").val();
                            var pathHeader = fileValue.lastIndexOf("\\");
                            var pathMiddle = fileValue.lastIndexOf(".");
                            var fileName = fileValue.substring(pathHeader + 1, pathMiddle);
                            $("#filename").val(fileName);

                            //파일 형식 판단 (.xls, .xlsx 형식만 가능)
                            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.xls|.xlsx)$/;

                            if (regex.test(fileUpload.value.toLowerCase())) {
                                if (typeof (FileReader) != "undefined") {
                                    var reader = new FileReader();

                                    //For Browsers other than IE.
                                    if (reader.readAsBinaryString) {
                                        reader.onload = function (e) {
                                            ProcessExcel(e.target.result, fileName);
                                        };
                                        reader.readAsBinaryString(fileUpload.files[0]);
                                    } else {
                                        //IE Browser.
                                        reader.onload = function (e) {
                                            var data = "";
                                            var bytes = new Uint8Array(e.target.result);
                                            for (var i = 0; i < bytes.byteLength; i++) {
                                                data += String.fromCharCode(bytes[i]);
                                            }
                                            ProcessExcel(data, fileName);
                                        };
                                        reader.readAsArrayBuffer(fileUpload.files[0]);
                                    }
                                } else {
                                    alert("이 브라우저는 HTML5를 지원하지 않습니다.");
                                }
                            } else {
                                alert(".xls 또는 .xlsx 확장자의 엑셀 파일을 선택하여 주십시오.");
                            }
                        });




                        // <엑셀 미리보기 함수>
                        function ProcessExcel(data, fileName) {
                            //엑셀 파일 데이터를 이진 형식으로 읽음.
                            var workbook = XLSX.read(data, {
                                type: 'binary'
                            });

                            //첫번째 시트의 이름을 가져옴. (2개 이상 시트 추가 가능, 제한 없음)
                            var firstSheet = workbook.SheetNames[0];

                            //첫번째 시트의 모든행을 JSON array로 읽음.
                            var excelRows = XLSX.utils.sheet_to_row_object_array(workbook.Sheets[firstSheet]);

                            //HTML 테이블 생성
                            var table = document.createElement("table");
                            table.border = "1";

                            //헤더 행 추가하기
                            var row = table.insertRow(-1);

                            //헤더 셀 추가하기 (미리보기 출력)
                            var headerCell = document.createElement("TH");
                            headerCell.innerHTML = "data_type";
                            row.appendChild(headerCell);

                            headerCell = document.createElement("TH");
                            headerCell.innerHTML = "data_eng";
                            row.appendChild(headerCell);

                            headerCell = document.createElement("TH");
                            headerCell.innerHTML = "data_kor";
                            row.appendChild(headerCell);

                            headerCell = document.createElement("TH");
                            headerCell.innerHTML = "data_mp3";
                            row.appendChild(headerCell);


                            //엑셀 파일의 데이터 추출 반복문
                            for (var i = 0; i < excelRows.length; i++) {
                                // 행 선택하기
                                var row = table.insertRow(-1);

                                //셀 선택하기 (미리보기 출력)
                                var cell = row.insertCell(-1);
                                cell.innerHTML = excelRows[i].data_type;

                                cell = row.insertCell(-1);
                                cell.innerHTML = excelRows[i].data_eng;

                                cell = row.insertCell(-1);
                                cell.innerHTML = excelRows[i].data_kor;

                                cell = row.insertCell(-1);
                                cell.innerHTML = excelRows[i].data_mp3;
                            }

                            var dvExcel = document.getElementById("dvExcel");
                            dvExcel.innerHTML = "";
                            dvExcel.appendChild(table);
                        };


                        

                        // < 엑셀 데이터 생성 함수 >
                        function CreateExcelData(data, fileName) {
                            //엑셀 파일 데이터를 이진 형식으로 읽음.
                            var workbook = XLSX.read(data, {
                                type: 'binary'
                            });

                            //첫번째 시트의 이름을 가져옴. (2개 이상 시트 추가 가능, 제한 없음)
                            var firstSheet = workbook.SheetNames[0];

                            //첫번째 시트의 모든행을 JSON array로 읽음.
                            var excelRows = XLSX.utils.sheet_to_row_object_array(workbook.Sheets[firstSheet]);

                            //container[0]에 엑셀파일 정보(파일명, formdata 개수) 입력
                            var container = new FormData();

                            container.append('file_name', fileName);

                            data_type = new Array();
                            data_eng = new Array();
                            data_kor = new Array();
                            data_mp3 = new Array();

                            //엑셀 파일의 데이터 추출 반복문
                            for (var i = 0; i < excelRows.length; i++) {

                                // 엑셀 데이터를 FormData 형식의 변수 formdata에 삽입.
                                var formdata = new FormData();

                                data_type[i] = excelRows[i].data_type
                                data_eng[i] = excelRows[i].data_eng
                                data_kor[i] = excelRows[i].data_kor
                                data_mp3[i] = excelRows[i].data_mp3
                            }

                            container.append('data_type[]', data_type);
                            container.append('data_eng[]', data_eng);
                            container.append('data_kor[]', data_kor);
                            container.append('data_mp3[]', data_mp3);

                            
                            // 전송 AJAX 
                            $.ajax({
                                url: "./new_excel_data_on_modal", // 주소 입력 필요
                                type: "POST",
                                data: container,
                                contentType : false,
                                processData : false,

                                success : function(response){
                                    console.log(response);
                                    if(response == 1){
                                        alert("저장되었습니다.");
                                        location.reload();
                                        console.log("Perfect!");
                                    }
                                    else{
                                        alert("저장 도중에 문제가 발생하였습니다.");
                                    }
                                },
                                complete : function(){
                                    console.log("실행완료");
                                }
                            });
                        }

                        var excel_oneclick = true;

                        // 업로드 버튼 클릭시 

                        $("#upload_btn").click(function () {

                            // 중복클릭 방지
                            if (excel_oneclick){
                                excel_oneclick = false;
                            }
                            else{
                                alert("현재 작업을 처리중입니다. 잠시만 기다려주세요.");
                                return false;
                            }
                            
                            var fileUpload = document.getElementById("fileUpload");

                            //파일 이름 추출
                            var fileValue = $("#fileUpload").val();
                            var pathHeader = fileValue.lastIndexOf("\\");
                            var pathMiddle = fileValue.lastIndexOf(".");
                            var fileName = fileValue.substring(pathHeader + 1, pathMiddle);
                            $("#filename").val(fileName);

                            //파일 형식 판단 (.xls, .xlsx 형식만 가능)
                            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.xls|.xlsx)$/;

                            if (regex.test(fileUpload.value.toLowerCase())) {
                                if (typeof (FileReader) != "undefined") {
                                    var reader = new FileReader();

                                    //For Browsers other than IE.
                                    if (reader.readAsBinaryString) {
                                        reader.onload = function (e) {
                                            CreateExcelData(e.target.result, fileName);
                                        };
                                        reader.readAsBinaryString(fileUpload.files[0]);
                                    } else {
                                        //IE Browser.
                                        reader.onload = function (e) {
                                            var data = "";
                                            var bytes = new Uint8Array(e.target.result);
                                            for (var i = 0; i < bytes.byteLength; i++) {
                                                data += String.fromCharCode(bytes[i]);
                                            }
                                            CreateExcelData(data, fileName);
                                        };
                                        reader.readAsArrayBuffer(fileUpload.files[0]);
                                    }
                                } else {
                                    alert("이 브라우저는 HTML5를 지원하지 않습니다.");
                                }
                            } else {
                                alert(".xls 또는 .xlsx 확장자의 엑셀 파일을 선택하여 주십시오.");
                            }
                            
                        });
                    </script>
                </div>
                <hr class="contents_bar">
            </div>
            <div class='playlist_list' id="style-1">
                <!-- List group -->
                        
                <div class="list-group" id="myList" role="tablist">
                    <?php
                        if(isset($contents_data)){
                            foreach ($contents_data as $key) {
                    ?>
                        <a class="list-group-item list-group-item-action content_sel" data-toggle="list" href="#Playlist_1" role="tab" value="<?=$key->data_label?>"><?=$key->data_label?>
                            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                            <button class="remove_btn list_delete" data-toggle="modal" data-target="#delete_modal"><i class="fa fa-close"></i></button>
                        </a>
                    <?php
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
                    
        <!-- 삭제 Modal -->
        <div class="modal fade" id="delete_modal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Contents 삭제</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h6><span class="target_name"></span></h6>
                해당 컨텐츠가 포함된 Playlist의 내용이 변경될 수 있습니다.<br>
                정말로 삭제하시겠습니까?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">취소</button>
                <button type="button" class="btn btn-danger list_delete_db">삭제</button>
            </div>
            </div>
        </div>
        </div>


        <div class='main-left-list'>
            <div>
                <span class="default_font contents_title">Interpreter</span>
                <hr class="interpreter_bar">
            </div>
            <div class='playlist_list' id="style-1">
                <!-- List group -->
                <div class="tab-content">
                    <div class="tab-pane active" id="Playlist_1" role="tabpanel">
                        <div class="list-group" id="myList" role="tablist">
                            <?php
                                if(isset($interpreter_data)){
                                    foreach ($interpreter_data as $key) {
                            ?>
                            <a class="list-group-item list-group-item-action interpreter_sel" data-toggle="list" value="<?=$key->interpreter_name?>"><?=$key->interpreter_name?>
                                <img src="<?php echo base_url();?>/img/gimbap_images/tmp_interpreter.png" class="interpreter_icon">
                            </a>
                            <?php
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class='main-right-list'>
            <div class="right-top">
                <div>
                    <input class="default_font info_title" id="gimbap_name" placeholder="이름을 입력하시오" value="<?=$selected_gimbap_name?>">
                    <input type="hidden" class="previous_gimbap_name" value="<?=$selected_gimbap_name?>">
                    <hr class="info_bar">
                </div>
                <select class="sel_class">
                    <option <?php if($selected_gimbap_class == '초급'){echo("selected");}?>>초급</option>
                    <option <?php if($selected_gimbap_class == '중급'){echo("selected");}?>>중급</option>
                    <option <?php if($selected_gimbap_class == '고급'){echo("selected");}?>>고급</option>
                </select>
            </div>
            <div class='info_list' id="style-1">
                <!--재료 리스트 모듈 (드래그 앤 드롭 리스트) -->
                <link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
                <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
                <script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
                <script>
                    $(function () {
                        $("#sortable").sortable();
                        $("#sortable").disableSelection();
                    });
                </script>
                <ol class="blog-blau-liste" id="sortable">
                    <!--새로 입력될 ingredient가 들어갈 자리-->
                    <?php
                    if (isset($target_ingredient_data)) {
                        foreach ($target_ingredient_data as $key) {
                    ?>
                    <li class="ui-state-default blog-blau-liste-item">
                        <span value="<?=$key->data_name?>+<?=$key->interpreter_name?>"><img src="<?php echo base_url();?>/img/gimbap_images/sort_bar_scroll.png" class="info_img">
                            <?=$key->data_name?> ▶ <?=$key->interpreter_name?></span>
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                        <button class="delete_button"><i class="fa fa-close"></i></button>
                    </li>
                    <?php
                        }
                    }
                    ?>
                </ol>
            </div>
            <button class="btn btn-3 add_save_btn" id="save_btn">저장 <img style="width:40px; margin-bottom:5px;" src="<?php echo base_url();?>/img/gimbap_images/save.png"></button>
        </div>
        <div class='main-blank'></div>
    </div>

    <script>
        $(".delete_button").click(function () {
            $(this).parent().remove();
        })

        var contents = null; //전역변수 contents 선언

        $(".content_sel").click(function () {
            contents = $(this).attr('value');
        })

        $(".interpreter_sel").click(function () {
            if(contents != null) {
                var interpreter = $(this).attr('value');

                $("#sortable").append(
                `<li class="ui-state-default blog-blau-liste-item">
                    <span value="${contents}+${interpreter}"><img src="<?php echo base_url();?>/img/gimbap_images/sort_bar_scroll.png" class="info_img">
                        ${contents} ▶ ${interpreter}</span>
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                    <button class="delete_button"><i class="fa fa-close"></i></button>
                </li>`
                );
                // 스코프를 고려하여 delete button function 재선언
                $(".delete_button").click(function () {
                    $(this).parent().remove();
                })
            }
            else
                alert("컨텐츠를 먼저 선택해주세요.");
        })
        
        // 저장 버튼 클릭시 
        var save_oneclick = true;

        $('#save_btn').on('click', function(){
            
            // 중복클릭 방지
            if (save_oneclick){
                save_oneclick = false;
            }
            else{
                alert("현재 작업을 처리중입니다. 잠시만 기다려주세요.");
                return false;
            }

            
            if($('#sortable').children().length == 0) // 컨텐츠가 입력이 안되었을때
                alert("컨텐츠를 추가해주세요.");

            else if($('#gimbap_name').val()){
                var gimbap_name = $('#gimbap_name').val();
                var previous_gimbap_name = $('.previous_gimbap_name').val();
                console.log(gimbap_name);
                console.log(typeof(gimbap_name));
                $.ajax({
                    url : "./delete_previous_gimbap_n_prohibit_gimbap_name_overlap",
                    data : {'gimbap_name' : gimbap_name,
                            'previous_gimbap_name' : previous_gimbap_name},
                    type : "POST",
                    success : function(response){
                        console.log(response);
                        // 중복되지 않는 이름일때,
                        if (response == 1) {
                            var gimbap = new FormData();
                            
                            //var gimbap_name = new Array();
                            var ingredient_sequence = new Array();
                            var data_name = new Array();
                            var interpreter_name = new Array();

                            var gimbap_name_confirmed = $('#gimbap_name').val();

                            for(var i = 0; i < $('#sortable').children().length; i++) {
                                var ingredient = $('#sortable').children().eq(i).children().attr('value').split('+');

                                ingredient_sequence[i] = Number(i+1);
                                data_name[i] = ingredient[0];
                                interpreter_name[i] = ingredient[1];                                
                            }

                            var gimbap_length = i;

                            var date = new Date();

                            if(date.getMonth() <= 9) //월 숫자 두자리 만들기
                                month = "0" + (date.getMonth() + 1);
                            else
                                month = (date.getMonth() + 1);

                            if(date.getDate() <= 9) //일 숫자 두자리 만들기
                                day = "0" + date.getDate();
                            else
                                day = date.getDate();

                            var date_string = String(date);
                            var date_split = date_string.split(" ");

                            var gimbap_date = date_split[3] + "/" + month + "/" + day + " " + date_split[4];// 작성 날짜 추가

                            var gimbap_writer = document.getElementById("admin").value;

                            var gimbap_class = $(".sel_class").val();

                            gimbap.append('gimbap_date', gimbap_date);
                            gimbap.append('gimbap_writer', gimbap_writer);
                            gimbap.append('gimbap_length', gimbap_length);
                            gimbap.append('gimbap_name', gimbap_name_confirmed);
                            gimbap.append('ingredient_sequence[]', ingredient_sequence);
                            gimbap.append('data_name[]', data_name);
                            gimbap.append('interpreter_name[]', interpreter_name);
                            gimbap.append('gimbap_class', gimbap_class);
                            
                            // 완성된 김밥 데이터 전송 ajax 모듈
                            $.ajax({
                                url : "./save_new_gimbap",
                                type : "POST",
                                data : gimbap,
                                contentType : false,
                                processData : false,
                                
                                success : function(response){
                                    console.log(response);
                                    if(response == 1){
                                        alert("저장되었습니다.");
                                        location.href="./gimbap_manage";
                                        console.log("Perfect!");
                                    }
                                    else{
                                        alert("저장 도중에 문제가 발생하였습니다.");
                                    }
                                },
                                complete : function(){
                                    console.log("실행완료");
                                }
                            })
                        }
                         // 중복된 이름일때,
                        else {
                            alert("현재 입력한 제목의 Playlist가 이미 존재합니다. 다른 제목을 입력해주세요.");
                        }
                    },
                    error : function(){

                    },
                    complete : function(){

                    }
                })
            }
            else // 이름이 입력되지 않았을 때
                alert("제목을 추가해주세요.");
        })

        var target_name = null;

        $(".list_delete").click(function(){
            target_name = null;
            target_name = $(this).parent().attr("value");
            $('.target_name').html(`<strong>` + target_name + `</strong>`);
            
        })

        $(".list_delete_db").click(function(){
            
                    $.ajax({
                        url : "./making_mode_contents_delete_btn",
                        data : {'target_name' : target_name},
                        type : "POST",

                        success : function(data){
                            location.reload();
                            console.log("Success!");
                            console.log(data);
                        },

                        error : function(){
                            console.log("Error!")
                        },
                        complete : function(){
                            console.log("Complete!")
                        }

                    })
        })

    </script>
</body>

</html>