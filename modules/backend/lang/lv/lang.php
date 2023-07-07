<?php return [
  'auth' => [],
  'field' => [
    'invalid_type' => 'Nederīgs lauka tips :type.',
    'options_method_not_exists' => 'Moduļa klasei :model jādefinē metodi :method() atgrieztās vērtības \':field\' formas laukam.',
  ],
  'widget' => [
    'not_registered' => 'Logrīka klases nosaukums \':name\' nav reģistrēts',
    'not_bound' => 'Logrīks ar klases nosaukumu \':name\' nav piesaistīts kontrolierim',
  ],
  'page' => [
    'untitled' => 'Bez nosaukuma',
    'access_denied' => [
      'label' => 'Piekļuve liegta',
      'help' => 'Jums nav piekļuves tiesību, lai skatītu šo lapu.',
      'cms_link' => 'Atgriezties back-end',
    ],
  ],
  'partial' => [
    'not_found_name' => 'Daļa \':name\' nav atrasta.',
  ],
  'account' => [
    'sign_out' => 'Izrakstīties',
    'login_placeholder' => 'vārds',
    'password_placeholder' => 'parole',
    'enter_email' => 'Ievadiet epastu',
    'email_placeholder' => 'epasts',
    'apply' => 'Apstiprināt',
    'cancel' => 'Atcelt',
    'delete' => 'Dzēst',
    'ok' => 'OK',
  ],
  'dashboard' => [
    'menu_label' => 'Mērinstrumentu panelis',
    'widget_inspector_title' => 'Logrīka konfigurācija',
    'widget_inspector_description' => 'Konfigurējiet logrīku',
    'widget_columns_label' => 'Platums :columns',
    'widget_columns_description' => 'Logrīka platums, skaitlis starp 1 un 10.',
    'widget_columns_error' => 'Lūdzu ievadiet logrīka platumu kā skaitli starp 1 un 10.',
    'columns' => '{1} kolonna|[2,Inf] kolonnas',
    'widget_new_row_label' => 'Piespiedu jauna rinda',
    'widget_new_row_description' => 'Novietot logrīku jaunā rindā.',
    'widget_title_label' => 'Logrīka virsraksts',
    'widget_title_error' => 'Logrīka virsraksts ir obligāts.',
    'status' => [
      'widget_title_default' => 'Sistēmas statuss',
      'update_available' => '{0} atjauninājumi pieejami!|{1} atjauninājums pieejams!|[2,Inf] atjauninājumi pieejami!',
    ],
  ],
  'user' => [
    'name' => 'Administrātors',
    'menu_label' => 'Administrātori',
    'menu_description' => 'Pārvaldiet back-end administrēšanas lietotājus, grupas un tiesības.',
    'list_title' => 'Pārvaldīt Administrātorus',
    'new' => 'Jauns Administrātors',
    'first_name' => 'Vārds',
    'last_name' => 'Uzvārds',
    'full_name' => 'Pilnais vārds',
    'email' => 'Epasts',
    'groups' => 'Grupas',
    'groups_comment' => 'Norādiet, kurai grupai šī persona pieder.',
    'avatar' => 'Avatar',
    'password' => 'Parole',
    'password_confirmation' => 'Apstiprināt Paroli',
    'permissions' => 'Tiesības',
    'account' => 'Konts',
    'superuser' => 'Super Lietotājs',
    'superuser_comment' => 'Atķeksējiet šo aili, lai atļautu šai personai neierobežotu piekļuvi.',
    'send_invite' => 'Nosūtīt uzaicinājumu pa Epastu',
    'send_invite_comment' => 'Atķeksējiet šo aili, lai nosūtītu uzaicinājumu pa Epastu',
    'delete_confirm' => 'Vai tiešām vēlaties dzēst šo administrātoru?',
    'return' => 'Atgriezties administratoru sarakstā',
    'allow' => 'Atļaut',
    'inherit' => 'Pārmantot',
    'deny' => 'Aizliegt',
    'group' => [
      'name' => 'Grupa',
      'name_comment' => 'Nosaukums tiek attēlots Administratora Pievienošanas/Labošanas lapu grupu sarakstā.',
      'name_field' => 'Nosaukums',
      'description_field' => 'Apraksts',
      'is_new_user_default_field_label' => 'Noklusējama grupa',
      'is_new_user_default_field_comment' => 'Pievienot jaunos administrātorus šai grupai pēc noklusējuma',
      'code_field' => 'Kods',
      'code_comment' => 'Norādiet unikālu piekļuves kodu, ja vēlaties to sasniegt caur API.',
      'menu_label' => 'Grupas',
      'list_title' => 'Pārvaldīt Grupas',
      'new' => 'Jauna Administrātoru Grupa',
      'delete_confirm' => 'Vai tiešām vēlaties dzēst šo administrātoru grupu?',
      'return' => 'Atgriezties grupu sarakstā',
      'users_count' => 'Lietotāji',
    ],
    'preferences' => [
      'not_authenticated' => 'Nav autentificēts lietotājs, kuram ielādēt vai saglabāt iestatījumus.',
    ],
  ],
  'list' => [
    'default_title' => 'Saraksts',
    'search_prompt' => 'Meklēt...',
    'no_records' => 'Nav ierakstu šajā skatā.',
    'missing_model' => 'Saraksta uzvedībai definētai :class nav definēts modulis.',
    'missing_column' => 'Nav kolonnu definīciju :columns.',
    'missing_columns' => 'Sarakstam definētam :class nav definētas kolonnas.',
    'missing_definition' => 'Sarakstā nav kolonnas \':field\'.',
    'missing_parent_definition' => 'Saraksts nesatur uzvedības definīciju priekš \':definition\'.',
    'behavior_not_ready' => 'Saraksts nav inicializēts, pārbaudiet vai saucāt makeLists() jūsu kontrolierī.',
    'invalid_column_datetime' => 'Kolonnas vērtība \':column\' nav DateTime objekts, vai esat definējis $dates savā modulī?',
    'pagination' => 'Attēloti ieraksti: :from-:to no :total',
    'prev_page' => 'Iepriekšējā lapa',
    'next_page' => 'Nākamā lapa',
    'refresh' => 'Atsvaidzināt',
    'updating' => 'Atjaunināšana...',
    'loading' => 'Ielādējam...',
    'setup_title' => 'Saraksta iestatīšana',
    'setup_help' => 'Izmantojiet rūtiņas lai izvēlētos kolonnas kuras vēlaties redzēt sarakstā. Varat mainīt kolonnu pozīcijas pārnesot tās augšup vai lejup.',
    'records_per_page' => 'Ieraksti uz lapu',
    'records_per_page_help' => 'Izvēlieties cik ierakstus rādīt vienā lapā. Ņemiet vēra, ka daudz ierakstu var bremzēt lapas ielādi.',
    'delete_selected' => 'Dzēst izvēlētos',
    'delete_selected_empty' => 'Dzēšanai nav izvēlēts neviens ieraksts.',
    'delete_selected_confirm' => 'Dzēst izvēlētos ierakstus?',
    'delete_selected_success' => 'Izvēlētie ieraksti veiksmīgi dzēsti.',
    'column_switch_true' => 'Jā',
    'column_switch_false' => 'Nē',
  ],
  'fileupload' => [
    'attachment' => 'Pielikums',
    'help' => 'Pievienojiet virsrakstu un aprakstu šim pielikumam.',
    'title_label' => 'Vrisraksts',
    'description_label' => 'Apraksts',
    'default_prompt' => 'Uzklikšķiniet uz %s vai nesiet failu šeit',
    'attachment_url' => 'Pielikuma URL',
    'upload_file' => 'Augšupielādēt failu',
    'upload_error' => 'Augšupielādes kļūda',
    'remove_confirm' => 'Vai esat pārliecināts?',
    'remove_file' => 'Noņemt failu',
  ],
  'form' => [
    'create_title' => 'Jauns :name',
    'update_title' => 'Labot :name',
    'preview_title' => 'Priekšskatīt :name',
    'create_success' => ':name tika veiksmīgi izveidots',
    'update_success' => ':name tika veiksmīgi atjaunināts',
    'delete_success' => ':name tika veiksmīgi izdzēsts',
    'missing_id' => 'Formas ieraksta ID netika norādīts.',
    'missing_model' => 'Formai iekš :class nav definēts modulis.',
    'missing_definition' => 'Forma nesatur \':field\'.',
    'not_found' => 'Formas ieraksts ar ID :id netika atrasts.',
    'action_confirm' => 'Vai esat pārliecināts?',
    'create' => 'Izveidot',
    'create_and_close' => 'Izveidot un aizvērt',
    'creating' => 'Izveidojam...',
    'creating_name' => 'Izveidojam :name...',
    'save' => 'Saglabāt',
    'save_and_close' => 'Saglabāt un aizvērt',
    'saving' => 'Saglabājam...',
    'saving_name' => 'Saglabājam :name...',
    'delete' => 'Dzēst',
    'deleting' => 'Dzēšam...',
    'confirm_delete' => 'Vai tiešām vēlaties dzēst šo ierakstu?',
    'confirm_delete_multiple' => 'Vai tiešām vēlaties dzēst šos ierakstus?',
    'deleting_name' => 'Dzēšam :name...',
    'reset_default' => 'Atiestatīt uz noklusējumu',
    'resetting' => 'Atiestatam',
    'resetting_name' => 'Atiestatam :name',
    'undefined_tab' => 'Izvēles',
    'field_off' => 'Izsl.',
    'field_on' => 'Iesl.',
    'add' => 'Pievienot',
    'apply' => 'Apstiprināt',
    'cancel' => 'Atcelt',
    'close' => 'Aizvērt',
    'confirm' => 'Apstiprināt',
    'reload' => 'Pārlādēt',
    'complete' => 'Pabeigt',
    'ok' => 'OK',
    'or' => 'vai',
    'confirm_tab_close' => 'Vai tiešām vēlaties aizvērt šo cilni? Nesaglabātās izmaiņas būs zudušas.',
    'behavior_not_ready' => 'Forma nav tikusi inicializēta, pārbaudiet vai izsaucāt initForm() savā kontrolierī.',
    'preview_no_files_message' => 'Faili nav augšupielādēti',
    'preview_no_record_message' => 'Nav izvēlētu ierakstu.',
    'select' => 'Izvēlēties',
    'select_all' => 'izvēlēties visus',
    'select_none' => 'neizvēlēties nevienu',
    'insert_row' => 'Ievietot rindu',
    'insert_row_below' => 'Ievietot riendu zemāk',
    'delete_row' => 'Dzēst rindu',
    'concurrency_file_changed_title' => 'Fails tika modificēts',
    'concurrency_file_changed_description' => 'Fails, kuru labojat ir ticis modificēts no cita lietotāja puses. Jūs varat pārlādēt failu un zaudēt savas izmaiņas vai arī pārrakstīt esošo failu uz diska.',
    'return_to_list' => 'Atgriezties uz sarakstu',
  ],
  'recordfinder' => [
    'find_record' => 'Atrast ierakstu',
  ],
  'relation' => [
    'missing_config' => 'Relācijām nav norādīta nekāda konfigurācija \':config\'.',
    'missing_definition' => 'Relācijām nav definēts lauks \':field\'.',
    'missing_model' => 'Relācijās izmantotajai klasei :class nav moduļa definīcijas.',
    'invalid_action_single' => 'Šī darbība nevar tikt veikta ar vienmoduļa relāciju.',
    'invalid_action_multi' => 'Šī darbība nevar tikt veikta ar daudzmoduļu relāciju.',
    'help' => 'Spiediet uz vienuma, lai pievienotu',
    'related_data' => 'Saistītie :name dati',
    'add' => 'Pievienot',
    'add_selected' => 'Pievienot izvēlētos',
    'add_a_new' => 'Pievienot jaunu :name',
    'link_selected' => 'Saite izvēlēta',
    'link_a_new' => 'Saistīt jaunu :name',
    'cancel' => 'Atcelt',
    'close' => 'Aizvērt',
    'add_name' => 'Pievienot :name',
    'create' => 'Izveidot',
    'create_name' => 'Izveidot :name',
    'update' => 'Atjaunot',
    'update_name' => 'Atjaunot :name',
    'preview' => 'Priekšskatīt',
    'preview_name' => 'Priekšskatīt :name',
    'remove' => 'Noņemt',
    'remove_name' => 'Noņemt :name',
    'delete' => 'Dzēst',
    'delete_name' => 'Dzēst :name',
    'delete_confirm' => 'Vai esat pārliecināts?',
    'link' => 'Saistīt',
    'link_name' => 'Saistīt :name',
    'unlink' => 'Atsaistīt',
    'unlink_name' => 'Atsaistīt :name',
    'unlink_confirm' => 'Vai esat pārliecināts?',
  ],
  'reorder' => [
    'default_title' => 'Pārkārtot ierakstus',
    'no_records' => 'Nav pieejami ieraksti, ko pārkārtot.',
  ],
  'model' => [
    'name' => 'Modulis',
    'not_found' => 'Modulis \':class\' ar ID :id netika atrasts',
    'missing_id' => 'Nav ticis norādīts ID, lai meklētu ierakstu.',
    'missing_relation' => 'Modulis \':class\' nesniedz informāciju par \':relation\'.',
    'missing_method' => 'Modulis \':class\' nesatur metodi \':method\'.',
    'invalid_class' => 'Modulis :model lietots :class ir nederīgs, tam jābūt mantotam no \\Moduļa klases.',
    'mass_assignment_failed' => 'Masveida saistīšana neizdevās Moduļa atribūtam \':attribute\'.',
  ],
  'warnings' => [
    'tips' => 'Sistēmas konfigurācijas padomi',
    'tips_description' => 'Ir lietas, kurām vajadzētu pievērst uzmanību, lai konfigurētu sistēmu pareizi.',
    'permissions' => 'Mape :name vai tās apakšmapes nav ierakstāmas ar PHP. Lūdzu iestatiet pareizas tiesības web serverim šajā mapē.',
    'extension' => 'PHP paplašinājums :name nav instalēts. Lūdzu instalējiet šo papildinājumu un aktivizējiet to.',
  ],
  'editor' => [
    'menu_label' => 'Koda labotāja iestatījumi',
    'menu_description' => 'Pielāgojiet sava kodu labotāja iestatījumus, tādus kā fontu izmēru un krāsu shēmu.',
    'font_size' => 'Fonta izmērs',
    'tab_size' => 'Tabulācijas platums',
    'use_hard_tabs' => 'Kārtot lietojot Tab',
    'code_folding' => 'Koda savilkšana',
    'word_wrap' => 'Vārdu aplaušana',
    'highlight_active_line' => 'Iekrāsot aktīvo līniju',
    'auto_closing' => 'Automātiski aizvērt birkas un īpašos simbolus',
    'show_invisibles' => 'Rādīt slēptos simbolus',
    'show_gutter' => 'Rādīt līniju numurus',
    'enable_basic_autocompletion' => 'Iespējot pamata automātisko pabeigšanu (Ctrl+Space)',
    'enable_snippets' => 'Rādīt koda fragmentus automātiskajā pabeigšanā',
    'enable_live_autocompletion' => 'Iespējot dzīvo automātisko pabeigšanu',
    'display_indent_guides' => 'Rādīt atkāpju ceļvežus',
    'show_print_margin' => 'Rādīt printēšanas rezervi',
    'theme' => 'Krāsu shēma',
  ],
  'tooltips' => [
    'preview_website' => 'Priekšskatīt web lapu',
  ],
  'mysettings' => [
    'menu_label' => 'Mani Iestatījumi',
    'menu_description' => 'Iestatījumi saistībā ar jūsu administrātora kontu',
  ],
  'myaccount' => [
    'menu_label' => 'Mans konts',
    'menu_description' => 'Atjaunojiet sava konta detaļas, piemēram, vārdu, epastu un paroli.',
    'menu_keywords' => 'drošība login',
  ],
  'branding' => [
    'menu_label' => 'Back-end pielāgošana',
    'menu_description' => 'Pielāgojiet administratīvo vidi, piemēram nosaukumu, krāsas un logo.',
    'accent_color' => 'Akcenta / Uzsvara krāsa',
  ],
  'backend_preferences' => [
    'menu_label' => 'Back-end iestatījumi',
    'menu_description' => 'Pārvaldiet sava konta iestatījumus, piemēram, valodu.',
    'region' => 'Regions',
    'code_editor' => 'Koda redaktors',
    'timezone' => 'Laika josla',
    'locale' => 'Valoda',
    'locale_comment' => 'Izvēlieties kādu valodu izmantosiet.',
  ],
  'access_log' => [],
  'filter' => [
    'all' => 'visi',
  ],
  'import_export' => [
    'show_ignored_columns' => 'Parādīt ignorētās kolonnas',
    'auto_match_columns' => 'Automātiski saskanēt kolonnas',
    'created' => 'Izveidoti',
    'updated' => 'Atjaunināti',
    'skipped' => 'Izlaisti',
    'warnings' => 'Brīdinājumi',
    'errors' => 'Kļūdas',
    'skipped_rows' => 'Izlaistas rindas',
    'upload_valid_csv' => 'Lūdzu, augšupielādējiet derīgu CSV failu.',
    'drop_column_here' => 'Nesiet datubāzes lauku šeit...',
    'ignore_this_column' => 'Ignorēt šo kolonnu',
    'processing_successful_line1' => 'Faila eksporta process ir sekmīgi pabeigts!',
    'processing_successful_line2' => 'Tagad pārlūks automātiski novirzīs uz faila lejupielādi.',
    'export_error' => 'Eksporta kļūda',
    'file_not_found_error' => 'Fails nav atrasts',
    'empty_error' => 'Dati eksportam netika sniegti',
    'empty_import_columns_error' => 'Lūdzu, norādiet kādas kolonnas ir jāimportē.',
    'match_some_column_error' => 'Lūdzu, vispirms saskanējiet kolonnas.',
    'required_match_column_error' => 'Lūdzu, norādiet attiecīgu datubāzes lauku obligātam laukam :label.',
    'empty_export_columns_error' => 'Lūdzu, norādiet kādas kolonnas ir jāeksportē.',
    'behavior_missing_uselist_error' => 'Jums ir jāisteno kontroliera uzvedība ListController Jūsu kontrolierī un jāiestata "useList: true" opcija Importa un Eksporta konfigurācijā.',
    'missing_model_class_error' => 'Lūdzu, norādiet modelClass īpašību priekš :type',
    'missing_column_id_error' => 'Trūkstošs kolonnas identifikators',
    'unknown_column_error' => 'Nezināma kolonna',
    'encoding_not_supported_error' => 'Izvēlētā faila kodējums nav atpazīts. Lūdzu, izvēlieties Pielāgota formāta opciju ar pareizu kodējumu lai Jūsu fails tiktu ieimportēts.',
  ],
  'permissions' => [
    'manage_media' => 'Pārvaldīt multividi',
  ],
  'mediafinder' => [
    'default_prompt' => 'Klikšķiniet uz %s pogas, lai atrastu multividi',
  ],
  'media' => [
    'menu_label' => 'Multimēdija',
    'upload' => 'Augšupielādēt',
    'move' => 'Pārvietot',
    'delete' => 'Dzēst',
    'add_folder' => 'Pievienot mapi',
    'search' => 'Meklēt',
    'display' => 'Attēlot',
    'filter_everything' => 'Viss',
    'filter_images' => 'Attēli',
    'filter_video' => 'Video',
    'filter_audio' => 'Audio',
    'filter_documents' => 'Dokumenti',
    'library' => 'Bibliotēka',
    'size' => 'Izmērs',
    'title' => 'Virsraksts',
    'last_modified' => 'Pēdējoreiz modificēts',
    'public_url' => 'Publiskā URL',
    'click_here' => 'Spiest šeit',
    'thumbnail_error' => 'Kļūda ģenerējot priekšskatījumu.',
    'return_to_parent' => 'Atgriezties vecākmapē',
    'return_to_parent_label' => 'Doties augšup ..',
    'nothing_selected' => 'Nekas nav izvēlēts.',
    'multiple_selected' => 'Vairāki izvēlēti objekti.',
    'uploading_file_num' => 'Augšupielādējam :number failu(us)...',
    'uploading_complete' => 'Augšupielāde pabeigta',
    'order_by' => 'Kārtot pēc',
    'folder' => 'Mape',
    'no_files_found' => 'Jūsu pieprasītie faili netika atrasti.',
    'delete_empty' => 'Lūdzu izvēlaties objektus, kurus dzēst.',
    'delete_confirm' => 'Vai tiešām vēlaties izdzēst izvēlēto objektu(us)?',
    'error_renaming_file' => 'Kļūda pārdēvējot objektu.',
    'new_folder_title' => 'Jauna mape',
    'folder_name' => 'Mapes nosaukums',
    'error_creating_folder' => 'Kļūda izveidojot mapi',
    'folder_or_file_exist' => 'Mape vai fails ar izvēlēto nosaukumu jau eksistē.',
    'move_empty' => 'Izvēlēties objektus, kurus pārvietot.',
    'move_popup_title' => 'Pārvietot failus vai mapes',
    'move_destination' => 'Mērķdirektorija',
    'please_select_move_dest' => 'Lūdzu izvēlieties mērķdirektoriju.',
    'move_dest_src_match' => 'Lūdzu izvēlieties citu mērķdirektoriju.',
    'empty_library' => 'Multimēdijas bibliotēka ir tukša. Augšupielādējiet failus vai izveidojat mapes, lai sāktu.',
    'insert' => 'Ievietot',
    'crop_and_insert' => 'Apgriezt un Ievietot',
    'select_single_image' => 'Lūdzu izvēlieties vienu attēlu.',
    'selection_not_image' => 'Izvēlētais objekts nav attēls.',
    'restore' => 'Atcelt visas izmaiņas',
    'resize' => 'Mērogot...',
    'selection_mode_normal' => 'Normāls',
    'selection_mode_fixed_ratio' => 'Fiksēta attiecība',
    'selection_mode_fixed_size' => 'Fiksēts izmērs',
    'height' => 'Augstums',
    'width' => 'Platums',
    'selection_mode' => 'Iezīmēšanas režīms',
    'resize_image' => 'Mērogot attēlu',
    'image_size' => 'Attēla izmērs:',
    'selected_size' => 'Izvēlēts:',
  ],
];