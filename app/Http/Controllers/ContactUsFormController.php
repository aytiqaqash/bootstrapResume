<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsFormController extends Controller
{
    // Contact formasına yönləndirir.
    public function createForm(Request $request) {
        return view('pages.contact');
    }

    public function ContactUsForm(Request $request) {
        // Formadan gələn məlumatları yoxlayırıq
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        // Contact formdan məlumatları VB əlavə edirik
        Contact::create($request->all());

        //  Send mail to admin
        Mail::send('components.mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_query' => $request->get('message'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('aytiqaqash@gmail.com', 'Admin')->subject("Saytdan Müraciət");
        });

        // Geri cavab mesajı qaytarırıq.
        return back()->with('success', 'Mesajınızı aldıq. Tez bir zamanda baxılacaq. Müraciətiniz üçün təşəkkür edirik.');
    }
}
