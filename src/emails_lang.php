<?php

/**
 * System emails language lines.
 *
 * @package     CiSkeleton\Core
 * @subpackage  Language
 * @category    Core
 *
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     MIT
 * @link        https://opensource.org/license/mit
 *
 * SPDX-License-Identifier: MIT
 */

// ====================================================================
// SYSTEM NOTIFICATIONS
// ====================================================================

// ----------------------------------------------------------------
// Update Available
// ----------------------------------------------------------------

$lang['emails_updates_available_subject'] = 'Доступна су ажурирања система';
$lang['emails_updates_available_message'] = <<<EOT
Zdravo,

Za {site_anchor} su otkrivene nove sistemske ažuriranja.

Ova ažuriranja mogu da uključuju bezbednosne zakrpe, poboljšanja performansi ili nove funkcije.
Preporučujemo da ih pregledate što pre.

Možete pregledati i upravljati dostupnim ažuriranjima na administratorskoj tabli:
{link}

Ako ste već pregledali ili primenili ažuriranja, nije potrebno da preduzimate ništa više.

Ovo je automatska sistemska poruka koju je poslao {site_name}.
Molimo vas da ne odgovarate na ovaj imejl.

-- {site_name}
EOT;

// ====================================================================
// USER ACCOUNTS
// ====================================================================

// ----------------------------------------------------------------
// Account Activation Request
// ----------------------------------------------------------------

$lang['emails_account_activation_request_subject'] = 'Активација налога';
$lang['emails_account_activation_request_message'] = <<<EOT
Zdravo {name},

Hvala vam što ste se registrovali na {site_anchor}. Vaš nalog je kreiran i mora biti aktiviran pre nego što ga možete koristiti.

Da biste aktivirali svoj nalog, kliknite na sledeći link ili ga kopirajte i nalepite u svoj pregledač:
{link}

Sve najbolje,
-- Tim {site_name}.
EOT;

// ----------------------------------------------------------------
// Resend Account Activation Link
// ----------------------------------------------------------------

$lang['emails_account_activation_resend_subject'] = 'Нова веза за активацију';
$lang['emails_account_activation_resend_message'] = <<<EOT
Zdravo {name},

Nedavno ste zatražili novi link za aktivaciju na {site_anchor} jer vaš nalog nije bio aktivan.
Da biste aktivirali svoj nalog, kliknite na sledeći link ili ga kopirajte i nalepite u svoj pregledač:
{link}

Ako niste zatražili ovo, nema potrebe za daljim postupanjem.

Ova akcija je zatražena sa ove IP adrese: {ip_link}.

Sve najbolje,
-- Tim {site_name}.
EOT;

// ----------------------------------------------------------------
// Account Activation Successful
// ----------------------------------------------------------------

$lang['emails_account_activation_success_subject'] = 'Налог активиран';
$lang['emails_account_activation_success_message'] = <<<EOT
Zdravo {name},

Vaš nalog na {site_anchor} je uspešno aktiviran. Sada se možete <a href="{login_url}" target="_blank" rel="noopener">prijaviti</a> bilo kada želite.

Nadamo se da ćete uživati u svom boravku, molimo prihvatite naše srdačne pozdrave.

-- Tim {site_name}.
EOT;

// ----------------------------------------------------------------
// Pending Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_pending_subject'] = 'Налог чека одобрење';
$lang['emails_account_approval_pending_message'] = <<<EOT
Zdravo {name},

Hvala vam što ste nam se pridružili na {site_anchor}. Vaš nalog je kreiran ali treba odobrenje administratora pre nego postane aktivan.
Iskreno se izvinjavamo za ovaj ključni korak, ali to je samo iz sigurnosnih razloga.

Primićete potvrdni e-mail čim vaš nalog bude odobren.

Nadamo se da ćete uživati u svom boravku, molimo prihvatite naše srdačne pozdrave.

-- Tim {site_name}.
EOT;

// ----------------------------------------------------------------
// Successful Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_success_subject'] = 'Налог одобрен';
$lang['emails_account_approval_success_message'] = <<<EOT
Zdravo {name},

Odlične vesti! Vaš nalog na {site_anchor} je upravo odobren.

Sada se možete prijaviti i odmah početi koristiti svoj nalog:
{link}

Srećni smo što ste sa nama.

-- Tim {site_name}.
EOT;

// ----------------------------------------------------------------
// Account Restoration
// ----------------------------------------------------------------

$lang['emails_account_restored_subject'] = 'Налог обновљен';
$lang['emails_account_restored_message'] = <<<EOT
Zdravo {name},

Ovaj e-mail potvrđuje da je vaš nalog na {site_anchor} uspešno obnovljen.

Dobrodošli nazad i nadamo se da ćete ovaj put uživati u svom boravku.

Sve najbolje,
-- Tim {site_name}.
EOT;

// ----------------------------------------------------------------
// Welcome Message
// ----------------------------------------------------------------

$lang['emails_account_welcome_subject'] = 'Добро дошли на {site_name}';
$lang['emails_account_welcome_message'] = <<<EOT
Zdravo {name},

Većina ljudi ima prilično dugačke dobrodošlice e-mail sekvence nakon što se registrujete na njihovom mestu.

Dobre vesti: mi nismo kao većina ljudi.
Ali, svejedno želimo vas dobrodošlicu i hvala vam što ste nam se pridružili na {site_anchor}.

Nadamo se da ćete uživati u svom boravku, molimo prihvatite naše srdačne pozdrave.

-- Tim {site_name}.
EOT;

// ----------------------------------------------------------------
// Email Change Request
// ----------------------------------------------------------------

$lang['emails_email_change_request_subject'] = 'Захтев за промену е-поште';
$lang['emails_email_change_request_message'] = <<<EOT
Zdravo {name},

