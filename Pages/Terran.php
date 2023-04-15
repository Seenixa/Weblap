<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="hu">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Starcraft | Terran</title>
  <meta name="description" content="Bemutató oldal a Terranokról">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/style.css">
  <link rel="icon" href="../Images/SCLogo.png">
</head>

<body>
  <header>

    <?php
    $activePage = "Terran";
    include "../Parts/Header.php" ?>

  </header>

  <section id="pageContent">
    <h1>
      <img class="racesH1" src="../Images/font/TerranFont.png" alt="Terran">
    </h1>
    <h2>
      Találékony emberek, változatos technológiával és sokoldalú katonai
      képességekkel
    </h2>

    <p>
      A Koprulu szektort benépesítő fajak közül a legifjabb a Terran.
      Évszázodokkal ezelőtt, a földről indított katasztrófális kolonizáló
      expedició leszármozattai ők, akik nem rendelkeznek fejlett
      technológiával mint a protossok, vagy biológiai fejlettséggel mint a
      zergek. A terran katonai erők ellenálló, sokoldalú egységek változatos
      keverékére támaszkodnak, hogy kijátsszák ellenségeiket.
    </p>

    <h2>Egyedi jellemzők:</h2>
    <p>-Épületek amik felemelkednek</p>
    <p>-Átalakuló egységek mint a Viking és a Hellion</p>
    <p>
      -Rengeteg használható stratégia, gyalogos és gépesített stílust magába
      foglalva
    </p>
  </section>
  <table>
    <thead>
      <tr>
        <th>Icon</th>
        <th>Egységnév</th>
        <th>Egység leírás</th>
      </tr>
    </thead>
    <tr>
      <td>
        <a target="_blank" href="../Images/units/1._SCV_Default.jpg">
          <img class="unit" src="../Images/units/1._SCV_Default.jpg" alt="SCV">
        </a>
      </td>
      <td>SCV</td>
      <td>
        A T-280 űrépítő jármű (vagy SCV, Space Construction Vehicle) egyfajta általános célú műszaki
        jármű. Az SCV épít épületeket, gyűjti a nyersanyagokat és képes
        megjavítani a sérült épületeket és mechanikus egységeket.
      </td>
    </tr>
    <tr>
      <td>
        <a target="_blank" href="../Images/units/1._Marine_Default.jpg">
          <img class="unit" src="../Images/units/1._Marine_Default.jpg" alt="Marine">
        </a>
      </td>
      <td>Marine</td>
      <td>
        A marine-k alkotják a legtöbb terran frontvonalbeli erő zömét.
        Marine-k lehetnek hivatalosan a kormány által jóváhagyott egységektől
        kezdve a helyi milíciákon és magán biztonsági cégeken át kalózok,
        renegátok és zsoldosok is. A marine a Terran erők alapvető gyalogsági
        egysége.
      </td>
    </tr>
    <tr>
      <td>
        <a target="_blank" href="../Images/units/1._Marauder_Default.jpg">
          <img class="unit" src="../Images/units/1._Marauder_Default.jpg" alt="Marauder">
        </a>
      </td>
      <td>Marauder</td>
      <td>
        A <strong>marauder</strong> elsősorban a marine-ek támogató egysége.
        Páncélzatát nehéz szárazföldi célpontok, (elsősorban zerg páncélosok)
        ellen fejlesztették ki, a korábbi firebat egységek felszerelése
        alapján.
      </td>
    </tr>
    <tr>
      <td>
        <a target="_blank" href="../Images/units/1._Ghost_Default.jpg">
          <img class="unit" src="../Images/units/1._Ghost_Default.jpg" alt="Ghost">
        </a>
      </td>
      <td>Ghost</td>
      <td>
        A Terran Dominion kormányának hivatalos nyilatkozata az, hogy a
        <strong>ghost</strong>-ok és a Ghost Program nem létezik. A ghost-ok
        rettegett terráni titkos ügynökök. Ismertek bérgyilkos, pszionikus, és
        álcázási képességükről, amihez egy álcázó eszközt használnak.
      </td>
    </tr>
    <tr>
      <td>
        <a target="_blank" href="../Images/units/1._SiegeTank_Default.jpg">
          <img class="unit" src="../Images/units/1._SiegeTank_Default.jpg" alt="Siege Tank">
        </a>
      </td>
      <td>Siege Tank</td>
      <td>
        Az <strong>siege tank</strong> két üzemmódban működik. Az első a
        "tank" vagy "roham üzemmód", amelyben a jármű páncélozott támogató
        szerepkörben használható, viszonylag könnyű fegyverekkel. A második a
        radikálisabb "ostrom üzemmód", amelyben a jármű egy rögzített
        pozícióba kerül, így sokkal erősebb és nagyobb hatótávolságú fegyverek
        bevetésére képes.
      </td>
    </tr>
    <tr>
      <td>
        <a target="_blank" href="../Images/units/1._Thor_Default.jpg">
          <img class="unit" src="../Images/units/1._Thor_Default.jpg" alt="Thor">
        </a>
      </td>
      <td>Thor</td>
      <td>
        A <strong>thor</strong> a terran erők hatalmas és erős mechanikus
        ostromjárója, amely a Dominion fegyveres erőinek egyik legnehezebb és
        legerősebb mechanikus egysége.
      </td>
    </tr>
    <tr>
      <td>
        <a target="_blank" href="../Images/units/1._Medivac_Default.jpg">
          <img class="unit" src="../Images/units/1._Medivac_Default.jpg" alt="Medivac">
        </a>
      </td>
      <td>Medivac</td>
      <td>
        Az orvosi evakuációs szállítóhajó, hivatalos nevén G-226 medical
        transport, (röviden <strong>medivac</strong>) egy terran légi egység,
        amely a harctéren a sebesült csapatok orvosi ellátását, és menekítését
        biztosítja.
      </td>
    </tr>
    <tr>
      <td>
        <a target="_blank" href="../Images/units/1._Battlecruiser_Default.jpg">
          <img class="unit" src="../Images/units/1._Battlecruiser_Default.jpg" alt="Battlecruiser">
        </a>
      </td>
      <td>Battlecruiser</td>
      <td>
        Bár némi időbe telhet, mire bevethetővé válik, de ha már működőképes,
        a <strong>battlecruiser</strong> könnyen felveszi a versenyt bármely
        ellenfél (legyen az Protoss, Terran vagy Zerg) legerősebb egysegeivel.
        A battlecruiser nem különbözik egy önálló kisvárostól. Megközelítőleg
        4000 és 7000 fős legénységnek ad otthont. A hadihajókhoz szükséges
        szabványos létesítményeken kívül számos kantinnal és pihenőhelyiséggel
        is büszkélkedhetnek.
      </td>
    </tr>
  </table>
  <footer>
    <?php
    include "../Parts/footer.php";
    ?>
  </footer>
</body>

</html>