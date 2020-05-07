<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'local_contact', language 'fr', branch 'MOODLE_35_STABLE'
 *
 * @package   local_contact
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configure'] = 'Configurer ce plugin';
$string['confirmationemail'] = '<p>Bonjour [fromname],</p>
<p>Merci de nous avoir contacté. Si nécessaire, nous serons en contact avec vous très bientôt.</p>
<p>Cordialement,</p>
<p>[supportname]<br>
[sitefullname]<br>
<a href="[siteurl]">[siteurl]</a></p>';
$string['confirmationmessage'] = 'Merci de nous contacter. Si nécessaire, nous serons en contact avec vous très bientôt.';
$string['confirmationsent'] = 'Un courriel a été envoyé à votre adresse à {$a}.';
$string['defaultsubject'] = 'Nouveau message';
$string['errorsending'] = 'Une erreur est survenue lors de l\'envoi du message. Veuillez ressayez plus tard.';
$string['errorsendingtitle'] = 'Une erreur est survenue lors de l\'envoi du message. Veuillez ressayez plus tard.';
$string['extrainfo'] = '<hr>
<p><strong>Informations supplémentaires de l\'utilisateur</strong></p>
<ul>
    <li><strong>Utilisateur du site :</strong> [userstatus]</li>
    <li><strong>Langue préférée :</strong> [lang]</li>
    <li><strong>De l\'adresse IP :</strong> [userip]</li>
    <li><strong>Navigateur web :</strong> [http_user_agent]</li>
    <li><strong>Formulaire web :</strong> <a href="[http_referer]">[http_referer]</a></li>
</ul>';
$string['field-email'] = 'courriel';
$string['field-message'] = 'message';
$string['field-name'] = 'nom';
$string['field-subject'] = 'objet';
$string['forbidden'] = 'Interdit';
$string['globalhelp'] = 'Formulaire de contact est un plugin pour Moodle qui permet à votre site de traiter les informations envoyées par le biais de formulaires web HTML à l\'adresse de courriel de soutien du site.';
$string['lockedout'] = 'VERROUILLÉ';
$string['loginrequired'] = 'Connexion requise';
$string['loginrequired_description'] = 'N\'autoriser que les utilisateurs connectés à envoyer des formulaires de contact. Les visiteurs anonymes ne sont pas considérés comme connectés.';
$string['norecaptcha'] = 'Pas de ReCAPTCHA';
$string['nosubjectsitename'] = 'Nom du site dans le champ sujet du courriel';
$string['nosubjectsitename_description'] = 'Ne pas mettre le nom du site dans le champ sujet du courriel.';
$string['notconfirmed'] = 'PAS CONFIRMÉ';
$string['pluginname'] = 'Formulaire de contact';
$string['recipient_list'] = 'Liste des destinataires disponibles';
