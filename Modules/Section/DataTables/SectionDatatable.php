<?php
namespace Section\DataTables;
use Section\Entities\Section;
use GuzzleHttp\Psr7\Uri;
use PharIo\Manifest\Url;
use PhpParser\Builder\Trait_;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class SectionDatatable extends DataTable {
    public function dataTable($query) {
        return datatables()
            ->eloquent($query)
            ->setRowId('id')
            ->editColumn('status', function (Section $section) {
                return view('section::btn.status', compact('section'));
            })
            ->editColumn('name', function (Section $section) {
                return $section->getTranslation('name', app()->getLocale());
            })
            ->addColumn('action', 'section::btn.action')
            ->rawColumns(['action', 'status']);
    }

    public function query() {
        return Section::query();
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
                    ['text' => '<i class="fa fa-plus"></i> '.trans('section::section.add_section'), 'className' => 'btn btn-success sectionCreate'],
					['extend'   => 'print', 'className'   => 'btn btn-primary', 'text' => '<i class="fa fa-print"></i> '. trans('dashboard::datatable.print')],
					['extend'   => 'csv', 'className'   => 'btn btn-info', 'text' => '<i class="fa fa-file-csv"></i> '. trans('dashboard::datatable.ex_csv')],
					['extend'   => 'excel', 'className'   => 'btn btn-success', 'text'  => '<i class="fa fa-file-excel"></i> '. trans('dashboard::datatable.ex_excel')],
					['extend'   => 'reload', 'className'   => 'btn btn-dark', 'text' => '<i class="fa fa-sync-alt"></i> '. trans('dashboard::datatable.reload')],

				],
                'initComplete' => "function () {
                    this.api().columns([0]).every(function () {
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
                'name'=>'name',
                'data'=>'name',
                'title'=>trans('section::section.section_name'),
                'className' => 'text-center',
            ],[
                'name'=>'status',
                'data'=>'status',
                'title'=>trans('section::section.section_status'),
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
        return 'Section_' . date('YmdHis');
    }
}
