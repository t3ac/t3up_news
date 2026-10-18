<?php

declare(strict_types=1);

namespace T3ac\T3upNews\EventListener;

use TYPO3\CMS\Core\Configuration\Event\AfterFlexFormDataStructureParsedEvent;
use TYPO3\CMS\Core\Utility\ArrayUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

final class ModifyFlexformEvent
{
    public function __invoke(
        AfterFlexFormDataStructureParsedEvent $event
        ): void {
            $identifier = $event->getIdentifier();
            
            if (
                ($identifier['type'] ?? '') !== 'tca'
                || ($identifier['tableName'] ?? '') !== 'tt_content'
                ) {
                    return;
                }
                
                $dataStructure = $event->getDataStructure();
                
                if (
                    $identifier['dataStructureKey'] === 'news_newsliststicky'
                    ) {
                        $file = GeneralUtility::getFileAbsFileName(
                            'EXT:t3up_news/Configuration/FlexForms/NewsList.xml'
                            );
                        
                        if (is_file($file)) {
                            $content = file_get_contents($file);
                            
                            if ($content !== false) {
                                $xml = GeneralUtility::xml2array($content);
                                
                                if (is_array($xml) && isset($xml['sheets'])) {
                                    ArrayUtility::mergeRecursiveWithOverrule(
                                        $dataStructure['sheets'],
                                        $xml['sheets']
                                        );
                                }
                            }
                        }
                    }
                    
                    if (
                        $identifier['dataStructureKey'] === 'news_newsdetail'
                        ) {
                            $file = GeneralUtility::getFileAbsFileName(
                                'EXT:t3up_news/Configuration/FlexForms/NewsDetail.xml'
                                );
                            
                            if (is_file($file)) {
                                $content = file_get_contents($file);
                                
                                if ($content !== false) {
                                    $xml = GeneralUtility::xml2array($content);
                                    
                                    if (is_array($xml) && isset($xml['sheets']['extraEntry'])) {
                                        $dataStructure['sheets']['extraEntry'] = $xml['sheets']['extraEntry'];
                                    }
                                                                     
                                }
                            }
                        }
                        
                        $event->setDataStructure($dataStructure);
    }
}
