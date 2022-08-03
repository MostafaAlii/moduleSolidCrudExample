<?php
namespace Section\Http\Controllers\Backend;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Section\Repository\Contract\SectionInterface;
use Section\Services\SectionService;
use Section\DataTables\SectionDatatable;
class SectionController extends Controller {
    protected $sectionInterface, $sectionDatatable, $sectionService;
    public function __construct(SectionInterface $sectionInterface,SectionDatatable $sectionDatatable, SectionService $sectionService) {
        $this->sectionInterface = $sectionInterface;
        $this->sectionDatatable = $sectionDatatable;
        $this->sectionService = $sectionService;
    }
    public function index(SectionDatatable $sectionDatatable) {
        return $sectionDatatable->render('section::index', ['PageTitle' => trans('section::section.section_list')]);
    }

    public function store(Request $request) {
        return $this->sectionService->store($request);
    }



    public function show($id) {
        return view('section::show');
    }

    public function edit($id) {
        return view('section::edit');
    }

    public function update(Request $request, $id) {
        //
    }

    public function destroy($id) {
        //
    }
}
