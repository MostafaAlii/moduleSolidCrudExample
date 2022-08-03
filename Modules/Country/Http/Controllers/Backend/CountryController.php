<?php

namespace Country\Http\Controllers\Backend;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Country\DataTables\CountryDatatable;
use Country\Entities\Country;
use Illuminate\Support\Facades\DB;
use Modules\City\Entities\City;
use Modules\State\Entities\State;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(CountryDatatable $countryDatatable)
    {
        return $countryDatatable->render('country::index', ['PageTitle' => 'Country List']);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return 'Welcome to Country Create Module';
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('country::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('country::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        DB::beginTransaction();

        try {

            Country::findOrfail($request->id)->update([
                'status' => $request->status,
            ]);

            State::whereIn('country_id', [$request->id])->update([
                'status' => $request->status,
            ]);


            City::select('cities.*')
                ->join('states', 'cities.state_id', '=', 'states.id')
                ->where('states.status',!$request->status)
                ->update(['cities.status' => $request->status]);


            DB::commit();
            return redirect()->back()->with('massage','Success Change Status');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->withErrors(['error' => 'Something went wrong']);
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
