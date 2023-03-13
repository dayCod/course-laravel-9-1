<?php

namespace App\Services\Admin\Profiles;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
}
