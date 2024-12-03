<?
AddEventHandler("main", "OnBeforeUserRegister", Array("MyClass", "BeforeRegistration"));
class MyClass
{
	function BeforeRegistration(&$arFields)
	{
		if($arFields["UF_USER_TYPE"] == 10)
		{
            $arFields["GROUP_ID"][] = 8;  
		}
        if($arFields["UF_USER_TYPE"] == 11) 
        {
            $arFields["GROUP_ID"][] = 7; 
        }
	}
}
?>