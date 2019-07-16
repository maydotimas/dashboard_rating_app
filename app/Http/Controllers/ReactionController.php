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
        $week = date('Y-m-d', strtotime('-7 day', strtotime(date('Y-m-d'))));

        $weekly = $this->get_reactions(true, $week, date('Y-m-d'));
        $monthly = $this->get_reactions(true, date('Y-m-01'), date('Y-m-d'),'monthly');

        return view('dashboard.index')
            ->withData($daily)
            ->withWeek($week)
            ->withDataWeekly($weekly[0])
            ->withWeekly($weekly[1])
            ->withDataMonthly($monthly[0])
            ->withMonthly($monthly[1]);

    }

    public function get_reactions($is_between = false, $date_from = null, $date_to = null, $mode = 'weekly')
    {

        if (!$is_between) {
            $reactions = Reaction::where(DB::raw('date(created_at)'), date('Y-m-d'))
                ->select(DB::raw('count(*) as reaction_count'), 'reaction')
                ->groupBy('reaction')
                ->get();

            $data = [];
            $data['total'] = 0;
            $data['VG'] = 0;
            $data['G'] = 0;
            $data['O'] = 0;
            $data['P'] = 0;
            $data['VP'] = 0;
            foreach ($reactions as $reaction) {
                $data[$reaction->reaction] = $reaction->reaction_count;
                $data['total'] += $reaction->reaction_count;
            }
            return $data;

        } else {
            $reactions = Reaction::whereBetween(DB::raw('date(created_at)'), [$date_from, $date_to])
                ->select(DB::raw('count(*) as reaction_count'), 'reaction', DB::raw('date(created_at) as date_react'))
                ->groupBy('date_react', 'reaction')
                ->get();

            if ($mode == 'weekly') {
                $data = [];
                $react_date = [];
                foreach ($reactions as $reaction) {
                    $data['VG'][$reaction->date_react] = 0;
                    $data['G'][$reaction->date_react] = 0;
                    $data['O'][$reaction->date_react] = 0;
                    $data['P'][$reaction->date_react] = 0;
                    $data['VP'][$reaction->date_react] = 0;
                }

                foreach ($reactions as $reaction) {
                    $data[$reaction->reaction][$reaction->date_react] = $reaction->reaction_count;
                    $react_date[$reaction->date_react] = $reaction->date_react;
                }
            } else {
                $data = [];
                $data['VG'] = 0;
                $data['G'] = 0;
                $data['O'] = 0;
                $data['P'] = 0;
                $data['VP'] = 0;

                $react_date = [];

                foreach ($reactions as $reaction) {
                    $data[$reaction->reaction] += $reaction->reaction_count;
                }
            }

            return [$data, $react_date];


        }


    }
}
