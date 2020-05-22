<?php 
/**
* @version      4.8.0 13.08.2013
* @author       MAXXmarketing GmbH
* @package      Jshopping
* @copyright    Copyright (C) 2010 webdesigner-profi.de. All rights reserved.
* @license      GNU/GPL
*/
defined('_JEXEC') or die('Restricted access');
?>

<div class="jshop" id="comjshop_list_product">
	<div id="grid" class="listProduct">
	<?php $i=0; foreach ($this->rows as $k=>$product) : ?>
		<li class="item animatable flipInX <?php if ($i%4 == 0) echo 'clear';?>">
			<?php $i++;

			include(dirname(__FILE__)."/product_lh.php");
			//include(dirname(__FILE__)."/".$product->template_block_product);

			?>
		</li>

	<?php endforeach; ?>
	</div>
	<div class="clear"></div>
</div>