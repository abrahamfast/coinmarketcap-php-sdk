<?php 

namespace CoinMarketCap;

class Response
{
	protected $response;
	public function __construct($response, $request)
	{
		$this->response = json_decode($response);
		$this->request = $request;
	}

	public function getRequest()
	{
		return $this->request;
	}

	public function status()
	{
		return $this->response->status;
	}

	public function rows()
	{
		return $this->response->data;
	}
	public function whichOne($number)
	{
		return $this->rows()[$number];
	}

}