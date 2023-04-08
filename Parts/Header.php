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

        echo "<li><a $indexActive href=index.php>Főoldal</a></li>";
        echo "<li><a $terranActive href=terran.php>Terran</a></li>";
        echo "<li><a $zergActive href=zerg.php>Zerg</a></li>";
        echo "<li><a $protossActive href=protoss.php>Protoss</a></li>";
        echo "<li><a $loreActive href=lore.php>Történelem</a></li>";
        ?>
    </ul>
</nav>