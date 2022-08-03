<div class="modal fade" id="sectionCreateModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Start Modal Header -->
            <div class="modal-header">
                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="sectionCreateModal">
                    <i class="fas fa-edit fa-lg mr-sm-2" aria-hidden="true"> </i>
                    {{ trans('section::section.section_details') }}
                </h5>
            </div>
            <!-- End Modal Header -->
            <!-- Start Modal Body -->
            <form action="{{ route('section.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <label for="name" class="mr-sm-2">{{ trans('section::section.section_name_ar') }} :</label>
                            <input id="name" type="text" name="name" class="form-control" required>
                        </div>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="col">
                            <label for="name_en" class="mr-sm-2">{{ trans('section::section.section_name_en') }} :</label>
                            <input type="text" class="form-control" name="name_en">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">{{ trans('section::section.section_notes') }} :</label>
                        <textarea class="form-control" name="notes" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>{{ trans('section::section.section_status')}}</label>
                            <select class="form-control" name="status">
                                   <option value="1">{{trans('dashboard::general.active')}}</option>
                                   <option value="0">{{trans('dashboard::general.not_active')}}</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- End Modal Body -->
                <!-- Start Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">{{ trans('dashboard::general.cancel') }}</button>
                    <button type="submit" class="btn btn-primary">{{ trans('dashboard::general.save') }}</button>
                </div>
                <!-- End Modal Footer -->
            </form>
        </div>
    </div>
</div>
