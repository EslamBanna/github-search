<?php

namespace App\Service;

use GuzzleHttp\Client;

class GithubService
{
    private $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function getRepositories(string $repoName, string $creationDate, string $sort, int $perPage, string $language): array
    {
        $url = "https://api.github.com/search/repositories?q=created:>={$creationDate}+language:{$language}+{$repoName}&per_page={$perPage}&sort={$sort}";
        $response = $this->client->get($url);
        return json_decode($response->getBody()->getContents(), true)['items'];
    }
}
