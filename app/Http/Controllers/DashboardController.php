<?php

namespace App\Http\Controllers;

use App\Http\Services\ClickupService;

class DashboardController extends Controller
{
    public function index()
    {
        $clickupService = new ClickupService();

        $tasks = [
            'To do' => $clickupService->getTasks('T0 do'),
            'Pending' => $clickupService->getTasks('Pending interna'),
            'In progress' => $clickupService->getTasks('In progress'),
            'In Review' => $clickupService->getTasks('In review'),
            'Readjust' => $clickupService->getTasks('Readjust'),
            'Stopped' => $clickupService->getTasks('Stoped'),
            'Closed' => $clickupService->getTasks('Closed'),
        ];


        return view('dashboard', [
            'userData' => $clickupService->getUser()['user'],
            'tasksData' => $tasks
        ]);
    }
}
