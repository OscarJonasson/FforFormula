<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class CallApiService
{
  private $client;
  public function __construct(HttpClientInterface $client)
  {
    $this->client = $client;
  }

  public function getRacesIn2022(): array
  {
    $response = $this->client->request(
      'GET',
      'https://ergast.com/api/f1/2022.json'
    );
    return $response->toArray();
  }
}