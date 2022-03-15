<?php

namespace App\Models;

class SubjectlineHelperModel
{
    const SUBJECTLINES = [
        'un' => [
            'de' => 'Deutsche Haltung im neuen europäischen Krieg',
            'fr' => 'Notre position concernant la guerre en Ukraine',
            'pl' => 'Nasze stanowisko w sprawie wojny na Ukrainie',
            'en' => 'Our stance on the war in Ukraine',
        ],
        'nato' => [
            'de' => 'Deutsche Haltung im neuen europäischen Krieg',
            'en' => 'NATO is failing to secure peace on the European continent',
        ],
        'eu' => [
            'de' => 'Deutsche Haltung im neuen europäischen Krieg',
            'en' => 'Our stance on the war in Ukraine',
            'fr' => 'Notre position concernant la guerre en Ukraine',
            'pl' => 'Nasze stanowisko w sprawie wojny na Ukrainie',
        ],
    ];

    public function getSubjectline($organisation, $language) {
        if(isset(self::SUBJECTLINES[$organisation][$language]))
            return self::SUBJECTLINES[$organisation][$language];

        return 'no subject line available';
    }
}