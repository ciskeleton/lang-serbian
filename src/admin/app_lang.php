<?php

/**
 * ------------------------------------------------------------------------
 * CiSkeleton Admin Language File
 * ------------------------------------------------------------------------
 * This file contains all language lines used in the CSK admin dashboard.
 * Each section is separated by comments for easier navigation and maintenance.
 */

/**
 * ------------------------------------------------------------------------
 * Core Dashboard Section
 * ------------------------------------------------------------------------
 * General terms and messages used across the admin dashboard.
 */
$lang['admin_components'] = 'Komponente';
$lang['admin_content'] = 'Sadržaj';
$lang['admin_database_backup'] = 'Rezervne kopije baze podataka';
$lang['admin_extensions'] = 'Ekstenzije';
$lang['admin_firewall'] = 'Zaštitni zid';
$lang['admin_help'] = 'Pomoć';
$lang['admin_languages'] = 'Jezici';
$lang['admin_logs'] = 'Evidencije sistema';
$lang['admin_media'] = 'Biblioteka medija';
$lang['admin_modules'] = 'Moduli';
$lang['admin_plugins'] = 'Plugini';
$lang['admin_reports'] = 'Evidencija aktivnosti';
$lang['admin_settings'] = 'Sistemska podešavanja';
$lang['admin_sysinfo'] = 'Informacije o sistemu';
$lang['admin_system'] = 'Sistem';
$lang['admin_system_firewall'] = 'Sistemski zaštitni zid';
$lang['admin_themes'] = 'Teme';
$lang['admin_updates'] = 'Sistemske nadogradnje';
$lang['admin_users'] = 'Korisnici';
$lang['admin_view_site'] = 'Prikaži sajt';
$lang['per_page'] = 'Po Stranici';

// Generic Messages
$lang['admin_footer_thankyou'] = 'Hvala vam što ste kreirali sa <a href="%s" target="_blank">%s</a>.';
$lang['admin_items_active_count'] = '=0{Nema aktivnih stavki.} other{<b>#</b> od <b>%s</b> stavki je aktivno.}';

/**
 * ---------------------------------------------------------------
 * Extension Install Section
 * ---------------------------------------------------------------
 * Language lines for the extension installation section.
 */
$lang['admin_install'] = 'Instaliraj';
$lang['admin_install_error'] = 'Instalacija paketa nije uspela.';
$lang['admin_install_error_com'] = 'Instalacija nije uspela: %s';
$lang['admin_install_location_app'] = 'Samo ova aplikacija';
$lang['admin_install_location_core'] = 'Sve aplikacije';
$lang['admin_install_location_select'] = '&#151; Izaberite lokaciju &#151;';
$lang['admin_install_success'] = 'Paket je uspešno instaliran.';
$lang['admin_install_upload'] = 'Otpremi';
$lang['admin_install_upload_error'] = 'Otpremanje paketa nije uspelo.';
$lang['admin_install_upload_success'] = 'Paket je uspešno otpremljen.';
$lang['admin_install_upload_tip'] = 'Instalirajte paket tako što ćete ovde otpremiti njegovu <b>.zip</b> datoteku.';

/**
 * ---------------------------------------------------------------
 * Database & Backup Section
 * ---------------------------------------------------------------
 * Language lines for the database management section.
 */
