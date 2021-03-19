<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\ContactModel;
use Illuminate\Http\Request;
use App\Notifications\Telegram;
use Illuminate\Support\Facades\Notification;
use Mockery\Matcher\Not;

class ContactController extends Controller
{
    public function submit(ContactRequest $req) {
        Notification::send($req, new Telegram($req));
        //Notification::route('telegram', '708121661')->notify(new Telegram($req));
        return redirect()->route('home-page');
    }
}
