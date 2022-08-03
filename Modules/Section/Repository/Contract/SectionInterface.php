<?php
namespace Section\Repository\Contract;
interface SectionInterface {
    public function index($sectionDatatable);
    public function store($request);
    //public function all();
    /*public function getAll();
    public function getById($id);
    public function create(array $attributes);
    public function update($id, array $attributes);
    public function delete($id);*/
}
