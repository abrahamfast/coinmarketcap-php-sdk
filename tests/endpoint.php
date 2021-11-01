<?php 

require __DIR__ .  "/../vendor/autoload.php";



$headers = [
  'Accepts: application/json',
  'X-CMC_PRO_API_KEY: YOUR API KEY'
];


$config = [
	'url' => "https://pro-api.coinmarketcap.com/v1/cryptocurrency", 
	'headers' => $headers
];



$endpoint = new \CoinMarketCap\Endpoint($config);

$parameters = [
  'start' => '1',
  'limit' => '2',
  'convert' => 'USD'
];

/**
 * Returns a paginated list of all active cryptocurrencies with latest  market data.
 */
// latest function for free plan
$airdrop = $endpoint->latest($parameters);

var_dump($airdrop->rows());