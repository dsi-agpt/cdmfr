<?php
return [
    'aliases' => array(
        'cdmfr-deserializer' => 'CdmFr\Model\services\CdmFrDeserializer',
        'cdmfr-file-handler' => 'CdmFr\Controller\Services\XmlFileHandler'
    ),
    'invokables' => array(
        
        'CdmFr\Model\Services\CdmFrDeserializer' => 'CdmFr\Model\Services\CdmFrDeserializer',
        'CdmFr\Controller\Services\XmlFileHandler' => 'CdmFr\Controller\Services\XmlFileHandler'
    )
];