$lang['admin_database_backup_clean_error'] = 'Nemoguće se očistiti stare rezervne kopije.';
$lang['admin_database_backup_clean_success'] = '%d rezervnih kopija je izbrisano. %d prostora na disku je oslobođeno.';
$lang['admin_database_backup_create'] = 'Kreiraj Rezervnu Kopiju';
$lang['admin_database_backup_create_confirm'] = 'Da li ste sigurni da želite da kreirate rezervnu kopiju sada?';
$lang['admin_database_backup_create_error'] = 'Nemoguće se kreirati datoteku rezervne kopije. Uverite da je fascikla <b>%s</b> upisiva.';
$lang['admin_database_backup_create_success'] = 'Datoteka rezervne kopije baze podataka <b>%s</b> je uspešno kreirana.';
$lang['admin_database_backup_delete_confirm'] = 'Da li ste sigurni da želite da izbrišete ove rezervne kopije?';
$lang['admin_database_backup_delete_error'] = 'Nemoguće se izbrisati izabrane rezervne kopije.';
$lang['admin_database_backup_delete_success'] = 'Rezervne kopije su uspešno izbrisane.';
$lang['admin_database_backup_download_error'] = 'Nemoguće se preuzeti izabranu datoteku rezervne kopije.';
$lang['admin_database_backup_download_success'] = 'Datoteka rezervne kopije je uspešno preuzeta.';
$lang['admin_database_backup_lock_confirm'] = 'Da li ste sigurni da želite da zaključate ove rezervne kopije?';
$lang['admin_database_backup_lock_error'] = 'Nemoguće se zaključati izabrane rezervne kopije.';
$lang['admin_database_backup_lock_success'] = 'Rezervne kopije su uspešno zaključene.';
$lang['admin_database_backup_locked_error'] = 'Nemoguće se izbrisati zaključane rezervne kopije.';
$lang['admin_database_backup_missing_error'] = 'Datoteka rezervne kopije nije mogla biti pronađena.';
$lang['admin_database_backup_unlock_confirm'] = 'Da li ste sigurni da želite da otključate ove rezervne kopije?';
$lang['admin_database_backup_unlock_error'] = 'Nemoguće se otključati izabrane rezervne kopije.';
$lang['admin_database_backup_unlock_success'] = 'Rezervne kopije su uspešno otključene.';
$lang['admin_database_prune'] = 'Čišćenje';
$lang['admin_database_prune_confirm'] = 'Da li ste sigurni da želite da očistite bazu podataka? Biće kreirana rezervna kopija prilikom izvršenja.';
$lang['admin_database_prune_error'] = 'Nemoguće se očistiti bazu podataka.';
$lang['admin_database_prune_next'] = 'Sledeće čišćenje: <b>%s</b>';
$lang['admin_database_prune_success'] = 'Baza podataka je uspešno očišćena.';

/**
 * ---------------------------------------------------------------
 * System Logs Section
 * ---------------------------------------------------------------
 * Language lines for the system logs section.
 */
$lang['admin_logs_delete'] = 'Obriši Evidencije';
$lang['admin_logs_delete_confirm'] = 'Da li ste sigurni da želite da obrišete izabrane datoteke evidencije?';
$lang['admin_logs_delete_error'] = 'Nemoguće se obrisati datoteke evidencije.';
$lang['admin_logs_delete_success'] = 'Datoteke evidencije su uspešno obrisane.';
$lang['admin_logs_error_disabled'] = 'Evidencija trenutno nije omogućena.';
$lang['admin_logs_error_empty'] = 'Nisu pronađene evidencije.';
$lang['admin_logs_error_missing'] = 'Ili datoteka evidencije ne može biti pronađena, ili je bila prazna.';
$lang['admin_logs_tip'] = 'Evidenciranje može brzo da kreira veoma velike datoteke. Za sajtove u živoj upotrebi, razmislite o brisanju starih.';

/**
 * ---------------------------------------------------------------
 * Emails Section
 * ---------------------------------------------------------------
 * Language lines for the mail queue section.
 */
