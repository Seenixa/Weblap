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
        <nav class="navbar">
            <ul>
                <li><a class="active" href="index.php">Főoldal</a></li>
                <li><a href="Terran.php">Terran</a></li>
                <li><a href="Zerg.php">Zerg</a></li>
                <li><a href="Protoss.php">Protoss</a></li>
                <?php
                $loggedIn = false;
                if ($loggedIn) {
                    echo "<li><a href=Lore.php>Történelem</a></li>";
                } else
                    echo "<li><a href=Login.php>Bejelentkezés</a></li>"
                        ?>
                </ul>
            </nav>
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
                    <p><a href="Login.html"> Bejelentkezés</a></p>
                    <p><a href="Register.html"> Regisztráció</a></p>
                </article>
            </section>
        </div>
        <footer>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, fuga. Ipsa nemo quasi magnam ducimus
                eaque eligendi sed harum neque.</p>
        </footer>
    </body>

    </html>