<?php
/**
* @version      4.8.0 05.11.2013
* @author       MAXXmarketing GmbH
* @package      Jshopping
* @copyright    Copyright (C) 2010 webdesigner-profi.de. All rights reserved.
* @license      GNU/GPL
*/ 
defined('_JEXEC') or die('Restricted access');
$product = $this->product;
include(dirname(__FILE__)."/load.js.php");
?>

<div class="jshop productfull" id="comjshop">
    <form name="product" method="post" action="<?php print $this->action?>" enctype="multipart/form-data" autocomplete="off">
    
        <?php print $this->_tmp_product_html_start;?>
        
        <?php if ($this->config->display_button_print) print printContent();?>
		<h1 class="productTitle animatable zoomIn"><?php print $this->product->name?></h1>
		<!-- LEFT -->
   <!--     <div class="productLeft animatable fadeInLeft">
            <div class="productImages">
                
                <?php if ($product->label_id){?>
                    <div class="productLabel">
                        <?php if ($product->_label_image){?>
                            <img src="<?php print $product->_label_image?>" alt="<?php print htmlspecialchars($product->_label_name)?>" />
                        <?php }else{?>
                            <span class="labelName"><?php print $product->_label_name;?></span>
                        <?php }?>
                    </div>
                <?php }?>
                    <?php print $this->_tmp_product_html_body_image?>
                    
                    <?php if(!count($this->images)){?>
                        <img id = "main_image" src = "<?php print $this->image_product_path?>/<?php print $this->noimage?>" alt = "<?php print htmlspecialchars($this->product->name)?>" />
                    <?php }?>
                    
				<div class="productImage">
                    <?php foreach($this->images as $k=>$image){?>
                        <a class="lightbox" id="main_image_full_<?php print $image->image_id?>" href="<?php print $this->image_product_path?>/<?php print $image->image_full;?>" <?php if ($k!=0){?>style="display:none"<?php }?> title="<?php print htmlspecialchars($image->_title)?>">
                            <img id = "main_image_<?php print $image->image_id?>" src = "<?php print $this->image_product_path?>/<?php print $image->image_name;?>" alt="<?php print htmlspecialchars($image->_title)?>" title="<?php print htmlspecialchars($image->_title)?>" />
                        </a>
                    <?php }?>
				</div>
				
				<ul class="productImageThumb">
                    <?php if ( (count($this->images)>1) || (count($this->videos) && count($this->images)) ) {?>
                        <?php foreach($this->images as $k=>$image){?>
                            <li><img src="<?php print $this->image_product_path?>/<?php print $image->image_thumb?>" alt="<?php print htmlspecialchars($image->_title)?>" title="<?php print htmlspecialchars($image->_title)?>" onclick="showImage(<?php print $image->image_id?>)" /></li>
                        <?php }?>
                    <?php }?>
                </ul>  
                
                <?php print $this->_tmp_product_html_after_image;?>   
            </div>
        </div>

		<div class="productCenter animatable fadeInRight">
		

		 <?php if (is_array($this->product->extra_field)){?>
							<div class="extra_fields">
							<?php foreach($this->product->extra_field as $extra_field){?>
                                <?php if( 13 == $extra_field['id']){
                                    $displayPrice = $extra_field['value'];
                                    continue;
                                } ?>
								<?php if ($extra_field['grshow']){?>
									<div class='block_efg'>
								
								<?php }?>
								
								<div class="extra_fields_el">
									<span class="extra_fields_name"><?php print $extra_field['name'];?></span><?php if ($extra_field['description']){?> 
										<span class="extra_fields_description">
											<?php print $extra_field['description'];?>
										</span><?php } ?>:
									<span class="extra_fields_value">
										<?php print $extra_field['value'];?>
									</span>
								</div>
												
								<?php if ($extra_field['grshow']){?>
									</div>
								<?php }?>
							<?php }?>
							</div>
						<?php }?>
		
	 <div class="productPriceBlock">
			<?php if ($this->product->product_price == 0){?>
			<a href="#" id="ProductExactPriceLink">Цену уточняйте у менеджера</a>
			<?php } else { ?>
				<span class="productProdPrice">
					Цена: <span id="block_price">
                            <?php
                                if ($displayPrice){
                                 print $displayPrice;
                                }else {
                                    print formatprice($this->product->getPriceCalculate());
                                    print $this->product->_tmp_var_price_ext;
                                }
                            ?>

                        </span>
				</span>
			<?php }?>
		</div>
		<br/>
		<a href="#" id="buttonOrder">Оформить заявку</a>
		<br/>
		 <div class="share42init" style="padding:10px;"></div>
		<script type="text/javascript" src="share42/share42.js"></script>
	
		</div>
		
		 <div class="clear"></div>-->

		<div class="animatable fadeInUp">
			<div class="productTabsContent">
				<?php print $this->product->description; ?>
			</div>
		</div>
		
		

		</div><!--End Bottom-->
        <input type="hidden" name="to" id='to' value="cart" />
        <input type="hidden" name="product_id" id="product_id" value="<?php print $this->product->product_id?>" />
        <input type="hidden" name="category_id" id="category_id" value="<?php print $this->category_id?>" />
    </form>
		<div class="clear"></div>
		<div class="productBottom">
			
<?php
/* creating og tags  for messengers  */



$document = JFactory::getDocument();
$document->addCustomTag('<meta property="og:title" content="'.$this->product->name.'">');
$document->addCustomTag('<meta property="og:site_name" content="'.'Туристическое агентство - Viko Travel'.'">');
$document->addCustomTag('<meta property="og:url" content="'.'Туристическое агентство - Viko Travel'.'">');
$document->addCustomTag('<meta property="og:description" content="'.$this->product->short_description.'">');
$document->addCustomTag('<meta property="og:image" content="'.$this->image_product_path.'/'.$image->image_name.'">');

 ?>
   

    
   
    
    <?php print $this->_tmp_product_html_end;?>
</div>



