<!DOCTYPE html>
<html lang="hu">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Starcraft | Zerg</title>
  <meta name="description" content="Bemutató oldal a Zergekről">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/style.css">
  <link rel="icon" href="../Images/SCLogo.png">
</head>

<body>
  <header>
    <?php
    session_start();
    $activePage = "Zerg";
    include "../Parts/Header.php" ?>
  </header>
  <section id="pageContent">
    <h1>
      <img class="racesH1" src="../Images/font/ZergFont.png" alt="Zerg">
    </h1>
    <h2>Irgalmatlan lények vad raja, amely világokat pusztít el.</h2>

    <p>
      A ravasz Queen of Blades vezérletével az idegen
      <strong>zerg</strong> faj kész elszabadítani a poklot a galaxisban,
      felemésztve mindent ami az útjukba áll. A zerg-ek nem használnak
      technológiát fegyvereik, páncéljuk vagy csillaghajóik megalkotásához,
      ehelyett ezeket a hiályosságokat biológiai adaptációval és tervezett
      mutációval töltik be hatékonyan.
    </p>

    <h2>Egyedi jellemzők:</h2>
    <p>- Egységek, amelyek a felszín alá ássák magukat</p>
    <p>
      - Gyorsan mozgó egységek raja, mint pédául a Zergling-ek vagya
      Mutalisk-ek
    </p>
    <p>
      - Creep terül szét a zerg bázis körül, ami tápláló biológiai anyaggal
      látja el azt
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
        <a target="_blank" href="../Images/units/1._Drone_Default.jpg">
          <img class="unit" src="../Images/units/1._Drone_Default.jpg" alt="Drone">
        </a>
      </td>
      <td class="tablaEgysegnev">Drone</td>
      <td>
        A <strong>drone</strong> a zerg faj dolgozója. A drone-ok genetikai
        kódjukon belül tartják az összes zerg-struktúra evolúciós kódját, így
        magukból formálják az épületeiket.
      </td>
    </tr>
    <tr>
      <td>
        <a target="_blank" href="../Images/units/1._Zergling_Upgraded_Default.jpg">
          <img class="unit" src="../Images/units/1._Zergling_Upgraded_Default.jpg" alt="Zergling">
        </a>
      </td>
      <td class="tablaEgysegnev">Zergling</td>
      <td>
        A <strong>zergling</strong>-ek alkotják a legnépesebb zerg törzset.
        Egyszerű DNS-ük lehetővé teszi, hogy egyetlen lárvából két zergling is
        kifejlődjön. A zergling gyors, de gyenge közelharcos egység. Ideális
        nagy létszú támadásokhoz.
      </td>
    </tr>
    <tr>
      <td>
        <a target="_blank" href="../Images/units/1._Hydralisk_Default.jpg">
          <img class="unit" src="../Images/units/1._Hydralisk_Default.jpg" alt="Hydralisk">
        </a>
      </td>
      <td class="tablaEgysegnev">Hydralisk</td>
      <td>
        A <strong>hydralisk</strong> a slothien zerg evolúciója, hét vagy
        nyolc különböző és változatos organizmustörzzsel kombinálva. Míg a
        slothien-ek békés növényevők voltak, addig a hydralisk az egyik
        legvadabb és legszadistább zerg törzsnek számít. A hydralisk zerg-ek
        alapvető frontvonalbeli lénye, amely támadásaik gerincét képezi
        ellenálló páncéljával, és távolsági támadásával.
      </td>
    </tr>
    <tr>
      <td>
        <a target="_blank" href="../Images/units/1._Lurker_Default.jpg">
          <img class="unit" src="../Images/units/1._Lurker_Default.jpg" alt="Lurker">
        </a>
      </td>
      <td class="tablaEgysegnev">Lurker</td>
      <td>
        Más zerg törzsekhez képest a <strong>lurker</strong>-ek pókszerű
        megjelenésűek. A hidraliszkből fejlődtek ki, és azon ritka zerg
        törzsek közé tartoznak, amelyek beásva magukat is képesek támadni.
      </td>
    </tr>
    <tr>
      <td>
        <a target="_blank" href="../Images/units/1._Queen_Default.jpg">
          <img class="unit" src="../Images/units/1._Queen_Default.jpg" alt="Queen">
        </a>
      </td>
      <td class="tablaEgysegnev">Queen</td>
      <td>
        A <strong>queen</strong> értelmes lény, agyát egy páncélozott koponya
        veszi körül, ami egy sor idegzsinórhoz csatlakozik. Felépítése
        hasonlít a protoss-okéhoz. A queen nagy mentális képességekkel van
        felruházzva, de komoly korlátai vannak. Limitált önálló
        gondolkodással, elemzéssel és eszességgel rendelkeznek. Korlátozott
        parancsnoki szerepet játszanak a zerg nest irányításában.
      </td>
    </tr>
    <tr>
      <td>
        <a target="_blank" href="../Images/units/1._Mutalisk_Default.jpg">
          <img class="unit" src="../Images/units/1._Mutalisk_Default.jpg" alt="Mutalisk">
        </a>
      </td>
      <td class="tablaEgysegnev">Mutalisk</td>
      <td>
        A <strong>mutalisk</strong> egy levegőben élő zerg fajta. A mutalisk
        bőrszerű szárnnyal rendelkezik ami elképesztő sebességet és
        manőverezőképességet biztosít nekik a légköri repülés során. A
        szárnyak mozgása energiát is termel, amely katalizátorként szolgál a
        lény belső biológiai funkciói számára. Egyike a legjobban alkalmazkodó
        zerg alfajoknak. Képes továbbfejlődni brood lord-á és viper-é.
      </td>
    </tr>
    <tr>
      <td>
        <a target="_blank" href="../Images/units/1._Infestor_Default.jpg">
          <img class="unit" src="../Images/units/1._Infestor_Default.jpg" alt="Infestor">
        </a>
      </td>
      <td class="tablaEgysegnev">Infestor</td>
      <td>
        Az <strong>infestor</strong>-ok erős lábai maró anyagot választanak
        ki, ami felpuhítja a talajt, és lehetővé teszi számukra, hogy egy
        szempillantás alatt beássák magukat a föld alá. Az állkapcsából
        kinyúló érzékelő csápok a biológiai adó-vevő készülékként működnek,
        amik szemként és fülként szolgálnak a föld alatt.
      </td>
    </tr>
    <tr>
      <td>
        <a target="_blank" href="../Images/units/1._Ultralisk_Default.jpg">
          <img class="unit" src="../Images/units/1._Ultralisk_Default.jpg" alt="Ultralisk">
        </a>
      </td>
      <td class="tablaEgysegnev">Ultralisk</td>
      <td>
        Az <strong>ultralisk</strong>-ek a legerősebb gyalogsági törzs,
        amellyel a raj rendelkezik. Élő faltörő kosok, méretükhöz képest
        gyorsak, nagy, csontszerű kaszákkal támadnak, amelyek a hátukból
        állnak ki.
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