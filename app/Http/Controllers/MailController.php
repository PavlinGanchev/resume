<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\SendMailRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller {

    /**
     * Send feedback to a mail
     *
     * @param SendMailRequest $request
     *
     * @return Response
     */
    public function send(/*SendMailRequest $request*/){
        /*$data=$request->all();*/

        Mail::send('test', ['username' => 'Pavlin'] ,function($message){
            $message->from('some@emial.com', 'User');
            $message->to('pino84@abv.bg');
            $message->subject('great U send your 1st email');

        }



        );

            return redirect('login');
    }

}
