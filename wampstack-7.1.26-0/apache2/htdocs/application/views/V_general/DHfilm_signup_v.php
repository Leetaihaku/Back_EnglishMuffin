<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
    <form id="signup" method="POST" action="./save_newbie">
        <div style="text-align:center">
            <div><br><br><h3>회원가입</h3><br></div>
            <strong>아이디</strong>&nbsp;
            <input type="input" name="signid" placeholder="아이디를 입력해주세요." size="27"><br><br>
            <strong>비밀번호</strong>&nbsp;
            <input type="password" name="signpwd" placeholder="비밀번호를 입력해주세요." size="25"><br><br>
            <strong>이름</strong>&nbsp;
            <input type="input" name="full_name" placeholder="이름을 입력해주세요." size="30"><br><br>
            <strong>나이</strong>&nbsp;
            <input type="input" name="age" placeholder="나이를 입력해주세요." size="30"><br><br>
            <strong>성별</strong>&nbsp;
            <input type="input" name="sex" placeholder="성별을 입력해주세요. m,w,x" size="30"><br><br>
            <button class="btn btn-primary" value="true" type="submit">가입하기</button>
        </div>
    </form>
<!--
    <script>
        $('.sbtt').on('click', function () {
            var formdata = new FormData();
            
            var ID = $(this).parent().find('[name="signid"]').val();
            var PASSWORD = $(this).parent().find('[name="signpwd"]').val();
            var NAME = $(this).parent().find('[name="full_name"]').val();
            var AGE = $(this).parent().find('[name="age"]').val();
            var SEX = $(this).parent().find('[name="sex"]').val();
            
            formdata.append('ID', ID);
            formdata.append('PASSWORD', PASSWORD);
            formdata.append('NAME', NAME);
            formdata.append('AGE', AGE);
            formdata.append('SEX', SEX);

            $.ajax({
                type: "POST",
                url: "./save_newbie",
                datatype: formdata,
                processData: false,
                contentType: false
                success : function(){
                alert("전송성공");
                },
                error:function(request,status,error){
                alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
                var wnd = window.open("", "_blank", "width=200,height=100");
                 wnd.document.write("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
                 },
                complete : function(){
                alert("실행성공");
            }
            });
        })
    </script>
    -->
</body>
</html>