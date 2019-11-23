<form class='auth' action="">
    <fieldset>
        <legend>Log In</legend>
        <div class="auth__row">
            <label for="username">User name</label>
            <input class="auth__text" type="text" id="username">
            <i class="auth__error auth_error_hide">Length min 5 chars.
                Don't containe "_", "'", ",", ".", "-", "{}", "$"
            </i>
        </div>
        <div class="auth__row">
            <label for="useremail">User email</label>
            <input class="auth__text" type="text" id="useremail">
            <i class="auth__error auth_error_hide">
                Not valid email (example@gmail.com)
            </i>
        </div>

        <div class="auth__row">
            <label for="userphone">User phone</label>
            <input class="auth__text" type="text" id="userphone">
            <i class="auth__error auth_error_hide">
                Not valid (+380 000 00 00)
            </i>
        </div>

        <div class="auth__row">
            <label for="userpass">User password</label>
            <input class="auth__text" type="password" id="userpass">
            <i class="auth__error auth_error_hide">
            Must containe (a-z A-z 0-9 length > 7 chars)
            </i>
        </div>

        <label class="auth__check">Subscribe
            <input type="checkbox" id="usersubscribe">
        </label>

        <div class="auth__row">
            <button type="button" id="sendbtn" class="auth__btn">Login</button>
        </div>
    </fieldset>
</form>
<script src="/public/login.js" defer></script>