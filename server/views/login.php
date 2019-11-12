<form class='auth' action="">
    <fieldset>
        <legend>Log In</legend>
        <div class="auth__row">
            <label for="username">User name</label>
            <input class="auth__text" type="text" id="username">
            <i class="auth__error">Length min 5 chars.
                Don't containe "_", "'", ",", ".", "-", "{}", "$"
            </i>
        </div>
        <div class="auth__row">
            <label for="useremail">User email</label>
            <input class="auth__text" type="text" id="useremail">
        </div>
        <div class="auth__row">
            <label for="userepass">User password</label>
            <input class="auth__text" type="password" id="userepass">
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