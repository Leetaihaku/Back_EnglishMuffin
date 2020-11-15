<html>
<meta charset="utf-8">

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
    <h1 id="banner_s">X</h1><h1 id="ghost">_</h1><h1 class="banner">Speaking</h1>



    <form name="information" method="post" action="http://localhost/index.php/Storage/Storage_action">
        <input class="inputbox" type="text" name="userID" maxlength="15"><br>
        <input class="inputbox" type="password" name="userPASSWORD" minlength="5" maxlength="15"><br>
        <button class="button" type="submit">로그인</button>
    </form>


    
</div>
<div></div>
</body>
</html>