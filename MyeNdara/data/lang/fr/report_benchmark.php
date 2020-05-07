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
 * Strings for component 'report_benchmark', language 'fr', branch 'MOODLE_35_STABLE'
 *
 * @package   report_benchmark
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminreport'] = 'Benchmark du système';
$string['benchfail'] = '<b>Attention !</b><br />La performance de votre installation de Moodle n\'est pas optimale.';
$string['benchmark'] = 'Benchmark';
$string['benchmark:view'] = 'Consulter le rapport Benchmark';
$string['benchshare'] = 'Partager mon score sur le forum';
$string['benchsuccess'] = '<b>Félicitations !</b><br />La performance de votre installation de Moodle semble parfaite.';
$string['cloadmoreinfo'] = 'Charge le fichier de configuration « config.php »';
$string['cloadname'] = 'Chargement de Moodle';
$string['coursereadmoreinfo'] = 'Teste la vitesse de la base de données pour lire un cours';
$string['coursereadname'] = 'Lecture de cours';
$string['coursewritemoreinfo'] = 'Teste la vitesse de la base de données pour écrire un cours';
$string['coursewritename'] = 'Écriture de cours';
$string['description'] = 'Description';
$string['duration'] = '{$a} s';
$string['during'] = 'Durée en secondes';
$string['filereadmoreinfo'] = 'Teste la vitesse de lecture dans le dossier temporaire de Moodle';
$string['filereadname'] = 'Lecture de fichiers';
$string['filewritemoreinfo'] = 'Teste la vitesse d\'écriture dans le dossier temporaire de Moodle';
$string['filewritename'] = 'Écriture de fichiers';
$string['info'] = 'La durée de ce benchmark doit être inférieure à 1 minute. Le test est stoppé automatiquement après 2 minutes. Merci de patienter jusqu\'à l\'affichage des résultats.';
$string['infoaverage'] = 'Il est recommandé d\'effectuer ce benchmark plusieurs fois pour obtenir une moyenne significative. Si la performance de votre installation n\'est pas optimale, vous trouverez des recommandation pour l\'améliorer dans la <a href="https://docs.moodle.org/fr/Recommandations_de_performance" target="_blank">documentation de Moodle</a>.';
$string['infodisclaimer'] = 'Ne lancez pas ce benchmark sur une plateforme en production, car cela pourrait dégrader les performances de manière significative.';
$string['infodisclamer'] = 'Le lancement de ce benchmark n\'est pas recommandé sur une plateforme en production.';
$string['limit'] = 'Limite acceptable';
$string['loginguestmoreinfo'] = 'Mesure le temps de chargement de la page de connexion du compte invité';
$string['loginguestname'] = 'Temps de connexion du compte invité';
$string['loginusermoreinfo'] = 'Mesure le temps de chargement de la page de connexion d\'un compte utilisateur bidon';
$string['loginusername'] = 'Temps de connexion d\'un compte utilisateur bidon';
$string['modulename'] = 'Moodle Benchmark';
$string['modulenameplural'] = 'Moodle Benchmarks';
$string['over'] = 'Limite critique';
$string['pluginname'] = 'Moodle Benchmark';
$string['points'] = '{$a} points';
$string['privacy:no_data_reason'] = 'Le plugin Benchmark n\'enregistre aucune donnée personnelle. Il accède simplement aux données d\'autres plugins';
$string['processormoreinfo'] = 'Une fonction est appelée en boucle pour tester la rapidité du processeur';
$string['processorname'] = 'Appel d\'une fonction en boucle';
$string['querytype1moreinfo'] = 'Teste la vitesse de la base de données pour exécuter une requête complexe';
$string['querytype1name'] = 'Exécution de requêtes complexes (n°1)';
$string['querytype2moreinfo'] = 'Teste la vitesse de la base de données pour exécuter une requête complexe';
$string['querytype2name'] = 'Exécution de requêtes complexes (n°2)';
$string['redo'] = 'Relancer le test';
$string['score'] = 'Score';
$string['scoremsg'] = 'Score du benchmark :&nbsp;';
$string['seconde'] = '{$a} s';
$string['slowdatabaselabel'] = 'La base de données semble trop lente.';
$string['slowdatabasesolution'] = '<ul><li>Vérifiez <a href="http://dev.mysql.com/doc/refman/5.7/en/mysqlcheck.html" target="_blank">l\'intégrité de la base de données</a></li><li>Optimisez <a href="http://dev.mysql.com/doc/refman/5.7/en/server-parameters.html" target="_blank">la base de données</a></li></ul>';
$string['slowharddrivelabel'] = 'Le disque dur semble trop lent.';
$string['slowharddrivesolution'] = '<ul><li>Vérifiez l\'état du disque / dossier temporaire</li><li>Changez de disque dur ou de dossier temporaire</li></ul>';
$string['slowprocessorlabel'] = 'Votre processeur semble trop lent.';
$string['slowprocessorsolution'] = '<ul><li>Vérifier que votre configuration matérielle soit suffisante pour faire fonctionner Moodle.</li></ul>';
$string['slowserverlabel'] = 'Votre serveur web semble trop lent.';
$string['slowserversolution'] = '<ul><li>Placez votre serveur Apache en mode <a href="https://httpd.apache.org/docs/2.4/en/mpm.html" target="_blank">multi-processing</a> ou passez à <a href="https://nginx.org/" target="_blank">NGinx</a>.</li><li>Si votre Moodle est installé sur votre ordinateur, configurez votre antivirus avec précaution pour qu\'il ne vérifie pas l\'installation de Moodle.</li></ul>';
$string['slowweblabel'] = 'La page de connexion est trop lente à charger.';
$string['slowwebsolution'] = '<ul><li>Videz le cache de Moodle</a></li></ul>';
$string['start'] = 'Commencer le test';
$string['total'] = 'Durée totale';
