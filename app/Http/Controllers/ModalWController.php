<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ModalWRequest;
use App\Models\ModalW;

class ModalWController extends Controller {
    public function submit(ModalWRequest $req){
        $modalW = new ModalW();
        $modalW->firstName      = $req->input('firstName');
        $modalW->secoundName    = $req->input('secoundName');
        $modalW->email          = $req->input('email');
        $modalW->text           = $req->input('text');

        $modalW->save();

        return redirect()->route('home-page');
    }

}
