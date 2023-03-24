<?php

namespace App\Services\Admin\ChangePassword;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordService
{
    public function changePassword($request)
    {
        $validate = $request->validate([
            'old_password' => ['required'],
            'new_password' => ['required'],
            'confirm_password' => ['required', 'same:new_password']
        ]);

        if(!$validate) {
            $status = false;
            $message = "Validasi Gagal";

            $result = (object) [
                'type' => 'errors',
                'status' => $status,
                'message' => $message,
            ];

            return $result;
        }

        $hashedPassword = Auth::user()->password;

        if(!Hash::check($request->old_password, $hashedPassword)) {
            $status = false;
            $message = "Password Lama Tidak Sesuai";

            $result = (object) [
                'type' => 'errors',
                'status' => $status,
                'message' => $message
            ];

            return $result;
        }

        $user = User::find(Auth::id());
        $user->password = bcrypt($request->new_password);
        $user->save();

        $status = true;
        $message = "Password Berhasil Di Update";

        $result = (object) [
            'type' => 'success',
            'status' => $status,
            'message' => $message,
            'user' => $user,
        ];

        return $result;
    }
}
