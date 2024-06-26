<?php

return [
    'output_format'     => 'array', // Options: array, object, json, serialize
    'idn_output_format' => 'both', // Options: ascii, unicode, both
    'cache'             => [
        'path'      => sys_get_temp_dir(),
        'filename' => 'domainparser_tlds.json',
        'lifetime' => 604800, // 7 Days
    ],
    'list'              => [
        'url'        => 'https://publicsuffix.org/list/effective_tld_names.dat',
        'start'      => '// ===BEGIN ICANN DOMAINS===',
        'end'        => '// ===END ICANN DOMAINS===',
        'skip'       => ['//', '!'],
        'verify_ssl' => true,
    ],
];
