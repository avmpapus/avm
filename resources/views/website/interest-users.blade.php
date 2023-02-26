<b>Увлечения пользователей</b>
<br>
<br>


<?php
$mysqli = new mysqli("mysql317.1gb.ua", "gbua_cpil_new", "dffd9d06qw", "gbua_cpil_new");


if ($mysqli->connect_errno) {
    printf("Соединение не удалось: %s\n", $mysqli->connect_error);
    exit();
}

$query = "SELECT * FROM users_profiles";

if ($result = $mysqli->query($query)) {


    while ($row = $result->fetch_assoc())

        //echo "\n", $row["name"],'</br><font color="grey">', $row["hobby"],'</font></br></br>';
        echo "<a href='user/".$row['user_id']."'>".$row['name']."&nbsp</a><br>".$row['hobby']."<br><br>";


    $result->free();
}

$mysqli->close();
?>