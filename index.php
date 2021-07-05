<?php

require_once "vendor/autoload.php";

use GabrielyW\ConsultaCep\Search;

$search = new Search();

$result = $search->getAdressFromZipcode("01001000");

print_r($result);