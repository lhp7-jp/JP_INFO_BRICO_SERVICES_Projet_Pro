<?php

require_once '../models/Database.php';
require_once '../models/Lawn.php';

$showDetails = false;

if (isset($_GET['id'])) {	
    $lawn = new Lawn();
    $quoteDetails = $lawn->getLawnQuoteDetails($_GET['id']);
    if (!$quoteDetails) {
        $showDetails = true;
    } else
        $showDetails = false;
}
