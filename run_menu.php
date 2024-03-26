<?php

require_once './menu.php';

$menu = new Menu();
while (true) {
    $menu->displayMenu();
    $choice = readline();
    $menu->processChoice($choice);
}