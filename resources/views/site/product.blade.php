@include('site.layouts.header')
<div class="main">
    <div class="shop_top">
        <div class="container">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="#" class="list-group-item active">
                        Cras justo odio
                    </a>
                    @foreach($category as $categories)
                        <a href="#" class="list-group-item">{{$categories->name}}
                            @foreach($sub->take(6) as $subcategory)
                            @if($subcategory->cat_id == $categories->id)
                                <ul>
                                    <li><a href="{{route('sub')}}">{{$subcategory->name}}</a></li>
                                </ul>
                                @endif
                            @endforeach
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="col-md-9">
                <div class="row shop_box-top">
                    @foreach($model as $product)
                        <div class="col-md-3 shop_box"><a href="#">
                                <img src="{{asset('assets')}}/images/{{$product->image}}" class="img-responsive"
                                     alt=""/>
                                <div class="shop_desc">
                                    <h3><a href="{{route('view.page', $product->id)}}">{{$product->name}}</a></h3>
                                    <p>{{$product->description}}</p>
                                    <span class="actual">${{$product->price}}</span><br>
                                    <ul class="buttons">
                                        <li class="cart"><a href="#">Add To Cart</a></li>
                                        <li class="shop_btn"><a href="#">Read More</a></li>
                                        <div class="clear"></div>
                                    </ul>
                                </div>
                            </a></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@include('site.layouts.footer')
