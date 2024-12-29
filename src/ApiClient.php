<?php

declare(strict_types=1);
class ApiClient
{
    private $baseUrl;

    public function __construct($baseUrl)
    {
        $this->baseUrl = rtrim($baseUrl, '/');
    }

    public function get($endpoint, $params = [])
    {
        $url = $this->baseUrl . $endpoint . '?' . http_build_query($params);
        $response = file_get_contents($url);
        return json_decode($response, true);
    }
}

/*
$apiClient = new ApiClient('https://fakestoreapi.com');
$products = $apiClient->get("/products");
var_dump($products[0]);
print($products[0]['title']."\n");
*/