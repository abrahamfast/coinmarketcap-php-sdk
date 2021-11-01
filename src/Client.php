<?php 

namespace CoinMarketCap;

use CoinMarketCap\Response;

class client
{
	protected string $url;
	protected array $params;
	private array $headers;

	public function __construct($config)
	{
		$this->url = $config['url'];
		$this->headers = $config['headers'];
	}

	public function get($parameters, $action = 'action')
	{
		$queryParams = http_build_query($parameters);
		$request = "{$this->url}/{$action}?{$queryParams}";
		$response = $this->exec($request);
		return new Response($response, $this);
	}

	public function exec($request)
	{
		$curl = curl_init();
		curl_setopt_array($curl, array(
		  CURLOPT_URL => $request,            
		  CURLOPT_HTTPHEADER => $this->headers,
		  CURLOPT_RETURNTRANSFER => 1
		));
		return curl_exec($curl);
	}
}