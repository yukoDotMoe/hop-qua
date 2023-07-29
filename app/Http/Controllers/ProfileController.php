<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use App\Models\UserBank;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Spatie\FlareClient\Api;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('account');
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function verifyAccountView()
    {
        return view('profile.verify');
    }

    public function verifyAccount(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'mat_truoc' => 'required|file|mimes:jpg,png,pdf|max:2048', // Adjust the allowed file types and size as needed
            'mat_sau' => 'required|file|mimes:jpg,png,pdf|max:2048', // Adjust the allowed file types and size as needed
        ]);
        $user = User::where('id', Auth::user()->id)->first();

        if (!empty($user->mat_truoc) && !empty($user->mat_sau)) return ApiController::response(502, [], 'Bạn đã xác thực tài khoản rồi.');

        if ($request->hasFile('mat_truoc') && $request->hasFile('mat_sau')) {
            $file1 = $request->file('mat_truoc');
            $file2 = $request->file('mat_sau');

            $file1Name = time() . '_' . Auth::user()->id . '_truoc';
            $file2Name = time() . '_' . Auth::user()->id . '_sau';

            $file1Path = $file1->store('uploads/users');
            $file2Path = $file2->store('uploads/users');

            $user->update([
                'mat_truoc' => $file1Path,
                'mat_sau' => $file2Path,
            ]);

            return ApiController::response(200, [
                'redirect_url' => route('account')
                ], 'Cập nhật thông tin thành công');
        } else {
            return ApiController::response(402, [], 'Phải có cả 2 mặt CMND/CCCD');
        }
    }

    public function bankingView()
    {
//        $user = User::where('id', Auth::user()->id)->first();
//        $bank = UserBank::where('user_id', Auth::user()->id)->first();
//        $bank->user()->associate($user)->save();
        return view('profile.banking');
    }

    public function bankUpdate(Request $request)
    {
        $request->validate([
            'bankId' => 'required|numeric|min:0',
            'bankAccountNumber' => 'required|string',
            'bankAccountHolder' => 'required|string',
        ]);
    }
}
