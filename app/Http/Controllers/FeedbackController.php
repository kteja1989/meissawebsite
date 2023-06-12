<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Mail;

use App\Mail\ContactMailer;
use App\Mail\FeedbackMailer;

use App\Models\Feedback;
use App\Http\Requests\FeedbackRequest;

class FeedbackController extends Controller
{
    //
    public function takeMessage(FeedbackRequest $request)
    {
        $input = $request->only(['name', 'email', 'nterms', 'organisation','message','botcheck']);
        //dd($input);

        if( $input['nterms'] == 1)
        {
            if( $input['botcheck'] == null)
            {
                //////////////////////////////////
                //first save the contact in contacts table
                $newFeedmsg = new Feedback();
                $newFeedmsg->name = $input['name'];
                $newFeedmsg->email = $input['email'];
                $newFeedmsg->message = $input['message'];
                $newFeedmsg->organisation = $input['organisation'];
                $newFeedmsg->status = "received";
                $newFeedmsg->save();

                // everything set and ready to go.
                try {
                    //now compose and send mail to sender with brochure and login credentials
                    Mail::to($input['email'])->queue(new FeedbackMailer($newFeedmsg));
                    //Log::channel('contactmail')->info('Thank you, feedback received', ['name' => $newFeedmsg->name, 'email' => $newFeedmsg->email ]);
                    $msg = "Thank you, message sent successfully";
                } catch (Exception $e) {
                    //echo 'Caught exception: '. $e->getMessage() ."\n";
                    //Log::channel('contactmail')->info('Feedback ack sending failed', ['exception' => $e->getMessage() ]);
                    $msg = "Feedback ack could not be sent, try again";
                }

                $toMails = ["mvksastry@gmail.com", "tejak007@gmail.com", "support-meissa@meissa.co.in"];
                // everything set and ready to go.
                foreach($toMails as $row)
                {
                    try {
                        //compose mail to team meissa-best
                        Mail::to($row)->queue(new FeedbackMailer($newFeedmsg));
                        //Log::channel('contactmail')->info('New Feedback Received', ['name' => $newFeedmsg->name, 'email' => $newFeedmsg->email ]);
                    } catch (Exception $e) {
                        //echo 'Caught exception: '. $e->getMessage() ."\n";
                        //Log::channel('contactmail')->info('New Feedback intimation mail sending failed', ['exception' => $e->getMessage() ]);
                    }
                }
                return back()->with('success', $msg);
            }

            $msg = "Must Delete Botcheck text, sorry try again";
            return back()->with('failed', $msg);
        }

    }
}
