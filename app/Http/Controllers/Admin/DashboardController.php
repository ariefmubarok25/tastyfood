<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Gallery;
use App\Models\Contact;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_news' => News::count(),
            'total_galleries' => Gallery::count(),
            'total_contacts' => Contact::count(),
            'total_users' => User::count(),
            'unread_messages' => Contact::where('status', 'unread')->count(),
            'published_news' => News::where('status', 'published')->count(),
        ];

        // Latest activities
        $latestNews = News::latest()->take(5)->get();
        $latestMessages = Contact::latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'latestNews', 'latestMessages'));
    }
}
