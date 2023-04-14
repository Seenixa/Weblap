<nav class="navbar">
    <ul>
        <?php
        $indexActive = "";
        $terranActive = "";
        $zergActive = "";
        $protossActive = "";
        $loreActive = "";

        switch ($activePage) {
            case "Index":
                $indexActive = "class=active";
                break;
            case "Terran":
                $terranActive = "class=active";
                break;
            case "Zerg":
                $zergActive = "class=active";
                break;
            case "Protoss":
                $protossActive = "class=active";
                break;
            case "Lore":
                $loreActive = "class=active";
                break;
            default:
                break;
        }
        ?>

        <li><a <?php echo $indexActive ?> href=../Pages/index.php>Főoldal</a></li>
        <div class="subnav">
            <button class="subnavbtn">Tartalom &#9660;</button>
            <div class="subnav-content">
                <a <?php echo $terranActive ?> href=../Pages/Terran.php>Terran</a>
                <a <?php echo $zergActive ?> href=../Pages/Zerg.php>Zerg</a>
                <a <?php echo $protossActive ?> href=../Pages/Protoss.php>Protoss</a>
                <a <?php echo $loreActive ?> href=../Pages/Lore.php>Történelem</a>
            </div>
        </div>
        <?php if (isset($_SESSION["user"])) {?>
        <div class="subnav">
            <button class="subnavbtn">Fiók kezelés &#9660;</button>
            <div class="subnav-content">
                <a <?php echo $terranActive ?> href=../Pages/UserProfile.php>Profilom</a>
                <a <?php echo $zergActive ?> href=../Pages/AllUsers.php>Összes profil</a>
                <a <?php echo $protossActive ?> href=../Pages/AccountManagement.php>Profilom módosítása</a>
            </div>
        </div>
        <li><a href=../Functions/Logout.php>Kijelentkezés</a></li>
        <?php } else {  ?>
        <li><a <?php /*echo*/ ?> href=../Pages/Login.php>Bejelentkezés</a></li>
        <li><a <?php /*echo*/ ?> href=../Pages/Register.php>Regisztráció</a></li>
        <?php } ?>

    </ul>
</nav>