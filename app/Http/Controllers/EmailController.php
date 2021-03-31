<?php
namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\Email;
use App\Http\Requests\EmailRequest;
use App\Repositories\EmailRepository;


class EmailController extends Controller
{
    //

    public function getForm()
	{
		return view('email');
	}

    public function postForm(Request $request,Email $emailModel){

    
		$emailModel->email = $request->input('email'); // affecter la valeur issue du formulaire
		$emailModel->save(); // save dans base de donnes 
        return view('email_ok');

    }

}
