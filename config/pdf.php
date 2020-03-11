<?php

return [
	'mode'                  => 'utf-8',
	'format'                => 'A4',
	'author'                => '',
	'subject'               => '',
	'keywords'              => '',
	'creator'               => 'Laravel Pdf',
	'display_mode'          => 'fullpage',
	'tempDir'               => base_path('../temp/'),

    // khmer font here
    'font_path' => base_path('resources/fonts/'),
    'font_data' => [
        "khmerosmoul" => [/* Khmer */
            'R' => "KhmerOS_muol.ttf",
            'useOTL' => 0xFF,
        ],
        "khmerosmoullight" => [/* Khmer */
            'R' => "KhmerOS_muollight.ttf",
            'useOTL' => 0xFF,
        ],
        "khmerosbokor" => [/* Khmer */
            'R' => "KhmerOS_bokor.ttf",
            'useOTL' => 0xFF,
        ],
        "khmerosmoulpali" => [/* Khmer */
            'R' => "KhmerOS_muollight.ttf",
            'useOTL' => 0xFF,
            'useKashida' => 75
        ],
        "khmerossystem" => [/* Khmer */
            'R' => "KhmerOS_sys.ttf",
            'useOTL' => 0xFF,
        ]
        // ...add as many as you want.
    ]

    // some code here...

];
