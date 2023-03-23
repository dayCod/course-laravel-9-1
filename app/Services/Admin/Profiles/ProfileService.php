<?php

namespace App\Services\Admin\Profiles;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ProfileService
{
    public function index()
    {
        $id = Auth::id();
        $loggedUser = User::find($id);

        $status = true;
        $message = "Data Berhasil Diambil";

        $result = (object) [
            'status' => $status,
            'message' => $message,
            'data' => $loggedUser,
        ];

        return $result;
    }

    public function edit($user)
    {
        $loggedUser = User::find($user);

        $status = true;
        $message = "Data Berhasil Diambil";

        $result = (object) [
            'status' => $status,
            'message' => $message,
            'data' => $loggedUser,
        ];

        return $result;
    }

    public function update($request, $user)
    {
        $loggedUser = User::find($user);
        $loggedUser->name = $request->name;
        $loggedUser->username = $request->username;
        $loggedUser->email = $request->email;

        if($request->file('profile_image')) {
            $file = $request->file('profile_image');
            $filename = Str::random(40).$file->getClientOriginalName();
            $file->move('upload/profile_images',$filename);

            $loggedUser['profile_image'] = $filename;
        }

        $loggedUser->save();

        $status = true;
        $message = "Data Berhasil Di Update";

        $result = (object) [
            'status' => $status,
            'message' => $message,
            'user' => $loggedUser,
        ];

        return $result;
    }
}
