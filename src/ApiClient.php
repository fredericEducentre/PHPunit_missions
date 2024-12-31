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
        return $response;
    }
}

/*
$apiClient = new ApiClient('https://fakestoreapi.com');
$products = $apiClient->get("/products");
#Affiche résultat API au format JSON
print($products . "\n");
#Transforme le JSON en tableau
$product_as_array = json_decode($products, true);
print($product_as_array[0]["title"] . "\n");
*/