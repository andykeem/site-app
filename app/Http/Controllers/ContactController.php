<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    const TO_EMAIL = 'hanjoogim@gmail.com'; // 'andy@GoRuleTech.com';

    public function index() {
        return view('contact');
    }

    public function post(Request $request) {
        // dd($request->all());
        if ($request->isNotFilled('name') || $request->isNotFilled('email')) {
            return redirect('contact')->with('error', 'Please fill all required field(s)');
        }
        $to = self::TO_EMAIL;
        $name = $request->input('name');
        $subj = 'Request from ' . $name;
        $email = $request->input('email');
        $format = "Name: %s \nEmail: %s \nMessage: %s";
        $msg = sprintf($format, $name, $email, $request->input('message'));
        $headers = array(
            'From' => $email,
            'Reply-To' => $email,
            'X-Mailer' => 'PHP/' . phpversion()
        );
        $success = mail($to, $subj, $msg, $headers);
        if (!$success) {
            echo 'Failed to send email!';
            var_dump(error_get_last());
            return redirect('contact')->with('error', 'Faield to send your request! Please try again.');
        }
        return redirect('contact')->with('success', 'Your request has sent!');
    }
}
