<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GitHubController extends Controller
{

    private $apiController;

    public function __construct()
    {
        $this->apiController = new ApiController();
    }

    public function getAllRepositories()
    {
        $token = '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';
        $url = 'https://api.github.com/user/repos' . '?affiliation=owner';
        $body = [];
        $type = 'GET';
        $response = $this->apiController->makeRequest($token, $body, $type, $url);
        
        return $response;
    }
}
