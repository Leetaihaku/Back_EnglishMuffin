<html>
<meta charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<head>
    <style>
        body{background-color: whitesmoke;}
        div{display:inline-block; text-align: center; width: 100%;}
        div:nth-child(1){height: 20%;}
        div:nth-child(2){height: 50%;}
        div:nth-child(3){height: 30%;}
            .banner{
                    display: inline-block; 
                    font-size: 50px; 
                    }
            #banner_s{  
                        display: inline-block; 
                        font-size: 50px;color: red; 
                    }
            #ghost{
                    display: inline-block; 
                    font-size: 50px;
                    color: whitesmoke;
                    }
            .inputbox{
                        padding: 2px 10px;
                        margin: 4px;
                        border-color: gainsboro;
                        border-radius: 4px;
                    }
            .button {
                    background-color: rgb(89, 175, 255);
                    border: none;
                    border-radius: 4px;
                    color: white;
                    padding: 0px 66px;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 18px;
                    }
        </style>
</head>

<body>
    <div></div>
    <div>
    <h1 id="banner_s">DH</h1><h1 id="ghost">_</h1><h1 class="banner">Film</h1>



    <form method="POST" action="./login_verification">
        <input class="inputbox" type="input" name="userID" maxlength="15"><br>
        <input class="inputbox" type="password" name="userPASSWORD" minlength="5" maxlength="15"><br>
        <button class="button" id="login_button" onclick="submit">로그인</button>
    </form>
    <a href="./save_newbie"><button class="button">회원가입</button></a>

<!--
    <script>

        $('#login_button').on("click", function(){
            var ID = $('[name="userID"]').val();
            var PASSWORD = $('[name="userPASSWORD"]').val();

            var formdata = new FormData();

            formdata.append("ID", ID);
            formdata.append("PASSWORD", PASSWORD);


            $.ajax({
            url :"./login_verification",
            type :'POST',
            data : formdata,
            contentType : false,
            processData : false,
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
            })

        
        });
    </script>
-->
    
</div>
<div></div>
</body>
</html>