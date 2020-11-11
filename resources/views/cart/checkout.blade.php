@extends('layouts.front')


@section('content')

{{-- <form action="{{route('orders.store')}}" method="post">
    @csrf


    <div class="form-group">
        <label for="">Full Name</label>
        <input type="text" name="shipping_fullname" id="" class="form-control">
    </div>

    <div class="form-group">
        <label for="">State</label>
        <input type="text" name="shipping_state" id="" class="form-control">
    </div>

    <div class="form-group">
        <label for="">City</label>
        <input type="text" name="shipping_city" id="" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Zip</label>
        <input type="number" name="shipping_zipcode" id="" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Full Address</label>
        <input type="text" name="shipping_address" id="" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Mobile</label>
        <input type="text" name="shipping_phone" id="" class="form-control">
    </div>

    <h4>Payment option</h4>

    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="payment_method" id="" value="cash_on_delivery">
            Cash on delivery

        </label>

    </div>

    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="payment_method" id="" value="paypal">
            Paypal

        </label>

    </div>


    <button type="submit" class="btn btn-primary mt-3">Place Order</button>


</form> --}}

        <!-- checkout-area start -->
        <div class="checkout-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="coupon-accordion">
                            <!-- ACCORDION START -->
                            <h3>Returning customer? <span id="showlogin">Click here to login</span></h3>
                            <div id="checkout-login" class="coupon-content">
                                <div class="coupon-info">
                                    <p class="coupon-text">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est sit amet ipsum luctus.</p>
                                    <form action="#">
                                        <p class="form-row-first">
                                            <label>Username or email <span class="required">*</span></label>
                                            <input type="text" />
                                        </p>
                                        <p class="form-row-last">
                                            <label>Password  <span class="required">*</span></label>
                                            <input type="text" />
                                        </p>
                                        <p class="form-row">
                                            <input type="submit" value="Login" />
                                            <label>
                                                <input type="checkbox" />
                                                 Remember me
                                            </label>
                                        </p>
                                        <p class="lost-password">
                                            <a href="#">Lost your password?</a>
                                        </p>
                                    </form>
                                </div>
                            </div>
                            <!-- ACCORDION END -->
                            <!-- ACCORDION START -->
                            <h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
                            <div id="checkout_coupon" class="coupon-checkout-content">
                                <div class="coupon-info">
                                    <form action="#">
                                        <p class="checkout-coupon">
                                            <input type="text" placeholder="Coupon code" />
                                            <input type="submit" value="Apply Coupon" />
                                        </p>
                                    </form>
                                </div>
                            </div>
                            <!-- ACCORDION END -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-12">
                        <form action="{{ route('orders.store') }}" method="POST">
                            @csrf
                            <div class="checkbox-form">
                                <h3>Billing Details</h3>
                                <div class="row">
                                    <div class="col-md-12">
                                        {{-- <div class="country-select">
                                            <label>Country <span class="required">*</span></label>
                                            <select>
                                              <option value="volvo">bangladesh</option>
                                              <option value="saab">Algeria</option>
                                              <option value="mercedes">Afghanistan</option>
                                              <option value="audi">Ghana</option>
                                              <option value="audi2">Albania</option>
                                              <option value="audi3">Bahrain</option>
                                              <option value="audi4">Colombia</option>
                                              <option value="audi5">Dominican Republic</option>
                                            </select>
                                        </div> --}}
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Full Name <span class="required">*</span></label>
                                            <input type="text" placeholder="" name="shipping_fullname"/>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Town / City <span class="required">*</span></label>
                                            <input type="text" name="shipping_state"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>State / County <span class="required">*</span></label>
                                            <input type="text" placeholder="" name="shipping_city" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Postcode / Zip <span class="required">*</span></label>
                                            <input type="text" name="shipping_zipcode"/>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Full Address <span class="required">*</span></label>
                                            <input type="text" name="shipping_address"/>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Phone  <span class="required">*</span></label>
                                            <input type="text" name="shipping_phone"/>
                                        </div>

                                        <h3>Payment Option</h3>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="payment_method" id="" value="cash_on_delivery">
                                                Cash on delivery

                                            </label>

                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="payment_method" id="" value="paypal">
                                                Paypal

                                            </label>

                                        </div>

                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list create-acc">
                                            <input id="cbox" type="checkbox" />
                                            <label>Create an account?</label>
                                        </div>
                                        <div id="cbox_info" class="checkout-form-list create-account">
                                            <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                            <label>Account password  <span class="required">*</span></label>
                                            <input type="password" placeholder="password" />
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="different-address">
                                    <div class="ship-different-title">
                                        <h3>
                                            <label>Ship to a different address?</label>
                                            <input id="ship-box" type="checkbox" />
                                        </h3>
                                    </div>
                                    <div id="ship-box-info" class="row">
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Full Name <span class="required">*</span></label>
                                                <input type="text" placeholder="" name="shipping_fullname"/>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Town / City <span class="required">*</span></label>
                                                <input type="text" name="shipping_state"/>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>State / County <span class="required">*</span></label>
                                                <input type="text" placeholder="" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Postcode / Zip <span class="required">*</span></label>
                                                <input type="text" name="shipping_zipcode"/>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Full Address <span class="required">*</span></label>
                                                <input type="email" name="shipping_address"/>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Phone  <span class="required">*</span></label>
                                                <input type="text" name="shipping_phone"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-notes">
                                        <div class="checkout-form-list mrg-nn">
                                            <label>Order Notes</label>
                                            <textarea id="checkout-mess" cols="30" rows="10" placeholder="Notes about your order, e.g. special notes for delivery." ></textarea>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        {{-- </form> --}}
                    </div>
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="your-order">
                            <h3>Your order</h3>
                            <div class="your-order-table table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-name">Product</th>
                                            <th class="product-total">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach (\Cart::session(auth()->id())->getContent() as $item)
                                            <tr class="cart_item">
                                                <td class="product-name">
                                                {{$item->name}} <strong class="product-quantity"> × {{$item->quantity}}</strong>
                                                </td>
                                                <td class="product-total">
                                                    <span class="amount">GH¢ {{Cart::session(auth()->id())->get($item->id)->getPriceSum()}}</span>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                    <tfoot>
                                        <tr class="cart-subtotal">
                                            <th>Cart Subtotal</th>
                                            <td><span class="amount">GH¢ {{Cart::session(auth()->id())->getTotal()}}</span></td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Order Total</th>
                                            <td><strong><span class="amount">GH¢ {{Cart::session(auth()->id())->getTotal()}}</span></strong>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="payment-method">
                                <div class="payment-accordion">
                                    <div class="panel-group" id="faq">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h5 class="panel-title"><a data-toggle="collapse" aria-expanded="true" data-parent="#faq" href="#payment-1">Direct Bank Transfer.</a></h5>
                                            </div>
                                            <div id="payment-1" class="panel-collapse collapse show">
                                                <div class="panel-body">
                                                    <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h5 class="panel-title"><a class="collapsed" data-toggle="collapse" aria-expanded="false" data-parent="#faq" href="#payment-2">Cheque Payment</a></h5>
                                            </div>
                                            <div id="payment-2" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h5 class="panel-title"><a class="collapsed" data-toggle="collapse" aria-expanded="false" data-parent="#faq" href="#payment-3">PayPal</a></h5>
                                            </div>
                                            <div id="payment-3" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-button-payment">
                                        <input type="submit" value="Place order" />
                                    </div></form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- checkout-area end -->


@endsection
