<?php

namespace App\Models;

class NationalityHelperModel
{
    const NATIONALITIES = [
        'de' => 'deutscher',
    ];

    public function translateNationality($language) {
        if(isset(self::NATIONALITIES[$language]))
            return self::NATIONALITIES[$language];

        return '[ENTER YOUR NATIONALITY HERE]';
    }
}