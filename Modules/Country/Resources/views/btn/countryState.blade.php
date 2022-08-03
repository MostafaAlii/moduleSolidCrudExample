<span class="font-weight-bold badge badge-pill badge-{{
    $country->states_count == 0 ? 'danger' : 'success'  }}">
    {{ $country->states->count()}}
</span>
