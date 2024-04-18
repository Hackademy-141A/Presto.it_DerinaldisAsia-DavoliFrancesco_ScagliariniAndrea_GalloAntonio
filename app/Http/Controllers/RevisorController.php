<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\BecomeRevisor;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    public $user;
    public function index()
    {
        $announcement_to_check = Announcement::where('is_accepted', null)->first();
        return view('revisor.index', compact('announcement_to_check'));
    }
    
    public function acceptAnnouncement(Announcement $announcement)
    {
        $announcement->setAccepted(true);
        return redirect()->back()->with('message', 'Complimenti hai accettato l\'annuncio');
    }
    public function rejectAnnouncement(Announcement $announcement)
    {
        $announcement->setAccepted(false);
        return redirect()->back()->with('message', 'Complimenti hai rifiutato l\'annuncio');
    }

    public function becomeRevisor(){
        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));
        
        return view('work.withus')->with('message','Complimenti, hai richiesto di diventare revisore');

        

    }
    public function makeRevisor(User $user){
        Artisan::call('app:make-user-revisor',["email"=>$user->email]);
        return redirect()->back()->with('message','Complimenti, sei diventato revisore');
    }

    public function contactUs(){
        return view('contactUs');
    }


    //logica che avviene quando scatta una rotta di tipo post che quindi deve ritornare un risorva get
    public function submit(Request $request){

        $name = $request->name;
        $email = $request->email;
        $body = $request->body;

       
        $userData = compact('name', 'email','body');
        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));
        
        return view('work.withus')->with('message','Complimenti, hai richiesto di diventare revisore');




        //Riportando alla vista homepage tramite l'helper di laravel che ci reindirizza ad una rotta di tipo get quindi ad un qualcosa di visionabile
        return redirect(route('home'))->with('message','Ti abbiamo mandato una mail, controlla la casella di posta elettronica');

    
}





}