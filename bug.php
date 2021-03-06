<?php

$locales = ['af', 'ak', 'ar', 'as', 'ast', 'be', 'bg', 'bn-BD', 'bn-IN', 'br', 'bs', 'ca', 'cs',
'cy', 'da', 'de', 'el', 'en-GB', 'en-ZA', 'eo', 'es-AR', 'es-CL', 'es-ES', 'es-MX',
'et', 'eu', 'fa', 'ff', 'fi', 'fr', 'fy-NL', 'ga-IE', 'gd', 'gl', 'gu-IN', 'he', 'hi-IN',
'hr', 'hu', 'hy-AM', 'id', 'is', 'it', 'ja', 'ja-JP-mac', 'ka', 'kk', 'km', 'kn', 'ko', 'ku',
'lg', 'lij', 'lt', 'lv', 'mai', 'mk', 'ml', 'mn', 'mr', 'ms', 'nb-NO', 'ne-NP', 'nl', 'nn-NO',
'nr', 'nso', 'oc', 'or', 'pa-IN', 'pl', 'pt-BR', 'pt-PT', 'rm', 'ro', 'ru', 'rw', 'si', 'sk',
'sl', 'son', 'sq', 'sr', 'ss', 'st', 'sv-SE', 'ta', 'ta-LK', 'te', 'th', 'tn', 'tr', 'ts', 'uk',
've', 'vi', 'xh', 'zh-CN', 'zh-TW', 'zu'];

foreach ($locales as $locale_code) {
    include __DIR__ . "/arrays/cache_{$locale_code}.php";
    error_log($locale_code . ': ' . memory_get_usage(true));
}
