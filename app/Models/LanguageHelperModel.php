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
    ];

    public function getLanguage($nationality) {
        if(isset(self::LANGUAGES[$nationality]))
            return self::LANGUAGES[$nationality];

        return 'en';
    }
}