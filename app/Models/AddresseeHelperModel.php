<?php

namespace App\Models;

class AddresseeHelperModel
{
    const ADDRESSEES = [
        'un' => [
            'de' => 'Antje Leendertse',
            'at' => 'Alexander Marschik',
            'ch_de' => 'Jürg Lauber',
            'ch_fr' => 'Jürg Lauber',
            'uk' => 'Barbara Woodward',
            'us' => 'Linda Thomas-Greenfield',
            'fr' => 'Nicolas de Rivière',
            'es' => 'Esther Monterrubio Villar',
            'pl' => 'Krzystof Szczerski',
            'ca' => 'Bob Rae',
        ],
        'nato' => [
            'de' => 'Rüdiger König',
            'fr' => 'Muriel Domenach',
            'ca' => 'David Angell',
            'it' => 'Francesco M. Talò',
            'es' => 'Miguel Fernández-Palacios M.',
            'nl' => 'Marisa Gerards',
            'dk' => 'Liselotte Plesner',
            'be' => 'Pascal Heyman',
            'no' => 'Øystein Bø',
            'is' => 'Hermann Ingólfsson',
            'po' => 'Pedro Costa Pereira',
            'ro' => 'Stelian Stoian',
            'hu' => 'Zoltán Nagy',
            'us' => 'Julianne Smith',
            'uk' => 'Sarah MacIntosh CMG',
            'pl' => 'Tomasz Szatkowski',
        ],
        'eu' => [

        ],
    ];

    public function getAddressee($organisation, $nationality) {
        if(isset(self::ADDRESSEES[$organisation][$nationality]))
            return self::ADDRESSEES[$organisation][$nationality];

        return '[ADDRESSEE_NAME]';
    }
}