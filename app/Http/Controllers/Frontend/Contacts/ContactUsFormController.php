<?php

namespace App\Http\Controllers\Frontend\Contacts;

use App\Models\Contact;

use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactUsFormController extends Controller
{
    // Create Contact Form
    public function createForm(Request $request) {
        return view('Frontend.contactus');
    }

    // Store Contact Form data
    public function ContactUsForm(Request $request) {

        // Form validation
        $this->validate($request, [
            'lastName'      => 'required',
            'firstName'     => 'required',
            'company'       => 'required',
            'email'         => 'required|email',
            //'phone'         => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'phone'         => 'required|min:10',
            'subject'       => 'required',
            'message'       => 'required'
        ]);

        $dataInput['lastname']  = $request->lastName;
        $dataInput['firstname'] = $request->firstName;
        $dataInput['company']   = $request->company;
        $dataInput['email']     = $request->email;
        $dataInput['phone']     = $request->phone;
        $dataInput['subject']   = $request->subject;
        $dataInput['message']   = $request->message;

        //  Store data in database
        Contact::create($dataInput);

        //  Send mail to admin
        Mail::send('frontend.mail', array(
            'lastname'      => $request->lastName,
            'firstname'     => $request->firstName,
            'company'       => $request->company,
            'email'         => $request->email,
            'phone'         => $request->phone,
            'subject'       => $request->subject,
            'user_query'    => $request->message,

        ), function($message) use ($request){

            $message->from($request->email);
            $message->to('contact@inforca-algerie.com', 'Contact INFORCA')->subject($request->subject);

        });

        return back()->with('success', 'Nous avons bien reçu votre message et vous remercions de nous avoir contacté.');
    }


}