$lang['admin_emails_delete_confirm'] = 'Da li ste sigurni da želite da obrišete izabrane imejlove?';
$lang['admin_emails_delete_error'] = 'Nemoguće se obrisati izabrane imejlove.';
$lang['admin_emails_delete_success'] = 'Izabrani imejlove su uspešno obrisani.';
$lang['admin_emails_email_from'] = 'Poslato od';
$lang['admin_emails_mail_queue'] = 'Red za čekanje imejlova';
$lang['admin_emails_mailer'] = 'Masovna pošta';
$lang['admin_emails_search'] = 'Pretraži e-poštu prema predmetu ili sadržaju...';
$lang['admin_emails_send_error'] = 'Neuspešno stavljanje imejla u red. Molimo pokušajte ponovo.';
$lang['admin_emails_send_none'] = 'Nema korisnika koji odgovara vašim kriterijumima.';
$lang['admin_emails_send_success'] = 'Imejl je stavljen u red i biće poslat uskoro.';
$lang['admin_emails_send_to_banned'] = 'Pošalji zabranjenim korisnicima.';
$lang['admin_emails_send_to_deleted'] = 'Pošalji izbrisanim korisnicima.';
$lang['admin_emails_send_to_disabled'] = 'Pošalji neaktivnim korisnicima.';

/**
 * ---------------------------------------------------------------
 * Users Section
 * ---------------------------------------------------------------
 * Language lines for the users management section.
 */
$lang['admin_users_add'] = 'Dodaj Korisnika';
$lang['admin_users_all_users'] = 'Svi Korisnici';
$lang['admin_users_ban_confirm'] = 'Da li ste sigurni da želite da zabranite pristup odabranim korisnicima?';
$lang['admin_users_ban_error'] = 'Nije moguće zabraniti pristup odabranim korisnicima.';
$lang['admin_users_ban_success'] = 'Odabranim korisnicima je uspešno zabranjen pristup.';
$lang['admin_users_delete_confirm'] = 'Da li ste sigurni da želite da izbrišete odabrane korisnike?';
$lang['admin_users_delete_error'] = 'Nije moguće izbrisati odabrane korisnike.';
$lang['admin_users_delete_success'] = 'Odabrani korisnici su uspešno izbrisani.';
$lang['admin_users_disable_confirm'] = 'Da li ste sigurni da želite da onemogućite odabrane korisnike?';
$lang['admin_users_disable_error'] = 'Nije moguće onemogućiti odabrane korisnike.';
$lang['admin_users_disable_success'] = 'Odabrani korisnici su uspešno onemogućeni.';
$lang['admin_users_edit'] = 'Izmeni Korisnika';
$lang['admin_users_edit_error'] = 'Nemoguće se ažurirati korisnika.';
$lang['admin_users_edit_success'] = 'Korisnik je uspešno ažuriran.';
$lang['admin_users_enable_confirm'] = 'Da li ste sigurni da želite da omogućite odabrane korisnike?';
$lang['admin_users_enable_error'] = 'Nije moguće omogućiti odabrane korisnike.';
$lang['admin_users_enable_success'] = 'Odabrani korisnici su uspešno omogućeni.';
$lang['admin_users_groups'] = 'Grupe';
$lang['admin_users_lock_confirm'] = 'Da li ste sigurni da želite da zaključate izabrane korisnike?';
$lang['admin_users_lock_error'] = 'Nemoguće se zaključati izabrane korisnike.';
$lang['admin_users_lock_success'] = 'Izabrani korisnici su uspešno zaključeni.';
$lang['admin_users_logged'] = 'Prijavljeni Korisnici';
$lang['admin_users_manage'] = 'Upravljanje Korisnicima';
$lang['admin_users_remove_confirm'] = 'Da li ste sigurni da želite da trajno izbrišete odabrane korisnike i sve njihove podatke?';
$lang['admin_users_remove_error'] = 'Nije moguće trajno izbrisati odabrane korisnike i sve njihove podatke.';
$lang['admin_users_remove_success'] = 'Odabrani korisnici i svi njihovi podaci su uspešno izbrisani.';
$lang['admin_users_restore_confirm'] = 'Da li ste sigurni daželite da vratite odabrane korisnike?';
$lang['admin_users_restore_error'] = 'Nije moguće vratiti odabrane korisnike.';
$lang['admin_users_restore_success'] = 'Odabrani korisnici su uspešno vraćeni.';
$lang['admin_users_search'] = 'Pretraži po imenu, korisničkom imenu, ili email...';
$lang['admin_users_unban_confirm'] = 'Da li ste sigurni da želite da uklonite zabranu pristupa odabranim korisnicima?';
$lang['admin_users_unban_error'] = 'Nije moguće ukloniti zabranu pristupa odabranim korisnicima.';
$lang['admin_users_unban_success'] = 'Zabrana pristupa odabranim korisnicima je uspešno uklonjena.';
$lang['admin_users_unlock_confirm'] = 'Da li ste sigurni da želite da otključite izabrane korisnike?';
$lang['admin_users_unlock_error'] = 'Nemoguće se otključati izabrane korisnike.';
$lang['admin_users_unlock_success'] = 'Izabrani korisnici su uspešno otključeni.';

