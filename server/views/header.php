<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/style.css">
    <title>Project Form</title>
</head>

<body>
    <header class="header">
        <nav>
            <ul class="header_menu">
                <li><a class="header_link" href="/">Home</a></li>
                <li><a class="header_link" href="/login">Login</a></li>
                
                <?php if($isAdmin) { ?>
                <li><a class="header_link" href="/users">Users</a></li>
                <?php }?>
                
                <li><a class="header_link" href="/registration">Registration</a></li>
                <li><a class="header_link" href="/contacts">Contacts</a></li>
                <li><b><?= $currentUser['username']?></b></li>
            </ul>
        </nav>
        <p>
            <?= $routes_str ?>
        </p>
    </header>

    <main class="page">