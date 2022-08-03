<?php
namespace Section\Repository\Eloquent;
use Section\Entities\Section;
use Illuminate\Support\Facades\DB;
use Section\DataTables\SectionDatatable;
use Section\Repository\Contract\SectionInterface;
use Section\Domain\Support\SaveModal\SaveModal;
class SectionRepository implements SectionInterface {
    public $SectionDatatable, $sectionInterface;
    public function __construct(SectionDatatable $SectionDatatable) {
        $this->SectionDatatable = $SectionDatatable;
    }

    public function index($SectionDatatable) {
        return $SectionDatatable->render('section::index', ['PageTitle' => trans('section::section.section_list')]);
    }

    public function store($request) {
        try {
            $data = $request->only(['name', 'notes', 'status']);
            $data['name'] = ['en' => $request->name_en, 'ar' => $request->name];
            (new SaveModal(new Section(), $data))->execute();
            return redirect()->route('section.index');
            //toastr()->success(trans('general.success_store_message'));
        } catch (\Exception $ex) {
            //toastr()->error(trans('general.error_store_message'));
            return redirect()->route('section.index')->withErrors(['error' => $ex->getMessage()]);
        }
    }
}
