<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Http;

class ClickupService
{
    private $headers, $userId;

    public function __construct()
    {
        $this->headers = [
            'authorization' => env('USER_DEFAULT')
        ];
    }

    public function getUser(): mixed
    {
        try {
            $userResponse = Http::withHeaders($this->headers)->get('https://api.clickup.com/api/v2/user');

            $userData = $userResponse->json();
            $this->userId = $userData['user']['id'];

            return $userData;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function getTasks()
    {
        try {
            $taskResponse = Http::withHeaders($this->headers)->get('https://api.clickup.com/api/v2/team/' . env('WORKSPACE_ID') . '/task?subtasks=true&assignees[]=' . $this->userId . '&include_closed=true&statuses[]=Closed');

            $tasksData = $taskResponse->json();

            return $tasksData;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
