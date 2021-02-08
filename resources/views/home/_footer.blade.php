@php
    $setting=\App\Http\Controllers\HomeController::getsetting()
@endphp
<footer>

    <div class="container_12">
        <div class="grid_12">
            <div class="socials"> <a href="#"></a> <a href="#"></a> <a href="#"></a> <a href="#"></a> </div>
            <div class="copy"> Journey &copy; 2045 | <a href="#">Privacy Policy</a> | Design by: <a href="#">{{$setting->company}}</a> </div>
        </div>
        <div class="clear"></div>
    </div>

</footer>


