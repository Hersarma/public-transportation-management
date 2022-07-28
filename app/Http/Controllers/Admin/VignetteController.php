<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin\Vehicle;
use App\Models\Admin\Vignette;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;

class VignetteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $vehicles = Vehicle::orderBy('vehicleManufacturer', 'asc')->simplePaginate(50);
        $vignettes = Vignette::with('vehicle')->orderBy('expiration_date', 'desc')->simplePaginate(10);
        return view('admin.vignettes.index', compact('vignettes', 'vehicles'));
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
            'expiration_date' => 'required',
            'receipt' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:5120'
        ]);
        $file = $request->file('receipt');
        $vignette = new Vignette;
        
        $vignette->vehicle_id = $request->vehicle_id;
        $vignette->country = $request->country;
        $vignette->price = $request->price;
        $vignette->purchase_date = $request->purchase_date;
        $vignette->expiration_date = $request->expiration_date;


        if($request->hasFile('receipt'))
            {
                
                $fileName = uniqid().'_'.$file->getClientOriginalName();
                Image::make($file->getRealPath())->resize('800', '800')->save(storage_path('app/public/vignette/'.$fileName));
                
                $vignette->receipt = $fileName;
            }
        $vignette->save();


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
        $vehicles = Vehicle::orderBy('vehicleManufacturer', 'asc')->simplePaginate('50');
        $vehicle = $vignette->vehicle()->first();
        return view('admin.vignettes.show', compact('vignette', 'vehicle', 'vehicles'));
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
            $validate = request()->validateWithBag('edit_vignette', [
            'vehicle_id' => 'required',
            'country' => 'required',
            'price' => 'required|numeric',
            'purchase_date' => 'required',
            'expiration_date' => 'required',
            'receipt' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:5120'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Vignette  $vignette
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vignette $vignette)
    {   
        $path = storage_path('/app/public/vignette/'. $vignette->receipt);
        File::delete($path);
        $vignette->delete();

         return redirect(route('vignettes.index'))->with('crudMessage', 'Vinjeta uspešno izbrisana.');
    }
}
