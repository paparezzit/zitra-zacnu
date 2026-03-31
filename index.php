<?php
$pageTitle  = 'Zítra začnu! — Vánoční festival zlozvyků';
$bodyClass  = 'page-home';
$activePage = 'o-projektu';
require 'includes/header.php';
?>

<section class="hero">
    <!-- Nahraď src cestou k tvému video souboru -->
    <video class="hero__video" autoplay muted loop playsinline>
        <source src="/video/hero.mp4" type="video/mp4">
    </video>

    <button class="hero__mute" aria-label="Zapnout/vypnout zvuk">
        <svg class="hero__mute-icon hero__mute-icon--off" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M16.5 12c0-1.77-1.02-3.29-2.5-4.03v2.21l2.45 2.45c.03-.2.05-.41.05-.63zm2.5 0c0 .94-.2 1.82-.54 2.64l1.51 1.51C20.63 14.91 21 13.5 21 12c0-4.28-2.99-7.86-7-8.77v2.06c2.89.86 5 3.54 5 6.71zM4.27 3L3 4.27 7.73 9H3v6h4l5 5v-6.73l4.25 4.25c-.67.52-1.42.93-2.25 1.18v2.06c1.38-.31 2.63-.95 3.69-1.81L19.73 21 21 19.73l-9-9L4.27 3zM12 4L9.91 6.09 12 8.18V4z"/>
        </svg>
        <svg class="hero__mute-icon hero__mute-icon--on" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display:none">
            <path d="M3 9v6h4l5 5V4L7 9H3zm13.5 3c0-1.77-1.02-3.29-2.5-4.03v8.05c1.48-.73 2.5-2.25 2.5-4.02zM14 3.23v2.06c2.89.86 5 3.54 5 6.71s-2.11 5.85-5 6.71v2.06c4.01-.91 7-4.49 7-8.77s-2.99-7.86-7-8.77z"/>
        </svg>
    </button>
</section>

<section class="about">
    <div class="about__inner">
        <h1 class="about__title">Zítra začnu!</h1>
        <p class="about__subtitle">Vánoční festival zlozvyků</p>

        <div class="about__body">
            <p>Vánoce jsou svátky klidu a míru – realita ale často vypadá jinak. Shon, nakupování, úklid, přejídání, stres z návštěv a nakonec i hádky s rodinou. Připomíná vám to spíš přehlídku lidských zlozvyků než oslavu nejkrásnějšího období v roce?</p>

            <p>Vánoční festival zlozvyků realizovaný v samém srdci města letos přináší občanům i návštěvníkům Brna alternativu k současné podobě Vánoc, které jsou pro mnoho lidí až příliš konzumní. Nabízí možnost konečně zpomalit, nadechnout se a nalézt prostor k vnitřnímu zklidnění.</p>

            <p>Projekt volně navazuje na Národní sbírku zlozvyků umělkyně Kateřiny Šedé, která dlouhodobě mapuje české zlozvyky. Tentokrát však nejde jen o pojmenování našich slabostí, ale o jejich překonání.</p>

            <p>Na mapě brněnských Vánoc se díky tomu letos poprvé aktivně objeví Římské náměstí. Během roku se zde setkávají lidé, kteří stojí na okraji společnosti. Právě proto se pro nás hlavním motivem tohoto prostoru stalo téma bariér a jejich překonávání. Za architektonickým řešením stojí architekti z PEER COLLECTIVE. Římské náměstí s pomocí velkoformátových opon symbolicky rozdělili na sérii bariér, které musí návštěvník překonat, aby se dostal do centra dění. Nejde o překážku, ale především o inspiraci k vlastní proměně. Malý osobní rituál na cestě za lepším já.</p>

            <p>A právě ten je vrcholem celého našeho programu! „Zítra začnu" není jen festival, je to hlavně nový začátek. Pojďme to zkusit společně!</p>
        </div>
    </div>
</section>

<footer class="credits">
    <div class="credits__list">
        <p>Kateřina Šedá: Zítra začnu! Vánoční festival zlozvyků</p>
        <p>9.–31. 12. 2025, Římské náměstí, Brno</p>
        <p>Autorka projektu a uměleckého řešení akce: Kateřina Šedá</p>
        <p>Autoři architektonického řešení: PEER COLLECTIVE (Daniel Struhařík, Georgi Dimitrov, Ondřej Válek)</p>
        <p>Iniciátor myšlenky: RENADL o.p.s.</p>
        <p>Investor: Městská část Brno-střed</p>
        <p>Grafický design: Kristina Drinková</p>
        <p>Autoři textů: Obyvatelé České republiky</p>
        <p>Redakce: Lucie Faulerová, Petra Konečná</p>
        <p>Autoři interaktivní koncepce: Zkrat kolektiv (Marko Řeháček, Petr Žernia)</p>
        <p>Produkce: Kateřina Šedá, Peer Collective, David Ondra, Lenka Holenda Jirků, Kristina Drinková, Michal Ondráček, Petr Štika, Martina Pokorná, Radim Preuss</p>
    </div>
</footer>

<?php require 'includes/footer.php'; ?>
