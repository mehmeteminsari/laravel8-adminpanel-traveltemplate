  @extends('layouts.home')

@section('tittle','ABOUTUS')
@php
    $setting=\App\Http\Controllers\HomeController::getsetting()
@endphp
@section('content')
<div class="main">
    <div class="content">
        <div class="container_12">
            <div class="grid_9">
                <div class="">
                    <h3>Agency Profile</h3>
                    <img src="{{asset('assets')}}/images/page2_img1.jpg" alt="" class="img_inner fleft">
                    <p class="text1"><a href="#">Gellentesque imperdiet gerti loki holewvelit neque. Ut vestibulum mi sit amet ornare. </a></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse jew wligulawe dolor, condimentum ac justo sed, tincidunt commodo molity wer massarete. Nulla non urnatr nisi. Donec varius lectus in vestibulum auctor. Spendisse magna veliternowe dignissim eu commodo ut vestibulum nectro quam. Pellentesque imperdiet velit neque. Ut vestibulum mi sit ametwertilo ornare consectetur. Quisque sed quamhy loi justo. Nulla congue sed turpis nec lacinia. Nulla facilisi. Ut sit amet gravidatylo wtellus. Morbi id wer nolit consequat eros. </p>
                    <p>Vivamus imperdiet ante vitae lorem varius tristique meli. Phasellus tristique lectus id volutpat condimentum. Mauris quam lectus cursus at congue nec ultrices luctus orci quam lectus cursus at congue.</p>
                    <div class="clear"></div>
                    Duis ac iaculis odio, sed tristique arcu. Cras consequat semper augue. Praesent ut facilisis nisi. Pellentesque consequat felis leorew qwertil condimentumo placerat eros mollis vitae. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent iaculis nisl mattis facilisis enim vitae dictumi magna. Pellentesque laoreet purus congue justo laoreet, blandit tempor leo molestie. Vivamus orci sem molestie actre pharetra non scelerisque sit amet orci. Nulla consequat neque pretium sagittis vulputate. Fusce dictum velit at diam facilisis consectetur. </div>
            </div>
            <div class="grid_3">
                <h3>Our Principles</h3>
                <ul class="list1">
                    <li>
                        <div class="count">1</div>
                        <div class="extra_wrapper">
                            <div class="text1"><a href="#">Pellentesque imperdiet. </a></div>
                            Quisque sed quam justo. Nulla kilor congue sed turpis nec lacinia. Nulla facilisi. Ut sit amet gravida telluswil. Morbi id consequat erosivamus. </div>
                    </li>
                    <li>
                        <div class="count">2</div>
                        <div class="extra_wrapper">
                            <div class="text1"><a href="#">Aellentesque omperdie. </a></div>
                            Fuisque sed quam justo. Cngueteri sed turpis nec lacinia. Nulla facilisi. Ut sit amet gravida tellus. Morbi idy consequat eros. Vivamus imperdiet </div>
                    </li>
                    <li>
                        <div class="count">3</div>
                        <div class="extra_wrapper">
                            <div class="text1"><a href="#">Grellentesque imperdik. </a></div>
                            Yisque sed quam justo. Nullaongue sed turpis nec lacinia. Julla facilisi. Ut sit amet gravida tellus. Morbi idy consequat erosamus imperdiet. </div>
                    </li>
                </ul>
            </div>
            <div class="clear"></div>
            <div class="grid_12">
                <div class="hor_sep"></div>
            </div>
            <div class="clear"></div>
            <div class="grid_9">
                <h3 class="head1">What We Offer</h3>
                <p class="text1 tx2">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque vehicula eu nislew teget convallis. Vivamus sit amet fringilla nibh, et fringilla elit. Ut in lacus in nulla varius pulvinar. Donec eu magna pretiu yue facilisis sem a, rutrum magna.  Fet fringilla elit. Ut in lacus in nulla varius pulvinar.</p>
                <p>Sed dignissim est mauris. Praesent pulvinar vestibulum lorem tristique faucibus. Quisque at tincidunt sapien. Fusce scelerisque dolor nec justo tempus, sed cursus nisl interdum. Vivamus justo mi, semper non semper nec, commodo et ipsum. Integer a porta erat. Pellentesque eu egestas purus, vitae feugiat augue. Sed lobortis tristique convallis. Mauris in diam tempor, imperdiet massa ut, euismod risus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc sollicitudin pretium eros ac semper. Aenean nec bibendum mauris, eget luctus velit. Sed sodales lectus imperdiet neque pretium ultrices. Nulla nec urna nec erat elementum tempor.</p>
                <ul class="list2">
                    <li><a href="#">Fgo psu dr sit amek </a></li>
                    <li><a href="#">Sem psum dr sit ametre conse</a></li>
                    <li><a href="#">Rame sum dr sit ame consec</a></li>
                    <li><a href="#">Bem psum dr sit ameteko </a></li>
                    <li><a href="#">Nem dsum dr sit amewas </a></li>
                </ul>
                <ul class="list2">
                    <li><a href="#">Vcem psum dr sit </a></li>
                    <li><a href="#">Zdfem psum dr sittr amewe </a></li>
                    <li><a href="#">Game sum dr sit ame conse</a></li>
                    <li><a href="#">Dem psum dr sit ametekot </a></li>
                </ul>
                <div class="clear"></div>
            </div>
            <div class="grid_3">

                <blockquote>
                    <h3 class="head1">ADRESS</h3>
                    <strong>COMPANY :</strong>{{$setting->company}}<br>
                    <strong>ADRESS :</strong>{{$setting->address}}<br>
                    <strong>PHONE :</strong>{{$setting->phone}}<br>
                    <strong>FAX :</strong>{{$setting->fax}}<br>
                    <strong>EMAIL :</strong>{{$setting->email}}
                </blockquote>

                    <div class="bq_bot">
                        <div class="text1">Mark Johnson</div>
                        Director of Product Management </div>

            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="bottom_block">
        <div class="container_12">
            <div class="grid_2 prefix_2">
                <ul>
                    <li><a href="#">FAQS Page</a></li>
                    <li><a href="#">People Say</a></li>
                </ul>
            </div>
            <div class="grid_2">
                <ul>
                    <li><a href="#">Useful links</a></li>
                    <li><a href="#">Partners</a></li>
                </ul>
            </div>
            <div class="grid_2">
                <ul>
                    <li><a href="#">Insurance</a></li>
                    <li><a href="#">Family Travel</a></li>
                </ul>
            </div>
            <div class="grid_2">
                <h4>Contact Us:</h4>
                TEL: 1-800-234-5678<br>
                <a href="#">info@demolink.org</a> </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
@endsection
