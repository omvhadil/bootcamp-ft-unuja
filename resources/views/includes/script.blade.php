<script>
    var hostUrl = "assets/";
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>
<script src="{{ url('assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ url('assets/js/scripts.bundle.js') }}"></script>

<script src="{{ url('assets/js/custom/modals/new-target.js') }}"></script>
<script src="{{ url('assets/js/custom/widgets.js') }}"></script>
<script src="{{ url('assets/js/custom/apps/chat/chat.js') }}"></script>
<script src="{{ url('assets/js/custom/modals/create-app.js') }}"></script>
<script src="{{ url('assets/js/custom/modals/upgrade-plan.js') }}"></script>

{{-- Data Table  --}}
<script src="{{ url('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<script src="{{ url('assets/js/custom/pages/projects/project/project.js') }}"></script>
<script src="{{ url('assets/js/custom/modals/users-search.js') }}"></script>

<!--Authentication-->
<script src="assets/js/custom/authentication/sign-in/general.js"></script>
<script src="assets/js/custom/authentication/sign-up/general.js"></script>

<!--Dashboard-->
{{-- <script src="assets/js/custom/pages/projects/list/list.js"></script> --}}

{{-- setting Modal --}}
@stack('modal-js')
