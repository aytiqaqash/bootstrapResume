<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

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

        // Geri cavab mesajı qaytarırıq.
        return back()->with('success', 'Mesajınızı aldıq. Tez bir zamanda baxılacaq. Müraciətiniz üçün təşəkkür edirik.');
    }
}
