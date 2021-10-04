<?php
    $apiConfigFile = 'config\api-configuration.json';
    $translationConfigFile = 'config\translation-configuration.json';
    
    $apiConfig = json_decode(file_get_contents($apiConfigFile));
    $translationConfig = json_decode(file_get_contents($translationConfigFile));

    var_dump((array)$apiConfig);
    var_dump((array)$translationConfig);