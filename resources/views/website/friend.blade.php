<?php
if($user_profile->language!='ua'){
    ?>
Друзья
    <?php
}
if($user_profile->language=='ua'){
    ?>
Друзі
    <?php
}
?>
<br>
<br>
<?php 
function printResult ($result_set) {
while (($row = $result_set->fetch_assoc()) != false) {
	echo('<a class="friends_list" href="../user/'.$row["user_id_1"].'">
			</br><img src="'.$row['photo'].'" style="width:35px;margin-right:5px" />'.$row["imia"].' '.$row['last_name']).'</a><font color="gray">Интересы: '.$row["hobby"].'</font>';
	}
}
$mysqli = new mysqli("localhost", "cpcp9174_cp", "111111", "cpcp9174_cpil");
$mysqli->query("SET NAMES 'utf-8'");
$result_set = $mysqli->query("SELECT friend.user_id_2 as user_id_1, profil.hobby, profil.last_name, profil.name as imia, profil.photo FROM friends friend LEFT JOIN  users_profiles profil ON friend.user_id_2 = profil.user_id WHERE friend.status = '2' AND friend.user_id_1 =".$user_profile->user_id." UNION SELECT friend.user_id_1 as user_id_1, profil.hobby, profil.last_name, profil.name as imia, profil.photo FROM friends friend LEFT JOIN  users_profiles profil ON friend.user_id_1 = profil.user_id WHERE  friend.status = '2' AND friend.user_id_2 =".$user_profile->user_id);
$mysqli->close();
printResult ($result_set);
?>
<style type="text/css">
	.friends_list{
		display: block;
		padding: 5px;
		font-size: 1em;
	}
	.friends_list:hover{
		background: #ddd;
		-webkit-transition: 0.5s all ease;
		-o-transition: 0.5s all ease;
		transition: 0.5s all ease;
	}
</style>
<br>
