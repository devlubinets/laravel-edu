<?php

namespace App\Http\Controllers\Auth\Identity;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class IdentitySignInController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view("auth.identity.index");
    }

    /**
     * @return void
     */
    public function handleGoogleSignInRequest(): void
    {
        $a = 12;
    }
}
