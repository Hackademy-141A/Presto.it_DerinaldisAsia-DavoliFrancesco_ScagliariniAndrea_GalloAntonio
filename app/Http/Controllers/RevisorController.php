<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function index()
    {
        $annoucement_to_check = Announcement::where('is_accepted', null)->first();
        return view('revisor.index', compact('announcement_to-check'));
    }
    public function acceptAnnouncement(Announcement $announcement)
    {
        $announcement->setAccepted(true);
        return redirect()->back()->with('message', 'Complimenti hai accettato l\'annuncio');
    }
    
}
