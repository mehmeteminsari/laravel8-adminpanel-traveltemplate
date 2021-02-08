<ul>
@foreach($children as $subcategory)

        @if(count($subcategory->children))
            <li><a href="">{{$subcategory->title}}</a>
                        @include('home.categorytree',['children'=>$subcategory->children])
            </li>

        @else
            <li><a href="{{route('categoryproducts',['id'=>$subcategory->id,'city'=>$subcategory->title])}}">{{$subcategory->title}}</a></li>
        @endif

@endforeach
</ul>


