<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\Service;
use App\Models\Message;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'partners' => Partner::count(),
            'services' => Service::count(),
            'messages' => Message::count(),
            'recent_activities' => Message::latest()->take(5)->get(),
            'unread_messages' => Message::where('is_read', false)->count(),
        ];

        $latest_messages = Message::latest()->take(5)->get();
        $latest_partners = Partner::latest()->take(5)->get();
        $latest_services = Service::latest()->take(5)->get();
        $recent_activities = Message::latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'latest_messages', 'latest_partners', 'latest_services', 'recent_activities'));
    }
}
