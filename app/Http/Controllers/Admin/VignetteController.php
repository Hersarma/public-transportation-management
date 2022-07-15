<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin\Vehicle;
use App\Models\Admin\Vignette;
use Illuminate\Http\Request;

class VignetteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $vehicles = Vehicle::orderBy('vehicleManufacturer', 'asc')->simplePaginate('50');
        $vignettes = Vignette::with('vehicle')->orderBy('expirationDate', 'asc')->simplePaginate(10);
        return view('admin.vignette.index', compact('vignettes', 'vehicles'));
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
        //dd($request);
        $validate = request()->validateWithBag('create_vignette', [
            'vehicle_id' => 'required',
            'country' => 'required',
            'price' => 'required|numeric',
            'purchase_date' => 'required',
            'expirationDate' => 'required'
        ]);

        Vignette::create($validate);

        return redirect(route('vignettes.index'))->with('crudMessage', 'Vinjeta uspešno kreirana.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Vignette  $vignette
     * @return \Illuminate\Http\Response
     */
    public function show(Vignette $vignette)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Vignette  $vignette
     * @return \Illuminate\Http\Response
     */
    public function edit(Vignette $vignette)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\Vignette  $vignette
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vignette $vignette)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Vignette  $vignette
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vignette $vignette)
    {
        //
    }
}
