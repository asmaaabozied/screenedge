<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\CountryDatatables;
use App\Http\Controllers\Controller;

use Hamcrest\Core\Set;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Laraeast\LaravelSettings\Facades\Settings;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('dashboard.settings.index');

    }


    public function updateAll(Request $request){

        foreach (
            $request->except(
                array_merge(
                    ['_token', '_method']

                )
            )
            as $key => $value
        ) {
            Settings::set($key, $value);
        }


        session()->flash('success', __('site.updated_successfully'));

        return back();

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */


}
