<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Fertilizer;
use App\Models\Month;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userCount = User::select(DB::raw('COUNT(name)'))->get();
        $priceAvg = Fertilizer::select(DB::raw('fertilizer_name'), DB::raw('AVG(price) as price'))
            ->groupBy('fertilizer_name')
            ->get();
        $categorySum = DB::table('fertilizers')
            ->join('categories', 'categories.id', '=', 'fertilizers.category_id')
            ->select('categories.name as cname', DB::raw('SUM(fertilizers.quantity) as sum'))
            ->groupBy('categories.name')
            ->get();
        $months = Month::select('name')
            ->orderBy('id', 'ASC')
            ->get();
        $monthQuantity1 = DB::table('fertilizers')
            ->join('months', 'months.id', '=', 'fertilizers.month_id')
            ->select('months.name as mname', DB::raw('SUM(fertilizers.quantity) as fquantity'))
            ->where('fertilizers.category_id', '=', 1)
            ->groupBy('months.name')
            ->orderBy('fertilizers.month_id', 'ASC')
            ->get();
        $monthQuantity2 = DB::table('fertilizers')
            ->join('months', 'months.id', '=', 'fertilizers.month_id')
            ->select('months.name as mname', DB::raw('SUM(fertilizers.quantity) as fquantity'))
            ->where('fertilizers.category_id', '=', 2)
            ->groupBy('months.name')
            ->orderBy('fertilizers.month_id', 'ASC')
            ->get();

        $dataBar = [];
        $dataPie = [];
        $labelLine = [];
        $dataLine1 = [];
        $dataLine2 = [];

        foreach($priceAvg as $price){
            $dataBar['labelBar'][] = $price->fertilizer_name;
            $dataBar['dataBar'][] = (int) $price->price;
        }

        foreach($categorySum as $category){
            $dataPie['labelPie'][] = $category->cname;
            $dataPie['dataPie'][] = (int) $category->sum;
        }

        foreach($months as $month){
            $labelLine['labelLine'][] = $month->name;
        }

        foreach($monthQuantity1 as $mq1){
            $dataLine1['dataLine'][] = (int) $mq1->fquantity;
        }

        foreach($monthQuantity2 as $mq2){
            $dataLine2['dataLine'][] = (int) $mq2->fquantity;
        }

        $userCount = json_encode($userCount);
        $dataBar['chart_data'] = json_encode($dataBar);
        $dataPie['chart_data'] = json_encode($dataPie);
        $labelLine['chart_data'] = json_encode($labelLine);
        $dataLine1['chart_data'] = json_encode($dataLine1);
        $dataLine2['chart_data'] = json_encode($dataLine2);

        return view('dashboard.index', [
            'title' => 'Dashboard',
            'userCount' => $userCount,
            'dataBar' => $dataBar,
            'dataPie' => $dataPie,
            'labelLine' => $labelLine,
            'dataLine1' => $dataLine1,
            'dataLine2' => $dataLine2
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
