<?php

namespace App\Models;

class AddresseeHelperModel
{
    const ADDRESSEES = [
        'de' => 'Antje Leendertse',
        'at' => 'Alexander Marschik',
        'ch_de' => 'Jürg Lauber',
        'ch_fr' => 'Jürg Lauber',
        'uk' => 'Barbara Woodward',
        'us' => 'Linda Thomas-Greenfield',
        'fr' => 'Nicolas de Rivière',
        'es' => 'Esther Monterrubio Villar',
        'pl' => 'Krzystof Szczerski',
    ];

    public function getAddressee($nationality) {
        if(isset(self::ADDRESSEES[$nationality]))
            return self::ADDRESSEES[$nationality];

        return '[ADDRESSEE_NAME]';
    }
}