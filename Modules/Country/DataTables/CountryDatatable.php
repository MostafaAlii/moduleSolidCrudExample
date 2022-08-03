<?php
namespace Country\DataTables;
use Country\Entities\Country;
use GuzzleHttp\Psr7\Uri;
use PharIo\Manifest\Url;
use PhpParser\Builder\Trait_;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class CountryDatatable extends DataTable {
    public function dataTable($query) {
        return datatables()
            ->eloquent($query)
            ->setRowId('id')
            ->editColumn('status', function (Country $country) {
                return view('country::btn.status', compact('country'));
            })
            ->addColumn('countryState', function (Country $country) {
                return view('country::btn.countryState', compact('country'));
            })
            ->addColumn('action', 'country::btn.action')
            ->rawColumns(['action', 'status', 'countryState']);
    }

    public function query() {
        return Country::query()->withCount('states')->with('states');
    }

    public function html() {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->orderBy(1)
            ->parameters([
                'dom'          => 'Blfrtip',
                'lengthMenu'   => [[10, 25, 50, 100, -1], [10, 25, 50, 100, trans('dashboard::datatable.all_record')]],
                'buttons'    => [
					['extend'   => 'print', 'className'   => 'btn btn-primary', 'text' => '<i class="fa fa-print"></i> '. trans('dashboard::datatable.print')],
					['extend'   => 'csv', 'className'   => 'btn btn-info', 'text' => '<i class="fa fa-file-csv"></i> '. trans('dashboard::datatable.ex_csv')],
					['extend'   => 'excel', 'className'   => 'btn btn-success', 'text'  => '<i class="fa fa-file-excel"></i> '. trans('dashboard::datatable.ex_excel')],
					['extend'   => 'reload', 'className'   => 'btn btn-dark', 'text' => '<i class="fa fa-sync-alt"></i> '. trans('dashboard::datatable.reload')],

				],
                'initComplete' => "function () {
                    this.api().columns([1]).every(function () {
                        var column = this;
                        var input = document.createElement(\"input\");
                        $(input).appendTo($(column.footer()).empty())
                        .on('keyup', function () {
                            column.search($(this).val(), false, false, true).draw();
                        });
                    });
                }",
                'language' => datatable_translation(),
            ]);
    }

    protected function getColumns() {
        return [

            [
                'name'=>'id',
                'data'=>'id',
                'title'=>'#',
                'orderable' => false,
                'searchable' => false,
                'className' => 'text-center',
            ],[
                'name'=>'name',
                'data'=>'name',
                'title'=>trans('country::country.country_name'),
                'className' => 'text-center',
            ],[
                'name'=>'countryState',
                'data'=>'countryState',
                'title'=>trans('country::country.province_number'),
                'className' => 'text-center',
                'searchable' => false,
            ],[
                'name'=>'status',
                'data'=>'status',
                'title'=>trans('country::country.status'),
                'className' => 'text-center',
            ],[
                'name'=>'action',
                'data'=>'action',
                'title'=>trans('dashboard::general.processes'),
                'orderable' => false,
                'searchable' => false,
                'printable' => false,
                'exportable' => false,
                'className' => 'text-center',
            ]


        ];
    }

    protected function filename() {
        return 'Country_' . date('YmdHis');
    }
}
