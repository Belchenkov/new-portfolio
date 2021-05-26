<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function getWorks()
    {
        return Category::with('works')->get();
    }
}
