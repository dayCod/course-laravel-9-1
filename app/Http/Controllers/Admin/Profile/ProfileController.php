<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\Admin\Profiles\ProfileService;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    protected $profileService;

    public function __construct(ProfileService $profileServices)
    {
        $this->profileService = $profileServices;
    }

    public function index()
    {
        $result = $this->profileService->index();

        return view('admin.page.profiles.index', [
            'message' => $result->message,
            'user' => $result->data,
        ]);
    }

    public function edit($user)
    {
        //
    }
}
