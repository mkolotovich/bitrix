<?
$eventManager = \Bitrix\Main\EventManager::getInstance();
$eventManager->addEventHandler('', 'RealtorsOnAfterAdd', 'clearCache');
$eventManager->addEventHandler('', 'RealtorsOnAfterUpdate', 'clearCache');
$eventManager->addEventHandler('', 'RealtorsOnAfterDelete', 'clearCache');

function clearCache(\Bitrix\Main\Entity\Event $event) {
	$taggedCache = \Bitrix\Main\Application::getInstance()->getTaggedCache();
	$taggedCache->clearByTag('hlblock_table_name_' . 'realtors');
}
?>