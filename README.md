# coinmarketcap-php-sdk
coinmarketcap php sdk

## Install

#### Install via Composer

```
composer require abrahamghaemi/coinmarketcap-php-sdk
```


```php
$config = [
  'url' => "https://pro-api.coinmarketcap.com/v1/cryptocurrency", 
  'headers' => [
    'Accepts: application/json',
    'X-CMC_PRO_API_KEY: YOUR API KEY'
  ]
];
```

```php
$endpoint = new \CoinMarketCap\Endpoint($config);
```

Returns information about a single airdrop available on CoinMarketCap. Includes the cryptocurrency metadata
```php
$response = $endpoint->airdrop($parameters);
$status = $response->status();
$data = $response->rows();
$first = $response->whichOne(1);
```
## API endpoints lists ```17 endpoints```
```php
$endpoint->categories($parameters);
$endpoint->category($parameters);
$endpoint->map($parameters);
$endpoint->info($parameters);
$endpoint->latest($parameters);
$endpoint->quoteslatest($parameters);
$endpoint->quoteshistorical($parameters);
$endpoint->marketpairslatest($parameters);
$endpoint->ohlcvlatest($parameters);
$endpoint->historical($parameters);
$endpoint->ohlcvhistorical($parameters);
$endpoint->pricepsl($parameters);
$endpoint->trendingl($parameters);
$endpoint->trendingmv($parameters);
$endpoint->trendinggl($parameters);
$endpoint->airdrops($parameters);
```
