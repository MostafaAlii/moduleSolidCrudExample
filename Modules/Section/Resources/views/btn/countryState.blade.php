<span class="font-weight-bold badge badge-pill badge-{{
    $country->states->count() == 0 ? 'danger' : 'success'  }}">
    {{ $country->states->count()}}
</span>
