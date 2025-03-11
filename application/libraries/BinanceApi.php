<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BinanceApi
{
    private const API_BASE_URL = "https://api.binance.com";
    private const ENDPOINTS = [
        "SERVER_STATUS" => "/sapi/v1/system/status",
        "SERVER_TIME" => "/api/v3/time",
        "SERVER_PING" => "/api/v3/ping",
        "AGG_TRADES" => "/api/v3/aggTrades",
        "AVG_PRICE" => "/api/v3/avgPrice",
        "DEPTH" => "/api/v3/depth",
        "EXCHANGE_INFO" => "/api/v3/exchangeInfo",
        "KLINES" => "/api/v3/klines",
        "TICKER" => "/api/v3/ticker",
        "TICKER_24HR" => "/api/v3/ticker/24hr",
        "TICKER_BOOK_TICKER" => "/api/v3/ticker/bookTicker",
        "TICKER_PRICE" => "/api/v3/ticker/price",
        "TRADES" => "/api/v3/trades",
        "UI_KLINES" => "/api/v3/uiKlines"
    ];

    public function __construct()
    {

    }



    private function get_endpoint($endpoint_key)
    {
        return self::API_BASE_URL . (self::ENDPOINTS[$endpoint_key] ?? self::ENDPOINTS["SERVER_STATUS"]);
    }

    private function get_server_status()
    {
        return 0;
    }


    public function get_crypto_data()
    {

    }




}