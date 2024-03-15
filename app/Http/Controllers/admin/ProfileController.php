<?php

namespace App\Http\Controllers\admin;

use App\Actions\Fortify\UpdateUserPassword;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //

        return request()->user()->only(['name', 'email', 'role', 'avatar']);
    }

  
    /**
     * Update the specified resource in storage.
     * , string $id
     */
    public function update(Request $request)
{
    $validated = $request->validate([

        'name' => ['required'],
        'email' => ['required', 'email', Rule::unique('users')->ignore($request->user()->id)],
    ]);

    $request->user()->update($validated);
    return response()->json([
        'success' => true
    ]);
}

    public function uploadImages(Request $request) {

        if($request->hasFile('profile_picture'))
        {
            $previousPath = $request->user()->getRawOriginal('avatar');

            $link = Storage::put('/photos', $request->file('profile_picture'));

            $request->user()->update(['avatar' => $link]);
            
            Storage::delete($previousPath);
            return response()->json(['message' => 'Profile Picture upload Successfuly']);
        }

    }

    public function changePassword(Request $request, UpdateUserPassword $updater) {



        $updater->update(
            auth()->user(),
            [
                'current_password' => $request->currentPassword,
                'password' => $request->password,
                'password_confirmation' => $request->passwordConfirmation,
            ]
            );

            return response()->json(['message' => 'Password change Successfuly']);
    }
    
}
