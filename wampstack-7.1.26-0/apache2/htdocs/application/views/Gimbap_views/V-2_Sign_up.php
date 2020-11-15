<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

<style>
    body{
        background-color : rgb(51, 51, 51);
    }

    a{
        text-decoration: none;
    }
    #register_page{
        display : flex;
        flex-direction: row;
    }

    .blank {
        flex-shrink : 1;
        flex-grow : 1;        
    }

    .middle {
        flex-grow : 2;
        flex-shrink : 0;
        flex-basis : 800px;
        padding-top : 150px;
        padding-bottom : 150px;
    }

    .register_section {
        background-color :rgb(92, 92, 92);
        width : 800px;
        height : 1000px;
        border-radius: 50px;
        margin : auto;
        padding : 20px;
    }

    .inputbox {
        all:unset;
        height : 50px;
        width : 300px;
        border-radius : 50px;
        background-color : rgb(238, 238, 238);
        margin : 13px;
        font-weight: bold;
        text-align: center;
    }

    .inputbox:hover {
        background-color : rgb(219, 219, 219);
    }
    input {
        padding-left : 5px;
    }
    button {
        all:unset;
    }  
    
    .btn {
        width : 280px;
        height : 40px;
        margin: 5px;
        padding: 5px;
        padding-top : 15px;
        text-align: center;
        text-transform: uppercase;
        transition: 0.5s;
        background-size: 200% auto;
        color: white;
        box-shadow: 0 0 20px #eee;
        border-radius: 10px;
        font-size : 20px;
        font-weight: bold;
        margin-bottom: 50px;
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
    background-image: linear-gradient(to right, #ffecd2 0%, #fcb69f 51%, #ffecd2 100%);
    }    
    .register_title{
        text-align: center;
        font-size : 35px;
        font-weight : bold;
        color : white;
        margin-top : 10px;
    }

    .info_write_area{
        display : flex;
        flex-direction: row;
        margin-top : 50px;
    }
    .info_key{
        padding-left : 10px;
        font-size : 20px;
        color : whitesmoke;
        white-space: nowrap;
        font-weight: bold;
    }
    .key_data{
        margin-top :12px;
        margin-bottom :12px;
        margin-right : 40px;
    }

    .info_data{
        padding : 4px;
    }

    .test_area{
        margin : auto;
        width: 700px;
        height : 200px;
        background-color: rgb(71, 71, 71);
        border-radius : 20px;
    }

    .btn_area {
        padding : 30px;
        display : flex;

    }

</style>
</head>
<body>
    <div id="register_page">
        <div class="blank"></div>
        <div class="middle">
            <div class="register_section">
                        <div class="register_title">회원가입</div>
                        <hr>
                        <div class="info_write_area">
                            <div class="info_key">
                            <p>
                                <div class="key_data">아이디</div><br>
                                <div class="key_data">비밀번호</div><br>
                                <div class="key_data">비밀번호확인</div><br>
                                <div class="key_data">이름</div><br>
                                <div class="key_data">주민등록번호</div><br>
                                <div class="key_data">주소</div><br>
                                <div class="key_data">휴대폰 번호</div><br>
                            </p>
                            </div>
                            <div class="info_data">
                                    <input type="text" id="id" class="inputbox" placeholder="아이디를 입력해주세요."> <div id="confirm" class="btn btn-4" style="width:100px; float:right;"> 중복확인</div>
                                    <input type="password" id="password" class="inputbox" placeholder="비밀번호를 입력해주세요.">
                                    <input type="password" id="password_confirm" class="inputbox" placeholder="비밀번호를 입력해주세요."><br>
                                    <input type="text" id="name" class="inputbox" placeholder="성함을 입력해주세요."><br>
                                    <input type="text" id="birthday" class="inputbox" placeholder="생년월일 6자리" maxlength="6" style="width:150px;"><span style="font-size: 27px; font-weight: bold; color:rgb(194, 194, 194);">ㅡ</span>
                                    <input type="text" id="gender" class="inputbox" maxlength="1" style="width:50px;"><span style="font-size: 27px; font-weight: bold; color:rgb(194, 194, 194);">******</span><br>
                                    <input type="text" id="address" class="inputbox" placeholder="주소를 입력해주세요." style="width:600px;"><br>
                                    <input type="text" id="phone_number" class="inputbox" placeholder="휴대폰 번호를 입력해주세요 (-없이)">
                            </div>

                        
                        </div>
                        <div class="test_area"></div>
                        <div class="btn_area"><div type="submit" class="btn btn-5" style="margin-right:150px;">취소하기</div>  <div id="submit" class="btn btn-3">가입하기</div></div>
            </div>
        </div>
        <div class="blank"></div>
    </div>

    <script>
        var confirm_oneclick =true;
        var submit_oneclick = true;
        var id_confirm = false;
        
        var id_input_status = document.querySelector('#id');
        id_input_status.addEventListener('change', function(event){
            id_confirm = false;
        });

        var confirm = document.querySelector('#confirm');
        confirm.addEventListener('click', function(event){
            if(confirm_oneclick){
                confirm_oneclick = false;

                var id = document.querySelector('#id').value;
                if(id){
                        var xhr = new XMLHttpRequest();
                        xhr.open("POST",'./sign_up');
                        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                        xhr.onreadystatechange = function(){
                            if(xhr.readyState == 4 && xhr.status == 200){
                                if(xhr.responseText == '1'){
                                    alert("사용가능한 아이디입니다.");
                                    id_confirm = true;
                                    confirm_oneclick = true;
                                }
                                else{
                                    alert("해당 아이디가 이미 존재합니다.");
                                    id_confirm = false;
                                    confirm_oneclick = true;
                                }
                                
                                
                            }
                            else if(xhr.readyState == 0) {
                                console.log("Error!");
                                console.log(xhr.responseText);
                            }
                        }
                        var data = { id_confirm : id };

                        xhr.send(Object.keys(data).map(key => `${key}=${data[key]}`).join('&'));
                    }
                else{
                    alert("아이디를 입력해주십시오.");
                    confirm_oneclick = true;
                }
            }
            else{
                alert("데이터를 전송 중입니다. 잠시만 기다려주세요.");
                
            }
            

        });


        var submit = document.querySelector('#submit');
        submit.addEventListener('click', function(event){
            if (submit_oneclick){
                
                submit_oneclick = false;

                var id, password, password_confirm, name, birthday, gender, address, phone_number;
                id = document.querySelector('#id').value;
                password = document.querySelector('#password').value;
                password_confirm = document.querySelector('#password_confirm').value;
                name = document.querySelector('#name').value;
                birthday = document.querySelector('#birthday').value;
                gender = document.querySelector('#gender').value;
                address = document.querySelector('#address').value;
                phone_number = document.querySelector('#phone_number').value;

                if(id && password && password_confirm && name && birthday && gender && address && phone_number && id_confirm){
                    if(password == password_confirm){
                        var xhr = new XMLHttpRequest();
                        xhr.open("POST",'./sign_up_pc');
                        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                        xhr.onreadystatechange = function(){
                            if(xhr.readyState == 4 && xhr.status == 200){
                                alert("등록되었습니다.");
                                submit_oneclick = true;
                                location.href="./pc_mode";
                            }
                            else if(xhr.readyState == 0)
                            {
                                console.log("Error!");
                                console.log(xhr.responseText);
                                submit_oneclick = true;
                            }
                        }
                        var data = { 
                                        id : id, 
                                        password : password, 
                                        name : name,
                                        birthday : birthday,
                                        gender : gender,
                                        address : address,
                                        phone_number : phone_number
                                    };

                        xhr.send(Object.keys(data).map(key => `${key}=${data[key]}`).join('&'));
                    }
                    else{
                        alert("비밀번호와 비밀번호확인이 다릅니다.");
                        submit_oneclick = true;
                    }
                }
                else{
                    alert("아이디 중복확인 및 모든 정보를 입력해주십시오.");
                    submit_oneclick = true;
                }
            }
            else{
                alert("데이터를 저장중입니다. 잠시만 기다려주세요.");
            }
            
        });

        
    </script>
    
</body>
</html>