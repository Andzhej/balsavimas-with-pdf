<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vote;
use App\Address;
use Alert;
use PDF;

class VoteController extends Controller
{
    public function index() {

        
        $addresses = Address::get()->pluck('address', 'address')->toArray();

        $data = [
            'addresses' => $addresses
        ];
        
        return view('pages.index')->with($data);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'address' => 'required|string',
            'house_nr' => 'required',
            'owner_name' => 'required|string|max:255|regex:/^[a-žA-Ž_ ]*$/',
        ]);

        $check_for_address = Vote::where('address', $request->address)->where('flat_nr', $request->house_nr)->first();

        if(count($check_for_address) > 0) {
            Alert::warning('Informuojame, kad šiam objektui balsavimo biuletenis jau yra sugeneruotas')->persistent("Supratau");
            return redirect('/');
        }
        
        $votes = new Vote;
        $votes->vote_type  = $request->vote_type;
        $votes->address  = $request->address;
        $votes->house_nr  = $request->house_nr;
        $votes->unique_code  = $request->unique_code;
        $votes->owner_name  = $request->owner_name;
        $votes->question  = $request->question;
        $votes->save();

        $current_vote = Vote::find($votes->id);

        $pdf = PDF::loadView('pdf.vote', $current_vote);
        return  $pdf->stream();
    }
}
