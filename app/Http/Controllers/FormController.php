<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Fertilizer;
use App\Models\User;
use App\Models\Month;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('dashboard.all-fertilizers.index',[
            'title' => 'All Fertilizers',
            'fertilizers' => Fertilizer::latest()->filter(request(['search']))
                                ->paginate(6)->withQueryString()
        ]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.form.index', [
            'categories' => Category::all(),
            'months' => Month::all(),
            'title' => 'Form'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'fertilizer_name' => 'required|max:255',
            'category_id' => 'required',
            'month_id' => 'required',
            'quantity' => 'required',
            'price' => 'required|max:255'
        ]);

        $validateData['user_id'] = auth()->user()->id;

        Fertilizer::create($validateData);

        session()->flash('success', 'Seed has been added');
        return redirect()->back();
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
