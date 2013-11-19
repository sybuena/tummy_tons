<?php //echo '<pre>'; print_r($category[$cat_ID]); exit; $variable = $category[$cat_ID]['products'][$prod_ID]; ?>
<div class="product-page">

	
	<div class="container">
		<div class="row">

			<div class="col-xs-12">
				<a href="/">Home</a> &gt; <a href=""><?php echo ucfirst($category[$cat_ID]['category_name']); ?></a> &gt; <?php echo ucfirst($variable['name']); ?>
			</div> <!-- //end span12 -->

		</div> <!-- //end row -->
	</div> <!-- //end container -->
	
	<div class="container product-main">
		<div class="row">

			<div class="col-sm-6">
				<div class="content">
					<!-- Product information for small screens -->
					
				
					<div class="main-imgs clearfix">
						<a href="img/product-1.jpg" title="BeachFront Frog swimsuit: view 1"><img id="img1" src="<?php echo !empty($variable['image']) ? $variable['image'] : $default; ?>" alt="BeachFront Frog swimsuit" class="main-img img-responsive" width="800"></a>
						
					</div>
					<!--<ul class="alternate-images clearfix">
						<li><a href="#" data-img="img1"><img src="img/product-1-mini.jpg" alt=""></a></li>
						<li><a href="#" data-img="img2"><img src="img/product-2-mini.jpg" alt=""></a></li>
					</ul>-->
				</div>
			</div> <!-- // end span6 -->

			<div class="col-sm-6">
				<div class="content">
					
					<!-- Product information for large screens -->
					<div class="product-details-large">
						<!-- Product name and manufacturer -->
						<h1><?php echo ucfirst($variable['name']); ?></h1>

						<!-- Product rating and review info -->
						<div class="ratings clearfix">
							<div class="rateit" data-rateit-value="4.6" data-rateit-ispreset="true" data-rateit-readonly="true"><div class="rateit-reset" style="display: none;"></div><div class="rateit-range" style="width: 80px; height: 16px;"><div class="rateit-selected rateit-preset" style="height: 16px; width: 73.6px;"></div><div class="rateit-hover" style="height:16px"></div></div></div>
							<div class="extra">
								<a href="#reviews">Read all 10 reviews</a> | <a href="review-product.html">Write a review</a>
							</div>
						</div>
					
						<!-- Pricing and offer info -->
						<div class="pricing clearfix">
							<p class="price"><span class="cur">Php </span><span class="total"><?php echo number_format($variable['price'],2);?></span> <span class="delivery">&amp; free delivery</span></p>
							<p class="special">some promotion here</p>
						</div>
					</div>
					
					<!-- Product options -->
					<form class="form-inline clearfix cart details-extra" action="#">
						<div>
							<label>Quantity</label>
							<input type="text" class="input-sm form-control quantity" value="1">
						</div>
						<!--<div>
							<label>Size</label>
							<select class="input-sm form-control">
								<option>S</option>
								<option>M</option>
								<option>L</option>										
							</select>
						</div>	-->						
						<button class="btn btn-large btn-atc qadd" id="<?php echo $variable['ID']; ?>">Add to cart</button>
					</form>
					
					<!-- Product description etc -->
					<ul class="nav nav-tabs" id="product-tabs">
						<li class="active"><a href="#description">Description</a></li>
						<li><a href="#care">some addded description</a></li>
						<li><a href="#sizing">maybe recipe</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="description">
							<p><?php echo $variable['description']; ?></p>
						</div>
						<div class="tab-pane" id="care">
							<p>asdasdsadasdsadasdas</p>
						</div>
						<div class="tab-pane" id="sizing">
							<p>asdasd</p>
							
							
						</div>
					</div>
					
					<!-- Share -->
					<!--<ul class="share">
						<li>
							<iframe allowtransparency="true" frameborder="0" scrolling="no" src="http://platform.twitter.com/widgets/tweet_button.1375828408.html#_=1378020990057&amp;count=none&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=http%3A%2F%2Fleapfrogui.com%2Fshopfrog%2Forange%2Fproduct.html&amp;size=m&amp;text=Shopfrog%20-%20Modern%20Ecommerce&amp;url=http%3A%2F%2Fleapfrogui.com%2Fshopfrog%2Forange%2Fproduct.html" class="twitter-share-button twitter-count-none" title="Twitter Tweet Button" data-twttr-rendered="true" style="width: 56px; height: 20px;"></iframe>
						</li>
						<li>
							<div id="___plusone_0" style="text-indent: 0px; margin: 0px; padding: 0px; background-color: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 32px; height: 20px; background-position: initial initial; background-repeat: initial initial;"><iframe frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 32px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 20px;" tabindex="0" vspace="0" width="100%" id="I0_1378020990181" name="I0_1378020990181" src="https://apis.google.com/u/0/_/+1/fastbutton?bsv=o&amp;usegapi=1&amp;size=medium&amp;annotation=none&amp;hl=en-US&amp;origin=http%3A%2F%2Fleapfrogui.com&amp;url=http%3A%2F%2Fleapfrogui.com%2Fshopfrog%2Forange%2Fproduct.html&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en_GB.wV28-a6nUqw.O%2Fm%3D__features__%2Fam%3DIQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAItRSTNtHYNjD7eP73kPwvSursC_yYiaIw#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&amp;id=I0_1378020990181&amp;parent=http%3A%2F%2Fleapfrogui.com&amp;pfname=&amp;rpctoken=32751409" data-gapiattached="true" title="+1"></iframe></div>
						</li>
						<li>
							<a href="//pinterest.com/pin/create/button/?url=http%3A%2F%2FPAGEURL&amp;media=http%3A%2F%2FIMAGE&amp;guid=48ASusaiQncc&amp;description=DESCRIPTION" class="PIN_1378020990454_pin_it_button PIN_1378020990454_pin_it_button_inline PIN_1378020990454_pin_it_beside" target="_blank" data-pin-log="button_pinit" data-pin-config="beside"><span class="PIN_1378020990454_hidden" id="PIN_1378020990454_pin_count_0"><i></i></span></a>
						</li>
						<li>
							<div class="fb-like fb_edge_widget_with_comment fb_iframe_widget" data-href="PAGEURL" data-send="false" data-width="120" data-show-faces="false" data-layout="button_count" fb-xfbml-state="rendered"><span style="height: 21px; width: 120px;"><iframe id="f3eb9f36cc" name="f2063ac8cc" scrolling="no" title="Like this content on Facebook." class="fb_ltr" src="http://www.facebook.com/plugins/like.php?api_key=&amp;channel_url=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D26%23cb%3Df3bffee86c%26domain%3Dleapfrogui.com%26origin%3Dhttp%253A%252F%252Fleapfrogui.com%252Ff10cda404c%26relation%3Dparent.parent&amp;colorscheme=light&amp;extended_social_context=false&amp;href=PAGEURL&amp;layout=button_count&amp;locale=en_US&amp;node_type=link&amp;sdk=joey&amp;send=false&amp;show_faces=false&amp;width=120" style="border: none; overflow: hidden; height: 21px; width: 120px;"></iframe></span></div>
						</li>
					</ul>-->
					
					
				</div>
			</div> <!-- // end span6 -->
			
		</div> <!-- //end row -->

		<div class="row" id="reviews">
			<div class="col-xs-12">
				<div class="review-overview">
					<div class="content clearfix">
						<h3>Reviews</h3>
						
						<!-- Review ratings breakdown -->
						<ul class="review-totals">
							<li>
								<p>5 star</p>
								<div class="meter">
									<span style="width: 50%"></span>
								</div>
								<p>5</p>
							</li>
							<li>
								<p>4 star</p>
								<div class="meter">
									<span style="width: 30%"></span>
								</div>
								<p>3</p>
							</li>
							<li>
								<p>3 star</p>
								<div class="meter">
									<span style="width: 20%"></span>
								</div>
								<p>2</p>
							</li>
							<li>
								<p>2 star</p>
								<div class="meter">
									<span style="width: 0%"></span>
								</div>
								<p>0</p>
							</li>
							<li>
								<p>1 star</p>
								<div class="meter">
									<span style="width: 0%"></span>
								</div>
								<p>0</p>
							</li>
						</ul>
							
						<!-- Review average -->
						<div class="review-main">
							<div class="rateit bigstars" data-rateit-value="4.6" data-rateit-ispreset="true" data-rateit-readonly="true" data-rateit-starwidth="32" data-rateit-starheight="32"><div class="rateit-reset" style="display: none;"></div><div class="rateit-range" style="width: 160px; height: 32px;"><div class="rateit-selected rateit-preset" style="height: 32px; width: 147.2px;"></div><div class="rateit-hover" style="height:32px"></div></div></div>
							<p>4.6 out of 5 stars from 10 reviews</p>
							<p><a href="review-product.html" class="btn"><i class="icon-pencil icon-white"></i> write a review</a></p>
						</div>
					</div>
				</div>

				<div class="product-review">
	<div class="row">
		<div class="col-sm-8">
			<div class="content">
				<header>
					<div class="rateit" data-rateit-value="4.5" data-rateit-ispreset="true" data-rateit-readonly="true"><div class="rateit-reset" style="display: none;"></div><div class="rateit-range" style="width: 80px; height: 16px;"><div class="rateit-selected rateit-preset" style="height: 16px; width: 72px;"></div><div class="rateit-hover" style="height:16px"></div></div></div>
					<p><strong>Perfect, just what I wanted!</strong></p>
				</header>
				
				<p>Bacon ipsum dolor sit amet t-bone corned beef brisket, chicken rump jerky meatloaf venison andouille ground round pig beef shankle pork. Pork loin tenderloin flank, swine rump chicken sausage leberkas pig biltong pancetta tongue tail bresaola. Biltong pastrami jerky, capicola brisket sausage ribeye drumstick shoulder leberkas beef sirloin. Strip steak fatback drumstick tri-tip corned beef bresaola.</p>
				
				<footer>
					<a href="" class="btn btn-xs"><span class="icon-thumbs-up"></span> helpful</a>
					<a href="" class="btn btn-xs"><span class="icon-thumbs-down"></span> unhelpful</a>
					<a href="" class="btn btn-xs"><span class="icon-pencil"></span> comment</a>
				</footer>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="content review-author">
				<div class="top-contrib">Regular customer</div>
				<p><a href="user-profile.html">Naruto</a></p>
				<small>Aug 31th, 2013</small>	
				<p>User descrption. <a href="#">Read all my reviews →</a></p>
			</div>
		</div>
	</div>
