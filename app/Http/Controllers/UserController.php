<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\User;
use App\Http\Models\Category;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($slug)
    {
        try {
            $follow = false;
            $user = User::where('user_slug', $slug)->firstOrFail();
            if (Auth::check()) {
                $isFollowed = $user->followed()->where('follower_id', Auth::id())->exists();
                if ($isFollowed) {
                    $follow = true;
                }
            } else {
                $follow = false;
            }

            return view('user.pages.userview')->with([
                'user' => $user,
                'follow' => $follow,
            ]);
        } catch (ModelNotFoundException $e) {
            response()->view('errors.404_user_not_found', [], 404);
        }
    }

    public function follow($id)
    {
        $user = User::find($id);
        $user->followed()->attach(Auth::id());

        return redirect()->route('user.detail', $user->user_slug);
    }

    public function unfollow($id)
    {
        $user = User::find($id);
        $user->followed()->detach(Auth::id());

        return redirect()->route('user.detail', $user->user_slug);
    }

}
