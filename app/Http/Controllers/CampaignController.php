<?php

namespace App\Http\Controllers;

use App\Campaign;
use App\Recipient;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    public function index() {
        return view('campaign');
    }
    public function show(){
        $c = Campaign::all();
        $r= Recipient::all();

        return view('allcampaign')->with('cam',$c)->with('rec',$r);
    }
    public function store(Request $req) {
        $campaign=new Campaign();
        $campaign->campaign_title=$req->title;
        $campaign->sender=$req->sender;
        $campaign->message_body=$req->message;
        $campaign->save();

        $recipient=new Recipient();
        $recipient->campaign_id=$campaign->id;

        $piece = explode(',',$req->number);
        foreach($piece as $substr){
            $recipient->recipient_number=$substr;
        }

        $recipient->save();

        return redirect()->route('campaign');

    }
    public function edit() {

    }
    public function delete(Request $req) {

    }
}
