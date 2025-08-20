<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardUserController extends Controller
{
    /**
     * Tampilkan dashboard untuk user biasa
     */
    public function index()
    {
        $user = Auth::user();

        return view('user.dashboard', compact('user'));
    }
}
