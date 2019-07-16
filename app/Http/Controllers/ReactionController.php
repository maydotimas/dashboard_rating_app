<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApiStoreReactionRequest;
use App\Reaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class ReactionController extends Controller
{
    public function api_store_reaction(ApiStoreReactionRequest $request){
        /* send data */
        $data = [
            'event' => 'UserReacted',
            'data' => $request->all()
        ];

        Redis::publish('test-channel', json_encode($data));
        /* end send data to redis */

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

    public function show_dashboard(){

        //daily reactions
        $reactions = Reaction::where(DB::raw('date(created_at)'),date('Y-m-d'))
            ->select(DB::raw('count(*) as reaction_count'),'reaction')
            ->groupBy('reaction')
            ->get();

        $data = [];
        $data['total'] = 0;
        foreach($reactions as $reaction){
            $data[$reaction->reaction] = $reaction->reaction_count;
            $data['total'] += $reaction->reaction_count;
        }

        // weekly reactions
        $date = date('Y-m-d');
        $newdate = strtotime ( '-7 day' , strtotime ( $date ) ) ;
        $newdate = date ( 'Y-m-d' , $newdate );
        $week = $newdate;

        $reactions_weekly = Reaction::whereBetween(DB::raw('date(created_at)'),[$newdate,date('Y-m-d')])
            ->select(DB::raw('count(*) as reaction_count'),'reaction')
            ->groupBy('reaction')
            ->get();

        $data_weekly = [];
        $data_weekly['total'] = 0;
        foreach($reactions_weekly as $reaction){
            $data_weekly[$reaction->reaction] = $reaction->reaction_count;
            $data_weekly['total'] += $reaction->reaction_count;
        }

        //monthly reactions
        $reactions_monthly = Reaction::whereBetween(DB::raw('date(created_at)'),[date('Y-m-01'),date('Y-m-d')])
            ->select(DB::raw('count(*) as reaction_count'),'reaction')
            ->groupBy('reaction')
            ->get();

        $data_monthly = [];
        $data_monthly['total'] = 0;
        foreach($reactions_monthly as $reaction){
            $data_monthly[$reaction->reaction] = $reaction->reaction_count;
            $data_monthly['total'] += $reaction->reaction_count;
        }

        return view('dashboard.index')
            ->withData($data)
            ->withWeek($week)
            ->withDataWeekly($data_weekly)
            ->withDataMonthly($data_monthly);

    }
}
