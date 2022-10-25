@extends('layout')
@section('content')
    {{-- @if ($newCart != null) --}}


    <body class="checkout-cart-index page-layout-1column">
        <main id="maincontent" class="page-main"><a id="contentarea" tabindex="-1"></a>
            <div class="container">
                <div data-placeholder="messages"></div>
                <div class="cart-container container">
                    <div class="row">
                        <div class="cart-information col-md-8">
                            <div class="cart-information-wrapper content-background pt-24 pb-24">
                                <h6 class="cart-title pb-16">Giỏ hàng</h6>
                                @foreach ($cart->items as $item)
                                    <form action="" method="post" class="form form-cart">
                                        <input name="form_key" type="hidden" value="HdJmeG3T7dNXUsQv" />
                                        <div class="cart table-wrapper">
                                            <table id="shopping-cart-table" class="cart items data table">
                                                <tbody class="cart item">
                                                    <tr class="item-info">
                                                        <td data-th="Sản phẩm" class="col item pt-16 pb-16">
                                                            <div class="item-wrapper">
                                                                <div class="col-image col-item-image mr-16">
                                                                    <a class="product-item-photo">
                                                                        <img src="{{ $item['image'] }}">
                                                                    </a>

                                                                </div>
                                                                <div class="col-item col-item-details">
                                                                    <div class="product-item-details">
                                                                        <div class="column column-product-name"
                                                                            style="width: 80%">
                                                                            <p class="product-item-name font-subtitle-1">
                                                                                <a
                                                                                    href="https://didongviet.vn/iphone-13-256gb.html">
                                                                                </a>
                                                                                {{ $item['name'] }}
                                                                            </p>
                                                                            <div class="product-options">
                                                                                <div class="product-option font-body-1">Màu
                                                                                    đen</div>
                                                                            </div>
                                                                        </div>

                                                                        <span class="price-excluding-tax"
                                                                            data-label="Excl.&#x20;Tax">
                                                                            <span class="cart-price">
                                                                                <span class="price">
                                                                                    {{ number_format($item['price'], 0, ',', '.') }}
                                                                                    ₫</span> </span>

                                                                        </span>
                                                                        <div class="product-actions">
                                                                            <div class="field qty">
                                                                                <div class="control qty">
                                                                                    <input type="hidden"
                                                                                        name="cart[{{$item['id']}}][qty]">
                                                                                    <a onclick="clickAlert(this, '-'); return false;"
                                                                                        href="{{ route('cart.update', ['id' => $item['id'], 'quantity' => 1, 'add' => 0]) }}"
                                                                                        class="desc font-subtitle-2">-</a>
                                                                                    <div class="number font-subtitle-2">
                                                                                        {{ $item['quantity'] }}</div>
                                                                                    <a onclick="clickAlert(this, '+'); return false;"
                                                                                        href="{{ route('cart.update', ['id' => $item['id'], 'quantity' => 1, 'add' => 1]) }}"
                                                                                        class="inc font-subtitle-2">+</a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="actions">
                                                                                <div id="gift-options-cart-item-1738140"
                                                                                    data-bind="scope:'giftOptionsCartItem-1738140'"
                                                                                    class="gift-options-cart-item">
                                                                                    <!-- ko template: getTemplate() -->
                                                                                    <!-- /ko -->

                                                                                </div>
                                                                                <a class="action action-edit"
                                                                                    href="https://didongviet.vn/checkout/cart/configure/id/1738140/product_id/13600/"
                                                                                    title="Edit&#x20;item&#x20;parameters">
                                                                                    <span>Edit</span>
                                                                                </a>
                                                                                <a href="{{ route('cart.clear') }}">
                                                                                    <span>
                                                                                        Xóa </span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-item-note">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>

                                    </form>
                                @endforeach
                            </div>
                        </div>
                        <div class="cart-summary sidebar-wrapper col-md-4">
                            <div class="cart-step content-background">
                                <div class="timeline-step">
                                    <div class="step-line step-line-1"></div>
                                    <div class="step-line step-line-2"></div>
                                    <span class="step step-1 step-active">
                                        <span class="step-box">
                                            <span class="step-text font-caption">Giỏ hàng</span>
                                        </span>
                                    </span>
                                    <span class="step step-2">
                                        <span class="step-box">
                                            <span class="step-text font-caption">Thanh toán <span>& Đặt hàng</span></span>
                                        </span>
                                    </span>
                                    <span class="step step-3">
                                        <span class="step-box">
                                            <span class="step-text font-caption">Hoàn tất</span>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="cart-summary-wrapper content-background mt-16 pt-24 pb-24">
                                <h6 class="summary&#x20;title&#x20;pb-16">Tạm Tính</h6>
                                <div id="cart-totals" class="cart-totals" data-bind="scope:'block-totals'">
                                    <!-- ko template: getTemplate() -->
                                    <!-- /ko -->

                                </div>
                                <div class="table-total total-wrapper mt-16 mb-16">
                                    <div class="table-row total-row">
                                        <label class="title font-body-2">Tiền hàng</label>
                                        <div class="amount font-body-2">{{ number_format($cart->total_price, 0, ',', '.') }} ₫
                                        </div>
                                    </div>
                                    <div class="table-row total-row mt-8">
                                        <label class="title font-body-2">Giảm giá</label>
                                        <div class="amount font-body-2">0đ</div>
                                    </div>
                                    <div class="table-row total-row mt-8">
                                        <label class="title font-body-2">Vận chuyển</label>
                                        <div class="amount font-body-2">0đ</div>
                                    </div>
                                    <div class="block discount mt-16 pb-16" id="block-discount"
                                        data-mage-init='{"collapsible":{"active": false, "openedState": "active", "saveState": false}}'>
                                        <div class="title" data-role="title">
                                            <strong id="block-discount-heading" role="heading" aria-level="2">Nhập mã giảm
                                                giá</strong>
                                        </div>
                                        <div class="content" data-role="content" aria-labelledby="block-discount-heading">
                                            <form id="discount-coupon-form"
                                                action="https://didongviet.vn/checkout/cart/couponPost/" method="post"
                                                data-mage-init='{"discountCode":{"couponCodeSelector": "#coupon_code",
                                               "removeCouponSelector": "#remove-coupon",
                                               "applyButton": "button.action.apply",
                                               "cancelButton": "button.action.cancel"}}'>
                                                <div class="fieldset coupon">
                                                    <input type="hidden" name="remove" id="remove-coupon"
                                                        value="0" />
                                                    <div class="field">
                                                        <label for="coupon_code" class="label"><span>Vui lòng nhập mã
                                                                giảm giá</span></label>
                                                        <div class="control">
                                                            <input type="text" class="input-text" id="coupon_code"
                                                                name="coupon_code" value=""
                                                                placeholder="Vui&#x20;l&#xF2;ng&#x20;nh&#x1EAD;p&#x20;m&#xE3;&#x20;gi&#x1EA3;m&#x20;gi&#xE1;" />
                                                        </div>
                                                    </div>
                                                    <div class="actions-toolbar ml-8">
                                                        <div class="primary">
                                                            <button class="action apply primary font-button"
                                                                type="button" value="&#xC1;p&#x20;d&#x1EE5;ng">Áp
                                                                dụng</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="table-footer total-row mt-16">
                                        <label class="title font-body-2">Tạm tính</label>
                                        <div class="amount grand-total">
                                            <h6></h6>
                                        </div>
                                    </div>
                                </div>
                                <ul class="checkout methods items checkout-methods-items">
                                    <li class="item">
                                        <a href="https://didongviet.vn/" class="continue-shopping">
                                            <div class="continue-shopping-wrapper font-button">Tiếp tục mua hàng</div>
                                        </a>
                                    </li>
                                    <li class="item">
                                        <button type="button"class="action primary checkout"><a
                                                href="{{ url('checkout') }}"><span>Tiến hành đặt
                                                    hàng</span></a></button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
            </div>
            </div>
            </div>
        </main>
    </body>
    {{-- @endif --}}
@endsection
