@extends('layout')
@section('content')

<body data-container="body"
          data-mage-init='{"loaderAjax": {}, "loader": { "icon": "https://didongviet.vn/pub/static/frontend/ddv/default/vi_VN/images/loader-2.gif"}}'
        class="page-with-filter page-products categorypath-dien-thoai-iphone category-dien-thoai-iphone catalog-category-view page-layout-1column">
<main id="maincontent" class="page-main"><a id="contentarea" tabindex="-1"></a>
    <div class=" slider-custom block-slider-2 container mt-16">
        <div class="homepage-content-wrapper">    
<div class="products wrapper grid products-grid"> 
<h1 class="page-title" id="page-title-heading">{{$tieude}}</h1>      
      <ol class="products list items product-items">
        @foreach($listsp as $item)
        <li class="item product product-item">
                <div class="product-item-info"  data-container="product-grid" style="width: 100%">
                    <div class="product-item-image">
                    <div class="product-label"><span class="percent-deal"><font>Giảm </font>6,600,000đ</span></div> 
                    <a class="product-item-link" href="{{ url('product/details',[$item->id])}}">
                    <div>
                        <img alt="" src="{{$item->image}}"/>
                    </div>
                </a>
            </div>
                    <div class="product details product-item-details">
                        <h3 class="product name product-item-name lh-15">
                            <a class="product-item-link" href="{{ url('product/details',[$item->id])}}">{{$item->name}}</a>
                        </h3>
                          <div class="box-price-product">
                    <div class="price-box price-final_price" data-role="priceBox" data-product-id="13600" data-price-box="product-id-13600"><span class="normal-price">
    
            <span class="price-container price-final_price tax weee">
            <span class="price-label">Mua ngay</span>
        <span  id="product-price-13600" data-price-amount="21390000" data-price-type="finalPrice" class="price-wrapper "> 
        <span class="price">{{ number_format($item->price,0,",",".")}} ₫</span><span class="discount">{{$item->discount}}%</span>
        <span class="market-price">{{$item->cost}}</span></span>
        </span></span>
</div>      <div class="col-installment"><span class="price-label">Hoặc trả trước</span><span class="price">6.417.000 ₫</span></div>                </div>
                <div class="box-product-bottom">
                    <div class="item-product-info">
                        <span class="label-special-gift gift-lll">Tặng thêm <strong>1.000.000đ</strong> khi Thu cũ đổi mới. Giảm thêm <strong>600.000đ</strong> khi mở thẻ TPBank</span>                    </div>              
                 
            </div>                       
             
                    </div>
                    
                </div>
                
                
            </li>
            @endforeach 
        </ol>
             </div>
 
    </div>
</div>

</main>
</body>

@endsection