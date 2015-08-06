<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\SendMailRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;


class MailController extends Controller {

    /**
     * @var string
     */
    protected $redirectTo= '/';

    /**
     * Send feedback to a mail
     *
     * @param SendMailRequest $request
     *
     * @return Response
     */
    public function send(SendMailRequest $request){
        $data=$request->only('subject');
        $data['messages']= explode("\n", $request->get('message'));
        $data['name']=Auth::user()->name;
        $data['email']= Auth::user()->email;

        Mail::send('emails.data',$data ,function($message) use ($data) {

            $message->from(Auth::user()->email,  Auth::user()->name);
            $message->subject( $data['subject']);
            $message->to('pino84@abv.bg');
            $message->replyTo($data['email']);

            }
        );

            session()->flash('flash_message', 'Thank You for sending a feedback');

            return back();

    }

}
