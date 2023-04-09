<?php

namespace App\Http\Controllers\Frontend\About;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $data = ['about' => About::find(1)->toArray()];

        return view('frontend.page.about.index', compact('data'));
    }
}
