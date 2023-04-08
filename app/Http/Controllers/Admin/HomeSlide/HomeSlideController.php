<?php

namespace App\Http\Controllers\Admin\HomeSlide;

use App\Http\Controllers\Controller;
use App\Models\HomeSlide;
use Illuminate\Http\Request;

class HomeSlideController extends Controller
{
    public function show()
    {
        $homeSlide = HomeSlide::find(1);

        return view('admin.page.home-slide.show', compact('homeSlide'));
    }
}
