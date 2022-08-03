@include('dashboard::dashboard.layouts.common._tpl_start')
@include('dashboard::dashboard.layouts.common._aside')
@include('dashboard::dashboard.layouts.common._header')
@include('dashboard::dashboard.layouts.common.drawers._activities_drawer')
@include('dashboard::dashboard.layouts.common.drawers._chat_drawer')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    @include('dashboard::dashboard.layouts.common._toolbar')
    @include('dashboard::dashboard.layouts.partials._messages')
    @yield('content')
</div>

@include('dashboard::dashboard.layouts.common._footer')
@include('dashboard::dashboard.layouts.common._tpl_end')
