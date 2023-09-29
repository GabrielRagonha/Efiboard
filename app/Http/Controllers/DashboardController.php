<?php

namespace App\Http\Controllers;

use App\Http\Services\ClickupService;

class DashboardController extends Controller
{
    public function index()
    {
        $clickupService = new ClickupService();


        return view('dashboard', [
            'userData' => $clickupService->getUser(),
            'tasksData' => $clickupService->getTasks(),
        ]);
    }

    // public function getAll() {

    // }

    // public function countTasks()
    // {

    //     $clickupService->getTasks('To do');
    // }
}
