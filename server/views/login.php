<form class='auth' action="/login" method="POST">
    <fieldset>
        <legend>Log In</legend>
        <div class="auth__row">
            <label for="useremail">User email</label>
            <input name = "email" value ="govnovoz@gmail.com" class="auth__text" type="text" id="useremail">
        </div>

        <div class="auth__row">
            <label for="userpass">User password</label>
            <input name = "password" value ="Genifer23" class="auth__text" type="password" id="userpass">
        </div>

        <div class="auth__row">
            <button type="submit" id="sendbtn" class="auth__btn">Login</button>
        </div>
    </fieldset>
</form>