/**
 * ---------------------------------------------------------------
 * Reports Section
 * ---------------------------------------------------------------
 * Language lines for the activity log section.
 */
$lang['admin_reports_clear'] = 'Obriši Evidenciju';
$lang['admin_reports_clear_confirm'] = 'Da li ste sigurni da želite da obrišete evidenciju aktivnosti?';
$lang['admin_reports_clear_error'] = 'Nemoguće se obrisati evidenciju aktivnosti.';
$lang['admin_reports_clear_success'] = 'Evidencija aktivnosti je uspešno očišćena.';
$lang['admin_reports_latest_actions'] = 'Poslednje Akcije';

/**
 * ---------------------------------------------------------------
 * Media Library Section
 * ---------------------------------------------------------------
 * Language lines for the media library section.
 */
$lang['admin_media_delete_confirm'] = 'Da li ste sigurni da želite da obrišete izabrane datoteke?';
$lang['admin_media_delete_error'] = 'Nemoguće se obrisati datoteke.';
$lang['admin_media_delete_success'] = 'Datoteke su uspešno obrisane.';
$lang['admin_media_file_delete_error'] = 'Nemoguće se obrisati datoteku.';
$lang['admin_media_file_delete_success'] = 'Datoteka je uspešno obrisana.';
$lang['admin_media_file_update_error'] = 'Nemoguće se ažurirati datoteku.';
$lang['admin_media_file_update_success'] = 'Datoteka je uspešno ažurirana.';
$lang['admin_media_search'] = 'Pretraži po imenu, opisu ili nazivu datoteke...';

/**
 * ---------------------------------------------------------------
 * Modules Section
 * ---------------------------------------------------------------
 * Language lines for the modules management section.
 */
$lang['admin_modules_active_count'] = '=0{Nema aktivnih modula.} other{<b>#</b> od <b>%s</b> modula je aktivno.}';
$lang['admin_modules_add'] = 'Dodaj Modul';
$lang['admin_modules_delete_confirm'] = 'Da li ste sigurni da želite da obrišete modul: <b>%s</b>?';
$lang['admin_modules_delete_error'] = 'Nemoguće se obrisati modul.';
$lang['admin_modules_delete_success'] = 'Modul je uspešno obrisan.';
$lang['admin_modules_disable_all_confirm'] = 'Da li ste sigurni da želite da onemogućite sve module?';
$lang['admin_modules_disable_all_error'] = 'Nemoguće se onemogućiti sve module.';
$lang['admin_modules_disable_all_success'] = 'Svi moduli su uspešno onemogućeni.';
$lang['admin_modules_disable_confirm'] = 'Da li ste sigurni da želite da onemogućite modul: <b>%s</b>?';
$lang['admin_modules_disable_error'] = 'Nemoguće se deaktivirati modul.';
$lang['admin_modules_disable_success'] = 'Modul je uspešno deaktiviran.';
$lang['admin_modules_enable_all_confirm'] = 'Da li ste sigurni da želite da omogućite sve module?';
$lang['admin_modules_enable_all_error'] = 'Nemoguće se omogućiti sve module.';
$lang['admin_modules_enable_all_success'] = 'Svi moduli su uspešno omogućeni.';
$lang['admin_modules_enable_confirm'] = 'Da li ste sigurni da želite da omogućite modul: <b>%s</b>?';
$lang['admin_modules_enable_error'] = 'Nemoguće se aktivirati modul.';
$lang['admin_modules_enable_success'] = 'Modul je uspešno aktiviran.';
$lang['admin_modules_install_tip'] = 'Moduli dodaju nove karakteristike i funkcionalnost vašem sajtu. Pregledajte dostupne module u <a href="%s" target="_blank" rel="noopener">direktorijumu modula</a> ili postavite jedan kao <b>.zip</b> paket.';

