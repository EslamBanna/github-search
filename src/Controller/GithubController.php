<?php

namespace App\Controller;

use App\Service\GithubService;

class GithubController
{
    private $githubService;

    public function __construct(GithubService $githubService)
    {
        $this->githubService = $githubService;
    }

    public function fetchRepos(string $repoName, string $creationDate, string $sort,  int $perPage, string $language)
    {
        return $this->githubService->getRepositories($repoName, $creationDate, $sort, $perPage, $language);
    }
}
