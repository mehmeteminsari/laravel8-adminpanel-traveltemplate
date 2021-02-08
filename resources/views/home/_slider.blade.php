<div class="slider-relative">
    <div class="slider-block">
        <div class="slider"> <a href="#" class="prev"></a><a href="#" class="next"></a>
            @php
                $i=0;
            @endphp
            @foreach($slider as $rs)
                @php
                    $i+=1;
                @endphp
                <ul class="items">
                    @if($i==1)active @endif
                    <li><img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" class="img-fluid" height="800px" alt="...">

                        <div class="banner">

                            <div>{{$rs->title}}</div>
                            <br>
                            <span>{{$rs->description}}</span>

                            <span><a href="{{route('product',['id'=>$rs->id,'city'=>$rs->city])}}" type="button" class="btn btn-outline-primary btn-lg">SIMDI TATIL YAP</a></span>
                        </div>


                    </li>

                </ul>
            @endforeach


        </div>
    </div>
</div>

