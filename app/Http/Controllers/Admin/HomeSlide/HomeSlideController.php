<?php

namespace App\Http\Controllers\Admin\HomeSlide;

use App\Models\HomeSlide;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class HomeSlideController extends Controller
{
    public function show()
    {
        $homeSlide = HomeSlide::find(1);

        return view('admin.page.home-slide.show', compact('homeSlide'));
    }

    public function updateHomeSlider(Request $request, $id)
    {
        $request->validate([
            'title' => ['required', 'max:255'],
            'short_title' => ['required', 'max:255'],
            'home_slide' => ['image', 'mimes:png,jpg,jpeg'],
            'video_url' => ['required', 'max:255'],
        ]);

        $model = HomeSlide::findOrFail($id);
        $data = $request->except('_token', '_method', 'home_slide');

        if ($request->file('home_slide')) {
            $image = $request->file('home_slide');
            $imageName = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $dir = 'upload/home_slide/';
            $save_path = 'upload/home_slide/'.$imageName;

            saveImageToPublicPathAndResizeImage($dir, $image, $save_path, 652, 852, $model->home_slide);

            $data['home_slide'] = $save_path;

            $model->update($data);
        } else {
            $model->update($data);
        }

        return redirect()->back()->with('success', 'Data Successfully Updated');
    }
}
