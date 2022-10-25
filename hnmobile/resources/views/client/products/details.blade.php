@extends('layout')
@section('content')
<body class="page-product-configurable catalog-product-view product-samsung-galaxy-a23 page-layout-1column">
<main id="maincontent" class="page-main"><a id="contentarea" tabindex="-1"></a>
    <div class=" slider-custom block-slider-2 container mt-16">
        <div class="homepage-content-wrapper">
    <div class="maincontents row">
        @foreach ($products as $sp)
        @endforeach

        <div class="mainwrapper col-md-9">
        <div class="block-section">

        <div class="product-info-main">
            <div class="heading-title">
                <h1>{{$products->name}}</h1>
    </div>
    <span class="product-reviews-summary">
                 <span itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                <meta itemprop="ratingValue" content = "4.5">
                <meta itemprop="ratingCount" content = "364">
            </span>
                <div class="rating-summary review-rating">
            <i class="fa star-full"></i>
            <i class="fa star-full"></i>
            <i class="fa star-full"></i>
            <i class="fa star-full"></i>
                     <i class="fa star-empty"></i>
                 </div>
            <span class="reviews-actions-intro product attribute review">
            <a id="viewmoreallreview" class="action view"
               href="#"> Hỏi đáp
            </a>

        </span>
        <span class="reviews-actions-intro">No: 3000000000102</span></span>


      <div id="product-link-related">


         <div class="grid-related">
                              <div class="item-related ">
                     <div class="inner">
                         <a  class="current-active"  href="" title="iPhone 13 128GB Chính Hãng (VN/A)">
                             <span><i></i>{{$products->capacity}} GB</span>
                         <strong><span class="price-related">{{ number_format($products->price,0,",",".")}} ₫</span></strong>
                     </a>
                     </div>
                 </div>
                  </div>
     </div>

     <!-- Open Graph Metadata -->

    <meta itemprop="mpn" content="191359" />
    <meta itemprop="name" content="iPhone 13 128GB Chính Hãng (VN/A)" />

    <meta itemprop="sku" content="3000000000102" />
    <meta itemprop="description" content="Mua iPhone 13 128GB Chính hãng VN/A giá rẻ nhất tại Di Đông Việt, Trả  góp 0%, Bảo hành 1 năm. Có Thu Cũ Đổi Mới. Nhiều Ưu Đãi Quà Tặng Khủng." />

    <meta itemprop="productID" content="3000000000102" />
    <meta itemprop="url" content="https://didongviet.vn/iphone-13-128gb.html" />
    <meta itemprop="image" content="https://didongviet.vn/pub/media/A-iPhone-13/iPhone-13-128gb/iphone-13-red-didongviet.jpg" />
    <div itemprop="brand" itemtype="https://schema.org/Brand" itemscope>
            <meta itemprop="name" content="iPhone" />
          </div>
          <meta itemprop="itemCondition" content="https://schema.org/NewCondition" />

        <meta itemprop="availability" content="https://schema.org/InStock" />

        <meta itemprop="price" content="18590000" itemscope/>


    <div itemprop="priceCurrency" content="VND" itemscope>

    <meta itemprop="priceValidUntil" content="2023-03-22 23:59:59" itemscope/>
    </div>



      <!-- todo: add more check when product issable or preorder -->
    <div class="product-add-form">
        <div class="tocart-form-data"
             data-name="iPhone 13 128GB Chính Hãng (VN/A)"
             data-price="18.590.000 ₫"
             data-image="https://cdn.didongviet.vn/pub/media/catalog/product/cache/39355d7f22ff5096f13e71fb0fd65cb0/i/p/iphone-13-128gb-didongviet_1.jpg"
        ></div>
        <form data-product-sku="3000000000102"
              action="https://didongviet.vn/checkout/cart/add/uenc/aHR0cHM6Ly9kaWRvbmd2aWV0LnZuL2lwaG9uZS0xMy0xMjhnYi5odG1s/product/13599/" method="post"
              id="product_addtocart_form">
            <input type="hidden" name="product" value="13599" />
            <input type="hidden" name="selected_configurable_option" value="" />
            <input type="hidden" name="related_product" id="related-products-field" value="" />
            <input type="hidden" name="item"  value="13599" />
            <input name="form_key" type="hidden" value="yqtciV4AZwtfgadj" />
                        <div class="product-options-wrapper" id="product-options-wrapper" data-hasrequired="&#x2A;&#x20;Required&#x20;Fields">
        <div class="fieldset" tabindex="0">
            <!--SELECT app_id,inventory FROM ddv_appstore_to_inventory Where product_id in ('13922','13919','13921','13920','13923','19752')--->



    <style type="text/css">



    </style>
    </div>
    </div>
    <div class="nhanh-box ware-house__wraper"><input type="hidden" name="nid" value="50000098"/>
    <input type="hidden" name="nurl" value=""/>
    <input type="hidden" name="layout" value="0"/>
    <meta name="nurl" content=""/><div class="list-store-inventory">
        <div class="body-store">
            <i class="fa fa-location-icon"></i>
            <a class="label text-red" href="#" onclick="return showMapShowroomInventory();">Địa chỉ: 163 Xô Viết Nghệ Tĩnh , Phường 17 , Quận Bình Thạnh</a>
            <span class="wait-showroom"><i class="fa fa-spin fa-spinner"></i></span>
            <!--mCustomScrollbar-->
        </div>
    </div>
    <div class="modal-popup-inventory">
    </div>
    <div class='overlay'></div>

    <style type="text/css">
        .wait-showroom{display: none;}

    </style></div><div class="product-info-price"><div>
                            <div class="product-price-top">
                <div class="price-box price-final_price" data-role="priceBox" data-product-id="13599" data-price-box="product-id-13599"><span class="normal-price">

    <span class="price-container price-final_price tax weee"
             itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                <span class="price-label">Mua ngay</span>
            <span  id="product-price-13599"                data-price-amount="18590000"
            data-price-type="finalPrice"
            class="price-wrapper ">

            <span class="price">{{ number_format($products->price,0,",",".")}}₫</span>        </span>
                     <div class="old-price-info" style="display: none;">
                <span class="percent-discount">
                23%
               </span>
                <span class="price-old">{{ number_format($products->cost,0,",",".")}} ₫ </span>
            </div>
                 <link itemprop="url" href="https://didongviet.vn/iphone-13-128gb.html" />
             <meta itemprop="availability" content="https://schema.org/InStock" />
              <meta itemprop="priceValidUntil" content="2023-03-01" />
            <meta itemprop="price" content="18590000" />
            <meta itemprop="priceCurrency" content="VND" />
        </span>
       </span>

    </div>
    <div class="wrapper-or">
        <div class="line"></div>
        <div class="wordwrapper">
            <div class="word">Hoặc</div>
        </div>
    </div>
    <div class="installment-wraper">
        <div class="installment-content">
            <span class="installment-title">Trả trước từ</span>
             <div class="price-box-installment">
                <span class="price-installment">
                500.000 ₫<span class="month"></span>
                </span>
            </div>

        </div>
    </div>
    <hr class="line">

            </div>
                </div>     <div class="product-promotion-wraper">
    <section class="promotion-wrapper">
        <div class="promotion-info">

            <ul class="promotion-details">
                <span class="pro-title text-red"><i class="fa fa-pro"></i>Khuyến mãi, ưu đãi</span>
                <ul class="promotion-main">
    <li>Tặng thêm <strong><span style="color: #ff0000;">1.000.000đ</span></strong> khi <strong>Thu cũ đổi mới</strong></li>

    </ul>        </ul>

                        <hr class="line">

                </div>
    </section> </div>
    <div class="payment-info-wrapter">


         <div class="type-1">Miễn phí Giao hàng siêu tốc trong 1 giờ </div>

                   <div class="type-2">Tặng thêm 1.000.000đ khi Trade-in thu cũ đổi mới</div>

    </div>
    </div><div class="product-options-bottom">
        <div class="box-tocart">
        <div class="fieldset">
                    <div class="field qty">
                <label class="label" for="qty"><span>Số lượng</span></label>
                <div class="control">
                    <span class="qty-action sub-action"><i class="fas fa-minus"></i></span>
                    <input type="number"
                           name="qty"
                           id="qty"
                           min="0"
                           value="1"
                           title="S&#x1ED1;&#x20;l&#x01B0;&#x1EE3;ng"
                           class="input-text qty"
                           data-validate="{&quot;required-number&quot;:true,&quot;validate-item-quantity&quot;:{&quot;minAllowed&quot;:1,&quot;maxAllowed&quot;:10000}}"/>
                    <span class="qty-action add-action"><i class="fas fa-plus"></i></span>
                </div>
            </div>

        </div>
    </div>
    </div>
        <div class="button-installment pay-actions d-flex">


        <div class="col-installment bnt-action col-md-12">
            <a rel="nofollow" data-target="cty"  class="button-checkout-installment btn-add-installment btn-go-cart "
             href="{{ route ('cart.add',['id' => $products->id])}}">
                <span class="title">Thêm Vào Giỏ Hàng</span>

            </a>
        </div>


    </div>
    </form>
    </div>
    </div><div class="product media"><a id="gallery-prev-area" tabindex="-1"></a>
    <div class="gallery-placeholder _block-content-loading" data-gallery-role="gallery-placeholder">
        <img
            alt="main product photo"
            class="gallery-placeholder__image"
            src="{{$products->image}}"/>
    </div><a id="gallery-next-area" tabindex="-1"></a>
    <div class="product-item__video">

    </div><div class="product-item__short-description">
        <p> </p>
    <p style="text-align: justify;">
        {{$products->description}}</p>
    </div>
    </div></div></div>

    <div class="mainwrapper-right col-md-3">
         <div class="block-section">
            <div class="info-more info-note-more">
                <div class="info-more-head">
                    <i class="fa fa-bag-info"></i>
                    <strong>Bộ sản phẩm</strong>
                </div>
                <div class="info-content">
                                    <p>Bộ sản phẩm gồm: Thân máy, Cáp USB-C to Lightning, Cây lấy sim, Sách HDSD.
    </p>
                                                </div>
            </div>
            <hr class="line">
            <div class="info-more info-note-more">
                  <div class="info-more-head">
                <i class="fa fa-shield-done"></i>
                <strong>Bảo hành</strong>
            </div>
                        <div class="info-content">
                    <ul><li>Giá đã bao gồm 10% VAT. Bảo hành <strong>12 tháng</strong> tại trung tâm bảo hành chính hãng Apple Việt Nam. (<a href="" target="_blank" rel="noopener">Xem chi tiết</a>)

    <p> </p>

    </li><li><strong>Bảo hành <span style="color: #ff0000;">1 đổi 1 trong <span style="color: #ff0000;">15 ngày</span></span></strong> độc quyền tại Hoan Nam Mobile.
    </li></ul>            </div>
                        </div>

        </div>
        </div>
</div>
        </div>
    </div>
</main>
</body>
        @endsection

