<?php 

namespace CoinMarketCap;

Class Endpoint
{
	protected Client $client;

	public function __construct($config)
	{
		$this->client = new Client($config);
	}

	public function airdrop($parameters)
	{
		return $this->client->get($parameters, Slug::airdrop);
	}

	public function airdrops($parameters)
	{
		return $this->client->get($parameters, Slug::airdrops);
	}

	public function categories($parameters)
	{
		return $this->client->get($parameters, Slug::categories);
	}

	public function category($parameters)
	{
		return $this->client->get($parameters, Slug::category);
	}

	public function map($parameters)
	{
		return $this->client->get($parameters, Slug::map);
	}

	public function info($parameters)
	{
		return $this->client->get($parameters, Slug::info);	
	}

	public function latest($parameters)
	{
		return $this->client->get($parameters, Slug::latest);	
	}

	public function quoteslatest($parameters)
	{
		return $this->client->get($parameters, Slug::quoteslatest);	
	}

	public function quoteshistorical($parameters)
	{
		return $this->client->get($parameters, Slug::quoteshistorical);	
	}

	public function marketpairslatest($parameters)
	{
		return $this->client->get($parameters, Slug::marketpairslatest);	
	}

	public function ohlcvlatest($parameters)
	{
		return $this->client->get($parameters, Slug::ohlcvlatest);	
	}

	public function historical($parameters)
	{
		return $this->client->get($parameters, Slug::historical);	
	}

	public function ohlcvhistorical($parameters)
	{
		return $this->client->get($parameters, Slug::ohlcvhistorical);	
	}

	public function pricepsl($parameters)
	{
		return $this->client->get($parameters, Slug::pricepsl);	
	}

	public function trendingl($parameters)
	{
		return $this->client->get($parameters, Slug::trendingl);	
	}

	public function trendingmv($parameters)
	{
		return $this->client->get($parameters, Slug::trendingmv);	
	}

	public function trendinggl($parameters)
	{
		return $this->client->get($parameters, Slug::trendinggl);	
	}

}