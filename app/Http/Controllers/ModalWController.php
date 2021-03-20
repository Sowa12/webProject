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
        $modalW->workType       = $req->input('workType');
        $modalW->matType        = $req->input('matType');
        $modalW->height         = $req->input('height');
        $modalW->length         = $req->input('length');
        $modalW->width          = $req->input('width');
        $modalW->fileName       = $req->input('fileName');
        foreach ($req->file() as $file) {
            foreach ($file as $f) {
                $f->move(storage_path('C:\\'), time().'_'.$f->getClientOriginalName());
            }
        }
        $modalW->save();

        return redirect()->route('home-page');
    }
}
