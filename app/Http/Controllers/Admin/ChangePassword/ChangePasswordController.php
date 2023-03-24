<?php

namespace App\Http\Controllers\Admin\ChangePassword;

use App\Http\Controllers\Controller;
use App\Services\Admin\ChangePassword\ChangePasswordService;
use Illuminate\Http\Request;

class ChangePasswordController extends Controller
{
    protected $changePasswordService;

    public function __construct(ChangePasswordService $changePasswordServices)
    {
        $this->changePasswordService = $changePasswordServices;
    }

    public function index()
    {
        return view('admin.page.change-password.index');
    }

    public function update(Request $request)
    {
        $result = $this->changePasswordService->changePassword($request);

        return redirect()->back()->with($result->type, $result->message);
    }
}
