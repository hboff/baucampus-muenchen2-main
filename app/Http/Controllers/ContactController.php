<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
  
class ContactController extends Controller
{
    /**
     * Show the contact form.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('contactForm');
    }
  
    /**
     * Store contact form data and send an email.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:10|numeric',
            'subject' => 'required',
            'message' => 'required'
        ]);
  
        // Daten in der Datenbank speichern
        $contact = Contact::create($request->all());
  
        // Daten für die E-Mail vorbereiten
        $mailData = (object) [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ];
  
        // E-Mail senden
        Mail::to('kontakt@baucampus.de')->send(new ContactMail($mailData));
  
        // Weiterleitung mit Erfolgsmeldung
        return redirect()->back()->with(['success' => 'Thank you for contacting us. We will contact you shortly.']);
    }
}
