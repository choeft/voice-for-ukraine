<?php

namespace App\Models;

class LinkHelperModel
{
    const LINKS = [
        'un' => [
            'de' => 'https://new-york-un.diplo.de/un-en/botschaft/kontakt-formular',
            'at' => 'https://www.bmeia.gv.at/oev-new-york/the-austrian-mission/the-permanent-representative/',
            'ch_de' => 'geneve.oi@eda.admin.ch',
            'ch_fr' => 'geneve.oi@eda.admin.ch',
            'uk' => 'https://www.gov.uk/contact/govuk',
            'us' => 'https://usun.usmission.gov/mission/contact-us/',
            'fr' => 'https://onu.delegfrance.org/Contact-us',
            'es' => 'se.aex@maec.es',
            'ca' => 'canada.un@international.gc.ca',
            'pl' => 'https://www.gov.pl/web/un/permanent-mission-of-the-republic-of-poland-to-the-united-nations-in-new-york',
            'en' => 'No contact form available. Please write to your UN representative via mail.',
        ],
        'nato' => [
            'de' => 'https://nato.diplo.de/action/nato-en/1219210/action/-',
            'fr' => 'https://otan.delegfrance.org/Contact-us-via-email',
            'ca' => 'robert.baines@natoassociation.ca',
            'it' => 'rappnat.mail@esteri.it',
            'es' => 'dospio@lamd.nato.int',
            'nl' => 'brn@minbuza.nl',
            'dk' => 'Komsek@mil.dk',
            'be' => 'Info.belotan@diplobel.fed.be',
            'no' => 'del-nato.brussels@mfa.no',
            'is' => 'natodelegation@mfa.is',
            'po' => 'delnato@mne.pt',
            'ro' => 'romania.sec@hq.nato.int',
            'hu' => 'prt.nat@mfa.gov.hu',
            'us' => 'julianne.smith@osd.mil',
            'uk' => 'dnewspol@dgics.mod.uk',
            'pl' => 'bruksela.nato.sekretariat@msz.gov.pl',
        ],
        'eu' => [
            'de' => 'No contact form available. Please write to your EU representative via mail. Find the list here: https://www.cducsu.eu/abgeordnete',
        ]
    ];

    public function getLink($organisation, $nationality) {

        if(isset(self::LINKS[$organisation][$nationality]))
            return self::LINKS[$organisation][$nationality];

        return 'n/a';
    }
}