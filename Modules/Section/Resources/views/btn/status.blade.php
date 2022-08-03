<span class="font-weight-bold badge badge-pill badge-{{ $section->status == 1 ? 'success' : 'danger'  }}">
    {{ $section->status==1? trans('dashboard::general.active') : trans('dashboard::general.not_active') }}
</span>
