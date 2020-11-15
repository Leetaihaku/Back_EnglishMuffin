<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="js/jquery.js"></script>
    <script src="js/easypiechart.js"></script>
    <script src="js/echarts.js"></script>
    <title>영화 예약 페이지</title>
</head>
<body>
    <form action = "" method = "GET">
            <h1><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;= DAEHWAN CINEMA =</strong></h1>
            <p><strong>영화를 선택하세요 : </strong><select name='movie'>
                    <option value='' selected>---------------- 선&nbsp;&nbsp;택 ----------------</option>
                    <option value='Avengers : The Last Avenger'>Avengers : The Last Avenger</option>
                    <option value='국가 부도의 날'>국가 부도의 날</option>
                    <option value='마약왕'>마약왕</option>
                </select></p>

                <p><h3>===============&nbsp;&nbsp;S&nbsp;&nbsp;C&nbsp;&nbsp;R&nbsp;&nbsp;E&nbsp;&nbsp;E&nbsp;&nbsp;N&nbsp;&nbsp;===============</h3></p>
           <p><button type="button" name="seat" onclick="seatnum('A1')" >□</button>
            <button type="button" name="seat" onclick="seatnum('A2')">□</button>
            <button type="button" name="seat" onclick="seatnum('A3')">□</button>
            <button type="button" name="seat" onclick="seatnum('A4')">□</button>
            <button type="button" name="seat" onclick="seatnum('A5')">□</button>
            <button type="button" name="seat" onclick="seatnum('A6')">□</button>&nbsp;&nbsp;&nbsp;
            <button type="button" name="seat" onclick="seatnum('A7')">□</button>
            <button type="button" name="seat" onclick="seatnum('A8')">□</button>
            <button type="button" name="seat" onclick="seatnum('A9')">□</button>
            <button type="button" name="seat" onclick="seatnum('A10')">□</button>
            <button type="button" name="seat" onclick="seatnum('A11')">□</button>
            <button type="button" name="seat" onclick="seatnum('A12')">□</button>&nbsp;&nbsp;&nbsp;
            <button type="button" name="seat" onclick="seatnum('A13')">□</button>
            <button type="button" name="seat" onclick="seatnum('A14')">□</button>
            <button type="button" name="seat" onclick="seatnum('A15')">□</button>
            <button type="button" name="seat" onclick="seatnum('A16')">□</button>
            <button type="button" name="seat" onclick="seatnum('A17')">□</button>
            <button type="button" name="seat" onclick="seatnum('A18')">□</button><strong>&nbsp;A</strong>&nbsp;&nbsp;&nbsp;<br>
            
            <button type="button" name="seat" onclick="seatnum('B1')" >□</button>
            <button type="button" name="seat" onclick="seatnum('B2')">□</button>
            <button type="button" name="seat" onclick="seatnum('B3')">□</button>
            <button type="button" name="seat" onclick="seatnum('B4')">□</button>
            <button type="button" name="seat" onclick="seatnum('B5')">□</button>
            <button type="button" name="seat" onclick="seatnum('B6')">□</button>&nbsp;&nbsp;&nbsp;
            <button type="button" name="seat" onclick="seatnum('B7')">□</button>
            <button type="button" name="seat" onclick="seatnum('B8')">□</button>
            <button type="button" name="seat" onclick="seatnum('B9')">□</button>
            <button type="button" name="seat" onclick="seatnum('B10')">□</button>
            <button type="button" name="seat" onclick="seatnum('B11')">□</button>
            <button type="button" name="seat" onclick="seatnum('B12')">□</button>&nbsp;&nbsp;&nbsp;
            <button type="button" name="seat" onclick="seatnum('B13')">□</button>
            <button type="button" name="seat" onclick="seatnum('B14')">□</button>
            <button type="button" name="seat" onclick="seatnum('B15')">□</button>
            <button type="button" name="seat" onclick="seatnum('B16')">□</button>
            <button type="button" name="seat" onclick="seatnum('B17')">□</button>
            <button type="button" name="seat" onclick="seatnum('B18')">□</button><strong>&nbsp;B</strong>&nbsp;&nbsp;&nbsp;<br>
            
            <button type="button" name="seat" onclick="seatnum('C1')" >□</button>
            <button type="button" name="seat" onclick="seatnum('C2')">□</button>
            <button type="button" name="seat" onclick="seatnum('C3')">□</button>
            <button type="button" name="seat" onclick="seatnum('C4')">□</button>
            <button type="button" name="seat" onclick="seatnum('C5')">□</button>
            <button type="button" name="seat" onclick="seatnum('C6')">□</button>&nbsp;&nbsp;&nbsp;
            <button type="button" name="seat" onclick="seatnum('C7')">□</button>
            <button type="button" name="seat" onclick="seatnum('C8')">□</button>
            <button type="button" name="seat" onclick="seatnum('C9')">□</button>
            <button type="button" name="seat" onclick="seatnum('C10')">□</button>
            <button type="button" name="seat" onclick="seatnum('C11')">□</button>
            <button type="button" name="seat" onclick="seatnum('C12')">□</button>&nbsp;&nbsp;&nbsp;
            <button type="button" name="seat" onclick="seatnum('C13')">□</button>
            <button type="button" name="seat" onclick="seatnum('C14')">□</button>
            <button type="button" name="seat" onclick="seatnum('C15')">□</button>
            <button type="button" name="seat" onclick="seatnum('C16')">□</button>
            <button type="button" name="seat" onclick="seatnum('C17')">□</button>
            <button type="button" name="seat" onclick="seatnum('C18')">□</button><strong>&nbsp;C</strong>&nbsp;&nbsp;&nbsp;<br>
            
            <button type="button" name="seat" onclick="seatnum('D1')" >□</button>
            <button type="button" name="seat" onclick="seatnum('D2')">□</button>
            <button type="button" name="seat" onclick="seatnum('D3')">□</button>
            <button type="button" name="seat" onclick="seatnum('D4')">□</button>
            <button type="button" name="seat" onclick="seatnum('D5')">□</button>
            <button type="button" name="seat" onclick="seatnum('D6')">□</button>&nbsp;&nbsp;&nbsp;
            <button type="button" name="seat" onclick="seatnum('D7')">□</button>
            <button type="button" name="seat" onclick="seatnum('D8')">□</button>
            <button type="button" name="seat" onclick="seatnum('D9')">□</button>
            <button type="button" name="seat" onclick="seatnum('D10')">□</button>
            <button type="button" name="seat" onclick="seatnum('D11')">□</button>
            <button type="button" name="seat" onclick="seatnum('D12')">□</button>&nbsp;&nbsp;&nbsp;
            <button type="button" name="seat" onclick="seatnum('D13')">□</button>
            <button type="button" name="seat" onclick="seatnum('D14')">□</button>
            <button type="button" name="seat" onclick="seatnum('D15')">□</button>
            <button type="button" name="seat" onclick="seatnum('D16')">□</button>
            <button type="button" name="seat" onclick="seatnum('D17')">□</button>
            <button type="button" name="seat" onclick="seatnum('D18')">□</button><strong>&nbsp;D</strong>&nbsp;&nbsp;&nbsp;<br>
            
            <button type="button" name="seat" onclick="seatnum('E1')" >□</button>
            <button type="button" name="seat" onclick="seatnum('E2')">□</button>
            <button type="button" name="seat" onclick="seatnum('E3')">□</button>
            <button type="button" name="seat" onclick="seatnum('E4')">□</button>
            <button type="button" name="seat" onclick="seatnum('E5')">□</button>
            <button type="button" name="seat" onclick="seatnum('E6')">□</button>&nbsp;&nbsp;&nbsp;
            <button type="button" name="seat" onclick="seatnum('E7')">□</button>
            <button type="button" name="seat" onclick="seatnum('E8')">□</button>
            <button type="button" name="seat" onclick="seatnum('E9')">□</button>
            <button type="button" name="seat" onclick="seatnum('E10')">□</button>
            <button type="button" name="seat" onclick="seatnum('E11')">□</button>
            <button type="button" name="seat" onclick="seatnum('E12')">□</button>&nbsp;&nbsp;&nbsp;
            <button type="button" name="seat" onclick="seatnum('E13')">□</button>
            <button type="button" name="seat" onclick="seatnum('E14')">□</button>
            <button type="button" name="seat" onclick="seatnum('E15')">□</button>
            <button type="button" name="seat" onclick="seatnum('E16')">□</button>
            <button type="button" name="seat" onclick="seatnum('E17')">□</button>
            <button type="button" name="seat" onclick="seatnum('E18')">□</button><strong>&nbsp;E</strong>&nbsp;&nbsp;&nbsp;<br>
            
            <button type="button" name="seat" onclick="seatnum('F1')" >□</button>
            <button type="button" name="seat" onclick="seatnum('F2')">□</button>
            <button type="button" name="seat" onclick="seatnum('F3')">□</button>
            <button type="button" name="seat" onclick="seatnum('F4')">□</button>
            <button type="button" name="seat" onclick="seatnum('F5')">□</button>
            <button type="button" name="seat" onclick="seatnum('F6')">□</button>&nbsp;&nbsp;&nbsp;
            <button type="button" name="seat" onclick="seatnum('F7')">□</button>
            <button type="button" name="seat" onclick="seatnum('F8')">□</button>
            <button type="button" name="seat" onclick="seatnum('F9')">□</button>
            <button type="button" name="seat" onclick="seatnum('F10')">□</button>
            <button type="button" name="seat" onclick="seatnum('F11')">□</button>
            <button type="button" name="seat" onclick="seatnum('F12')">□</button>&nbsp;&nbsp;&nbsp;
            <button type="button" name="seat" onclick="seatnum('F13')">□</button>
            <button type="button" name="seat" onclick="seatnum('F14')">□</button>
            <button type="button" name="seat" onclick="seatnum('F15')">□</button>
            <button type="button" name="seat" onclick="seatnum('F16')">□</button>
            <button type="button" name="seat" onclick="seatnum('F17')">□</button>
            <button type="button" name="seat" onclick="seatnum('F18')">□</button><strong>&nbsp;F</strong>&nbsp;&nbsp;&nbsp;<br>
            
            <button type="button" name="seat" onclick="seatnum('G1')" >□</button>
            <button type="button" name="seat" onclick="seatnum('G2')">□</button>
            <button type="button" name="seat" onclick="seatnum('G3')">□</button>
            <button type="button" name="seat" onclick="seatnum('G4')">□</button>
            <button type="button" name="seat" onclick="seatnum('G5')">□</button>
            <button type="button" name="seat" onclick="seatnum('G6')">□</button>&nbsp;&nbsp;&nbsp;
            <button type="button" name="seat" onclick="seatnum('G7')">□</button>
            <button type="button" name="seat" onclick="seatnum('G8')">□</button>
            <button type="button" name="seat" onclick="seatnum('G9')">□</button>
            <button type="button" name="seat" onclick="seatnum('G10')">□</button>
            <button type="button" name="seat" onclick="seatnum('G11')">□</button>
            <button type="button" name="seat" onclick="seatnum('G12')">□</button>&nbsp;&nbsp;&nbsp;
            <button type="button" name="seat" onclick="seatnum('G13')">□</button>
            <button type="button" name="seat" onclick="seatnum('G14')">□</button>
            <button type="button" name="seat" onclick="seatnum('G15')">□</button>
            <button type="button" name="seat" onclick="seatnum('G16')">□</button>
            <button type="button" name="seat" onclick="seatnum('G17')">□</button>
            <button type="button" name="seat" onclick="seatnum('G18')">□</button><strong>&nbsp;G</strong>&nbsp;&nbsp;&nbsp;<br>
            
            <button type="button" name="seat" onclick="seatnum('H1')" >□</button>
            <button type="button" name="seat" onclick="seatnum('H2')">□</button>
            <button type="button" name="seat" onclick="seatnum('H3')">□</button>
            <button type="button" name="seat" onclick="seatnum('H4')">□</button>
            <button type="button" name="seat" onclick="seatnum('H5')">□</button>
            <button type="button" name="seat" onclick="seatnum('H6')">□</button>&nbsp;&nbsp;&nbsp;
            <button type="button" name="seat" onclick="seatnum('H7')">□</button>
            <button type="button" name="seat" onclick="seatnum('H8')">□</button>
            <button type="button" name="seat" onclick="seatnum('H9')">□</button>
            <button type="button" name="seat" onclick="seatnum('H10')">□</button>
            <button type="button" name="seat" onclick="seatnum('H11')">□</button>
            <button type="button" name="seat" onclick="seatnum('H12')">□</button>&nbsp;&nbsp;&nbsp;
            <button type="button" name="seat" onclick="seatnum('H13')">□</button>
            <button type="button" name="seat" onclick="seatnum('H14')">□</button>
            <button type="button" name="seat" onclick="seatnum('H15')">□</button>
            <button type="button" name="seat" onclick="seatnum('H16')">□</button>
            <button type="button" name="seat" onclick="seatnum('H17')">□</button>
            <button type="button" name="seat" onclick="seatnum('H18')">□</button><strong>&nbsp;H</strong>&nbsp;&nbsp;&nbsp;<br>
            
            <button type="button" name="seat" onclick="seatnum('I1')" >□</button>
            <button type="button" name="seat" onclick="seatnum('I2')">□</button>
            <button type="button" name="seat" onclick="seatnum('I3')">□</button>
            <button type="button" name="seat" onclick="seatnum('I4')">□</button>
            <button type="button" name="seat" onclick="seatnum('I5')">□</button>
            <button type="button" name="seat" onclick="seatnum('I6')">□</button>&nbsp;&nbsp;&nbsp;
            <button type="button" name="seat" onclick="seatnum('I7')">□</button>
            <button type="button" name="seat" onclick="seatnum('I8')">□</button>
            <button type="button" name="seat" onclick="seatnum('I9')">□</button>
            <button type="button" name="seat" onclick="seatnum('I10')">□</button>
            <button type="button" name="seat" onclick="seatnum('I11')">□</button>
            <button type="button" name="seat" onclick="seatnum('I12')">□</button>&nbsp;&nbsp;&nbsp;
            <button type="button" name="seat" onclick="seatnum('I13')">□</button>
            <button type="button" name="seat" onclick="seatnum('I14')">□</button>
            <button type="button" name="seat" onclick="seatnum('I15')">□</button>
            <button type="button" name="seat" onclick="seatnum('I16')">□</button>
            <button type="button" name="seat" onclick="seatnum('I17')">□</button>
            <button type="button" name="seat" onclick="seatnum('I18')">□</button><strong>&nbsp;I</strong>&nbsp;&nbsp;&nbsp;<br>
            
            <button type="button" name="seat" onclick="seatnum('J1')" >□</button>
            <button type="button" name="seat" onclick="seatnum('J2')">□</button>
            <button type="button" name="seat" onclick="seatnum('J3')">□</button>
            <button type="button" name="seat" onclick="seatnum('J4')">□</button>
            <button type="button" name="seat" onclick="seatnum('J5')">□</button>
            <button type="button" name="seat" onclick="seatnum('J6')">□</button>&nbsp;&nbsp;&nbsp;
            <button type="button" name="seat" onclick="seatnum('J7')">□</button>
            <button type="button" name="seat" onclick="seatnum('J8')">□</button>
            <button type="button" name="seat" onclick="seatnum('J9')">□</button>
            <button type="button" name="seat" onclick="seatnum('J10')">□</button>
            <button type="button" name="seat" onclick="seatnum('J11')">□</button>
            <button type="button" name="seat" onclick="seatnum('J12')">□</button>&nbsp;&nbsp;&nbsp;
            <button type="button" name="seat" onclick="seatnum('J13')">□</button>
            <button type="button" name="seat" onclick="seatnum('J14')">□</button>
            <button type="button" name="seat" onclick="seatnum('J15')">□</button>
            <button type="button" name="seat" onclick="seatnum('J16')">□</button>
            <button type="button" name="seat" onclick="seatnum('J17')">□</button>
            <button type="button" name="seat" onclick="seatnum('J18')">□</button><strong>&nbsp;J</strong>&nbsp;&nbsp;&nbsp;<br>
            
            <button type="button" name="seat" onclick="seatnum('K1')" >□</button>
            <button type="button" name="seat" onclick="seatnum('K2')">□</button>
            <button type="button" name="seat" onclick="seatnum('K3')">□</button>
            <button type="button" name="seat" onclick="seatnum('K4')">□</button>
            <button type="button" name="seat" onclick="seatnum('K5')">□</button>
            <button type="button" name="seat" onclick="seatnum('K6')">□</button>&nbsp;&nbsp;&nbsp;
            <button type="button" name="seat" onclick="seatnum('K7')">□</button>
            <button type="button" name="seat" onclick="seatnum('K8')">□</button>
            <button type="button" name="seat" onclick="seatnum('K9')">□</button>
            <button type="button" name="seat" onclick="seatnum('K10')">□</button>
            <button type="button" name="seat" onclick="seatnum('K11')">□</button>
            <button type="button" name="seat" onclick="seatnum('K12')">□</button>&nbsp;&nbsp;&nbsp;
            <button type="button" name="seat" onclick="seatnum('K13')">□</button>
            <button type="button" name="seat" onclick="seatnum('K14')">□</button>
            <button type="button" name="seat" onclick="seatnum('K15')">□</button>
            <button type="button" name="seat" onclick="seatnum('K16')">□</button>
            <button type="button" name="seat" onclick="seatnum('K17')">□</button>
            <button type="button" name="seat" onclick="seatnum('K18')">□</button><strong>&nbsp;K</strong>&nbsp;&nbsp;&nbsp;<br>
            <strong>&nbsp;1&nbsp;&nbsp;&nbsp;&nbsp;2&nbsp;&nbsp;&nbsp;&nbsp;3&nbsp;&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp;&nbsp;&nbsp;5&nbsp;&nbsp;&nbsp;6&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7&nbsp;&nbsp;&nbsp;&nbsp;8&nbsp;&nbsp;&nbsp;9&nbsp;&nbsp;&nbsp;10&nbsp;&nbsp;11&nbsp;&nbsp;12&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;13&nbsp;&nbsp;14&nbsp;&nbsp;15&nbsp;&nbsp;16&nbsp;&nbsp;17&nbsp;&nbsp;18&nbsp;</strong>
        </p>

        <P><strong>선택하신 좌석 번호 : </strong><input type="text" name="seatnumber" id="seatresult" readonly="readonly"></P>
        <p><strong>카드 번호 입력 : </strong><input type = "text" name="cardnumber" placeholder=" - 없이 숫자 16자리 입력" maxlength="16" nkeydown='return onlyNumber(event)' onkeyup='removeChar(event)'>
    <script>
    function seatnum(num){
        seatresult.value = num;
    }

    function onlyNumber(event)
    {
        event = event || window.event;
        var keyID = (event.which) ? event.which : event.keyCode;
        if ( (keyID >= 48 && keyID <= 57) || (keyID >= 96 && keyID <= 105) || keyID == 8 || keyID == 46 || keyID == 37 || keyID == 39 ) 
            return;
        else
            return false;
    }
 
    function removeChar(event)
    {
        event = event || window.event;
        var keyID = (event.which) ? event.which : event.keyCode;
        if ( keyID == 8 || keyID == 46 || keyID == 37 || keyID == 39 ) 
            return;
        else
            event.target.value = event.target.value.replace(/[^0-9]/g, "");
    }
    </script>
    
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit"><strong><h2>예약 하기</h2></strong></button></p>
    </form>
</body>
</html>



