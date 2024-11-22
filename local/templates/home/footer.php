<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
        <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            ".default",
            Array(
              "AREA_FILE_SHOW" => "file",
              "AREA_FILE_SUFFIX" => "inc",
              "COMPONENT_TEMPLATE" => ".default",
              "EDIT_TEMPLATE" => "",
              "PATH" => "/include/footer_item_1.php"
            )
          );?>
        </div>
        <div class="col-lg-4 mb-5 mb-lg-0">
          <?$APPLICATION->IncludeComponent("bitrix:menu", "bottom_multi", Array(
            "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
              "MAX_LEVEL" => "3",	// Уровень вложенности меню
              "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
              "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
              "MENU_CACHE_TYPE" => "A",	// Тип кеширования
              "MENU_CACHE_TIME" => "36000000",	// Время кеширования (сек.)
              "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
              "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
              "COMPONENT_TEMPLATE" => "horizontal_multilevel",
              "DELAY" => "N",	// Откладывать выполнение шаблона меню
              "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
            ),
            false,
            array(
            "ACTIVE_COMPONENT" => "Y"
            )
          );?>
        </div>

        <div class="col-lg-4 mb-5 mb-lg-0">
          <?$APPLICATION->IncludeComponent(
              "bitrix:main.include",
              ".default",
              Array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "COMPONENT_TEMPLATE" => ".default",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/follow_us.php"
              )
            );?>
        </div>

      </div>
      <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
          <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            ".default",
            Array(
              "AREA_FILE_SHOW" => "file",
              "AREA_FILE_SUFFIX" => "inc",
              "COMPONENT_TEMPLATE" => ".default",
              "EDIT_TEMPLATE" => "",
              "PATH" => "/include/copyright_footer.php"
            )
          );?>
        </div>

      </div>
    </div>
  </footer>

  </div>
  <?use Bitrix\Main\Page\Asset;
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-3.3.1.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-migrate-3.0.1.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-ui.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/popper.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/bootstrap.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/owl.carousel.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/mediaelement-and-player.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.stellar.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.countdown.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.magnific-popup.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/bootstrap-datepicker.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/aos.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/main.js");
  ?> 
</body>

</html>