@extends('layout')
@section('content')
<body class="checkout-index-index page-layout-1column oscHideLoader">
<div id="maincontent" class="page-main"><a id="contentarea" tabindex="-1"></a>
    <div class="columns">
        <div class="row">
            <div class="content-wrapper">
                <div class="column main"><input name="form_key" type="hidden" value="pG7B4k1MxaOwLfyW">
                    <div id="authenticationPopup" data-bind="scope:'authenticationPopup'" style="display: none;">
                    </div>
                    <div class="one-step-checkout onestepcheckout-index-index layout-3columns-osc container clearfix">
                        <div id="checkout" data-bind="scope:'checkout'" class="checkout-container md-checkout">
                            <div data-role="checkout-messages" class="messages" data-bind="visible: isVisible(), click: removeAll">
                            </div>
                            <div class="md-osc three-columns-osc" data-bind="css:{virtualCheckout:isVirtual()},afterRender:afterRender">
                                <div class="md-osc-new-layout">
                                    <div class="checkout-column-osc">
                                        <div class="checkout-column-block">
                                            <div id="address-section" data-bind="css: 'md_osc_step_'+getSequence()" class="md_osc_step_1">
                                                <div id="shipping" class="checkout-shipping-address shipping_address" data-bind="fadeVisible: visible()">
                                                    <div id="shipping_step_header" data-bind="i18n: window.checkoutConfig.shipping_address_step_config_label, css: 'step-title step_'+getSequence()" data-role="title" class="step-title step_1"> Địa chỉ nhận hàng</div>
                                                    <div id="checkout-step-shipping" class="step-content" data-role="content">
                                                        <form class="form form-shipping-address" action="{{ url('/checkout') }}" method="post" id="co-shipping-form"  style="display: block;">
                                                            @csrf
                                                            <div class="field md-input-width-50 _required" >

                                                                <label class="label" data-bind="attr: { for: element.uid }" for="KF4HCM0">

                                                                    <span data-bind="i18n: element.label">Email</span>

                                                                </label>

                                                                <div class="control" data-bind="css: {'_with-tooltip': element.tooltip}">

                                                                    <input class="input-text" name="customer_email" type="text">

                                                                </div>
                                                            </div>
                                                            <div id="shipping-new-address-form" class="fieldset address">
                                                                <div class="field md-input-width-50 _required" data-bind="visible: visible, attr: {'name': element.dataScope}, css: additionalClasses" name="shippingAddress.lastname">

                                                                    <label class="label" data-bind="attr: { for: element.uid }" for="KF4HCM0">

                                                                        <span data-bind="i18n: element.label">Họ và Tên</span>

                                                                    </label>

                                                                    <div class="control" data-bind="css: {'_with-tooltip': element.tooltip}">

                                                                        <input class="input-text" type="text" name="customer_name">

                                                                    </div>
                                                                </div>

                                                                <div class="field md-input-width-100 _required" data-bind="visible: visible, attr: {'name': element.dataScope}, css: additionalClasses" name="shippingAddress.telephone">

                                                                    <label class="label" data-bind="attr: { for: element.uid }" for="FK4N2NF">
                                                                        <span data-bind="i18n: element.label">Số điện thoại</span>

                                                                    </label>

                                                                    <div class="control" data-bind="css: {'_with-tooltip': element.tooltip}">

                                                                        <input name="customer_phone" class="input-text" type="text">

                                                                    </div>
                                                                </div>

                                                                <fieldset class="field md-input-width-100 street admin__control-fields required" data-bind="css: additionalClasses">
                                                                    <legend class="label">
                                                                        <span data-bind="i18n: element.label">Địa chỉ nhà</span>
                                                                    </legend>
                                                                    <div class="control">

                                                                        <div class="field _required" data-bind="visible: visible, attr: {'name': element.dataScope}, css: additionalClasses" name="shippingAddress.street.0">



                                                                            <div class="control" data-bind="css: {'_with-tooltip': element.tooltip}">

                                                                                <input name="customer_address" class="input-text" type="text">
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </fieldset>
                                                                <div data-bind="afterRender:initGoogleSuggestion"></div>
                                                            </div>



                                                    </div>
                                                </div>
                                            </div>
                                            <div class="checkout-billing-address md-osc-billing-address-after-shipping" data-bind="css: getAfterShippingClass()">

                                                <div class="billing-address-same-as-shipping-block field choice" data-bind="visible: canUseShippingAddress()">
                                                    <input type="checkbox" name="billing-address-same-as-shipping" data-bind="checked: isAddressSameAsShipping, event:{change:checkUseShippingAddress}, click: useShippingAddress, attr: {id: 'billing-address-same-as-shipping-' + getCode($parent)}" id="billing-address-same-as-shipping-shared">
                                                    <label data-bind="attr: {for: 'billing-address-same-as-shipping-' + getCode($parent)}" for="billing-address-same-as-shipping-shared"><span data-bind="i18n: 'My billing and shipping address are the same'">Dùng địa chỉ thanh toán là địa chỉ nhận hàng</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="shipping-method-section-main md_osc_step_2" data-bind="css: 'md_osc_step_'+getSequence()">
                                        <div class="ajax-loader3 ajax-loader-shipping-method" id="ajax-shipping" style="display: none;"></div>
                                        <div id="control_overlay_shipping" style="display: none;"></div>
                                        <div class="shipping-method-section">
                                            <li id="opc-shipping_method" class="checkout-shipping-method" data-bind="fadeVisible: visible()" role="presentation">
                                                <div class="checkout-shipping-method">
                                            <div id="shipping_method_step_header" data-bind="css: 'step-title step_'+getSequence(), i18n: window.checkoutConfig.shipping_method_step_config_label" data-role="title" class="step-title step_2">Phương thức vận chuyển</div>
                                            <!-- ko foreach: getRegion('before-shipping-method-form') --><!-- /ko -->
                                            <div id="checkout-step-shipping_method" class="step-content onestepcheckout-shipping-method-section" data-role="content" role="tabpanel" aria-hidden="false">
                                                <!-- ko if: rates().length  -->

                                                    <div id="checkout-shipping-method-load">
                                                        <table class="table-checkout-shipping-method">
                                                            <thead>
                                                                <tr class="row">
                                                                    <th class="col col-method" data-bind="i18n: 'Select Method'">Select Method</th>
                                                                    <th class="col col-price" data-bind="i18n: 'Price'">Giá</th>
                                                                    <th class="col col-method" data-bind="i18n: 'Method Title'">Method Title</th>
                                                                    <th class="col col-carrier" data-bind="i18n: 'Carrier Title'">Carrier Title</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                            <!--ko foreach: { data: rates(), as: 'method'}-->
                                                                <!-- ko ifnot: method.error_message -->
                                                                <tr class="row" data-bind="click: $parent.selectShippingMethod.bind($parent)">
                                                                    <td class="col col-method">

                                                                            <!-- ko if: $parent.rates().length == 1 --><!-- /ko -->
                                                                            <!--ko ifnot: ($parent.rates().length == 1)-->
                                                                                <input type="radio" data-bind="
                                                                                                value: method.carrier_code + '_' + method.method_code,
                                                                                                checked: $parent.isSelected,
                                                                                                attr: {
                                                                                                    'id': 's_method_' + method.carrier_code + '_' + method.method_code,
                                                                                                    'aria-labelledby': 'label_method_' + method.method_code + '_' + method.carrier_code + ' ' + 'label_carrier_' + method.method_code + '_' + method.carrier_code
                                                                                                },
                                                                                                click: $parent.selectShippingMethod" class="radio" value="atshopshipping_atshopshipping" id="s_method_atshopshipping_atshopshipping" aria-labelledby="label_method_atshopshipping_atshopshipping label_carrier_atshopshipping_atshopshipping" name="ko_unique_1">
                                                                                <label class="label"><span data-bind=""></span></label>
                                                                            <!--/ko-->
                                                                    </td>
                                                                    <td class="col col-price">
                                                                        <!-- ko foreach: $parent.getRegion('price') -->
                                                                        <!-- ko template: getTemplate() -->
                                    <!-- ko if:  isDisplayShippingPriceExclTax -->
                                    <span class="price"><span class="price" data-bind="text: getFormattedPrice(method.price_excl_tax)">0&nbsp;₫</span></span>
                                    <!-- /ko -->
                                    <!-- ko ifnot: isDisplayShippingPriceExclTax --><!-- /ko -->
                                    <!-- ko if:  (isDisplayShippingBothPrices && (method.price_excl_tax != method.price_incl_tax))--><!-- /ko -->
                                    <!-- /ko -->
                                                                        <!-- /ko -->
                                                                    </td>

                                                                    <td class="col col-method" data-bind="text: method.method_title,
                                                                            attr: {
                                                                                'id': 'label_method_' + method.method_code + '_' + method.carrier_code
                                                                            }" id="label_method_atshopshipping_atshopshipping">Nhận hàng tại cửa hàng</td>

                                                                    <td class="col col-carrier" data-bind="text: method.carrier_title,
                                                                            attr: {
                                                                                'id': 'label_carrier_' + method.method_code + '_' + method.carrier_code
                                                                            }" id="label_carrier_atshopshipping_atshopshipping">Nhận hàng tại cửa hàng</td>
                                                                </tr>
                                                                <!-- /ko -->
                                                                <!-- ko if:  method.error_message --><!-- /ko -->


                                                                <!-- ko ifnot: method.error_message -->
                                                                <tr class="row" data-bind="click: $parent.selectShippingMethod.bind($parent)">
                                                                    <td class="col col-method">

                                                                            <!-- ko if: $parent.rates().length == 1 --><!-- /ko -->
                                                                            <!--ko ifnot: ($parent.rates().length == 1)-->
                                                                                <input type="radio" data-bind="
                                                                                                value: method.carrier_code + '_' + method.method_code,
                                                                                                checked: $parent.isSelected,
                                                                                                attr: {
                                                                                                    'id': 's_method_' + method.carrier_code + '_' + method.method_code,
                                                                                                    'aria-labelledby': 'label_method_' + method.method_code + '_' + method.carrier_code + ' ' + 'label_carrier_' + method.method_code + '_' + method.carrier_code
                                                                                                },
                                                                                                click: $parent.selectShippingMethod" class="radio" value="ddvshipping_ddvshipping" id="s_method_ddvshipping_ddvshipping" aria-labelledby="label_method_ddvshipping_ddvshipping label_carrier_ddvshipping_ddvshipping" name="ko_unique_2">
                                                                                <label class="label"><span data-bind=""></span></label>
                                                                            <!--/ko-->
                                                                    </td>
                                                                    <td class="col col-price">
                                                                        <!-- ko foreach: $parent.getRegion('price') -->
                                                                        <!-- ko template: getTemplate() -->
                                    <!-- ko if:  isDisplayShippingPriceExclTax -->
                                    <span class="price"><span class="price" data-bind="text: getFormattedPrice(method.price_excl_tax)">0&nbsp;₫</span></span>
                                    <!-- /ko -->
                                    <!-- ko ifnot: isDisplayShippingPriceExclTax --><!-- /ko -->
                                    <!-- ko if:  (isDisplayShippingBothPrices && (method.price_excl_tax != method.price_incl_tax))--><!-- /ko -->
                                    <!-- /ko -->
                                                                        <!-- /ko -->
                                                                    </td>

                                                                    <td class="col col-method" data-bind="text: method.method_title,
                                                                            attr: {
                                                                                'id': 'label_method_' + method.method_code + '_' + method.carrier_code
                                                                            }" id="label_method_ddvshipping_ddvshipping">Vận chuyển tiêu chuẩn</td>

                                                                    <td class="col col-carrier" data-bind="text: method.carrier_title,
                                                                            attr: {
                                                                                'id': 'label_carrier_' + method.method_code + '_' + method.carrier_code
                                                                            }" id="label_carrier_ddvshipping_ddvshipping">Miễn phí với đơn hàng phụ kiện trên 500.000</td>
                                                                </tr>
                                                                <!-- /ko -->
                                                                <!-- ko if:  method.error_message --><!-- /ko -->

                                                            <!-- /ko -->
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                    <div id="onepage-checkout-shipping-method-additional-load" data-bind="event: { click: selectAdditionalBlock }">
                                                        <!-- ko foreach: getRegion('shippingAdditional') --><!-- /ko -->
                                                    </div>
                                                    <!-- ko if: errorValidationMessage().length > 0 --><!-- /ko -->

                                                <!-- /ko -->
                                                <!-- ko ifnot: rates().length > 0 --><!-- /ko -->
                                            </div>
                                        </div>
                                            </li>
                                        </div>
                                        <div class="shipping-method-section-delivery">
                                            <!-- ko foreach: getRegion('mdosc-delivery-date') -->
                                            <!-- ko template: getTemplate() -->
                                    <!-- ko foreach: {data: elems, as: 'element'} --><!-- /ko -->
                                    <!-- /ko -->
                                            <!-- /ko -->
                                        </div>
                                    </div>





                                    <div class="checkout-column-osc">

                                        <div class="checkout-column-block">


                                            <div class="order-review-section">
                                                <div class="ajax-loader3 ajax-loader-order-review" id="ajax-review" style="display: none;"></div>
                                                <div id="control_overlay_review" style="display: none;"></div>
                                                <div class="clear"></div>
                                                <div id="product-review">
                                                    <div class="step-title step_4" style="float:left" id="review_step_header" data-bind="css: 'step_'+getSequence(),i18n: window.checkoutConfig.review_step_config_label">Thông tin thanh toán</div>

                                                    <table id="checkout-review-table" class="data-table checkout-review-item">
                                                        <colgroup>
                                                            <col>
                                                            <col width="1">
                                                            <col width="1">
                                                            <col width="1">
                                                        </colgroup>
                                                        <thead>
                                                            <tr class="first odd">
                                                                <th class="a-left" rowspan="1" style="width:80%" data-bind="i18n: 'Product'">Tên sản phẩm</th>
                                                                <th class="a-right" rowspan="1" style="width:10%; padding:10px 5px" data-bind="i18n: 'Qty'">Số lượng</th>
                                                                <th class="a-right" colspan="1" style="width:10%" data-bind="i18n: 'Subtotal'">Tổng tiền</th>
                                                            </tr>
                                                        </thead>
                                                        @foreach ($cart->items as $index => $item)
                                                        <tbody data-bind="scope: 'checkout.sidebar.summary.cart_items'">
                                                            <tr class="even">
                                                                <td data-th="Product">
                                                                    <div class="osc-product-image" data-bind="visible: isShowImage">
                                                                        <img src="{{ $item['image'] }}" width="75" height="75">
                                                                    </div>


                                                                    <h5 class="product-name">{{ $item['name'] }}</h5>

                                                                    <div class="item-options">
                                                                        <ul>


                                                                            <li class="label" data-bind="text: label">Màu</li>

                                                                            <li class="values" data-bind="html: value">Màu xám</li>


                                                                        </ul>
                                                                    </div>

                                                                    <div class="md-osc-gift-message" data-item-id="$parent.item_id">
                                                                        <div data-bind="scope:'checkout.sidebar.summary.cart_items.details.gift_message_'+$parent.item_id, attr:{ id: 'gift-options-cart-item-' + $parent.item_id }" class="gift-options-cart-item" id="gift-options-cart-item-1768982">


                                                                        </div>
                                                                    </div>
                                                                    <div class="md-osc-gift-wrapper" data-item-id="$parent.item_id">
                                                                        <div  class="magedelight-giftwrapper-product" id="magedelight-giftwrapper-product-1768982">


                                                                        </div>
                                                                    </div>
                                                                </td>

                                                                <td data-th="Qty" class="a-center qty-box">
                                                                    <div class="box-qty" data-item-id="">{{ $item['quantity'] }}
                                                                        <label for="qty_input"></label>
                                                                        <input class="qty input-text qty-item-display" type="text" data-bind="value: $parent.qty" id="qty_input" readonly="readonly">
                                                                    </div>
                                                                </td>

                                                                <td data-th="Subtotal" class="a-right last">

                                                                    <div class="subtotal">
                                                                        <span class="price-excluding-tax" data-bind="attr:{'data-label': $t('Excl. Tax')}" data-label="Excl. Tax">

                                                                            <span class="cart-price">
                                                                                <span class="price" data-bind="text: getFormattedPrice(getRowDisplayPriceExclTax($parents[2]))">{{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}</span>
                                                                            </span>

                                                                        </span>

                                                                    </div>

                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                        @endforeach
                                                    </table>
                                                    <table id="checkout-total-table" class="data-table checkout-review-total">
                                                        <tbody data-bind="scope: 'checkout.sidebar.summary.totals'">

                                                            <table class="data table table-totals">
                                                                <caption class="table-caption" data-bind="i18n: 'Order Summary'">Tổng</caption>
                                                                <tbody>

                                                                    <tr class="totals sub">
                                                                        <th data-bind="i18n: title" class="mark" scope="row">Tạm tính</th>
                                                                        <td class="amount">
                                                                            <span class="price">{{ number_format($cart->total_price, 0, ',', '.') }}₫</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="totals shipping excl">
                                                                        <th class="mark" scope="row">
                                                                            <span class="label" data-bind="i18n: title">Vận chuyển</span>


                                                                            <span class="value" data-bind="text: getShippingMethodTitle()">Nhận hàng tại cửa hàng - Nhận hàng tại cửa hàng</span>
                                                                        </th>
                                                                        <td class="amount">
                                                                            <!-- ko if: isCalculated() -->
                                                                            <span class="price" data-bind="text: getValue(), attr: {'data-th': title}" data-th="Vận chuyển">0&nbsp;₫</span>

                                                                            <!-- ko ifnot: isCalculated() -->

                                                                        </td>
                                                                    </tr>

                                                                    <tr class="grand totals">
                                                                        <th class="mark" scope="row">
                                                                            <strong data-bind="i18n: title">Thành tiền</strong>
                                                                        </th>
                                                                        <td data-bind="attr: {'data-th': title}" class="amount" data-th="Thành tiền">
                                                                            <strong><span class="price" data-bind="text: getValue()">{{ number_format($cart->total_price, 0, ',', '.') }}</span></strong>
                                                                        </td>
                                                                    </tr>

                                                                </tbody>

                                                            </table>


                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="items-after" data-bind="scope: 'checkout.sidebar.summary.itemsAfter'">
                                                </div>
                                                <div class="before-osc-button" data-bind="scope:'checkout'">

                                                    <div class="onestepcheckout-discount">

                                                        <div data-role="checkout-messages" class="messages" data-bind="visible: isVisible(), click: removeAll">

                                                        </div>

                                                        <!--/ko-->

                                                    </div>
                                                    <div class="button-set clearfix button-onestepcheckout">
                                                        <div class="clear"></div>
                                                        <button type="submit" class="btn btn-default check_out" href="{{ url('checkout') }}">Gửi đơn hàng</button>
                                                    </div>



                                                    <!--/ko-->
                                                </div>
                                            </div>

                                            <!--/ko-->
                                        </div>
                                        <!--/ko-->
                                    </div>

                                </div>
                            </div>


                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
</body>
@endsection
