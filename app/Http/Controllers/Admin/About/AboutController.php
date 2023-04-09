<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function show()
    {
        $about = About::find(1);

        return view('admin.page.about.show', compact('about'));
    }

    public function updateAbout(Request $request, $id)
    {
        $request->validate([
            'title' => ['required', 'max:255'],
            'short_title' => ['required', 'max:255'],
            'short_description' => ['string'],
            'long_description' => ['string'],
            'about_image' => ['image', 'mimes:png,jpg,jpeg'],
        ]);

        $model = About::findOrFail($id);
        $data = $request->except('_token', '_method', 'about_image');

        if ($request->file('about_image')) {
            $image = $request->file('about_image');
            $imageName = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $dir = 'upload/about/';
            $save_path = 'upload/about/'.$imageName;

            saveImageToPublicPathAndResizeImage($dir, $image, $save_path, 523, 605, $model->about_image);

            $data['about_image'] = $save_path;

            $model->update($data);
        } else {
            $model->update($data);
        }

        return redirect()->back()->with('success', 'Data Successfully Updated');
    }
}
