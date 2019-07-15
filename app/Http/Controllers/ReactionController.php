<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApiStoreReactionRequest;
use App\Reaction;
use Illuminate\Http\Request;

class ReactionController extends Controller
{
    public function api_store_reaction(ApiStoreReactionRequest $request){

        $reaction = new Reaction();
        $reaction->mobile_id = $request->mobile_id;
        $reaction->lat = $request->lat;
        $reaction->long = $request->long;
        $reaction->reaction = $request->reaction;
        $reaction->save();

        return response()->json([
            'success'=>true,
            'message'=>'Reaction has been submitted',
            'data'=>$reaction
        ]);
    }
}