/**
 * ---------------------------------------------------------------
 * Plugins Section
 * ---------------------------------------------------------------
 * Language lines for the plugins management section.
 */
$lang['admin_plugins_active_count'] = '=0{Nema aktivnih dodataka.} other{<b>#</b> od <b>%s</b> dodataka je aktivno.}';
$lang['admin_plugins_add'] = 'Dodaj Plugin';
$lang['admin_plugins_delete_confirm'] = 'Da li ste sigurni da želite da obrišete plugin: <b>%s</b>?';
$lang['admin_plugins_delete_error'] = 'Nemoguće obrisati plugin.';
$lang['admin_plugins_delete_success'] = 'Plugin je uspešno obrisan.';
$lang['admin_plugins_disable_all_confirm'] = 'Da li ste sigurni da želite da onemogućite sve plugine?';
$lang['admin_plugins_disable_all_error'] = 'Nemoguće onemogućiti sve plugine.';
$lang['admin_plugins_disable_all_success'] = 'Svi plugini su uspešno onemogućeni.';
$lang['admin_plugins_disable_confirm'] = 'Da li ste sigurni da želite da onemogućite plugin: <b>%s</b>?';
$lang['admin_plugins_disable_error'] = 'Nemoguće deaktivirati plugin.';
$lang['admin_plugins_disable_success'] = 'Plugin je uspešno deaktiviran.';
$lang['admin_plugins_enable_all_confirm'] = 'Da li ste sigurni da želite da omogućite sve plugine?';
$lang['admin_plugins_enable_all_error'] = 'Nemoguće omogućiti sve plugine.';
$lang['admin_plugins_enable_all_success'] = 'Svi plugini su uspešno omogućeni.';
$lang['admin_plugins_enable_confirm'] = 'Da li ste sigurni da želite da omogućite plugin: <b>%s</b>?';
$lang['admin_plugins_enable_error'] = 'Nemoguće aktivirati plugin.';
$lang['admin_plugins_enable_success'] = 'Plugin je uspešno aktiviran.';
$lang['admin_plugins_install_tip'] = 'Plugini proširuju postojeće karakteristike i dodaju nove opcije ili integracije. Instalirajte iz <a href="%s" target="_blank" rel="noopener">direktorijuma plugin</a> ili postavite jedan kao <b>.zip</b> paket.';

/**
 * ---------------------------------------------------------------
 * Themes Section
 * ---------------------------------------------------------------
 * Language lines for the themes management section.
 */
$lang['admin_themes_add'] = 'Dodaj Temu';
$lang['admin_themes_delete_confirm'] = 'Da li ste sigurni da želite da obrišete temu: <b>%s</b>?';
$lang['admin_themes_delete_error'] = 'Nemoguće obrisati temu.';
$lang['admin_themes_delete_error_active'] = 'Ne možete obrisati temu koja je trenutno aktivna.';
$lang['admin_themes_delete_success'] = 'Tema je uspešno obrisana.';
$lang['admin_themes_disable_confirm'] = 'Da li ste sigurni da želite da deaktivirate temu: <b>%s</b>?';
$lang['admin_themes_disable_error'] = 'Nije moguće deaktivirati temu.';
$lang['admin_themes_disable_success'] = 'Tema je uspešno deaktivirana.';
$lang['admin_themes_enable_confirm'] = 'Da li ste sigurni da želite da omogućite temu: <b>%s</b>?';
$lang['admin_themes_enable_error'] = 'Nemoguće aktivirati temu.';
$lang['admin_themes_enable_success'] = 'Tema je uspešno aktivirana.';
$lang['admin_themes_install_tip'] = 'Teme menjaju izgled i raspored vašeg sajta. Izaberite iz <a href="%s" target="_blank" rel="noopener">biblioteke tema</a> ili postavite jedan kao <b>.zip</b> paket da instalirate svoju temu.';
$lang['admin_themes_none_tip'] = 'Ova aplikacija radi bez teme. Instalirajte jednu da biste prilagodili javni interfejs.';

