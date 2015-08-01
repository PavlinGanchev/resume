<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\SendMailRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;


class MailController extends Controller {

    protected $redirectTo= '/';

    /**
     * Send feedback to a mail
     *
     * @param SendMailRequest $request
     *
     * @return Response
     */
    public function send(SendMailRequest $request){
        $data=$request->all();

        Mail::send('emails.data',['msg' => $data['message'] ] ,function($message) use ($data) {

            $message->from(Auth::user()->email,  Auth::user()->name);
            $message->subject( $data['subject']);
            $message->to('pino84@abv.bg');

            }
        );

        session()->flash('flash_message', 'Thank You for sending a feedback');

            return redirect('/');
    }

}
