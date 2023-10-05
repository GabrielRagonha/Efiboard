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

        $user = $this->getUser();

        $this->userId = $user['user']['id'];
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

    public function getTasks($status)
    {
        try {
            $page = 0   ;
            $tasksData = [];
            $allTasks = [];

            while (true):
                $taskResponse = Http::withHeaders($this->headers)->get('https://api.clickup.com/api/v2/team/' . env('WORKSPACE_ID') . '/task?page='. $page .'&subtasks=true&assignees[]=' . $this->userId . '&include_closed=true&statuses[]='. $status);

                $tasksData = $taskResponse->json();

                $allTasks = array_merge($allTasks, $tasksData['tasks']);

                if ($tasksData['last_page'] === true) {
                    break;
                }

                $page += 1;
            endwhile;
                
            return $allTasks;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
