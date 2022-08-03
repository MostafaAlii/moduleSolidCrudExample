<span class="font-weight-bold badge badge-pill badge-{{ $country->status == 1 ? 'success' : 'danger'  }}">
    {{ $country->status==1?'Active':'dis Active' }}
</span>

