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
    public function store(Request $req) {
        $campaign=new Campaign();
        $campaign->campaign_title=$req->title;
        $campaign->message_body=$req->sender;
        $campaign->message=$req->message;
        $campaign->save();

        $recipient=new Recipient();

        $recipient->recipient_number=$req->number;
        $recipient->save();

        return redirect()->route('campaign');

    }
    public function edit(Request $req) {

    }
    public function update(Request $req) {

    }
}
