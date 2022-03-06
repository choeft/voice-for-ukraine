<?php

namespace App\Models;

class LinkHelperModel
{
    const LINKS = [
        'un' => [
            'de' => 'https://new-york-un.diplo.de/un-en/botschaft/kontakt-formular',
        ],
        'nato' => [
            'de' => 'https://nato.diplo.de/nato-de/service/kontakt-formular'
        ],
        'eu' => [
            'de' => 'No contact form available. Please write to your EU representative via mail. Find the list here: https://www.cducsu.eu/abgeordnete'
        ]
    ];

    public function getLink($organisation, $language) {

        if(isset(self::LINKS[$organisation][$language]))
            return self::LINKS[$organisation][$language];

        return 'n/a';
    }
}