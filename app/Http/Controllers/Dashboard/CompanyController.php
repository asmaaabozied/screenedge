<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\CompanyDataTable;
use App\DataTables\MainCompanyDataTable;
use App\DataTables\ServiceDatatables;
use App\DataTables\SliderDatatables;
use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyRequest;
use App\Http\Requests\SliderRequest;
use App\Models\Company;
use App\Models\Slider;
use Intervention\Image\Facades\Image;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CompanyDataTable $companyDataTable)
    {

        return $companyDataTable->render('dashboard.companies.index', [
            'title' => trans('site.companies'),
            'count' => $companyDataTable->count()
        ]);

    }

    public function Maincompany(MainCompanyDataTable $companyDataTables)
    {
        return $companyDataTables->render('dashboard.companies.index', [
            'title' => trans('site.Maincompany'),
            'count' => 1
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('dashboard.companies.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyRequest $request)
    {

        $company = Company::create($request->except('media'));

        $company['name_en'] = $request['name:en'];
        $company['name_ar'] = $request['name:ar'];
        $company->save();

        $company->addAllMediaFromTokens();


        session()->flash('success', __('site.added_successfully'));

        return redirect()->route('dashboard.companies.index');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Company::find($id);

        return view('dashboard.companies.show', compact('company'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::find($id);


        return view('dashboard.companies.edit', compact('company'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyRequest $request, $id)
    {
        $company = Company::find($id);


        $company->update($request->except('media'));
        $company['name_en'] = $request['name:en'];
        $company['name_ar'] = $request['name:ar'];
        $company->save();

        $company->addAllMediaFromTokens();


        session()->flash('success', __('site.updated_successfully'));

        return redirect()->route('dashboard.companies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Company::find($id);

        $company->delete();
        session()->flash('success', __('site.deleted_successfully'));

        return back();
    }


}
