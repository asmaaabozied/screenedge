<?php

namespace App\DataTables;

use App\Helpers\DTHelper;
use App\Models\Page;
use App\Models\PageDatatable;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class PageDatatables extends DataTable
{
//$type->getMediaResource('avatars')
    private $crudName = 'pages';

    private function getRoutes()
    {
        return [
            'update' => "dashboard.$this->crudName.edit",
            'show' => "dashboard.$this->crudName.show",
            'delete' => "dashboard.$this->crudName.destroy",
            'block' => "dashboard.$this->crudName.block",
        ];
    }

    private function getPermissions()
    {
        return [
            'update' => 'update_' . $this->crudName,
            'delete' => 'delete_' . $this->crudName,
            'create' => 'create_' . $this->crudName
        ];
    }

    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->editColumn('created_at', function ($model) {
                return (!empty($model->created_at)) ? $model->created_at->diffForHumans() : '';
            })
            ->editColumn('title_en', function ($model) {
                return $model->title;
            })
            ->editColumn('title_ar', function ($model) {
                return $model->title;
            })
            ->editColumn('active', function ($status) {

                if ($status->active == 1) {


                    return "active";
                } elseif($status->active == 0) {

                    return "block";
                }

            })
//            ->addColumn('image', function ($model) {
//
//
////                return "<img alt='' src='{{ $model->>getFirstMediaUrl() }}' width='100' class='img-rounded'/>";
//            })
            ->addColumn('action', function ($model) {
                $actions = '';
                $actions .= DTHelper::dtShowButton(route($this->getRoutes()['show'], $model->id), trans('site.show'), $this->getPermissions()['update']);
                $actions .= DTHelper::dtDeleteButton(route($this->getRoutes()['delete'], $model->id), trans('site.delete'), $this->getPermissions()['delete']);

                $actions .= DTHelper::dtEditButton(route($this->getRoutes()['update'], $model->id), trans('site.edit'), $this->getPermissions()['update']);

                return $actions;
            });

    }


    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\PageDatatable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Page $model)
    {
        if ($this->request()->has('active')) {
            if ($this->request()->get('active') == 4) {
                return $model->newQuery();
            }
            return $model->newQuery()->where('active', $this->request()->get('active'));
        }
        return $model->newQuery();
    }

    public function count()
    {
        return Page::all()->count();
    }


    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        $currentUrl = url()->full();
        if ($this->request()->has('active')) {
            $currentUrl = $currentUrl . "?active=" . $this->request()->get('active');
        }
        $buttons = [
            Button::make('create'),
            Button::make('csv'),
            Button::make('excel'),
            Button::make('export'),

            Button::make('print'),
            Button::make('reset'),
            Button::make('reload')];

        return $this->builder()
            ->setTableId($this->crudName . '_datatables-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->ajax($currentUrl)
            ->orderBy(1)
            ->parameters([
                'drawCallback' => 'function(e) { drawTableCallback(e) }',
            ])
            ->buttons(
                $buttons
            );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        if (app()->getLocale() == 'en') {
            return [

                Column::make('id'),
                Column::make('title_en')->title(trans('site.titles')),
                Column::make('created_at')->title(trans('site.created_at')),

                Column::make('active')->title(trans('site.status')),
//                Column::computed('image')
//                    ->exportable(false)
//                    ->printable(false)
//                    ->width(120)
//                    ->addClass('text-center')
//                    ->title(trans('site.image')),

                Column::computed('action')
                    ->exportable(false)
                    ->printable(false)
                    ->width(120)
                    ->addClass('text-center')
                    ->title(trans('site.action')),


            ];
        } else {
            return [

                Column::make('id'),
                Column::make('title_ar')->title(trans('site.titles')),
                Column::make('created_at')->title(trans('site.created_at')),

                Column::make('active')->title(trans('site.status')),

                Column::computed('image')
                    ->exportable(false)
                    ->printable(false)
                    ->width(120)
                    ->addClass('text-center')
                    ->title(trans('site.image')),
                Column::computed('action')
                    ->exportable(false)
                    ->printable(false)
                    ->width(120)
                    ->addClass('text-center')
                    ->title(trans('site.action')),


            ];

        }
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return ucfirst($this->crudName) . 'Datatables_' . date('YmdHis');
    }
}
