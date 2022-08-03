<script>var hostUrl = "assets/dashboard/";</script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
        <script src="{{asset('assets/dashboard/plugins/global/plugins.bundle.js')}}"></script>
        <script src="{{asset('assets/dashboard/js/scripts.bundle.js')}}"></script>
        <script src="{{asset('assets/dashboard/assets/plugins/custom/prismjs/prismjs.bundle.js')}}"></script>
        <script src="{{asset('assets/dashboard/js/custom/apps/chat/chat.js')}}"></script>
        <script src="{{asset('assets/dashboard/js/custom/modals/create-app.js')}}"></script>
		<!--end::Global Javascript Bundle-->
        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
        <script src="{{url('vendor/datatables/buttons.server-side.js')}}"></script>
        <script src="{{asset('assets/dashboard/js/myFunction.js')}}"></script>
	@yield('js')
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
