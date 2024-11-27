<?php

namespace Sprint\Migration;


class Version20241127113929 extends Version
{
    protected $author = "admin";

    protected $description = "перенос таблицы \"Агентов по недвижимости\"";

    protected $moduleVersion = "4.15.1";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
      $helper = $this->getHelperManager();
      $hlblockId = $helper->Hlblock()->saveHlblock(array (
        'NAME' => 'Realtors',
        'TABLE_NAME' => 'realtors',
      ));
      $helper->Hlblock()->saveField($hlblockId, array (
        'FIELD_NAME' => 'UF_FIO',
        'USER_TYPE_ID' => 'string',
        'XML_ID' => '',
        'SORT' => '100',
        'MULTIPLE' => 'N',
        'MANDATORY' => 'N',
        'SHOW_FILTER' => 'N',
        'SHOW_IN_LIST' => 'Y',
        'EDIT_IN_LIST' => 'Y',
        'IS_SEARCHABLE' => 'N',
        'SETTINGS' => 
        array (
          'SIZE' => 20,
          'ROWS' => 1,
          'REGEXP' => '',
          'MIN_LENGTH' => 0,
          'MAX_LENGTH' => 0,
          'DEFAULT_VALUE' => '',
        ),
        'EDIT_FORM_LABEL' => 
        array (
          'en' => '',
          'ru' => 'ФИО',
        ),
        'LIST_COLUMN_LABEL' => 
        array (
          'en' => '',
          'ru' => 'ФИО',
        ),
        'LIST_FILTER_LABEL' => 
        array (
          'en' => '',
          'ru' => 'ФИО',
        ),
        'ERROR_MESSAGE' => 
        array (
          'en' => '',
          'ru' => '',
        ),
        'HELP_MESSAGE' => 
        array (
          'en' => '',
          'ru' => 'ФИО',
        ),
      ));
      $helper->Hlblock()->saveField($hlblockId, array (
        'FIELD_NAME' => 'UF_ACTIVITY',
        'USER_TYPE_ID' => 'boolean',
        'XML_ID' => '',
        'SORT' => '100',
        'MULTIPLE' => 'N',
        'MANDATORY' => 'N',
        'SHOW_FILTER' => 'N',
        'SHOW_IN_LIST' => 'Y',
        'EDIT_IN_LIST' => 'Y',
        'IS_SEARCHABLE' => 'N',
        'SETTINGS' => 
        array (
          'DEFAULT_VALUE' => 0,
          'DISPLAY' => 'CHECKBOX',
          'LABEL' => 
          array (
            0 => '',
            1 => '',
          ),
          'LABEL_CHECKBOX' => '',
        ),
        'EDIT_FORM_LABEL' => 
        array (
          'en' => '',
          'ru' => 'Активность',
        ),
        'LIST_COLUMN_LABEL' => 
        array (
          'en' => '',
          'ru' => 'Активность',
        ),
        'LIST_FILTER_LABEL' => 
        array (
          'en' => '',
          'ru' => 'Активность',
        ),
        'ERROR_MESSAGE' => 
        array (
          'en' => '',
          'ru' => '',
        ),
        'HELP_MESSAGE' => 
        array (
          'en' => '',
          'ru' => 'Активность',
        ),
      ));
      $helper->Hlblock()->saveField($hlblockId, array (
        'FIELD_NAME' => 'UF_TYPE_OF_ACTIVITY',
        'USER_TYPE_ID' => 'enumeration',
        'XML_ID' => '',
        'SORT' => '100',
        'MULTIPLE' => 'N',
        'MANDATORY' => 'N',
        'SHOW_FILTER' => 'N',
        'SHOW_IN_LIST' => 'Y',
        'EDIT_IN_LIST' => 'Y',
        'IS_SEARCHABLE' => 'N',
        'SETTINGS' => 
        array (
          'DISPLAY' => 'LIST',
          'LIST_HEIGHT' => 1,
          'CAPTION_NO_VALUE' => '',
          'SHOW_NO_VALUE' => 'Y',
        ),
        'EDIT_FORM_LABEL' => 
        array (
          'en' => '',
          'ru' => 'Вид деятельности',
        ),
        'LIST_COLUMN_LABEL' => 
        array (
          'en' => '',
          'ru' => 'Вид деятельности',
        ),
        'LIST_FILTER_LABEL' => 
        array (
          'en' => '',
          'ru' => 'Вид деятельности',
        ),
        'ERROR_MESSAGE' => 
        array (
          'en' => '',
          'ru' => '',
        ),
        'HELP_MESSAGE' => 
        array (
          'en' => '',
          'ru' => 'Вид деятельности',
        ),
        'ENUM_VALUES' => 
        array (
          0 => 
          array (
            'VALUE' => 'Брокер',
            'DEF' => 'N',
            'SORT' => '500',
            'XML_ID' => 'Broker',
          ),
          1 => 
          array (
            'VALUE' => 'Агент по продаже',
            'DEF' => 'N',
            'SORT' => '500',
            'XML_ID' => 'Sales Agent',
          ),
          2 => 
          array (
            'VALUE' => 'Агент по покупке',
            'DEF' => 'N',
            'SORT' => '500',
            'XML_ID' => 'Агент по покупке',
          ),
          3 => 
          array (
            'VALUE' => 'Риэлтор',
            'DEF' => 'N',
            'SORT' => '500',
            'XML_ID' => 'Realtor',
          ),
        ),
      ));
      $helper->Hlblock()->saveField($hlblockId, array (
        'FIELD_NAME' => 'UF_PHOTO',
        'USER_TYPE_ID' => 'file',
        'XML_ID' => '',
        'SORT' => '100',
        'MULTIPLE' => 'N',
        'MANDATORY' => 'N',
        'SHOW_FILTER' => 'N',
        'SHOW_IN_LIST' => 'Y',
        'EDIT_IN_LIST' => 'Y',
        'IS_SEARCHABLE' => 'N',
        'SETTINGS' => 
        array (
          'SIZE' => 20,
          'LIST_WIDTH' => 0,
          'LIST_HEIGHT' => 0,
          'MAX_SHOW_SIZE' => 0,
          'MAX_ALLOWED_SIZE' => 0,
          'EXTENSIONS' => 
          array (
          ),
          'TARGET_BLANK' => 'Y',
        ),
        'EDIT_FORM_LABEL' => 
        array (
          'en' => '',
          'ru' => 'Фото',
        ),
        'LIST_COLUMN_LABEL' => 
        array (
          'en' => '',
          'ru' => 'Фото',
        ),
        'LIST_FILTER_LABEL' => 
        array (
          'en' => '',
          'ru' => 'Фото',
        ),
        'ERROR_MESSAGE' => 
        array (
          'en' => '',
          'ru' => '',
        ),
        'HELP_MESSAGE' => 
        array (
          'en' => '',
          'ru' => 'Фото',
        ),
      ));
      $helper->Hlblock()->saveField($hlblockId, array (
        'FIELD_NAME' => 'UF_EMAIL',
        'USER_TYPE_ID' => 'string',
        'XML_ID' => '',
        'SORT' => '100',
        'MULTIPLE' => 'N',
        'MANDATORY' => 'N',
        'SHOW_FILTER' => 'N',
        'SHOW_IN_LIST' => 'Y',
        'EDIT_IN_LIST' => 'Y',
        'IS_SEARCHABLE' => 'N',
        'SETTINGS' => 
        array (
          'SIZE' => 20,
          'ROWS' => 1,
          'REGEXP' => '',
          'MIN_LENGTH' => 0,
          'MAX_LENGTH' => 0,
          'DEFAULT_VALUE' => '',
        ),
        'EDIT_FORM_LABEL' => 
        array (
          'en' => '',
          'ru' => 'Почта',
        ),
        'LIST_COLUMN_LABEL' => 
        array (
          'en' => '',
          'ru' => 'Почта',
        ),
        'LIST_FILTER_LABEL' => 
        array (
          'en' => '',
          'ru' => 'Почта',
        ),
        'ERROR_MESSAGE' => 
        array (
          'en' => '',
          'ru' => '',
        ),
        'HELP_MESSAGE' => 
        array (
          'en' => '',
          'ru' => 'Почта',
        ),
      ));
      $helper->Hlblock()->saveField($hlblockId, array (
        'FIELD_NAME' => 'UF_TEL',
        'USER_TYPE_ID' => 'string',
        'XML_ID' => '',
        'SORT' => '100',
        'MULTIPLE' => 'N',
        'MANDATORY' => 'N',
        'SHOW_FILTER' => 'N',
        'SHOW_IN_LIST' => 'Y',
        'EDIT_IN_LIST' => 'Y',
        'IS_SEARCHABLE' => 'N',
        'SETTINGS' => 
        array (
          'SIZE' => 20,
          'ROWS' => 1,
          'REGEXP' => '',
          'MIN_LENGTH' => 0,
          'MAX_LENGTH' => 0,
          'DEFAULT_VALUE' => '',
        ),
        'EDIT_FORM_LABEL' => 
        array (
          'en' => 'Телефон',
          'ru' => 'Телефон',
        ),
        'LIST_COLUMN_LABEL' => 
        array (
          'en' => 'Телефон',
          'ru' => 'Телефон',
        ),
        'LIST_FILTER_LABEL' => 
        array (
          'en' => 'Телефон',
          'ru' => 'Телефон',
        ),
        'ERROR_MESSAGE' => 
        array (
          'en' => '',
          'ru' => '',
        ),
        'HELP_MESSAGE' => 
        array (
          'en' => 'Телефон',
          'ru' => 'Телефон',
        ),
      ));
              $helper->UserOptions()->saveHlblockForm($hlblockId, array (
        'Realtors|edit1' => 
        array (
          'ID' => 'ID',
          'USER_FIELDS_ADD' => 'Добавить пользовательское поле',
          'UF_FIO' => 'UF_FIO',
          'UF_TEL' => 'UF_TEL',
          'UF_ACTIVITY' => 'UF_ACTIVITY',
          'UF_TYPE_OF_ACTIVITY' => 'UF_TYPE_OF_ACTIVITY',
          'UF_PHOTO' => 'UF_PHOTO',
          'UF_EMAIL' => 'UF_EMAIL',
        ),
      ));
    }
    public function down()
    {
      $helper = $this->getHelperManager();
      $hlblockId = $helper->Hlblock()->getHlblockIdIfExists('Realtors');
      $helper->Hlblock()->deleteField('HLBLOCK_' . $hlblockId, 'UF_FIO');
      $helper->Hlblock()->deleteField('HLBLOCK_' . $hlblockId, 'UF_ACTIVITY');
      $helper->Hlblock()->deleteField('HLBLOCK_' . $hlblockId, 'UF_TYPE_OF_ACTIVITY');
      $helper->Hlblock()->deleteField('HLBLOCK_' . $hlblockId, 'UF_PHOTO');
      $helper->Hlblock()->deleteField('HLBLOCK_' . $hlblockId, 'UF_EMAIL');
      $helper->Hlblock()->deleteField('HLBLOCK_' . $hlblockId, 'UF_TEL');
      $helper->Hlblock()->deleteHlblock($hlblockId);
    }
}
