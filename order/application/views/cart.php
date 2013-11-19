<div class="page-general">
<div class="container">
    <div class="row">

        <div class="col-xs-12">
            <a href="index.html">Home</a> &gt; Shopping cart
        </div> <!-- //end span12 -->

    </div> <!-- //end row -->
</div> <!-- //end container -->

<div class="container main-content">
    <div class="row">
        <div class="col-xs-12">
            <div class="content">
                <h1>Your shopping cart</h1>
                <?php if(!isset($carts) && empty($carts)) :?>
                <div class="empty-cart">
                    <p class="lead">Your don't currently have any items in your cart.</p>
                    <p>Please <a href="index.html">return to the shop</a>.</p>
                </div>
                <?php else:?>
                <form action="shopping-cart.php" method="post" class="shopping-cart">
                    <table class="table table-striped">
                        <tbody>
                        <?php $grandTotal = 0?>
                        <?php foreach($carts as $k => $v) :?>
                        <tr> 
                            <td class="img"><img src="<?php echo !empty($v['image']) ? $v['image'] : '/assets/img/spag.jpg'; ?>" alt="" width="100"></td>
                            <td class="name"><a href="#"><?php echo strtoupper($v['name']); ?></a></td>
                            <td class="size"><span class="size-small">M</span><span class="size-large"></span></td>
                            <td class="stock instock"><span class="stock-small"></span><span class="stock-large"></span></td>
                            <td class="quantity-cell">
                                <a href="" class="quantity minus">-</a>
                                <span class="order-quantity" data-sub="20"><?php echo $v['quantity']?></span>
                                <a href="" class="quantity plus">+</a>									
                            </td>
                            <td class="sub-total"><span class="currency"> Php</span><span class="total"><?php echo number_format($v['total'],2)?></span></td>
                            <td><a href="" class="cart-remove pull-right" id="<?php echo $v['cart_ID']?>"><span class="remove-small">x</span><span class="remove-large">remove</span></a></td>
                            <?php $grandTotal = $grandTotal+$v['total'];?>
                        </tr>
                        <?php endforeach; ?>			
                        <tr class="cart-summary">
                            <td colspan="5"></td>
                            <td colspan="2" class="cart-total"><span class="currency">Php </span><span class="total-total">
                            <?php echo number_format($grandTotal,2); ?></span></td>
                        </tr>
                       	
                        <tr class="cart-summary">
                            <td colspan="7">
                                <?php if(isset($user)) :?>
                                <a class="btn btn-large pull-right" href="/cart/checkout">Checkout</a>
                                <?php else : ?>
                                <div class="alert alert-danger">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Almost there!</strong> You need to Login to continue to Checkout.
</div>
								<?php endif; ?>
                                <!-- <input class="btn" value="Checkout" /> -->
                            </td>
                        </tr>	
                    </tbody></table>
                </form>
                <?php endif;?>
                <div class="shopping-cart-help">
                    <p>Update or remove items from your cart before proceeding to checkout to calculate delivery cost and use any exclusive discount codes.</p>										
                    <p>
                        
                    </p>
                </div>
            </div>			
        </div> <!-- // end span12 -->
    </div> <!-- //end row -->
</div> <!-- //end container -->
</div>
