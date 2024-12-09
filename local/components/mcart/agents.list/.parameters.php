<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

$arComponentParameters = array(
    "GROUPS" => array(),
    "PARAMETERS" => array(
        "HLBLOCK_TNAME"  =>  Array( // Код поля
            "PARENT" => "BASE", //
            "NAME" => GetMessage("MCART_AGENTS_LIST_HLBLOCK_TNAME"), // Название параметра, берется из языкового файла
            "TYPE" => "STRING", // Тип поля
            "DEFAULT" => "", // Значение по дефолту
        ),
        "NEWS_COUNT" => [
			"PARENT" => "BASE",
			"NAME" => GetMessage("MCART_AGENTS_LIST_HLBLOCK_LIST_CONT"),
			"TYPE" => "STRING",
			"DEFAULT" => "20",
		],
        "CACHE_TIME"  =>  ["DEFAULT"=>36000000],
    ),
);
