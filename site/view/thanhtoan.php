<div class="container">



    <div id="content" class="content-area page-wrapper" role="main">
        <div class="row row-main">
            <div class="large-12 col">
                <div class="col-inner">
                    <div class="woocommerce">

                        <div class="woocommerce-notices-wrapper"></div>
                        <form name="checkout" method="post" class="checkout woocommerce-checkout "
                            enctype="multipart/form-data">

                            <div class="row pt-0 ">
                                <div class="large-7 col  ">
                                    <div id="customer_details">
                                        <div class="clear">
                                            <div class="woocommerce-billing-fields">

                                                <h3>Thông tin đặt hàng</h3>

                                                <?php 
                                                    if(isset($thongbao)){?>
                                                        <p><?=$thongbao?></p>
                                                <?php }?>
                                                <div class="woocommerce-billing-fields__field-wrapper">
                                                    
                                                    <p class="form-row form-row-wide address-field update_totals_on_change validate-required"
                                                 
                                                        id="billing_first_name_field" data-priority="10"><label
                                                            for="billing_first_name" class="">Tên&nbsp;<abbr
                                                                class="required" title="bắt buộc"></abbr></label><span
                                                            class="woocommerce-input-wrapper"><input type="text"
                                                                class="input-text " name="hoten" id="hoten"
                                                                placeholder="" value=""
                                                                
                                                                autocomplete="given-name" /></span></p>



                                                    <p class="form-row form-row-wide address-field validate-required"
                                                        data-priority="50">
                                                        <label for="billing_address_1" class="">Địa chỉ&nbsp;<abbr
                                                                class="required" title="bắt buộc"></abbr></label><span
                                                            class="woocommerce-input-wrapper">
                                                            <textarea name="diachi"></textarea>
                                                        </span>
                                                    </p>

                                                    <p class="form-row form-row-wide validate-required validate-phone"
                                                        data-priority="100"><label for="sdt" class="">Số điện
                                                            thoại&nbsp;<abbr class="required"
                                                                title="bắt buộc"></abbr></label><span
                                                            class="woocommerce-input-wrapper"><input type="tel"
                                                                class="input-text " name="sdt" id="sdt" placeholder=""
                                                                value="" autocomplete="tel" /></span></p>
                                                    <p class="form-row form-row-wide validate-required validate-email"
                                                        id="billing_email_field" data-priority="110">
                                                        <label for="billing_email" class="">Địa chỉ
                                                            email&nbsp;<abbr class="required"
                                                                title="bắt buộc"></abbr></label><span
                                                            class="woocommerce-input-wrapper"><input type="email"
                                                                class="input-text" name="email" id="billing_email"
                                                                placeholder="" value=""
                                                                autocomplete="email username" /></span>
                                                    </p>




                                                    <p class="form-row form-row-wide address-field validate-required"
                                                        data-priority="50">
                                                        <label for="billing_ghichu" class="">Ghi chú&nbsp;<abbr
                                                                class="required" title="bắt buộc"></abbr></label><span
                                                            class="woocommerce-input-wrapper">
                                                            <textarea id="billing_ghichu" name="ghichu"></textarea>
                                                        </span>
                                                    </p>
                                                </div>

                                            </div>


                                        </div>


                                    </div>



                                </div>

                                <div class="large-5 col">

                                    <div class="col-inner has-border">
                                        <div class="checkout-sidebar sm-touch-scroll">
                                            <h3 id="order_review_heading">Đơn hàng của bạn</h3>


                                            <div id="order_review" class="woocommerce-checkout-review-order">
                                                <table class="shop_table woocommerce-checkout-review-order-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="product-name">Sản phẩm</th>
                                                            <th class="product-total">Tạm tính</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <?php $tongtien = 0;
                                                                if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])){
                                                                    foreach($_SESSION['cart'] as $item ){ extract($item); $tongtien+=$soluong * $dongia;?>

                                                        <tr class="cart_item">
                                                            <td class="product-name">
                                                                <?=$tensp?>&nbsp; <strong
                                                                    class="product-quantity">&times;&nbsp;<?=$soluong?></strong>
                                                            </td>
                                                            <td class="product-total">
                                                                <span class="woocommerce-Price-amount amount"><bdi><?=number_format($dongia*$soluong,0,'.',',')?>
                                                                        &nbsp;<span
                                                                            class="woocommerce-Price-currencySymbol">&#8363;</span></bdi>
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <?php }}?>
                                                    </tbody>
                                                    <tfoot>

                                                        <tr class="cart-subtotal">
                                                            <th>Tạm tính</th>
                                                            <td><span class="woocommerce-Price-amount amount"><bdi><?=number_format($tongtien,0,'.',',')?>&nbsp;<span
                                                                            class="woocommerce-Price-currencySymbol">&#8363;</span></bdi>
                                                                </span>
                                                            </td>
                                                        </tr>



                                                        <!-- 
                                                                <tr class="woocommerce-shipping-totals shipping ">
                                                                    <td class="shipping__inner" colspan="2">
                                                                        <table class="shipping__table shipping__table--multiple">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th colspan="2">Giao hàng</th>
                                                                                    <td data-title="Giao hàng">
                                                                                        <ul id="shipping_method" class="shipping__list woocommerce-shipping-methods">
                                                                                            
                                                                                            <li class="shipping__list_item">
                                                                                                <input type="radio" name="shipping_method[0]" data-index="0" id="shipping_method_0_flat_rate1" value="flat_rate:1" class="shipping_method" /><label class="shipping__list_label"
                                                                                                    for="shipping_method_0_flat_rate1">Ship
                                                                                                    nội thành Hà Nội,
                                                                                                    HCM: <span
                                                                                                        class="woocommerce-Price-amount amount"><bdi>20.000&nbsp;<span
                                                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></label>
                                                                                            </li>
                                                                                            <li class="shipping__list_item">
                                                                                                <input type="radio" name="shipping_method[0]" data-index="0" id="shipping_method_0_flat_rate3" value="flat_rate:3" class="shipping_method" /><label class="shipping__list_label"
                                                                                                    for="shipping_method_0_flat_rate3">Ship
                                                                                                    hàng ngoại thành
                                                                                                    &amp; toàn quốc:
                                                                                                    <span
                                                                                                        class="woocommerce-Price-amount amount"><bdi>30.000&nbsp;<span
                                                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></label>
                                                                                            </li>
                                                                                            <li class="shipping__list_item">
                                                                                                <input type="radio" name="shipping_method[0]" data-index="0" id="shipping_method_0_flat_rate5" value="flat_rate:5" class="shipping_method" checked='checked' />
                                                                                                <label class="shipping__list_label" for="shipping_method_0_flat_rate5">Ship
                                                                                                    hàng hỏa tốc trong
                                                                                                    vòng 2h: <span
                                                                                                        class="woocommerce-Price-amount amount"><bdi>30.000&nbsp;<span
                                                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi>
                                                                                                    </span>
                                                                                                </label>
                                                                                            </li>
                                                                                        </ul>


                                                                                    </td>
                                                                            </tbody>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr> -->






                                                        <tr class="order-total">
                                                            <th>Tổng</th>
                                                            <td><strong><span
                                                                        class="woocommerce-Price-amount amount"><bdi><?=number_format($tongtien,0,'.',',')?>&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></strong>
                                                            </td>
                                                        </tr>


                                                    </tfoot>
                                                </table>
                                                <div id="payment" class="woocommerce-checkout-payment">
                                                    <ul class="wc_payment_methods payment_methods methods">
                                                        <li class="wc_payment_method payment_method_cod">
                                                            <input id="payment_method_cod" type="radio"
                                                                class="input-radio" name="payment_method" value="tttm"
                                                                checked='checked' data-order_button_text="" />

                                                            <label for="payment_method_cod">
                                                                Trả tiền mặt khi nhận hàng </label>

                                                        </li>

                                                    </ul>
                                                    <div class="form-row place-order">


                                                        <div class="woocommerce-terms-and-conditions-wrapper">

                                                        </div>


                                                        <button type="submit" name="dat_hang" class="button alt"
                                                            name="woocommerce_checkout_place_order" id="place_order"
                                                            value="Đặt hàng" data-value="Đặt hàng">Đặt hàng</button>


                                                    </div>
                                                </div>
                                            </div>

                                            <div class="woocommerce-privacy-policy-text"></div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </form>

                    </div>

                    <div class="kk-star-ratings
         kksr-valign-bottom     kksr-align-right    "
                        data-payload="{&quot;align&quot;:&quot;right&quot;,&quot;id&quot;:&quot;8&quot;,&quot;slug&quot;:&quot;default&quot;,&quot;valign&quot;:&quot;bottom&quot;,&quot;reference&quot;:&quot;auto&quot;,&quot;count&quot;:&quot;124&quot;,&quot;readonly&quot;:&quot;&quot;,&quot;score&quot;:&quot;3.6&quot;,&quot;best&quot;:&quot;5&quot;,&quot;gap&quot;:&quot;4&quot;,&quot;greet&quot;:&quot;\u0110\u00e1nh gi\u00e1&quot;,&quot;legend&quot;:&quot;3.6\/5 - (124 b\u00ecnh ch\u1ecdn)&quot;,&quot;size&quot;:&quot;24&quot;,&quot;width&quot;:&quot;98.8&quot;,&quot;_legend&quot;:&quot;{score}\/{best} - ({count} {votes})&quot;}">
                    </div>
                </div>
            </div>
        </div>






    </div>