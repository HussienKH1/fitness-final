<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactEmail;
use App\Models\Trainer;

class ContactController extends Controller
{
    function index($trainerId){
        $trainer = Trainer::find($trainerId);

        
        $trainerEmail = $trainer ? $trainer->email : null;
        return view('contact', compact('trainerEmail'));
    }
    
    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'trainer_email' => 'required|email',
        ]);

        $data = $request->all();

        Mail::to($data['trainer_email'])->send(new ContactEmail($data));
    }
}
