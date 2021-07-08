<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\ServiceDatatables;
use App\DataTables\SliderDatatables;
use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use Intervention\Image\Facades\Image;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(SliderDatatables $datatables)
    {


        return $datatables->render('dashboard.sliders.index', [
            'title' => trans('site.sliders'),
            'count' => $datatables->count()
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('dashboard.sliders.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderRequest $request)
    {


        $slider = Slider::create($request->except('media'));

        $slider['name_en'] = $request['title:en'];
        $slider['name_ar'] = $request['title:ar'];
        $slider->save();

        $slider->addAllMediaFromTokens();


        session()->flash('success', __('site.added_successfully'));

        return redirect()->route('dashboard.sliders.index');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $slider = Slider::find($id);

        return view('dashboard.sliders.show', compact('slider'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::find($id);


        return view('dashboard.sliders.edit', compact('slider'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(SliderRequest $request, $id)
    {
        $slider = Slider::find($id);


        $slider->update($request->except('media'));

        $slider['name_en'] = $request['title:en'];
        $slider['name_ar'] = $request['title:ar'];
        $slider->save();
        $slider->addAllMediaFromTokens();


        session()->flash('success', __('site.updated_successfully'));

        return redirect()->route('dashboard.sliders.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Slider::find($id);
        $event->delete();
        session()->flash('success', __('site.deleted_successfully'));

        return back();
    }


}
