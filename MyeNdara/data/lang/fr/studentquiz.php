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
 * Strings for component 'studentquiz', language 'fr', branch 'MOODLE_35_STABLE'
 *
 * @package   studentquiz
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_comment'] = 'Ajouter un commentaire';
$string['approve'] = 'Approuver';
$string['approved'] = '✓';
$string['approved_column_name'] = 'Approuvée';
$string['approveselectedscheck'] = 'Voulez-vous vraiment dés/approuver les questions suivantes ?<br /><br />{$a}';
$string['approve_toggle'] = 'Dés/Aprouver';
$string['average_column_name'] = 'Groupe';
$string['comment_column_name'] = 'Commentaires';
$string['comment_help'] = 'Écrire un commentaire';
$string['comment_help_help'] = 'Écrire un commentaire à propos de la question';
$string['createnewquestion'] = 'Créer une nouvelle question';
$string['createnewquestionfirst'] = 'Créer une première question';
$string['difficulty_all_column_name'] = 'Difficulté pour le groupe';
$string['difficulty_level_column_name'] = 'Difficulté';
$string['difficulty_title'] = 'Barre de difficulté';
$string['emailapprovedbody'] = 'Cher {$a->recepientname},

Votre question «&nbsp;{$a->questionname}&nbsp;» du cours «&nbsp;{$a->coursename}&nbsp;» dans l\'activité StudentQuiz «&nbsp;{$a->modulename}&nbsp;» a été approuvée par «&nbsp;{$a->actorname}&nbsp;» à «&nbsp;{$a->timestamp}&nbsp;».

Vous pouvez examiner cette question à : {$a->questionurl}.';
$string['emailapprovedsmall'] = 'Votre question « {$a->questionname} » a été approuvée par {$a->actorname}.';
$string['emailapprovedsubject'] = 'Question approuvée : {$a->questionname}';
$string['emailchangedsmall'] = 'Votre question « {$a->questionname} » a été modifiée par {$a->actorname}.';
$string['emailchangedsubject'] = 'Question modifiée : {$a->questionname}';
$string['emailcommentaddedsmall'] = 'Votre question « {$a->questionname} » a été commentée par {$a->actorname}.';
$string['emailcommentaddedsubject'] = 'Question commentée : {$a->questionname}';
$string['emailcommentdeletedsmall'] = 'Le commentaire à votre question « {$a->questionname} » a été effacé par {$a->actorname}.';
$string['emailcommentdeletedsubject'] = 'Commentaire supprimé pour la question : {$a->questionname}';
$string['emaildeletedbody'] = 'Cher {$a->recepientname},

