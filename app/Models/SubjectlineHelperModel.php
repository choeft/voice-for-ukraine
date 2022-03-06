<?php

namespace App\Models;

class SubjectlineHelperModel
{
    const SUBJECTLINES = [
        'un' => [
            'de' => 'Deutsche Haltung im neuen europäischen Krieg',
        ],
        'nato' => [
            'de' => 'Deutsche Haltung im neuen europäischen Krieg',
        ],
        'eu' => [
            'de' => 'Deutsche Haltung im neuen europäischen Krieg',
        ],
    ];

    public function getSubjectline($organisation, $language) {
        if(isset(self::SUBJECTLINES[$organisation][$language]))
            return self::SUBJECTLINES[$organisation][$language];

        return 'no subject line available';
    }
}