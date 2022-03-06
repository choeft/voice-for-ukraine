<?php

namespace App\Models;

class SubjectlineHelperModel
{
    const SUBJECTLINES = [
        'un' => [
            'de' => 'Deutsche Haltung im neuen europäischen Krieg',
            'en' => 'UN is failing to secure peace on the European continent',
        ],
        'nato' => [
            'de' => 'Deutsche Haltung im neuen europäischen Krieg',
            'en' => 'NATO is failing to secure peace on the European continent',
        ],
        'eu' => [
            'de' => 'Deutsche Haltung im neuen europäischen Krieg',
            'en' => 'EU is failing to secure peace on the European continent',
        ],
    ];

    public function getSubjectline($organisation, $language) {
        if(isset(self::SUBJECTLINES[$organisation][$language]))
            return self::SUBJECTLINES[$organisation][$language];

        return 'no subject line available';
    }
}