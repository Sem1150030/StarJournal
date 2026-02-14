<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $journals = Journal::where('user_id', Auth::id())
            ->orderBy('date', 'desc')
            ->paginate(10);

        return view('dashboard.dashboard', compact('journals'));
    }
}
