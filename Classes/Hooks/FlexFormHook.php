<?php

namespace T3ac\T3upNews\Hooks;

use TYPO3\CMS\Core\Core\Environment;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class FlexFormHook
{
   /**
   * @param array $dataStructure
   * @param array $identifier
   * @return array
   */
   public function parseDataStructureByIdentifierPostProcess(array $dataStructure, array $identifier): array
   {
     if ($identifier['type'] === 'tca' && $identifier['tableName'] === 'tt_content' && $identifier['dataStructureKey'] === 'news_pi1,list') {
         $file = Environment::getPublicPath() . '/typo3conf/ext/t3up_news/Configuration/FlexForms/flexform_t3upnews.xml';
         $content = file_get_contents($file);
         if ($content) {
             $dataStructure['sheets']['extraEntry'] = GeneralUtility::xml2array($content);
         }
     }
     return $dataStructure;
   }
}