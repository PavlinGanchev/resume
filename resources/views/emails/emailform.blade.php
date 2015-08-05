<h3>Leave me feedback</h3>
<p>To develop a project, it is always helpful to get a feedback. So, do not hesitate to contact me!</p>
{!! Form::open(['action'=> 'MailController@send']) !!}
   {{-- <div class="row uniform">
        <div class="6u 12u(xsmall)"><input type="text" name="name" id="name" placeholder="Name" /></div>
        <div class="6u 12u(xsmall)"><input type="email" name="email" id="email" placeholder="e-mail" /></div>
    </div>--}}
    <div class="row uniform">
        <div class="12u"><input type="text" name="subject" id="subject" placeholder="Subject" /></div>
    </div>
    <div class="row uniform">
        <div class="12u"><textarea name="message" id="message" placeholder="Message" rows="6"></textarea></div>
    </div>
    <div class="row uniform">
        <div class="12u">
            <ul class="actions">
                <li><input type="submit" class="special" value="Send Message" /></li>
                <li><input type="reset" value="Reset Form" /></li>
            </ul>
        </div>
    </div>
{!! Form::close() !!}