/**
 * ---------------------------------------------------------------
 * Menus Section
 * ---------------------------------------------------------------
 * Language lines for the menu locations section.
 */
$lang['admin_menus'] = 'Meniji';
$lang['admin_menus_assign_error'] = 'Nemoguće se ažurirati lokacije menija.';
$lang['admin_menus_assign_success'] = 'Lokacije menija su uspešno ažurirane.';
$lang['admin_menus_header'] = 'Dostupno je <b>%s</b> lokacija menija.';
$lang['admin_menus_location'] = 'Lokacija';
$lang['admin_menus_locations'] = 'Lokacije Menija';
$lang['admin_menus_manage'] = 'Upravljanje Menija';
$lang['admin_menus_menu'] = 'Dodeljeno Meni';
$lang['admin_menus_none'] = '&#151; Nijedno &#151;';

/**
 * ---------------------------------------------------------------
 * Languages Section
 * ---------------------------------------------------------------
 * Language lines for the languages management section.
 */
$lang['admin_languages_add'] = 'Dodaj jezik';
$lang['admin_languages_default_confirm'] = 'Da li ste sigurni da želite da postavite ovaj jezik kao podrazumevani jezik sajta?';
$lang['admin_languages_default_error'] = 'Nemoguće promeniti podrazumevani jezik.';
$lang['admin_languages_default_error_nochange'] = 'Ovaj jezik je već podrazumevani.';
$lang['admin_languages_default_success'] = 'Podrazumevani jezik je uspešno promenjen.';
$lang['admin_languages_disable_all_confirm'] = 'Da li ste sigurni da želite da onemogućite sve jezike?';
$lang['admin_languages_disable_all_error'] = 'Nemoguće onemogućiti sve jezike.';
$lang['admin_languages_disable_all_success'] = 'Svi jezici su uspešno onemogućeni.';
$lang['admin_languages_disable_confirm'] = 'Da li ste sigurni da želite da onemogućite jezik: <b>%s</b>?';
$lang['admin_languages_disable_error'] = 'Nemoguće onemogućiti jezik.';
$lang['admin_languages_disable_error_default'] = 'Podrazumevani jezik ne može biti onemogućen.';
$lang['admin_languages_disable_error_nochange'] = 'Ovaj jezik je već onemogućen.';
$lang['admin_languages_disable_success'] = 'Jezik je uspešno onemogućen.';
$lang['admin_languages_enable_all_confirm'] = 'Da li ste sigurni da želite da omogućite sve jezike?';
$lang['admin_languages_enable_all_error'] = 'Nemoguće omogućiti sve jezike.';
$lang['admin_languages_enable_all_success'] = 'Svi jezici su uspešno omogućeni.';
$lang['admin_languages_enable_confirm'] = 'Da li ste sigurni da želite da omogućite jezik: <b>%s</b>?';
$lang['admin_languages_enable_error'] = 'Nemoguće omogućiti jezik.';
$lang['admin_languages_enable_error_nochange'] = 'Ovaj jezik je već omogućen.';
$lang['admin_languages_enable_success'] = 'Jezik je uspešno omogućen.';
$lang['admin_languages_install_tip'] = 'Jezici dodaju prevode za interfejs i sadržaj vašeg sajta. Pregledajte dostupne jezike u <a href="%s" target="_blank" rel="noopener">direktorijumu jezika</a> ili otpremite <b>.zip</b> paket da biste instalirali sopstveni.';
$lang['admin_languages_tip'] = 'Omogućite, onemogućite i postavite podrazumevani jezik sajta. Omogućeni jezici su dostupni posetiocima sajta.';

