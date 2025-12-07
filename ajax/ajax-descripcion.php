<?php
session_start();

$idioma = $_SESSION['lang'];

include_once("../include/lang/{$idioma}-points-of-interest.php");
include_once("../include/lang/{$idioma}-what-to-do.php");

$id = $_POST['id'];

switch ($id) {
    case 'BlancaAlley':

        echo '<p class="pt-1">' . BLANCAALLEY[1] . '</p>';

        break;
    case 'ParqueCentral':

        echo '<p class="pt-1">' . PARQUECENTRAL[1] . '</p>';

        break;
    case 'UmbrellaStreet':

        echo '<p class="pt-1">' . UMBRELLASTREET[1] . '</p>';

        break;
    case 'MuseoAmbar':

        echo '<p class="pt-1">' . MUSEOAMBAR[1] . '</p>';

        break;
    case 'FortalezaSanFelipe':

        echo '<p class="pt-1">' . FORTALEZASANFELIPE[1] . '</p>';

        break;
    case 'A-walk-through-Puerto-Plata':

        echo '<h3>' . WALK_THROUGH[1] . '</h3>';
        echo WALK_THROUGH[2];
        echo WALK_THROUGH[3];


        break;
    case 'Monkey-Island':

        echo '<h3>' . MONKEY_ISLAND[1] . '</h3>';
        echo MONKEY_ISLAND[2];

        break;
    case 'OldTownAndBeach':
        echo '<h3>' . OLDTOWNANDBEACH[1] . '</h3>';
        echo OLDTOWNANDBEACH[2];
        echo OLDTOWNANDBEACH[3];

        break;
    case 'PlayaDorada':
        echo '<h3>' . PLAYADORADA[1] . ' </h3>';
        echo PLAYADORADA[2];

        break;
    default:

        echo '<p>ERROR!</p>';

        break;
}