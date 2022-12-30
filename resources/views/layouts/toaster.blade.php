@if(Session::has('success'))
    <script>
        jQuery(function(){
            toastr.clear();
            NioApp.Toast("{{ Session::get('success') }}", 'success', {position: 'top-right', icon: 'auto', ui: ''});
        })
    </script>
@endif

@if(Session::has('danger'))
    <script>
        jQuery(function(){
            toastr.clear();
            NioApp.Toast("{{ Session::get('danger') }}", 'error', {position: 'top-right', icon: 'auto', ui: ''});
        })
    </script>
@endif