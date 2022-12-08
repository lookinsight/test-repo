<html>
    <body>

    <p style="color: darkgray;"><b>여기는 server.php 페이지로 이동합니다</b></p>

    전달 받은 히든은 <b><?php echo $_POST['hidden']; ?></b> 입니다.<br>
    전달 받은 아이디는 <b><?php echo $_POST['text']; ?></b> 입니다.<br>
    전달 받은 비밀번호는 <b><?php echo $_POST['password']; ?></b> 입니다.<br>
    전달 받은 텍스트는 <b><?php echo $_POST['text_2']; ?></b> 입니다.<br>
    전달 받은 검색창은 <b><?php echo $_POST['search']; ?></b> 입니다.<br>
    전달 받은 URL 주소는 <b><?php echo $_POST['url']; ?></b> 입니다.<br>
    전달 받은 이메일은 <b><?php echo $_POST['email']; ?></b> 입니다.<br>
    전달 받은 전화번호는 <b><?php echo $_POST['tel']; ?></b> 입니다.<br>
    전달 받은 숫자는 <b><?php echo $_POST['number']; ?></b> 입니다.<br>
    전달 받은 범위는 <b><?php echo $_POST['range']; ?></b> 입니다.<br>

    전달 받은 라디오는 <b><?php echo $_POST['radio']; ?></b> 입니다.<br>

    전달 받은 체크박스는 <b><?php for ($i = 0; $i < count($_POST['checkbox']); $i++) {
            echo $_POST['checkbox'][$i];
            echo ",";
    }
    ?></b> 입니다. <br>

    전달 받은 색상은 <b><?php echo $_POST['color']; ?></b> 입니다.<br>

    전달 받은 시작날짜는 <b><?php echo $_POST['date1']; ?></b> 입니다.<br>
    전달 받은 끝날짜는 <b><?php echo $_POST['date2']; ?></b> 입니다.<br>
    전달 받은 월은 <b><?php echo $_POST['month']; ?></b> 입니다.<br>
    전달 받은 주는 <b><?php echo $_POST['week']; ?></b> 입니다.<br>
    전달 받은 시작시간은 <b><?php echo $_POST['time1']; ?></b> 입니다.<br>
    전달 받은 종료시간은 <b><?php echo $_POST['time2']; ?></b> 입니다.<br>
    전달 받은 시작시간은 <b><?php echo $_POST['datelocal1']; ?></b> 입니다.<br>
    전달 받은 종료시간은 <b><?php echo $_POST['datelocal2']; ?></b> 입니다.<br>
    전달 받은 select는 <b><?php echo $_POST['select']; ?></b> 입니다.<br>
    
    전달 받은 datalist는 <b><?php echo $_POST['datalist']; ?></b> 입니다.<br>
    전달 받은 textarea는 <b><?php echo $_POST['textarea']; ?></b> 입니다.<br>

    전달 받은 멤버는 <b><?php echo $_POST['member']; ?></b> 입니다.<br>
    전달 받은 상품은 <b><?php echo $_POST['goods']; ?></b> 입니다.<br>
    전달 받은 등급은 <b><?php echo $_POST['grade']; ?></b> 입니다.<br><br>

    

    </body>

</html>