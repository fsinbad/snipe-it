<?php

return [
    'about_assets_title'           => 'O položkách majetku',
    'about_assets_text'            => 'Položky majetku sú identifikované sériovým číslom alebo značkou majetku. Väčšinou ide o položky s vyššou hodnotou, pri ktorých je dôležité identifikovať konkrétnu položku.',
    'archived'  				=> 'Archivované',
    'asset'  					=> 'Majetok',
    'bulk_checkout'             => 'Odovzdať položky majetku',
    'bulk_checkin'              => 'Prevziať položky majetku',
    'checkin'  					=> 'Prevziať majetok',
    'checkout'  				=> 'Odovzdať majetok',
    'clone'  					=> 'Duplikovať majetok',
    'deployable'  				=> 'Odovzdateľný',
    'deleted'  					=> 'Tento majetok bol zmazaný.',
    'delete_confirm'            => 'Ste si istý, že chcete zmazať tento majetok?',
    'edit'  					=> 'Upraviť majetok',
    'model_deleted'  			=> 'Tento Model majetku bol zmazaný. Pred obnovením majetku musíte obnoviť model majetku.',
    'model_invalid'             => 'Tento model je pre daný majetok neplatný.',
    'model_invalid_fix'         => 'Tento majetok musí byť upravený. Použite platný model majetku predtým ako sa ho pokúsite prevziať alebo odovzdať alebo auditovať.',
    'requestable'               => 'Vyžiadateľný',
    'requested'				    => 'Vyžiadané',
    'not_requestable'           => 'Nevyžiadateľný',
    'requestable_status_warning' => 'Nemeniť stav vyžiadateľnosti',
    'restore'  					=> 'Obnoviť majetok',
    'pending'  					=> 'Čakajúce',
    'undeployable'  			=> 'Neodovzdateľný',
    'undeployable_tooltip'  	=> 'Tento majetok je v stave, ktorý neumožňuje odovzdanie a preto nemôže byť teraz odovzdaný.',
    'view'  					=> 'Zobraziť majetok',
    'csv_error' => 'V CSV súbore sa nachádza chyba:',
    'import_text' => '<p>Nahrajte CSV súbor, ktorý obsahuje históriu majetku. Majetky a používatelia už MUSIA v systéme existovať, inak budú záznamy preskočené. Párovanie majetkov bude realizovaná na základe označenia majetku. Pokúsime sa nájsť zodpovedajúceho používateľa na základe zadaného mena používateľa a kritérií, ktoré vyberiete nižšie. Ak nižšie nevyberiete žiadne kritériá, pokúsi sa napárovať na základe tvaru používateľského mena, ktorý ste nakonfigurovali v časti <code>Nastavenia &gt; Všeobecné nastavenia</code>.</p><p>Polia zahrnuté v súbore CSV sa musia zhodovať s hlavičkami: <strong>Označenie majetku, Názov, Dátum odovzadnia, Dátum prijatia</strong>. Všetky ďaľšie polia budú ignorované. </p><p>Dátum prijatia: prázdne alebo dátum prijatia z budúcnosti budu spôsobia priradenie majetku zvolenému používateľovi. Nezahrnutím stĺpca Dátum prevzatia sa vytvorí dátum prevzatia s dnešným dátumom.</p>    ',
    'csv_import_match_f-l' => 'Pokúsiť sa porovnať používateľov podľa tvaru <strong>meno.priezvisko</strong>  (<code>jane.smith</code>)',
    'csv_import_match_initial_last' => 'Pokúsiť sa porovnať používateľov podľa tvaru <strong>inciálka mena priezvisko</strong> (<code>jsmith</code>)',
    'csv_import_match_first' => 'Pokúsiť sa porovnať používateľov podľa tvaru <strong>meno</strong> (<code>jane</code>)',
    'csv_import_match_email' => 'Pokúsiť sa porovnať používateľov <strong>email</strong> ako používateľského mena',
    'csv_import_match_username' => 'Pokúsiť sa porovnať používateľov podľad <strong>používateľského mena</strong>',
    'error_messages' => 'Chybové hlášky:',
    'success_messages' => 'Výsledky:',
    'alert_details' => 'Podrobnosti nájdete nižšie.',
    'custom_export' => 'Uživateľsky definovaný export',
    'mfg_warranty_lookup' => 'Vyhľadávanie stavu záruky :manufacturer',
    'user_department' => 'Oddelenie používateľa',
];
