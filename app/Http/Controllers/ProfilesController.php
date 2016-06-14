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
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $email_to = "pbertolami@aol.com";
        $email_subject = "Paint Job Important";
        $email_message = "Form details below.\n\n";
        $email_message .= "First Name: ".($first_name)."\n";
        $email_message .= "Last Name: ".($last_name)."\n";
        $email_message .= "Email: ".("$email")."\n";
        $email_message .= "Phone: ".("$phone")."\n";
        mail($email_to,$email_subject,$email_message);

        return redirect()->back();
    }
}
