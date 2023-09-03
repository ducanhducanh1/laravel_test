<script src="{{asset('assets/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('assets/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/app-style-switcher.js')}}"></script>
    <script src="{{asset('assets/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('assets/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('assets/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="{{asset('assets/plugins/bower_components/chartist/dist/chartist.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <script src="{{asset('assets/js/pages/dashboards/dashboard1.js')}}"></script>
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('ckfinder/ckfinder.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js">
</script>

<script>
  @if(session()->has('success'))
      toastr.success('{{session()->get("success")}}')
  @elseif(session()->has('error'))
      toastr.danger('{{session()->get("error")}}')
  @endif

</script>
<script   >
   CKEDITOR.replace( 'editor', {
	filebrowserBrowseUrl:"{{asset('/ckfinder/ckfinder.html')}}" ,
	filebrowserUploadUrl: "{{asset('/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files')}}"
} );
</script>  