<?php

namespace App\Models;

class LanguageHelperModel
{
    const LANGUAGES = [
        'de' => 'de',
        'at' => 'de',
        'ch_de' => 'de',
        'ch_fr' => 'fr',
        'uk' => 'en',
        'us' => 'en',
        'es' => 'es',
        'fr' => 'fr',
        'pl' => 'pl',
        'ca' => 'en',
        'ca_fr '=> 'fr',
        'be' => 'fr',
        'be_de' => 'de',
        'be_en' => 'en',
        'lu' => 'en',
        'gr' => 'en',
        'tr' => 'en',
        'cz' => 'en',
        'bg' => 'en',
        'ee' => 'en',
        'lv' => 'en',
        'lt' => 'en',
        'sk' => 'en',
        'sl' => 'en',
        'al' => 'en',
        'hr' => 'en',
        'me' => 'en',
        'mk' => 'en',
    ];

    public function getLanguage($nationality) {
        if(isset(self::LANGUAGES[$nationality]))
            return self::LANGUAGES[$nationality];

        return 'en';
    }
}