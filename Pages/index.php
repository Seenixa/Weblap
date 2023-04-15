<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starcraft | Főoldal</title>
    <meta name="description" content="Bemutató oldal a Starcraft világáról">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="icon" href="../Images/SCLogo.png">
</head>

<body>
    <header>

        <?php
        session_start();
        $activePage = "Index";
        include "../Parts/Header.php";
        include "../Classes/User.php";
        ?>
    </header>

    <div class="empty"></div>

    <div class="WoL">
        <section class="MainPageContent">
            <article>
                <h2>Fedezd fel!</h2>
                <p>a Koprulu szektor különleges világát, ami már rajongók millióit ejtette rabul.</p>
            </article>
        </section>
    </div>
    <div class="HotS">
        <section class="MainPageContent">
            <article>
                <h2>Ismerkedj meg!</h2>
                <p>a szektor uralmáért küzdő fajokal, azok különleges képességeivel és egységeivel.</p>
            </article>
        </section>
    </div>
    <div class="LotV">
        <section class="MainPageContent">
            <article>
                <h2>Merülj el!</h2>
                <p>a káprázatos StarCraft világban, amihez végeláthatatlan mennyiségű tartalom áll
                    rendelkezésre.</p>
                <div class="dropdown">
                    <button class="dropbtn">Végeláthatatlan tartalom</button>
                    <div class="dropdown-content">
                        <a href="https://starcraft2.com/en-us/">Official Starcraft2</a>
                        <a href="https://starcraft.fandom.com/wiki/StarCraft_Wiki">StarCraft Wiki</a>
                        <a href="https://eu.shop.battle.net/en-us/family/starcraft-ii">StarCraft2 Battlenet</a>
                    </div>
                </div>
            </article>

        </section>
    </div>
    <div class="Beleptetes">
        <section class="MainPageContent">
            <article>
                <h2>Vágj bele!</h2>
                <p>Vágj bele, és regisztrálj az oldalunkra hogy részese lehess ennek a csodálatos kalandnak.</p>
                <p><a href="Login.php"> Bejelentkezés</a></p>
                <p><a href="Register.php"> Regisztráció</a></p>
            </article>
        </section>
    </div>
    <footer>
        <?php
        include "../Parts/footer.php";
        ?>
    </footer>
</body>

</html>