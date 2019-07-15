<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApiStoreReactionRequest;
use App\Reaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class ReactionController extends Controller
{
    public function api_store_reaction(ApiStoreReactionRequest $request){

        $data = [
            'event' => 'UserReacted',
            'data' => [
                'username' => 'Jeff way'
            ]
        ];

        Redis::publish('test-channel', json_encode($data));

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
