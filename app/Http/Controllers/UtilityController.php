<?php

namespace App\Http\Controllers;

use App\Models\Utility;
use Illuminate\Http\Request;
use Jenssegers\Date\Date;

class UtilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $utilities = Utility::all();
        return view('utilities.index', compact('utilities'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('utilities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes =  request()->validate([
            'report_date' => ['required'],
             'utility_category' => ['required', 'max:255'],
             'counter_new' => ['required', 'numeric'],
             'counter_old' => ['required', 'numeric'],
             'counter_old'=> 'lt:counter_new',
           
        ]);
        $attributes['counter_difference'] =  $attributes['counter_new'] - $attributes['counter_old'];
        
       (Utility::create($attributes));
        
         session()->flash('success', 'Kommunal hisobot yaratildi');
         session()->flash('type', 'KOmmunal hisobot');
         

        return redirect('utilities');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $utility = Utility::find($id);

        Date::setLocale('uz');
//dd($utility);
//$r = Date::now()->format('l j F Y H:i:s');
       $r = new Date(Utility::find($id)->report_date);
        $sana = ($r->format(' F Y '));
        return view('utilities.show', compact('utility', 'sana'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $utility = Utility::find($id);
    // /dd($utility->report_date);
        return view('utilities.edit', compact('utility'));
            
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Utility $utility)
    {
        $attributes =  request()->validate([
            'report_date' => ['required'],
             'utility_category' => ['required', 'max:255'],
             'counter_new' => ['required', 'numeric'],
             'counter_old' => ['required', 'numeric'],
             'counter_old'=> 'lt:counter_new',
           
        ]);
        $attributes['counter_difference'] =  $attributes['counter_new'] - $attributes['counter_old'];
        
        $utility->update($attributes);
        
        return redirect('utilities');
        
         session()->flash('success', 'Kommunal hisobot yaratildi');
         session()->flash('type', 'KOmmunal hisobot');
         

        return redirect('utilities');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Utility $utility)
    {
        $utility->delete();
        return redirect('utilities');
    }
}