Votre question «&nbsp;{$a->questionname}&nbsp;» de l\'activité StudentQuiz «&nbsp;{$a->modulename}&nbsp;» du cours «&nbsp;{$a->coursename}&nbsp;» a été effacée par «&nbsp;{$a->actorname}&nbsp;» à «&nbsp;{$a->timestamp}&nbsp;».';
$string['emaildeletedsmall'] = 'Votre question « {$a->questionname} » a été supprimée par {$a->actorname}.';
$string['emaildeletedsubject'] = 'Question supprimée : {$a->questionname}';
$string['emailminecommentdeletedsmall'] = 'Votre commentaire sur la question « {$a->questionname} » a été supprimé par {$a->actorname}.';
$string['emailminecommentdeletedsubject'] = 'Commentaire supprimé pour la question : {$a->questionname}';
$string['filter'] = 'Filtre';
$string['filter_ishigher'] = 'Plus grand que';
$string['filter_islower'] = 'Plus petit que';
$string['filter_label_approved'] = 'Questions approuvées';
$string['filter_label_comment'] = 'Commentaires';
$string['filter_label_createdate'] = 'Création';
$string['filter_label_difficulty_level'] = 'Difficulté';
$string['filter_label_fast_filters'] = 'Filtre rapide pour les questions';
$string['filter_label_firstname'] = 'Prénom';
$string['filter_label_myattempts'] = 'Mes tentatives';
$string['filter_label_mydifficulty'] = 'Ma difficulté';
$string['filter_label_mylastattempt'] = 'Ma dernière tentative';
$string['filter_label_myrate'] = 'Ma notation';
$string['filter_label_onlyapproved'] = 'Appouvées';
$string['filter_label_onlyapproved_help'] = 'Questions approuvées par votre enseignant';
$string['filter_label_onlydifficult'] = 'Difficiles pour tout le groupe';
$string['filter_label_onlydifficultforme'] = 'Difficiles pour moi';
$string['filter_label_onlydifficultforme_help'] = 'Questions ayant une difficulté pour moi plus grande que {$a}%';
$string['filter_label_onlydifficult_help'] = 'Questions ayant une difficulté pour le groupe plus grande que {$a}%';
$string['filter_label_onlygood'] = 'De qualité';
$string['filter_label_onlygood_help'] = 'Questions ayant une évaluation de groupe d\'au moins {$a} étoiles';
$string['filter_label_onlymine'] = 'Les miennes';
$string['filter_label_onlymine_help'] = 'Questions que vous avez créées.';
$string['filter_label_onlynew'] = 'Non répondues';
$string['filter_label_onlynew_help'] = 'Questions où vous n\'avez jamais répondu.';
$string['filter_label_practice'] = 'Tentatives';
$string['filter_label_question'] = 'Titre de la question';
$string['filter_label_questiontext'] = 'Contenu de la question';
$string['filter_label_rates'] = 'Notation';
$string['filter_label_show_mine'] = 'Mes questions';
$string['filter_label_surname'] = 'Nom';
$string['filter_label_tags'] = 'Étiquette';
$string['finish_button'] = 'Fin';
$string['lastattempt_right'] = '✓';
$string['lastattempt_wrong'] = '✗';
$string['latest_column_name'] = 'Dernières';
$string['messageprovider:approved'] = 'Notification d\'approbation de question';
$string['messageprovider:changed'] = 'Notification de modification de question';
$string['messageprovider:commentadded'] = 'Notification d\'ajout de commentaire';
$string['messageprovider:commentdeleted'] = 'Notification de suppression de commentaire';
$string['messageprovider:deleted'] = 'Notification de suppression de question';
$string['messageprovider:minecommentdeleted'] = 'Notification de suppression de mon commentaire';
$string['migrated_successful'] = 'Cette activité a été correctement migrée !';
$string['mine_column_name'] = 'Moi';
$string['modulename'] = 'StudentQuiz';
$string['modulename_help'] = 'L\'activité StudentQuiz permet aux élèves de créer des questions pour tous. Dans l\'aperçu de l\'activité StudentQuiz, les élèves peuvent filtrer les questions. Ils peuvent également utiliser les questions filtrées de tout le monde pour s\'entrainer. L\'enseignant a une option pour anonymiser les créateurs des questions. <br> <br>L\'activité StudentQuiz récompense les élèves avec des points pour les motiver à ajouter des questions et à pratiquer. Les points sont listés dans un classement. <br> <br> Pour plus d\'informations, lisez <a href="https://studentquiz.hsr.ch/docs/"> la documentation de StudentQuiz.</a>.';
$string['modulenameplural'] = 'StudentQuizzes';
$string['myattempts_column_name'] = 'Mes tentatives';
$string['mydifficulty_column_name'] = 'Ma difficulté';
$string['mylastattempt_column_name'] = 'Ma dernière tentative';
$string['myrate_column_name'] = 'Ma notation';
$string['nav_export'] = 'Exporter';
$string['nav_import'] = 'Importer';
$string['needtoallowatleastoneqtype'] = 'Vous devez autoriser au moins un type de question';
$string['next_button'] = 'Suivant';
$string['no_comment'] = '/';
$string['no_comments'] = 'Pas de commentaires';
$string['no_difficulty_level'] = '/';
$string['no_myattempts'] = '/';
$string['no_mydifficulty'] = '/';
$string['no_mylastattempt'] = '/';
$string['no_myrate'] = '/';
$string['no_practice'] = '/';
$string['no_questions_add'] = 'Il n\'y a pas de question dans ce StudentQuiz. Vous pouvez librement en ajouter.';
$string['no_questions_filter'] = 'Aucune question ne correspond à vos critères. Réinitialisez le filtre pour voir toutes les questions.';
$string['no_questions_selected_message'] = 'Merci de sélectionner au moins une question pour démarrer le quiz.';
$string['no_rates'] = '/';
$string['no_tags'] = '/';
$string['not_approved'] = '✗';
$string['number_column_name'] = 'Nombre';
$string['pagesize'] = 'Taille de la page :';
$string['pluginadministration'] = 'Administration de StudentQuiz';
$string['pluginname'] = 'StudentQuiz';
$string['practice_column_name'] = 'Tentatives';
$string['previous_button'] = 'Précédent';
$string['privacy:metadata:studentquiz_attempt:categoryid'] = 'ID de la catégorie.';
$string['privacy:metadata:studentquiz_attempt:studentquizid'] = 'ID du StudentQuiz.';
$string['privacy:metadata:studentquiz_attempt:userid'] = 'ID de l\'utilisateur.';
$string['privacy:metadata:studentquiz_comment'] = 'Sauvegarder les commentaires des questions.';
$string['privacy:metadata:studentquiz_comment:comment'] = 'Commentaire de la question.';
$string['privacy:metadata:studentquiz_comment:created'] = 'Heure de création du commentaire.';
$string['privacy:metadata:studentquiz_comment:questionid'] = 'ID de la question.';
$string['privacy:metadata:studentquiz_comment:userid'] = 'ID de l\'utilisateur.';
$string['privacy:metadata:studentquiz_practice:userid'] = 'ID de l\'utilisateur.';
$string['privacy:metadata:studentquiz_progress:attempts'] = 'Nombre de tentatives de réponses à cette question.';
$string['privacy:metadata:studentquiz_progress:correctattempts'] = 'Nombre de réponses justes.';
$string['privacy:metadata:studentquiz_progress:questionid'] = 'ID de la question.';
$string['privacy:metadata:studentquiz_progress:studentquizid'] = 'ID de l\'activité StudentQuiz.';
$string['privacy:metadata:studentquiz_progress:userid'] = 'ID de l\'utilisateur.';
$string['privacy:metadata:studentquiz_rate:questionid'] = 'ID de la question.';
$string['privacy:metadata:studentquiz_rate:rate'] = 'Note de la question.';
$string['privacy:metadata:studentquiz_rate:userid'] = 'ID de l\'utilisateur.';
$string['questionsinuse'] = '(* Les questions marquées d\'un astérisque sont déjà utilisées dans certains quiz.)';
$string['ranking_block_title'] = 'Classement';
$string['rate_all_column_name'] = 'Classement de tous';
$string['rate_column_name'] = 'Évaluation';
$string['rate_error'] = 'Merci d\'évaluer';
$string['rate_help'] = 'Évaluer la question';
$string['rate_help_help'] = 'Évaluer la question. \\n1 étoile est très mauvais, et 5 étoiles est très bon';
$string['rate_points'] = 'Points';
$string['rate_title'] = 'Évaluation';
$string['ratingbar_title'] = 'Barre d\'évaluation';
$string['reportquiz_admin_title'] = 'Statistique de l\'étudiant';
$string['reportquiz_stats_own_last_attempt_correct'] = 'Nombre de vos dernières réponses correctes';
$string['reportquiz_stats_own_last_attempt_incorrect'] = 'Nombre de vos dernières réponses incorrectes';
$string['reportquiz_stats_own_percentage_correct_answers'] = 'Pourcentage de vos réponses correctes';
$string['reportquiz_stats_own_progress'] = 'Progression personnelle';
$string['reportquiz_stats_own_question_attempts_correct'] = 'Total de vos réponses correctes';
$string['reportquiz_stats_own_question_attempts_incorrect'] = 'Total de vos réponses incorrectes';
$string['reportquiz_stats_own_questions_answered'] = 'Total de vos réponses';
$string['reportquiz_stats_own_questions_approved'] = 'Nombre de vos questions approuvées';
$string['reportquiz_stats_own_questions_created'] = 'Nombre de questions auxquelles vous avez contribué';
$string['reportquiz_stats_own_questions_created_help'] = 'Nombre de questions auxquelles vous avez contribué dans cette acctivité StudentQuiz';
$string['reportquiz_stats_title'] = 'Statistiques';
$string['reportquiz_total_attempt'] = 'Temps que l\'utilisateur a passé dans le quiz';
$string['reportquiz_total_obtained_marks'] = 'Note totale';
$string['reportquiz_total_questions_answered'] = 'Total de réponses';
$string['reportquiz_total_questions_right'] = 'Total de réponses correctes';
$string['reportquiz_total_questions_wrong'] = 'Réponses fausses';
$string['reportquiz_total_users'] = 'Nombre de participants';
$string['reportrank_table_column_approvedquestions'] = 'Points pour les questions approuvées';
$string['reportrank_table_column_correctanswers'] = 'Réponses corrects';
$string['reportrank_table_column_countquestions'] = 'Points pour les questions créées';
$string['reportrank_table_column_description'] = 'Description';
$string['reportrank_table_column_factor'] = 'Facteur';
$string['reportrank_table_column_fullname'] = 'Nom';
$string['reportrank_table_column_incorrectanswers'] = 'Réponses incorrectes';
$string['reportrank_table_column_lastcorrectanswers'] = 'Points pour les derniers essais corrects';
$string['reportrank_table_column_lastincorrectanswers'] = 'Points pour les derniers essais incorrects';
$string['reportrank_table_column_points'] = 'Points';
$string['reportrank_table_column_progress'] = 'Progression personnelle';
$string['reportrank_table_column_quantifier_name'] = 'Nom';
$string['reportrank_table_column_rank'] = 'Rang';
$string['reportrank_table_column_summeanrates'] = 'Points pour les étoiles reçues';
$string['reportrank_table_column_total_points'] = 'Total des points';
$string['reportrank_table_column_value'] = 'Valeur';
$string['reportrank_table_column_yourstatus'] = 'Statistiques personnelles';
$string['reportrank_table_quantifier_caption'] = 'Comment les points sont calculés';
$string['reportrank_table_title'] = 'Classement de l\'étudiant - Top 10';
$string['reportrank_table_title_for_manager'] = 'Classement de l\'étudiant';
$string['reportrank_title'] = 'Classement';
$string['settings_allowallqtypes'] = 'Autoriser tous les types de questions';
$string['settings_allowedqtypes'] = 'Types de questions autorisés';
$string['settings_allowedqtypes_help'] = 'Spécifiez ici le type de questions autorisés';
$string['settings_anonymous_help'] = 'Les étudiants ne peuvent pas rechercher le nom des autres utilisateurs';
$string['settings_anonymous_label'] = 'Rendre les étudiants anonymes';
$string['settings_approvedquantifier'] = 'Facteur des questions approuvées';
$string['settings_approvedquantifier_help'] = 'Points pour chaque question approuvée';
$string['settings_approvedquantifier_label'] = 'Points pour chaque question approuvée';
$string['settings_quizpracticebehaviour'] = 'Évaluer et commenter';
$string['settings_quizpracticebehaviour_label'] = 'Évaluer et commenter';
$string['settings_ratequantifier'] = 'Facteur d\'évaluation';
$string['show_less'] = 'Afficher moins';
$string['show_more'] = 'Afficher plus';
$string['start_quiz_button'] = 'Démarrer le quiz';
$string['statistic_block_approvals'] = 'Questions approuvées';
$string['statistic_block_created'] = 'Questions créées';
$string['statistic_block_progress_available'] = 'Questions disponibles';
$string['statistic_block_progress_last_attempt_correct'] = 'Dernier essai correct';
$string['statistic_block_progress_last_attempt_incorrect'] = 'Dernier essai incorrect';
$string['statistic_block_progress_never'] = 'Questions jamais répondues';
$string['statistic_block_title'] = 'Ma progression';
$string['studentquiz'] = 'studentquiz';
$string['studentquiz:addinstance'] = 'Ajouter une nouvelle instance';
$string['studentquiz:emailnotifyapproved'] = 'Notification d\'approbation de question';
$string['studentquiz:emailnotifychanged'] = 'Notification de modification de question';
$string['studentquiz:emailnotifycommentadded'] = 'Notification d\'ajout de commentaire';
$string['studentquiz:emailnotifycommentdeleted'] = 'Notification de suppression de commentaire';
$string['studentquiz:emailnotifydeleted'] = 'Notification de suppression de commentaire';
$string['studentquizname'] = 'Nom du StudentQuiz';
$string['studentquizname_help'] = 'Le nom de l\'activité StudentQuiz';
$string['studentquiz:submit'] = 'Proposer les questions du StudentQuiz';
$string['studentquiz:view'] = 'Voir les questions du StudentQuiz';
$string['tags'] = 'Étiquettes';
$string['unapprove'] = 'Retirer l\'approbation';
