@extends('main')

@section('content')

<script type="text/vue-template" id="cartView">

<div class="container">
    <div class="cart_wrapper">
        <h1>Checkout</h1>

        <div id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading active" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <button type="button" class="btn btn-default btn-circle active">1</button> Your Cart
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in cart_detail" role="tabpanel" aria-labelledby="headingOne">
                    <div class="container">

                        <div class="row" v-for="cartItem in cartItems">
                            <div class="cart_pro_img">
                                <img src="/img/whim_roses_1.png">
                            </div>

                            <div class="cart_pro_info">
                                <h4>@{{cartItem.name}}</h4>
                                {{--<p>@{{cartItem.options.description}}</p>--}}
                            </div>

                            <div class="cart_q">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">Quantity</span>
                                    <input type="text" class="form-control" v-model="quantity[cartItem.rowid]" aria-describedby="basic-addon1" value="@{{cartItem.qty}}">
                                </div>

                                <div class="del_up">
                                    <a @click="updateItem(cartItem.rowid, quantity[cartItem.rowid])">Update</a> | <a @click="deleteItem(cartItem.rowid)">Delete</a>
                                </div>

                            </div>

                            <div class="cart_pro_price">
                                <h3>@{{cartItem.price * cartItem.qty}}</h3>
                            </div>

                            <div class="line_divide"></div>

                        </div>

                        <div class="row col-sm-offset-7">
                            {{--<h3>Product Total: {{$total}}</h3>--}}
                            {{--<h4>Taxes: $5.75</h4>--}}
                            <h3><b>Subtotal: @{{total | currency}}</b></h3>
                        </div>

                        <div class="row">
                            <div class="pull-right cont_ship">
                                <a class="btn btn-default collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" role="button">Shipping <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <button type="button" class="btn btn-default btn-circle">2</button> Shipping Options
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4 col-sm-offset-1">
                                <h4>Where should we send your items?</h4>
                                <form>
                                    <fieldset class="form-group">
                                        <label for="ship_name">First & Last Name</label>
                                        <input type="text" class="form-control" id="ship_name" placeholder="Name" v-model="ship_name">
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <label for="ship_add1">Address Line 1</label>
                                        <input type="text" class="form-control" id="ship_add1" placeholder="Address 1" v-model="address1">
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <label for="ship_add2">Address Line 2 (optional)</label>
                                        <input type="text" class="form-control" id="ship_add2" placeholder="Address 2" v-model="address2">
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <label for="ship_city">City</label>
                                        <input type="text" class="form-control" id="ship_city" placeholder="City" v-model="city">
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <label for="ship_state">State</label>
                                        <input type="text" class="form-control" id="ship_state" placeholder="State" v-model="state">
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <label for="ship_zip">Zip Code</label>
                                        <input type="number" class="form-control" id="ship_zip" placeholder="Zip" v-model="zip">
                                    </fieldset>
                                </form>
                            </div>
                            <div class="col-sm-4 col-sm-offset-1">
                                <h4>Shipping Options</h4>
                                <small>Use plugin that calculates based on location?</small>
                                <div class="c-inputs-stacked">
                                    <label class="c-input c-radio">
                                        <input id="shipping_exp" name="radio-stacked" type="radio" v-model="shipping">
                                        <span class="c-indicator"></span>
                                        Express Shipping: $20.00 (arrives in 1-2 days)
                                    </label>
                                    <label class="c-input c-radio">
                                        <input id="shipping_stan" name="radio-stacked" type="radio" v-model="shipping">
                                        <span class="c-indicator"></span>
                                        Business Shipping: $7.00 (arrives in 3-5 days)
                                    </label>
                                    <label class="c-input c-radio">
                                        <input id="shipping_slow" name="radio-stacked" type="radio" v-model="shipping">
                                        <span class="c-indicator"></span>
                                        Standard Shipping: $5.00 (arrives in 7-10 days)
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="pull-right cont_ship">
                                <a class="btn btn-default collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" role="button">Payment <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <button type="button" class="btn btn-default btn-circle">3</button> Payment
                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-3 col-sm-offset-1">
                                <h4>Card Information</h4>
                                <form>
                                    <fieldset class="form-group">
                                        <label for="card_name">Card Holder Name</label>
                                        <input type="text" class="form-control" id="card_name" placeholder="Name">
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <label for="card_num">Card Number</label>
                                        <input type="number" class="form-control" id="card_num" placeholder="123456789123456789">
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <label for="exp_date">Expiration Date</label>
                                        <input type="number" class="form-control" id="exp_date" placeholder="mm/yy">
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <label for="sec_code">Security Code (three digits)</label>
                                        <input type="number" class="form-control" id="sec_code" placeholder="123">
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <label for="con_email">Email Address (for confirmation email)</label>
                                        <input type="email" class="form-control" id="con_email" placeholder="eiohd@email.com">
                                    </fieldset>
                                </form>
                            </div>
                            <div class="col-sm-4 col-sm-offset-1">
                                <h4>Billing Address</h4>
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="ship_bill" value="option1"> Shipping address sames as billing address?
                                </label>
                                <form>
                                    <fieldset class="form-group">
                                        <label for="bill_name">First & Last Name</label>
                                        <input type="text" class="form-control" id="bill_name" placeholder="Name">
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <label for="bill_add1">Address Line 1</label>
                                        <input type="text" class="form-control" id="bill_add1" placeholder="Address 1">
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <label for="bill_add2">Address Line 2 (optional)</label>
                                        <input type="text" class="form-control" id="bill_add2" placeholder="Address 2">
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <label for="bill_city">City</label>
                                        <input type="text" class="form-control" id="bill_city" placeholder="City">
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <label for="ship_state">State</label>
                                        <input type="text" class="form-control" id="bill_state" placeholder="State">
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <label for="ship_zip">Zip Code</label>
                                        <input type="number" class="form-control" id="bill_zip" placeholder="Zip">
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="pull-right cont_ship">
                                <a class="btn btn-default collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour" role="button">Confirm <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFour">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <button type="button" class="btn btn-default btn-circle">4</button> Confirm
                        </a>
                    </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                     <div class="container">
                        <div class="row">
                            <div class="col-sm-4 ship_pro">
                                <table class="table table-sm">
                                    <thead>
                                    <h4>Items to be Shipped</h4>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Product</td>
                                        <td>$30.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Product</td>
                                        <td>$30.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Product</td>
                                        <td>$30.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Subtotal</th>
                                        <td></td>
                                        <td><b>$90.00</b></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Taxes</th>
                                        <td>$5.75</td>
                                        <td><b>$95.75</b></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Shipping</th>
                                        <td>$5.00</td>
                                        <td><b>$100.75</b></td>
                                    </tr>
                                    <tr class="total">
                                        <th>Total:</th>
                                        <td></td>
                                        <td>$100.75</td>
                                    </tr>
                                    </tbody>

                                </table>
                            </div>
                            <div class="col-sm-3 col-sm-offset-1 ship_pay">
                                <h4>Shipping Address</h4>
                                <h5>123 N Main Lane Phoenix, AZ 12547</h5>

                                <h4>Payment</h4>
                                <h5>Visa ending in 123</h5>
                            </div>
                            <div class="col-sm-3 col-sm-offset-1">
                                <h4>Return Policy</h4>
                                <p>Wiqoij i lascakete board wilkdht woialdk. Wiqoij i lascakete board wilkdht woialdk.Wiqoij i lascakete board wilkdht woialdk.Wiqoij i lascakete board wilkdht woialdk.Wiqoij i lascakete board wilkdht woialdk.</p>
                            </div>
                        </div>

                         <div class="row">
                             <div class="col-sm-3 col-sm-offset-5">
                                 <div class="cont_ship">
                                     <button type="submit" class="btn btn-default" data-toggle="modal" data-target="#sub_thanks">Looks good! Submit!</button>
                                     <div id="sub_thanks" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="submit_thanks" aria-hidden="true" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                         <div class="modal-dialog modal-lg">
                                             <div class="modal-content">
                                                 <div>
                                                     <div class="modal-header">
                                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true"><span>&times;</span></button>
                                                         <h4 class="modal-title">Thank you for shopping with us!</h4>
                                                     </div>
                                                     <div class="modal-body">
                                                        <p>Your confirmation code is: 45GT98</p>
                                                         <p>A confirmation email is on it's way to your inbox!</p>
                                                         <a class="btn" href="/all">Check out more cool stuff!</a>
                                                     </div>
                                                     <div class="modal-footer">
                                                         <h5>If you have any questions about your order give us a call at (801) 100-5800</h5>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>

                </div>
            </div>
        </div>
    </div>
</div>

</script>

<cart cart-items="{{ json_encode($cartItems)}}" total="{{$total}}"></cart>

@stop