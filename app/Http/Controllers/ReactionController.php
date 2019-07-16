<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApiStoreReactionRequest;
use App\Reaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class ReactionController extends Controller
{
    public function api_store_reaction(ApiStoreReactionRequest $request)
    {
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
            'success' => true,
            'message' => 'Reaction has been submitted',
            'data' => $reaction
        ]);
    }

    public function show_dashboard()
    {

        //daily reactions
        $daily = $this->get_reactions();

        // weekly reactions
        $date = date('Y-m-d');
        $newdate = strtotime('-7 day', strtotime($date));
        $newdate = date('Y-m-d', $newdate);
        $week = $newdate;

        $weekly = $this->get_reactions(true,$newdate,date('Y-m-d'));
        $monthly = $this->get_reactions(true,date('Y-m-01'),date('Y-m-d'));

        return view('dashboard.index')
            ->withData($daily)
            ->withWeek($week)
            ->withDataWeekly($weekly)
            ->withDataMonthly($monthly);

    }

    public function get_reactions($is_between = false, $date_from = null, $date_to = null)
    {

        if (!$is_between) {
            $reactions = Reaction::where(DB::raw('date(created_at)'), date('Y-m-d'))
                ->select(DB::raw('count(*) as reaction_count'), 'reaction')
                ->groupBy('reaction')
                ->get();

            $data = [];
            $data['total'] = 0;
            foreach ($reactions as $reaction) {
                $data[$reaction->reaction] = $reaction->reaction_count;
                $data['total'] += $reaction->reaction_count;
            }

        } else {
            $reactions = Reaction::whereBetween(DB::raw('date(created_at)'), [$date_from, $date_to])
                ->select(DB::raw('count(*) as reaction_count'), 'reaction', DB::raw('date(created_at) as date_react'))
                ->groupBy('date_react', 'reaction')
                ->get();


            $data = [];
            $data['total'] = 0;
            foreach ($reactions as $reaction) {
                $data[$reaction->date_react][$reaction->reaction] = $reaction->reaction_count;
                $data['total'] += $reaction->reaction_count;
            }
        }

        return $data;

    }
}
