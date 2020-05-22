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
<div class="jshop" id="comjshop">
	<div class="categoryTitle animatable zoomIn">
		<h1><?php print $this->category->name?></h1>
	</div>
    <div class="categoryDescription">
        <p><?php print $this->category->short_description?></p>
			<?php print $this->category->description?>
    </div>

    <ul id="grid" class="jshopListCategory">
        <?php foreach ($this->categories as $k => $category) : ?>
			<li class="item">
                <div class="jshopListCategoryImage">
                    <a href = "<?php print $category->category_link;?>"><img src = "<?php print $this->image_category_path;?>/<?php if ($category->category_image) print $category->category_image; else print $this->noimage;?>" alt="<?php print htmlspecialchars($category->name);?>" title="<?php print htmlspecialchars($category->name);?>" /></a>
                </div>
                <h2 class="jshopListCategoryName">
                   <a href = "<?php print $category->category_link?>" title="<?php print $category->name?>" ><?php $category->name = mb_substr($category->name,0,50, 'UTF-8'); ?><?php echo $category->name.''; ?></a>
                </h2>
				<p class="jshopListCategoryShortDescription">
					<?php $category->short_description = mb_substr($category->short_description,0,150, 'UTF-8'); ?><?php echo $category->short_description.'...'; ?>
				</p>
				<div class="jshopListCategoryMore">
					<a class="button" href = "<?php print $category->category_link?>">Подробнее</a>
				</div>
			</li>
        <?php endforeach;?> 
    </ul>

<?php  include(dirname(__FILE__)."/products_lh.php");?>
</div>


<div class="formTextPage animatable fadeInUp">
<?php
	jimport( 'joomla.application.module.helper' ); // подключаем нужный класс, один раз на странице, перед первым выводом
	$module = JModuleHelper::getModules('formtextpages'); // получаем в массив все модули из заданной позиции
	$attribs['style'] = 'no'; // задаём, если нужно, оболочку модулей (module chrome)
	echo JModuleHelper::renderModule($module[0], $attribs); // выводим первый модуль из заданной позиции
?>
<?php
	jimport( 'joomla.application.module.helper' ); // подключаем нужный класс, один раз на странице, перед первым выводом
	$module = JModuleHelper::getModules('forminputpages'); // получаем в массив все модули из заданной позиции
	$attribs['style'] = 'no'; // задаём, если нужно, оболочку модулей (module chrome)
	echo JModuleHelper::renderModule($module[0], $attribs); // выводим первый модуль из заданной позиции
?>
</div>
