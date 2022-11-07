<script src="{{asset('static/scripts/jquery-1.9.1.min.js') }}" type="text/javascript"></script>
<script src="{{asset('static/scripts/jquery-ui-1.10.1.custom.min.js') }}" type="text/javascript"></script>
<script src="{{asset('static/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('static/scripts/underscore-min.js') }}" type="text/javascript"></script>

<script src="{{asset('static/custom/js/script.common.js') }}" type="text/javascript"></script>

@include('common.script_bottom')

<script type="text/template" id="alert_box">
    @include('underscore.alert_box')

</script>

<script>
    $(document).ready(function(){ 
    $("input").attr("autocomplete", "off");
});
</script>