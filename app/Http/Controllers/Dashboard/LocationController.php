<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\InquryDatatables;
use App\DataTables\Location232Datatables;
use App\DataTables\locationsDataTable;
use App\Http\Controllers\Controller;

use App\Http\Requests\LocationRequest;
use App\Mail\Mailbooking;
use App\Mail\mailinquery;
use App\Models\Inquiry;

use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(locationsDataTable $locationDatatables)
    {
        return $locationDatatables->render('dashboard.locations.index', [
            'title' => trans('site.locations'),
            'count' => $locationDatatables->count()
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('dashboard.locations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(LocationRequest $request)
    {
        $location = Location::create($request->all());




        session()->flash('success', __('site.added_successfully'));

        return redirect()->route('dashboard.locations.index');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $location=Location::find($id);

        return view('dashboard.locations.show',compact('location'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $location=Location::find($id);

        return view('dashboard.locations.edit',compact('location'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(LocationRequest $request, $id)
    {
        $location=Location::find($id);

        $location = $location->update($request->all());


        session()->flash('success', __('site.updated_successfully'));

        return redirect()->route('dashboard.locations.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $id;
        $type = Location::find($id);

        $type->delete();

        session()->flash('success', __('site.deleted_successfully'));

        return back();

    }


}
