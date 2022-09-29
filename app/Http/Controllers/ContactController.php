<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewReport;


class ContactController extends Controller
{
    public function show() {
        return view('contact');
    }

    public function store(ContactRequest $request)
    {
        $mail = new NewReport(
            $request->get('name'),
            $request->get('email'),
            $request->get('phone'),
            $request->get('text'),
        );

        Mail::to('info@dev.com')->send($mail);

        session()->flash('success', trans('messages.report.success'));

        return redirect()
            ->back();
    }

}
