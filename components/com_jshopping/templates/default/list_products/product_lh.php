<?php 
/**
* @version      4.8.0 05.11.2013
* @author       MAXXmarketing GmbH
* @package      Jshopping
* @copyright    Copyright (C) 2010 webdesigner-profi.de. All rights reserved.
* @license      GNU/GPL
*/
defined('_JEXEC') or die('Restricted access');
?>
<?php print $product->_tmp_var_start?>
<div class="product productitem_<?php print $product->product_id?>">

	<h2 class="listProductName">
		<a href="<?php print $product->product_link?>" title="<?php print $product->name?>"><?php $product->name = mb_substr($product->name,0,50, 'UTF-8'); ?><?php echo $product->name.''; ?></a>
		<?php if ($this->config->product_list_show_product_code){?><span class="listProductCode"><?php print $product->product_ean;?></span><?php }?>
    </h2>
	
	
    <div class="listProductImage">
        <?php if ($product->image){?>
			    <?php print $product->_tmp_var_image_block;?>
                <?php if ($product->label_id){?>
                    <div class="productLabel">
                       <?php if ($product->_label_image){?>
                            <img src="<?php print $product->_label_image?>" alt="<?php print htmlspecialchars($product->_label_name)?>" />
                        <?php }else{?>
                            <span><?php print $product->_label_name;?></span>
                        <?php }?>
                    </div>
                <?php }?>
                <a href="<?php print $product->product_link?>">
                    <img src="<?php print $product->image?>" alt="<?php print htmlspecialchars($product->name);?>" title="<?php print htmlspecialchars($product->name);?>"  />
                </a>
        <?php }?>   
    </div>
	

	<div class="listProductDescription">
		<p><?php $product->name = mb_substr($product->short_description,0,150, 'UTF-8'); ?><?php echo $product->short_description.''; ?></p>
      
        </div>
	


		<div class="clear"></div>
        
        
        
    
        
        <div class="listProductButtons">    
            <a  href="<?php print $product->product_link?>"><?php print _JSHOP_DETAIL?></a>
        </div>

</div>

<?php print $product->_tmp_var_end?>