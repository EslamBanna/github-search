<?php

require '../vendor/autoload.php';

use App\Controller\GithubController;
use App\Service\GithubService;

$repoName = $_POST['q'] ?? ''; // Repository name
$creationDate = $_POST['created'] ?? '2020-01-01'; // Default date
$sort = $_POST['sort'] ?? 'stars'; // Default to stars if not provided
$perPage = $_POST['per_page'] ?? 100; // Default to 100 if not provided
$language = $_POST['language'] ?? 'PHP'; // Default to PHP if not provided

$githubService = new GithubService();
$githubController = new GithubController($githubService);
$repos = $githubController->fetchRepos($repoName, $creationDate, $sort, $perPage, $language);

if (!empty($repos)) {
    echo "<table class='table table-striped'>";
    echo "<thead><tr><th>#</th><th>Repository Name</th><th>Description</th></tr></thead><tbody>";
    foreach ($repos as $index=> $repo) {
        echo "<tr><td>{$index}</td><td>{$repo['name']}</td><td>{$repo['description']}</td></tr>";
    }
    echo "</tbody></table>";
} else {
    echo "No repositories found.";
}