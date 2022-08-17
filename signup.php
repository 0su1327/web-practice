<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" /> 
        <title>소방서 로그인 창</title> 
    </head>
    
    <body>
        <p><h1>소방서 로그인 창</h1></p>
        <form method="post" action="./signup_action.php"> <!--post를 method로 하면 get 방식보다 보안성도 높으며 url의 포스팅에 따라가지 않는다. 그리고 signup_action.php에 의해 동작한다.(서버로 제출)-->
            <label>이름 <input type="text" name='name'> </label><br><br>
            <label>전화번호 <input type="number" name='phone'> </label><br><br>
            <label>상세주소 <input type="text" name='whereToLive'> </label><br><br>
            <input type="submit" value='가입하기'>
        </form>
    </body>
</html>
