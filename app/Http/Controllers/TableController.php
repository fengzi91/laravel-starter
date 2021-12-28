<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class TableController extends Controller
{
    public function index()
    {
        return Inertia::render('Table', [
            'path' => base_path('admin/resources/views/admin'),
        ]);
    }
}
