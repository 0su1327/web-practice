<?php
    $host = "localhost"; //127.0.0.1과 같은 맥락이라고 함(가상)
    $user = "root"; //현재 최상위에서 실행 중
    $pw = "fouridiot"; //비밀번호
    $dbName = "opentutorials"; //database name

    $conn = new mysqli($host, $user, $pw, $dbName); //연결객체 선언(php는 변수 앞에$필수) 
    //$conn = mysqli_connect($host, $user, $pw, $dbName); 랑 같은 구문인듯
    
    /* DB 연결 확인 */
    if($conn){ echo "Connection established"."<br>"; } //연결이 되었다면 출력
    else{ die( 'Could not connect: ' . mysqli_error($conn) ); } //연결 안 되었다면 출력

    $sql = "SELECT * FROM restart"; //mysql에서 사용하는 쿼리문을 php가 자동으로 실행하도록 설정하는 느낌(?)
    $result = mysqli_query($conn, $sql); //연결된 객체인 conn을 이용하여 mysql 쿼리를 실행시키는 함수
    while($row = mysqli_fetch_array($result)){
        echo $row['id']." ".$row['name']." ".$row['phone']." ".$row['whereToLive']."<br>";
    }
    
    mysqli_close($conn);
?>