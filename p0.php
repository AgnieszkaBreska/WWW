<?php
// STEP 1. Start the PHP session.
// should be the first to start, to prevent 'headers already sent' errors
session_start();
 
// STEP 2. Check if a user is NOT YET logged in by checking the session value
if(empty($_SESSION['logged_in'])){
 
    // if the session value is empty, he is not yet logged in
    // redirect him to login page
    header('Location: login.php?action=not_yet_logged_in');
}
?>
<html lang="pl">
	<head>
    	
        <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
        <META NAME="Author" CONTENT="Agnieszka Breśka">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link rel="shortcut icon" href="AB.ico" type="image/x-icon" />
		<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
		<title>Breśka Agnieszka</title>
	</head>
	<body>
        <h1 id="meet">Witaj na mojej stronie!</h1>
        <br>
    <h2>Nazywam się <i>Agnieszka Breśka</i> i jestem studentką II roku Informatyki na Politechnice Warszawsiekj.</h2>
        <br>
        <ol>
       <li> <h3>Moje ulubione filmy:</h3>
        <UL class="lista">
            <LI>Osaczeni</LI>
            <LI>Włoska robota</LI>
            <LI>Władca pierścieni</LI>
            <LI>Hobbit</LI>
        </UL></li>
        <li><h3>Moja ulubiona gra - League of Legends</h3>
    <a id="lol" target="_blank" title="Oficjalna Strona League Of Legends" href="leagueoflegends.com"><img src="https://signup.leagueoflegends.com/theme/signup_theme/img/signup_logo2_clean.png" alt="Oficjalna Strona League Of Legends"/></a>
        <h4>Co to jest LOL?</h4>
    
  
        <p class="tekst">Łącząca elementy RTS i zręcznościówki sieciowa gra bitewna należąca do zapoczątkowanego przed mod Defense of the Ancients gatunku MOBA. Naprzeciwko siebie stają dwie drużyny i zadaniem każdej z nich jest zniszczenie centralnego budynku w bazie wroga. Całość oparto na modelu darmowym uzupełnionym dobrowolnymi mikropłatnościami.
        </p>      
    <p class="tekst"> League of Legends, produkcja studia Riot Games, to sieciowa gra typu MOBA (massive online battle arena) – oparta na zmodyfikowanej mechanice znanej mapy do Warcrafta III - Defence of the Ancients. 
            </p>
        <p class="tekst">Akcja gry ma miejsce w typowym świecie fantasy, zwanym Valoran. Była to kraina od wielu lat ogarnięta wojną, jednak pewnego dnia skłócone państwa postanowiły, że od teraz będą rozwiązywać swoje konflikty w inny sposób. Wybrani przedstawiciele każdej z nacji utworzą tytułową League of Legends, a następnie odesłani zostaną na areny, gdzie zmierzą się z drużynami przeciwników. W ten sposób wszelkie spory międzynarodowe są rozwiązywane w małych pojedynkach, a nie w wyniszczających globalnych wojnach. 
            </p>
        <p class="tekst">League of Legends to pierwsza produkcja studia Riot Games. Jest ona sieciowym, drużynowym action/RPG, w którym musimy walczyć z innymi graczami w granicach zamkniętej areny, przypominającej mapy znane z typowej strategii czasu rzeczywistego. Mamy więc do czynienia z rozwiązaniem podobnym do znanego z Demigod czy Defence of the Ancients.
</p>
        <p class="tekst">Na arenach stają naprzeciw siebie dwie drużyny (trzyosobowe albo pięcioosobowe, w zależności od wybranej mapy). Przed każdym spotkaniem z puli ponad stu postaci wybieramy bohatera, którym będziemy sterować. W miarę awansowania na wyższe poziomy doświadczenia zyskujemy potężniejsze umiejętności, unikalne dla każdego herosa. W trakcie meczu zdobywamy także złoto, przeznaczane na zakup przedmiotów, które ostatecznie kształtują charakter kierowanej postaci. Ponadto przed grą możemy wybrać dwie umiejętności z puli zdolności dostępnych dla każdego bohatera. Wpływ na statystyki naszych postaci mają również specjalizacje i runy wybierane przed meczem. Jedna gra trwa zazwyczaj około 45 minut w trybie 5v5 i około pół godziny w trybie 3v3. 
            </p>
        <p class="tekst">W kolejnych uaktualnieniach dodano kolejne tryb gry. Pierwszy z nich to Dominion, będący adaptacją trybu dominacji do mechaniki MOBA. Jest on wyraźnie bardziej dynamiczny i nieprzewidywalny niż „klasyczne” potyczki, a rozegranie w nim jednego meczu trwa 15-20 minut. Kolejny tryb rozgrywki nosi nazwę ARAM (All Random All Mid). Akcja toczy się na mapie Howling Abyss, a drużyny składające się z pięciu bohaterów rywalizują ze sobą wyłącznie na jednej alejce. Rozgrywka ta jest bardzo dynamiczna, oparta na starciach grupowych i zazwyczaj trwa około 20 minut. 
            </p>
        <p class="tekst">Chociaż League of Legends nastawiona jest przede wszystkim na sieciowe potyczki, twórcy przygotowali także tryb single-player, w którym mierzymy się z zaawansowaną AI. Pełni on jednak głównie funkcję treningową przed przystąpieniem do walki z żywym przeciwnikiem. Zresztą gra sama może wyszukać nam partnera o zbliżonych umiejętnościach. Ponadto nasze osiągnięcia są stale śledzone i zapisywane na serwerach rankingowych.</p>
    </li>
    </ol>
    <br>
    <MARQUEE LOOP="2" BEHAVIOR="slide">
        <img src="http://i.imgur.com/XufV8vb.png?1" alt="tu powninien być obrazek ale twoja przeglądarka ich nie obsługuje :("/>
    </MARQUEE>
        <br><br>
        <FIELDSET>
            <LEGEND>Źródło:</LEGEND>
            <a target="_blank" href="http://www.gry-online.pl/S016.asp?ID=12281"><img src="http://www.gry-online.pl/im/gol-logo-h20.png" alt="gry-online.pl"/></a>
        </FIELDSET>
<br>
        </body>
    
</html>
    