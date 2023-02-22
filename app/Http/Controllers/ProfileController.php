<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Services\User\UserService;
use App\Http\Requests\UserProfileRequest;
use App\Http\Requests\ContactProfileRequest;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public $user;

    public function __construct(UserService $user)
    {
        $this->user = $user;
    }

    public function edit(): View
    {
        return view('dashboard.profile.profile', [
            'user' => $this->user->getById(auth()->user()->id),
        ]);
    }

    /**
     * Update the user's profile.
     */

    public function update(UserProfileRequest $request)
    {
        $data = $this->user->update(auth()->user()->id, $request->validated());
        return response()->json([
            'status' => ($data['status']) ? 'success' : 'error',
            'message' => $data['message'],
        ], ($data['status']) ? 200 : 400);
    }

    public function contactUpdate(ContactProfileRequest $request)
    {
        $data = $this->user->updateContact(auth()->user()->id, $request->validated());
        return response()->json([
            'status' => ($data['status']) ? 'success' : 'error',
            'message' => $data['message'],
        ], ($data['status']) ? 200 : 400);
    }
}
