<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">


<head>
  <title><?$APPLICATION->ShowTitle()?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?$APPLICATION->ShowHead();?>
  <?
    use Bitrix\Main\Page\Asset;
    Asset::getInstance()->addCss("https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/fonts/icomoon/style.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap.min.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/magnific-popup.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/jquery-ui.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/owl.carousel.min.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/owl.theme.default.min.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap-datepicker.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/mediaelementplayer.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/animate.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/fonts/flaticon/font/flaticon.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/fl-bigmug-line.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/aos.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style.css");
  ?> 
</head>

<body>
  <?$APPLICATION->ShowPanel();?>
  <div class="site-loader"></div>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="border-bottom bg-white top-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-md-6">
            <p class="mb-0">
              <a href="#" class="mr-3">
                <span class="text-black fl-bigmug-line-phone351"></span> 
                <span class="d-none d-md-inline-block ml-2">
                  <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    ".default",
                    Array(
                      "AREA_FILE_SHOW" => "file",
                      "AREA_FILE_SUFFIX" => "inc",
                      "COMPONENT_TEMPLATE" => ".default",
                      "EDIT_TEMPLATE" => "",
                      "PATH" => "/include/phone.php"
                    )
                  );?>
                </span>
              </a>
              <a href="#">
                <span class="text-black fl-bigmug-line-email64"></span> 
                <span class="d-none d-md-inline-block ml-2">
                  <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    ".default",
                    Array(
                      "AREA_FILE_SHOW" => "file",
                      "AREA_FILE_SUFFIX" => "inc",
                      "COMPONENT_TEMPLATE" => ".default",
                      "EDIT_TEMPLATE" => "",
                      "PATH" => "/include/email.php"
                    )
                  );?>
                </span>
              </a>
            </p>
          </div>
          <div class="col-6 col-md-6 text-right">
            <?$APPLICATION->IncludeComponent(
              "bitrix:main.include",
              ".default",
              Array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "COMPONENT_TEMPLATE" => ".default",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/social.php"
              )
            );?>
          </div>
        </div>
      </div>

    </div>
    <div class="site-navbar">
      <div class="container py-1">
        <div class="row align-items-center">
          <div class="col-8 col-md-8 col-lg-4">
            <h1 class="">
                <a href="index.html" class="h5 text-uppercase text-black">
                  <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    ".default",
                    Array(
                      "AREA_FILE_SHOW" => "file",
                      "AREA_FILE_SUFFIX" => "inc",
                      "COMPONENT_TEMPLATE" => ".default",
                      "EDIT_TEMPLATE" => "",
                      "PATH" => "/include/logo.php"
                    )
                  );?>
                </a>
            </h1>
          </div>
          <div class="col-4 col-md-4 col-lg-8">
            <nav class="site-navigation text-right text-md-right" role="navigation">

              <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                  class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

              <?$APPLICATION->IncludeComponent("bitrix:menu", "top_multi", Array(
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
            </nav>
          </div>


        </div>
      </div>
    </div>
  </div>
  <? if ($APPLICATION->GetCurPage(false) === '/'): ?>
    <?
      $GLOBALS['arFilter']['PROPERTY_24_VALUE'] = 'да';
      $APPLICATION->IncludeComponent(
      "bitrix:news.list", 
      "slider", 
      array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "Y",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "259 200",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array(
          0 => "",
          1 => "",
        ),
        "FILTER_NAME" => "arFilter",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "6",
        "IBLOCK_TYPE" => "advertisement",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "20",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array(
          0 => "PRICE",
          1 => "",
        ),
        "SET_BROWSER_TITLE" => "Y",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "Y",
        "SET_META_KEYWORDS" => "Y",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "Y",
        "SHOW_404" => "N",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N",
        "COMPONENT_TEMPLATE" => "slider"
      ),
      false
    );
    ?>
    <div class="py-5">
      <div class="container">

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
            <?$APPLICATION->IncludeComponent(
              "bitrix:main.include",
              ".default",
              Array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "COMPONENT_TEMPLATE" => ".default",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/feature_1.php"
              )
            );?>
          </div>
          <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
            <?$APPLICATION->IncludeComponent(
              "bitrix:main.include",
              ".default",
              Array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "COMPONENT_TEMPLATE" => ".default",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/feature_2.php"
              )
            );?>
          </div>
          <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                ".default",
                Array(
                  "AREA_FILE_SHOW" => "file",
                  "AREA_FILE_SUFFIX" => "inc",
                  "COMPONENT_TEMPLATE" => ".default",
                  "EDIT_TEMPLATE" => "",
                  "PATH" => "/include/feature_3.php"
                )
              );?>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section site-section-sm bg-light">
      <div class="container">
        <?$APPLICATION->IncludeComponent(
          "bitrix:news.line", 
          "ads", 
          array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "172 800",
            "CACHE_TYPE" => "A",
            "DETAIL_URL" => "",
            "FIELD_CODE" => array(
              0 => "PREVIEW_TEXT",
              1 => "PREVIEW_PICTURE",
              2 => "PROPERTY_PRICE",
              3 => "PROPERTY_TOTAL_AREA",
              4 => "PROPERTY_NUMBER_OF_FLOORS",
              5 => "PROPERTY_NUMBER_OF_BATHROOMS",
              6 => "PROPERTY_THE_PRESENCE_OF_A_GARAGE",
              7 => "",
            ),
            "IBLOCKS" => array(
              0 => "6",
            ),
            "IBLOCK_TYPE" => "advertisement",
            "NEWS_COUNT" => "9",
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_BY2" => "SORT",
            "SORT_ORDER1" => "DESC",
            "SORT_ORDER2" => "ASC",
            "COMPONENT_TEMPLATE" => "ads"
          ),
          false
        );?>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <?$APPLICATION->IncludeComponent(
          "bitrix:news.line", 
          "services", 
          array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "7776000",
            "CACHE_TYPE" => "A",
            "DETAIL_URL" => "",
            "FIELD_CODE" => array(
              0 => "PROPERTY_LINK",
              1 => "",
            ),
            "IBLOCKS" => array(
              0 => "7",
            ),
            "IBLOCK_TYPE" => "SERVICES",
            "NEWS_COUNT" => "6",
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_BY2" => "SORT",
            "SORT_ORDER1" => "DESC",
            "SORT_ORDER2" => "ASC",
            "COMPONENT_TEMPLATE" => "services"
          ),
          false
        );?>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <?$APPLICATION->IncludeComponent(
          "bitrix:news.line", 
          "news", 
          array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "604 800",
            "CACHE_TYPE" => "A",
            "DETAIL_URL" => "",
            "FIELD_CODE" => array(
              0 => "PREVIEW_TEXT",
              1 => "PREVIEW_PICTURE",
              2 => "",
            ),
            "IBLOCKS" => array(
              0 => "1",
            ),
            "IBLOCK_TYPE" => "news",
            "NEWS_COUNT" => "3",
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_BY2" => "SORT",
            "SORT_ORDER1" => "DESC",
            "SORT_ORDER2" => "ASC",
            "COMPONENT_TEMPLATE" => "news"
          ),
          false
        );?>
      </div>
    </div>
  <?else:?>
    <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	"nav", 
	array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0",
		"COMPONENT_TEMPLATE" => "nav"
	),
	false
);?>
  <? endif; ?>
