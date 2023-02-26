@extends('layouts.main-front')

@section('content')
    
	    <?php
    use App\UserProfile; // Подключение класса UserProfile
    $user_profile = UserProfile::where('user_id', Auth::id())->first();
    ?>
   
        <div class="col-md-3 col-sm-3 col-xs-12 sk-block">
		
		<?php
						if(!auth::id()){
						?>
        @include('website.loginoff')	
<?php
						}
						?>	
		
		
            <?php
if(auth::id()){
            if($user_profile->language=='ua'){
            ?>
            @include('website.ua-right-menu-sk')
            <?php
            }
            if($user_profile->language!='ua'){
            ?>
            @include('website.ru-right-menu-sk')
            <?php
            }
}
            ?>

        </div>


<div class="col-md-6 col-sm-6 col-xs-12 sk-block">
    <div class="midcont">
</br></br></br>
<h2>Украинская и русская музыка</h2>
   <?php

$mysqli = new mysqli("localhost", "gbua_cpil_new", "pcDnGDLNwbi9rRVV", "gbua_cpil_new");

        /* проверка соединения */
        if ($mysqli->connect_errno) {
            printf("Соединение не удалось: %s\n", $mysqli->connect_error);
            exit();
        }

        $query = "SELECT * FROM music";



       if ($result = $mysqli->query($query)) {

            /* извлечение ассоциативного массива */

                while ($row = $result->fetch_assoc())
					
				
				
                    echo "</br></br></br><a href=".$row['img']."><img src=".$row['title']." width='300'></a></br>";
                   

            /* удаление выборки */
            $result->free();
        }

        /* закрытие соединения */
        $mysqli->close();
	
        ?>


		
		
    </div>
    </div>
</br></br></br>
        <div class="col-md-3 col-sm-3 col-xs-12 sk-block">
            <div class="rightcolm">
             
            </div>
            <br>
            <br>

@endsection