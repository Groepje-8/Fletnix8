<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/img/FletnixIcon.ico">
    <title>Fletnix</title>
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/specificity.css">
    <link rel="stylesheet" href="/css/specificityIndex.css">

</head>



<body>
    <div class="grid-container">
        <?=include "html/Components/header.php";?>

        <div class="title">
            <h1>Fletnix</h1>
            <h2>DÉ videostreaming website voor studenten</h2>
        </div>

        <main>
            <video controls>
                <source src="/videos/trailer.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </main>

        <div class="registreerform">
            <p>Registeer je nu en betaal de eerste maand 0 euro!</p>

            <form action="/html/Abbonement.html">
                <input type="submit" value="Registeer" />
            </form>
        </div>

        <div class="loginform">
            <p>Of log in als je al een account hebt</p>

            <form action="/html/FilmOverzicht.html">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" pattern="[a-zA-Z]+">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                <input type="submit" value="Login" />
            </form>
        </div>

        <?=include "html/Components/footer.php";?>
    </div>
</body>

</html>