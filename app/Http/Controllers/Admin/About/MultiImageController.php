<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MultiImageController extends Controller
{
    public function show()
    {
        return view('admin.page.about.multi-images');
    }
}
