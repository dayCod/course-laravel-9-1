<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\{
    About,
    HomeSlide,
};
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $data = [
            'home_slide' => $this->homeSlide(),
            'about' => $this->about(),
        ];

        return view('frontend.page.home.index', compact('data'));
    }

    private function homeSlide()
    {
        $data = HomeSlide::find(1)->toArray();

        return $data;
    } //end method

    private function about()
    {
        $data = About::find(1)->toArray();

        return $data;
    }

}
