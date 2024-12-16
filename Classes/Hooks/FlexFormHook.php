<?php

declare(strict_types=1);

namespace T3ac\T3upNews\Hooks;

use TYPO3\CMS\Core\Configuration\Event\AfterFlexFormDataStructureParsedEvent;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class FlexFormHook
{
   /**
   * @param array $dataStructure
   * @param array $identifier
   * @return array
   */
    public function __invoke(AfterFlexFormDataStructureParsedEvent $event): void
    {
        $dataStructure = $event->getDataStructure();
        $identifier = $event->getIdentifier();
        
        if ($identifier['type'] === 'tca' && $identifier['tableName'] === 'tt_content' && $identifier['dataStructureKey'] === '*,news_newsliststicky') {
            $file = GeneralUtility::getFileAbsFileName('EXT:t3up_news/Configuration/FlexForms/NewsList.xml');
            $content = file_get_contents($file);
            
            if ($content) {
                $dataStructure['sheets']['extraEntry'] = GeneralUtility::xml2array($content);
            }
        }
        
        if ($identifier['type'] === 'tca' && $identifier['tableName'] === 'tt_content' && $identifier['dataStructureKey'] === '*,news_newsdetail') {
            $file = GeneralUtility::getFileAbsFileName('EXT:t3up_news/Configuration/FlexForms/NewsDetail.xml');
            $content = file_get_contents($file);
            
            if ($content) {
                $dataStructure['sheets']['extraEntry'] = GeneralUtility::xml2array($content);
            }
        }
        
         $event->setDataStructure($dataStructure);
    }

}