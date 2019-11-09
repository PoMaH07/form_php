<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/style.css">
    <script src="/public/main.js" defer></script>
    <title>Project Form</title>
</head>

<body>
    <main>
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
                    <button class="auth__btn">Login</button>
                </div>
            </fieldset>
        </form>
    </main>
</body>

</html>