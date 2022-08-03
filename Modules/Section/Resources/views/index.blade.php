@extends('dashboard::dashboard.layouts.common.master')
@section('css')

@endsection
@section('pageTitle')
    {{ $PageTitle }}
    {{  config('app.locale')}}
@endsection

@section('content')
<div class="container" id="kt_docs_content_container" style="none">
    <div class="card card-xxl-stretch mb-5 mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">{{ $PageTitle }}</span>
            </h3>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body py-3">
            {!! $dataTable->table(['class'=>'table table-hover table-striped table-rounded table-row-gray-300 align-middle gs-0 gy-4'], true) !!}
        </div>
        <!--begin::Body-->
        <!-- Start Modal -->
        @include('section::btn.modal.createSection')
        <!-- End Modal -->
    </div>
<!
</div>
{!! $dataTable->scripts() !!}
@endsection

@section('js')
<script>sectionCreate()</script>
@endsection
