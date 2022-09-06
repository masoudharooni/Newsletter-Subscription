<?php

namespace App\Http\Controllers;

use App\Events\UserSubscribed;
use App\Http\Requests\NewsletterSubmitRequest;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function submit(NewsletterSubmitRequest $request)
    {
        $validData = $request->validated();
        event(new UserSubscribed($validData['email']));
        return back();
    }
}
