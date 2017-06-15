<?php
return [
    'controllers' => [
        \Typo3Console\CreateReferenceCommand\Command\CommandReferenceCommandController::class,
    ],
    'runLevels' => [
        'typo3-console/php-server-command:commandreference:*' => \Helhum\Typo3Console\Core\Booting\RunLevel::LEVEL_COMPILE,
    ],
    'bootingSteps' => [
    ]
];
