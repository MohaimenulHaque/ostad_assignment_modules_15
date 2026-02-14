<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Contact_us;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    //
    public function contact()
    {
        return view('contact');
    }

    public function contact_us(Request $request)
    {
       
        // Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required|string'
        ]);

        // dd($request->all());

         // Write data to Laravel log file
        Log::info('Contact Form Submitted:', $request->all());

        // Store success message in Session
        session()->flash('success', 'Form submitted successfully!');

        // Redirect to confirmation page with submitted data
        return redirect()->route('contact.confirmation')->with('formData', $request->all());
    }


    public function confirmation()
    {
        return view('confirmation');
    }
}
