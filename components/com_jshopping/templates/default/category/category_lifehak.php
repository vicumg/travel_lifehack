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




<div class="life-hack-map">
    <?php foreach ($this->categories as $k => $category) : ?>
        <?php
        $cat[$category->category_id] = $category->category_link;
        ?>
        <div class="category-on-map" id = "category-<?php echo $category->category_id ?>" >
            <h2 class="jshopListCategoryName">
                <a href = "<?php print $category->category_link?>" title="<?php print $category->name?>" ><?php $category->name = mb_substr($category->name,0,50, 'UTF-8'); ?><?php echo $category->name.''; ?></a>
            </h2>
         <!--   <p class="jshopListCategoryShortDescription">
                <?php $category->short_description = mb_substr($category->short_description,0,150, 'UTF-8'); ?><?php echo $category->short_description.'...'; ?>
            </p>-->

        </div>
    <?php endforeach;?>
    <map name="map0">
        <area shape="rect" coords="250, 100, 540, 204" id = "africa" href="<?php echo $cat[6]; ?>">
        <area shape="rect" coords="550, 220, 660, 354" href="<?php echo $cat[8]; ?>">
        <area shape="rect" coords="750, 210, 840, 320" href="<?php echo $cat[9]; ?>">
        <area shape="rect" coords="300, 950, 500, 1050" href="<?php echo $cat[7]; ?>">
        <area shape="rect" coords="520, 850, 650, 950" href="<?php echo $cat[10]; ?>">
        <area shape="rect" coords="850, 860, 1050, 960" href="<?php echo $cat[11]; ?>">


    </map>
    <img class ="hack-map-img" src="<?php echo JURI::base(); ?>/images/map_500_3.png" usemap="#map0" id = "mobile-hack-map">
    <img class ="hack-map-img" src="<?php echo JURI::base(); ?>/images/map_500_3.png" usemap="#map0" id = "desktop-hack-map">
</div>


    <style>

        #mobile-hack-map{
            display: none;
        }
        .life-hack-map{
            position: relative;
        }
        .category-on-map{
            position: absolute;
            font-size: 24px;
        }
        .category-on-map a {
            text-transform: uppercase;

            text-decoration: none;
        }
        .category-on-map a:hover{
            text-decoration: underline;
        }
        /* north america */
        .category-on-map#category-6{
            left:250px;
            top:180px;
        }
        /* europe */
        .category-on-map#category-8{
            left:550px;
            top:300px;
        }

        /* asia */
        .category-on-map#category-9{
            left: 759px;
            top: 295px;
        }

        /* south america */
        .category-on-map#category-7{
            left:300px;
            top:1020px;
        }

        /* africa */
        .category-on-map#category-10{
            left:540px;
            top:930px;
        }

        /* australia */
        .category-on-map#category-11{
            left:850px;
            top:930px;
        }

        #category-11 a{
             color: #CDD3BB;
         }
        #category-10 a{
            color: #729897;
        }

        #category-7 a{
            color: #61559F;
        }

        #category-9 a{
            color: #4C9EBF;
        }

        #category-8 a{
            color: #2E3192;
        }

        #category-6 a{
            color: #656868;
        }



        @media only screen and (max-width: 768px) {
            #mobile-hack-map{
                display: inline;
            }
            .life-hack-map {
                 width: 100%;
                 height: auto;
                 overflow-x: scroll;
             }
             .hack-map-img{
                 height: auto;
                 width: 450px;
             }
            #desktop-hack-map{
                display: none;
            }
            .category-on-map {
                font-size: 12px;
            }
            .category-on-map#category-6 {
                left: 73px;
                top: 69px;
            }
            /* europe */
            .category-on-map#category-8{
                left: 204px;
                top: 114px;
            }

            /* asia */
            .category-on-map#category-9{
                left: 284px;
                top: 112px;
            }

            /* south america */
            .category-on-map#category-7{
                left: 103px;
                top: 393px;
            }

            /* africa */
            .category-on-map#category-10{
                left: 200px;
                top: 355px;
            }

            /* australia */
            .category-on-map#category-11{
                left: 311px;
                top: 356px;
            }


         }
    </style>


<!-- hide products in main category -->
    <?php //include(dirname(__FILE__)."/products.php");?>
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
