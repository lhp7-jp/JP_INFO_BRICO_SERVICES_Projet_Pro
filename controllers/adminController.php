<?php

require_once '../models/Database.php';
require_once '../models/Lawn.php';

$lawn = new Lawn();
$quotesArray = $lawn->getAllLawnQuote();