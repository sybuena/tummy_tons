<div class="collection-page">
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <a href="#">Category</a> &gt; Page &gt; <?php echo ucfirst($category[$page_ID]['category_name']); ?>
        </div> <!-- //end span12 -->	
    </div> <!-- //end row -->
</div> <!-- //end container -->


<div id="product-board" style="position: relative; height: 1715px;">

    <div class="product large static" style="position: absolute; left: 0px; top: 0px;">
        <div class="text">
            <h1><?php echo ucfirst($category[$page_ID]['category_name']); ?></h1>
            <p class="lead">
            <?php echo $category[$page_ID]['category_description']; ?>
            </p>
            		
        </div>
    </div>
    
    <!--
        Products
        --------
        Each item on the product board is identified by the 'product' class.
        There are two size variations, identified by the classes 'medium' or 'large'.
        
        Details expansion:
        The details expansion is operated by an id. 
        The 'details-extra' div has an id, eg: 'details-0001'
        This is paired with the anchor tag with class 'details-expand' which has a matching data-target of that id.
    -->
	<?php if(isset($category[$page_ID]['products'])) :?>
    <?php foreach($category[$page_ID]['products'] as $value) :?>
    	<?php /*if($value['promote']): ?>
        	<div class="product large" style="position: absolute; left: 400px; top: 0px;">
                <div class="media">
                    <a href="<?php echo '/category/detail/'.($value['category_ID']-1).'/'.($value['ID'])?>">
                    	<?php if(!empty($value['image'])) : ?>
                        <img src="<?php echo $value['image'];?>" alt="product title" 
                        data-img="product-1" class="img-responsive">
                        <?php else :?>
                        <img src="<?php echo $default;?>" alt="product title" 
                        data-img="product-1" class="img-responsive">
                        <?php endif; ?>
                    </a>
                    <span class="plabel"><?php echo $value['name']?></span>				
                </div>
                <div class="details">
                    <p class="name"><a href="product.html"><?php echo $value['description']?></a></p>
                    <p class="price"><span class="cur">PHP </span><span class="total"><?php echo $value['price']?></span></p>
                    <a href="" class="details-expand" data-target="<?php echo 'details-'.$value['ID'];?>">+</a>
                </div>
                <div class="details-extra" id="<?php echo 'details-'.$value['ID'];?>">
                    <form class="form-inline" action="#">
                        <div>
                            <label>Quantity</label>	
                            <input type="text" class="input-sm form-control quantity" value="1">
                        </div>
                        
                    </form>
                    <button class="btn btn-bottom btn-atc qadd"  id="<?php echo $value['ID']; ?>">Add to cart</button>			
                </div>
            </div>
        <?php else : */?>
        	<div class="product medium" style="position: absolute; left: 800px; top: 0px;">
                <div class="media">
                     <a href="<?php echo '/category/detail/'.($value['category_ID']-1).'/'.($value['ID'])?>">
                        <?php if(!empty($value['image'])) : ?>
                        <img src="<?php echo $value['image'];?>" alt="product title" 
                        data-img="product-1" class="img-responsive">
                        <?php else :?>
                        <img src="<?php echo $default;?>" alt="product title" 
                        data-img="product-1" class="img-responsive">
                        <?php endif; ?>
                    </a>
                    <span class="plabel"><?php echo $value['name']?></span>				
                </div>
                <div class="details">
                    <p class="name"><a href="product.html"><?php echo $value['description']?></a></p>
                    <p class="price"><span class="cur">Php </span><span class="total"><?php echo number_format($value['price'], 2); ?></span></p>
                    <a href="" class="details-expand" data-target="<?php echo 'details-'.$value['ID'];?>">+</a>
                </div>
                <div class="details-extra" id="<?php echo 'details-'.$value['ID'];?>">
                    <form class="form-inline" action="#">
                        <div>
                            <label>Quantity</label>	
                            <input type="text" class="input-sm form-control quantity" value="1">
                        </div>
                    </form>
                    <button class="btn btn-bottom btn-atc qadd" id="<?php echo $value['ID']; ?>">Add to cart</button>			
                </div>
            </div>	
		<?php //endif; ?>
        
    <?php endforeach;?>
    <?php endif; ?>
    
    <div class="product medium cta static" style="position: absolute; left: 400px; top: 1650px; transition: 0.4s; -webkit-transition: 0.4s; -webkit-transform: translate3d(-200px, -441px, 0);">
        <a href="">
            <div class="content">
                <p class="poff">Like <br> us!</p>
                <p>on facebook →</p>
            </div>
        </a>
    </div>		
    <div class="product medium cta alt" style="position: absolute; left: 400px; top: 1156px; transition: 0.4s; -webkit-transition: 0.4s; -webkit-transform: translate3d(-400px, -324px, 0);">
        <a href="collection.html">
            <div class="content">
                <p class="poff"> Extra <br> Rice?</p>
                <p>Order extra →</p>
            </div>
        </a>
    </div>
    
</div> <!-- //end product-board -->

</div>