Primili ste ovu e-poštu jer smo primili zahtev za promenu e-pošte za vaš nalog na {site_anchor}.

Kliknite na sledeću vezu ili je kopirajte i nalepite u svoj pregledač ako želite da nastavite:
{link}

Ako niste zatražili promenu e-pošte, nema potrebe za daljim postupanjem.

Ova akcija je zatražena sa ove IP adrese: {ip_link}.

Sve najbolje,
-- Tim {site_name}.
EOT;

// ----------------------------------------------------------------
// Successful Email Change
// ----------------------------------------------------------------

$lang['emails_email_change_success_subject'] = 'Адреса е-поште промењена';
$lang['emails_email_change_success_message'] = <<<EOT
Zdravo {name},

Ovaj e-mail potvrđuje da je vaša e-mail adresa korišćena na {site_anchor} uspešno promenjena.

Ako niste izvršili ovu akciju, molimo kontaktirajte nas što je pre moguće da rešimo ovaj problem.

Ova akcija je izvršena sa ove IP adrese: {ip_link}.

Sve najbolje,
-- Tim {site_name}.
EOT;

// ----------------------------------------------------------------
// Login Alert: Failure
// ----------------------------------------------------------------

$lang['emails_login_alert_failure_subject'] = 'Упозорење о неуспешној пријави';
$lang['emails_login_alert_failure_message'] = <<<EOT
Zdravo {name},

Neko je nedavno koristio pogrešne lozinke da bi pokušao da se prijavi na vaš {site_name} nalog.

Datum servera: {date}
Uređaj: {browser}, {platform}
IP adresa: {ip_link}

Ako ovo niste bili vi, ne brinite se, njihov pokušaj prijave nije bio uspešan.

Ako ste ovo bili vi i ne sećate se lozinke, kliknite na vezu ispod da biste je resetovali:
{reset_link}

Ako imate poteškoća sa prijavom na vaš nalog, kontaktirajte naš tim ili zatražite vezu za prijavu jednim klikom.

-- Tim {site_name}.
EOT;

// ----------------------------------------------------------------
// Login Alert: Success
// ----------------------------------------------------------------

$lang['emails_login_alert_success_subject'] = 'Обавештење о успешној пријави';
$lang['emails_login_alert_success_message'] = <<<EOT
Zdravo {name},

Šaljemo vam ovu e-poštu nakon uspešne prijave u vaš {site_name} nalog.

Datum servera: {date}
Uređaj: {browser}, {platform}
IP adresa: {ip_link}

Ako ste vi obavili prijavu, možete bezbedno zanemariti ovu e-poštu.

Ako se niste prijavili, odmah promenite lozinku da biste zaštitili svoj nalog.

Za bilo kakvu pomoć, kontaktirajte naš tim podrške.

-- Tim {site_name}
EOT;

// ----------------------------------------------------------------
// One-Click Login Link
// ----------------------------------------------------------------

$lang['emails_login_magic_link_subject'] = 'Брза веза за пријаву';
$lang['emails_login_magic_link_message'] = <<<EOT
Zdravo {name},

Zatražili ste prijavu jednim klikom na svoj nalog na {site_anchor}.

Kliknite na vezu ispod ili je kopirajte i nalepite u svoj pregledač, i bićete odmah prijavljeni:
{link}

Ova veza će isteći za 15 minuta. Ako niste zatražili ovo, molimo zanemarite ovu e-poštu.

Ova akcija je zatražena sa ove IP adrese: {ip_link}.

Sve najbolje,
-- Tim {site_name}.
EOT;

// ----------------------------------------------------------------
// Login: Two-Factor Authentication Code
// ----------------------------------------------------------------

$lang['emails_login_two_factor_code_subject'] = 'Двофакторска аутентификација';
$lang['emails_login_two_factor_code_message'] = <<<EOT
Zdravo {name},

Vaš dvofaktorski autentifikacioni kod je: <strong>{code}</strong>

Uvek možete onemogućiti dvofaktorsku autentifikaciju u postavkama svog naloga.

Ova akcija je izvršena sa ove IP adrese: {ip_link}.

Sve najbolje,
-- Tim {site_name}.
EOT;

// ----------------------------------------------------------------
// Password Change Request
// ----------------------------------------------------------------

$lang['emails_password_change_request_subject'] = 'Захтев за ресетовање лозинке';
$lang['emails_password_change_request_message'] = <<<EOT
Zdravo {name},

Primili ste ovu e-poštu jer smo primili zahtev za resetovanje lozinke za vaš nalog na {site_anchor}.

Kliknite na sledeću vezu ili je kopirajte i nalepite u svoj pregledač ako želite da nastavite:
{link}

Ako niste zatražili resetovanje lozinke, nema potrebe za daljim postupanjem.

Ovaj zahtev je poslan sa ove IP adrese: {ip_link}.

Sve najbolje,
-- Tim {site_name}.
EOT;

// ----------------------------------------------------------------
// Password Change Successful
// ----------------------------------------------------------------

$lang['emails_password_change_success_subject'] = 'Лозинка успешно промењена';
$lang['emails_password_change_success_message'] = <<<EOT
Zdravo {name},

Ovaj e-mail potvrđuje da je vaša lozinka na {site_anchor} uspešno promenjena. Sada se možete <a href="{login_url}" target="_blank" rel="noopener">prijaviti</a> koristeći novu lozinku.

Ako niste izveli ovu akciju, molimo kontaktirajte nas što je pre moguće da rešimo ovaj problem.

Ova akcija je izvršena sa ove IP adrese: {ip_link}.

Sve najbolje,
-- Tim {site_name}.
EOT;
