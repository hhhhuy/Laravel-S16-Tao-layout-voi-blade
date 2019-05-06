<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {

        //tao mang categories
        $tasks = [
            '0' => [
                'id' => 1,
                'name' => 'category1',
                'des' => 'aaaaaaaaa',
                'quantity' => '10'
            ],

            '1' => [
                'id' => 2,
                'name' => 'category2',
                'des' => 'bbbbbb',
                'quantity' => '22'
            ],

            '2' => [
                'id' => 3,
                'name' => 'category3',
                'des' => 'ccccccc',
                'quantity' => '33'
            ]
        ];

        //goi view va truyen du lieu sang view
        return view('tasks.list', compact('tasks'));
    }
}
