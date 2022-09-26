<?php

namespace App\Console\Commands;

use App\Http\Controllers\ApiController;
use App\Models\Repository;
use Carbon\Carbon;
use Illuminate\Console\Command;

class GetRepositories extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:repositories {token}';	

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command created just to get all user repositories';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $apiController = new ApiController();
        $token = $this->argument('token');
        $url = 'https://api.github.com/user/repos' . '?affiliation=owner';
        $body = [];
        $type = 'GET';
        $response = $apiController->makeRequest($token, $body, $type, $url);

        $repositories = $response;
        foreach($repositories as $repository){
            $newRepository = new Repository();
            $newRepository->reference_id = $repository['id'];
            $newRepository->name = $repository['name'];
            $newRepository->private = $repository['private'];
            $newRepository->archived = $repository['archived'];
            $newRepository->disabled = $repository['disabled'];
            $created_at = Carbon::parse($repository['created_at'])->format('Y-m-d H:i:s');
            $newRepository->reference_created_at = $created_at;
            $pushed_at = Carbon::parse($repository['pushed_at'])->format('Y-m-d H:i:s');
            $newRepository->reference_pushed_at = $pushed_at;
            $newRepository->save();
        }

        return 0;
    }
}
