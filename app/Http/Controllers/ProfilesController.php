<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App;
use App\User;
//use Illuminate\Support\Facades\App;
use App\Profile;
use App\Http\Requests\ProfileRequest;
use Symfony\Component\HttpFoundation\File\UploadedFile;


class ProfilesController extends Controller
{
    //
    public function index()
    {
        return 'Welcom to my Website';
    }

    public function postCreate(Requests\ProfileRequest $request)
    {
        //persist the profile
        //$profile = Profile::create($request->all());
         App\Profile::create($request->all());

        return redirect()->back();
    }
}
