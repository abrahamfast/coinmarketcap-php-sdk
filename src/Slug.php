<?php 

namespace CoinMarketCap;

abstract class Slug
{
    const map = 'map';
    const info = 'info';
    const latest = 'listings/latest';
    const historical = 'listings/historical';
    const airdrop = 'airdrop';
    const airdrops = 'airdrops';
    const quoteslatest = 'quotes/latest';
    const quoteshistorical = 'quotes/historical';
    const marketpairslatest ='/market-pairs/latest';
    const ohlcvlatest = '/ohlcv/latest';
    const ohlcvhistorical = '/ohlcv/historical'; 
    const pricepsl = 'price-performance-stats/latest';
    const categories = 'categories';
    const category = 'category';
    const trendingl = 'trending/latest';
    const trendingmv = 'trending/most-visited';
    const trendinggl = 'trending/gainers-losers';
}