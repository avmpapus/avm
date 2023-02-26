

    <?php
    use App\UserProfile;
    use App\User;
    $user_profile = UserProfile::where('user_id', Auth::id())->first();
    $user = User::where('id', Auth::id())->first();
    ?>

    <div class="col-md-3 col-sm-3 col-xs-12 sk-block">

        {{Auth::id()}}

    </div>

 <br><br>



