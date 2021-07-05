<?php

require_once "vendor/autoload.php";

use Gabri\ConsultaCep\Search;

$search = new Search();

$result = $search->getAdressFromZipcode("11713290");

print_r($result);