/**
 * ---------------------------------------------------------------
 * Updates & License Section
 * ---------------------------------------------------------------
 * Language lines for updates section.
 */
$lang['update_available'] = 'Dostupna nova ažuriranja!';
$lang['update_backup_error'] = 'Nije moguće napraviti rezervnu kopiju postojećeg paketa. Ažuriranje je prekinuto.';
$lang['update_check_disabled'] = 'Automatske provere ažuriranja su onemogućene. Omogućite ih da biste videli ažuriranja.';
$lang['update_check_error'] = 'Nije moguće pokrenuti proveru ažuriranja u ovom trenutku.';
$lang['update_check_success'] = 'Provera ažuriranja je uspešno završena.';
$lang['update_install_error'] = 'Paket nije mogao biti instaliran. Prethodna verzija je zadržana.';
$lang['update_install_success'] = 'Paket je uspešno ažuriran na najnoviju verziju.';
$lang['update_interval_3days'] = 'Svakog 3. dana';
$lang['update_interval_biweekly'] = 'Svake 2 nedelje';
$lang['update_interval_daily'] = 'Svakog dana';
$lang['update_interval_monthly'] = 'Jednom mesečno';
$lang['update_interval_weekly'] = 'Jednom nedeljno';
$lang['update_not_available'] = 'Vaša veb stranica je ažurna.';
$lang['update_rollback_error'] = 'Nije moguće vratiti prethodnu verziju. Može biti potrebna ručna intervencija.';
$lang['update_rollback_success'] = 'Prethodna verzija je uspešno vraćena.';
$lang['updates_available'] = 'Dostupna ažuriranja';
$lang['updates_check_now'] = 'Proveri sada';
$lang['updates_check_now_confirm'] = 'Da li ste sigurni da želite da proverite ažuriranja sada?';
$lang['updates_current_version'] = 'Trenutna verzija';
$lang['updates_enable'] = 'Omogući ažuriranja';
$lang['updates_last_check'] = 'Poslednja provera: %s';
$lang['updates_latest_version'] = 'Najnovija verzija';
$lang['updates_next_check'] = 'Sledeća zakazana provera: %s';
$lang['updates_previous_version'] = 'Prethodna verzija';
$lang['updates_recent'] = 'Nedavno ažurirano';

/**
 * ---------------------------------------------------------------
 * Firewall Section
 * ---------------------------------------------------------------
 * Language lines for the system firewall section.
 */
$lang['admin_firewall_ban_error'] = 'Blokiranje navedene IP adrese nije uspelo.';
$lang['admin_firewall_ban_success'] = 'IP adresa je uspešno blokirana.';
$lang['admin_firewall_block_ip'] = 'Blokiraj IP adresu';
$lang['admin_firewall_delete_confirm'] = 'Da li ste sigurni da želite da odblokirate izabrane IP adrese?';
$lang['admin_firewall_delete_error'] = 'Odblokiranje izabranih IP adresa nije uspelo.';
$lang['admin_firewall_delete_success'] = 'Izabrane IP adrese su uspešno odblokirane.';
$lang['admin_firewall_duration'] = 'Trajanje zabrane';
$lang['admin_firewall_permanent'] = 'Trajno';
$lang['admin_firewall_reason'] = 'Razlog zabrane';
$lang['admin_firewall_tip'] = 'Pregledajte i upravljajte IP adresama blokiranim od strane zaštitnog zida zbog ponovljenih prekršaja ili sumnjive aktivnosti.';

// Settings
$lang['404_ban_duration'] = 'Trajanje 404 zabrane';
$lang['404_threshold'] = 'Limit 404 grešaka';
$lang['uri_ban_duration'] = 'Trajanje URI zabrane';
$lang['uri_strike_threshold'] = 'Granični broj URI pokušaja';
