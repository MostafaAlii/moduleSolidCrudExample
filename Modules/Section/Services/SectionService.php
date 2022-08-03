<?php
namespace Section\Services;
use Section\Repository\Eloquent\SectionRepository;
class SectionService {
    protected $sectionRepository;
    public function __construct(SectionRepository $sectionRepository) {
        $this->sectionRepository = $sectionRepository;
    }

    public function index() {
        return $this->sectionRepository->index($this->sectionDatatable);
    }

    public function store($request) {
        return $this->sectionRepository->store($request);
    }

}