</div>
				
				
					
			</div> <!-- //end span12 -->
		</div> <!-- //end row -->		
		
		<div class="row">
			<div class="col-xs-12">
				<div class="content clearfix">
					<h3>Related products</h3>
                    <?php $i = 0;?>
					<?php foreach($category[$cat_ID]['products'] as $v):?>
                    <?php if($i==5) break; ?>
                    <?php $i++;?>
					<div class="product medium">
                    <div class="media">
                        <a class="current" href="<?php echo '/category/detail/'.$cat_ID.'/'.($v['ID']-1); ?>" title="product title">
                            <img src="<?php echo !empty($v['image']) ? $v['image'] : $default; ?>" alt="product title" data-img="product-1" class="img-responsive">
                        </a>
                        <span class="plabel"><?php echo $v['name']; ?></span>				
                    </div>
                    <div class="details">
                        <p class="name"><a class="current" href="product.html"><?php echo $v['description']; ?></a></p>
                        <p class="price"><span class="cur">$</span><span class="total"><?php echo $v['price']; ?></span></p>
                        <a href="" class="details-expand" data-target="<?php echo 'details-000'.$i;?>">+</a>
                    </div>
                    <div class="details-extra" id="<?php echo 'details-000'.$i;?>">
                        <form class="form-inline" action="#">
                            <div>
                                <label>Quantity</label>	
                                <input type="text" class="input-sm form-control quantity" value="1">
                            </div>
                            <!--<div>
                                <label>Size</label>
                                <select class="input-sm form-control size">
                                    <option>S</option>
                                    <option>M</option>
                                    <option>L</option>										
                                </select>
                            </div>-->
                        </form>
                        <button class="btn btn-bottom btn-atc qadd">Add to cart</button>			
                    </div>
                </div>
                <?php endforeach;?>
					
				</div>
			</div> <!-- //end span12 -->
		</div> <!-- //end row -->		
		
	</div> <!-- //end container -->
	
	</div>