<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ModalWRequest;
use App\Models\ModalW;
use App\Notifications\TelegramModal;
use Illuminate\Support\Facades\Notification;

class ModalWController extends Controller {
    public function submit(ModalWRequest $req){
        $modalW = new ModalW();
        $modalW->firstName      = $req->input('firstName');
        $modalW->secoundName    = $req->input('secoundName');
        $modalW->email          = $req->input('email');
        $modalW->text           = $req->input('text');
        $modalW->workType       = $req->input('workType');
        $modalW->matType        = $req->input('matType');
        $modalW->height         = $req->input('height');
        $modalW->length         = $req->input('length');
        $modalW->width          = $req->input('width');
        $modalW->fileName       = $req->input('fileName');
        $modalW->save();

        $file = $req->file('fileName');
        $path = $file ->store('uploads', 'public');
        Notification::send($req, new TelegramModal($req));
        return redirect()->route('home-page');
    }
}
