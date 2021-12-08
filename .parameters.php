<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

$arComponentParameters = [
    'GROUPS' => [
        'BASE' => [
            'NAME' => GetMessage('COMP_FORM_GROUP_PARAMS'),
        ],
    ],

    'PARAMETERS' => [
        'SITE_KEY' => [
            'NAME' => GetMessage('WC_RECAPTCHA3_SITE_KEY'),
            'TYPE' => 'STRING',
            'PARENT' => 'BASE',
        ],
        'SECRET_KEY' => [
            'NAME' => GetMessage('WC_RECAPTCHA3_SECRET_KEY'),
            'TYPE' => 'STRING',
            'PARENT' => 'BASE',
        ],
        'SCORE' => [
            'NAME' => GetMessage('WC_RECAPTCHA3_SCORE'),
            'TYPE' => 'LIST',
            'VALUES' => [
                '0.0' => '0.0',
                '0.1' => '0.1',
                '0.2' => '0.2',
                '0.3' => '0.3',
                '0.4' => '0.4',
                '0.5' => '0.5',
                '0.6' => '0.6',
                '0.7' => '0.7',
                '0.8' => '0.8',
                '0.9' => '0.9',
                '1.0' => '1.0',
            ],
            "DEFAULT" => "0.5",
            'PARENT' => 'BASE',
        ],
        'ACTION' => [
            'NAME' => GetMessage('WC_RECAPTCHA3_ACTION'),
            'TYPE' => 'STRING',
            'PARENT' => 'BASE',
        ],
        'POSITION' => [
            'NAME' => GetMessage('WC_RECAPTCHA3_POSITION'),
            'TYPE' => 'LIST',
            'VALUES' => [
                'bottomright' => 'Внизу справа',
                'bottomleft' => 'Внизу слева',
                'inline' => 'В форме',
            ],
            'PARENT' => 'BASE',
        ],
    ],
];
