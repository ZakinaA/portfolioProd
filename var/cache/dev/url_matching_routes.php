<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/enseignant' => [[['_route' => 'enseignant', '_controller' => 'App\\Controller\\EnseignantController::index'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/commentaire' => [[['_route' => 'commentaire', '_controller' => 'App\\Controller\\RpCommentaireController::index'], null, null, null, false, false, null]],
        '/' => [
            [['_route' => 'index', '_controller' => 'App\\Controller\\SecurityController::index'], null, null, null, false, false, null],
            [['_route' => 'accueil_global', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null],
        ],
        '/inscription' => [[['_route' => 'inscription', '_controller' => 'App\\Controller\\RegisterController::addUserEtudiant'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/login_success' => [[['_route' => 'login_success', '_controller' => 'App\\Controller\\SecurityController::home'], null, null, null, false, false, null]],
        '/competences/show' => [[['_route' => 'competencesShow', '_controller' => 'App\\Controller\\RpActiviteController::showCompetences'], null, null, null, false, false, null]],
        '/etudiant/showEdit' => [[['_route' => 'etudiantShowEdit', '_controller' => 'App\\Controller\\EtudiantController::showEdit'], null, null, null, false, false, null]],
        '/etudiant/home' => [[['_route' => 'etudiantHome', '_controller' => 'App\\Controller\\EtudiantController::home'], null, null, null, false, false, null]],
        '/etudiant/rps' => [[['_route' => 'etudiantRps', '_controller' => 'App\\Controller\\EtudiantController::getLesRP'], null, null, null, false, false, null]],
        '/etudiant/rpsArchivees' => [[['_route' => 'etudiantRpsArchivees', '_controller' => 'App\\Controller\\EtudiantController::getLesRPArchivees'], null, null, null, false, false, null]],
        '/etudiant/stages' => [[['_route' => 'etudiantStages', '_controller' => 'App\\Controller\\StageController::getLesStagesByEtudiant'], null, null, null, false, false, null]],
        '/enseignant/home' => [[['_route' => 'enseignantHome', '_controller' => 'App\\Controller\\EnseignantController::home'], null, null, null, false, false, null]],
        '/enseignant/promo/list' => [[['_route' => 'promoList', '_controller' => 'App\\Controller\\PromotionController::list'], null, null, null, true, false, null]],
        '/enseignant/showEdit' => [[['_route' => 'enseignantShowEdit', '_controller' => 'App\\Controller\\EnseignantController::showEdit'], null, null, null, false, false, null]],
        '/enseignant/listAllRpsArchivees' => [[['_route' => 'allRpsArchivees', '_controller' => 'App\\Controller\\EnseignantController::listAllRpsArchivees'], null, null, null, false, false, null]],
        '/enseignant/stagesSuivis' => [[['_route' => 'stagesSuivisList', '_controller' => 'App\\Controller\\StageController::getLesStagesSuivis'], null, null, null, false, false, null]],
        '/admin/addUserEnseignant' => [[['_route' => 'adduserEnseignant', '_controller' => 'App\\Controller\\AdminController::addUserEnseignant'], null, null, null, false, false, null]],
        '/admin/listEnseignants' => [[['_route' => 'listEnseignants', '_controller' => 'App\\Controller\\AdminController::listEnseignants'], null, null, null, false, false, null]],
        '/admin/listPromoEtudiants' => [[['_route' => 'listPromoEtudiants', '_controller' => 'App\\Controller\\AdminController::listPromoEtudiants'], null, null, null, false, false, null]],
        '/admin/listerComptesNonActifs' => [[['_route' => 'listerComptesNonActifs', '_controller' => 'App\\Controller\\AdminController::listerComptesNonActifs'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/r(?'
                    .'|eset\\-password/reset(?:/([^/]++))?(*:208)'
                    .'|p/(?'
                        .'|showEditAdd(?:/(\\d+))?(*:243)'
                        .'|a(?'
                            .'|rchiver(?:/(\\d+))?(*:273)'
                            .'|ctivite/(?'
                                .'|list(?:/(\\d+))?(*:307)'
                                .'|edit(?:/(\\d+))?(*:330)'
                                .'|add(?:/(\\d+))?(*:352)'
                                .'|remove(?:/(\\d+))?(*:377)'
                            .')'
                        .')'
                        .'|desarchiver(?:/(\\d+))?(*:409)'
                        .'|remove(?:/(\\d+))?(*:434)'
                        .'|production/(?'
                            .'|list(?:/(\\d+))?(*:471)'
                            .'|add(?:/(\\d+))?(*:493)'
                            .'|edit(?:/(\\d+))?(*:516)'
                            .'|remove(?:/(\\d+))?(*:541)'
                        .')'
                        .'|commentaire/(?'
                            .'|list(?:/(\\d+))?(*:580)'
                            .'|notifierEnseignant(?:/(\\d+))?(*:617)'
                        .')'
                    .')'
                .')'
                .'|/confirmMail/([^/]++)(*:649)'
                .'|/e(?'
                    .'|tudiant/stage/(?'
                        .'|addEdit(?:/(\\d+))?(*:697)'
                        .'|showAddSemaineStage(?:/(\\d+)(?:/(\\d+))?)?(*:746)'
                        .'|removeTache/([^/]++)(*:774)'
                        .'|editTache/([^/]++)(*:800)'
                        .'|createAttestation/([^/]++)(*:834)'
                    .')'
                    .'|nseignant/(?'
                        .'|rp/(?'
                            .'|show/([^/]++)(*:875)'
                            .'|commentaire/add/([^/]++)(*:907)'
                            .'|valider(?:/(\\d+))?(*:933)'
                        .')'
                        .'|promo/etudiants/list/([^/]++)/([^/]++)/([^/]++)(*:989)'
                        .'|etudiant/rp/list/([^/]++)(*:1022)'
                        .'|stage/(?'
                            .'|s(?'
                                .'|how/([^/]++)(*:1056)'
                                .'|emaine/show/([^/]++)/([^/]++)(*:1094)'
                            .')'
                            .'|listStagesByEtudiant/([^/]++)(*:1133)'
                        .')'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|s(?'
                        .'|howEditE(?'
                            .'|nseignant/([^/]++)(*:1188)'
                            .'|tudiant/([^/]++)(*:1213)'
                        .')'
                        .'|upprimerCompte/([^/]++)(*:1246)'
                    .')'
                    .'|validerCompte/([^/]++)(*:1278)'
                    .'|listerStagesAAffecter/([^/]++)(*:1317)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        208 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        243 => [[['_route' => 'rpShowEditAdd', 'idRp' => '0', '_controller' => 'App\\Controller\\RpController::showEditAdd'], ['idRp'], null, null, false, true, null]],
        273 => [[['_route' => 'rpArchiver', 'idRp' => '0', '_controller' => 'App\\Controller\\RpController::archiver'], ['idRp'], null, null, false, true, null]],
        307 => [[['_route' => 'rpActiviteList', 'idRp' => '0', '_controller' => 'App\\Controller\\RpActiviteController::rpActiviteList'], ['idRp'], null, null, false, true, null]],
        330 => [[['_route' => 'rpActiviteEdit', 'idRpActivite' => '0', '_controller' => 'App\\Controller\\RpActiviteController::rpActiviteEdit'], ['idRpActivite'], null, null, false, true, null]],
        352 => [[['_route' => 'rpActiviteAdd', 'idRp' => '0', '_controller' => 'App\\Controller\\RpActiviteController::rpActiviteAdd'], ['idRp'], null, null, false, true, null]],
        377 => [[['_route' => 'rpActiviteRemove', 'idRpActivite' => '0', '_controller' => 'App\\Controller\\RpActiviteController::rpActiviteRemove'], ['idRpActivite'], null, null, false, true, null]],
        409 => [[['_route' => 'rpDesarchiver', 'idRp' => '0', '_controller' => 'App\\Controller\\RpController::desarchiver'], ['idRp'], null, null, false, true, null]],
        434 => [[['_route' => 'rpRemove', 'idRp' => '0', '_controller' => 'App\\Controller\\RpController::remove'], ['idRp'], null, null, false, true, null]],
        471 => [[['_route' => 'rpProductionList', 'idRp' => '0', '_controller' => 'App\\Controller\\RpProductionController::rpProductionList'], ['idRp'], null, null, false, true, null]],
        493 => [[['_route' => 'rpProductionAdd', 'idRp' => '0', '_controller' => 'App\\Controller\\RpProductionController::rpProductionAdd'], ['idRp'], null, null, false, true, null]],
        516 => [[['_route' => 'rpProductionEdit', 'idProduction' => '0', '_controller' => 'App\\Controller\\RpProductionController::rpProductionEdit'], ['idProduction'], null, null, false, true, null]],
        541 => [[['_route' => 'rpProductionRemove', 'idProduction' => '0', '_controller' => 'App\\Controller\\RpProductionController::rpProductionRemove'], ['idProduction'], null, null, false, true, null]],
        580 => [[['_route' => 'rpCommentaireList', 'idRp' => '0', '_controller' => 'App\\Controller\\RpCommentaireController::rpCommentaireList'], ['idRp'], null, null, false, true, null]],
        617 => [[['_route' => 'rpCommentaireNotifierEnseignant', 'idRp' => '0', '_controller' => 'App\\Controller\\RpCommentaireController::rpNotifier'], ['idRp'], null, null, false, true, null]],
        649 => [[['_route' => 'confirmMail', '_controller' => 'App\\Controller\\RegisterController::confirmMail'], ['token'], null, null, false, true, null]],
        697 => [[['_route' => 'stageAddEdit', 'idStage' => '0', '_controller' => 'App\\Controller\\StageController::addEdit'], ['idStage'], null, null, false, true, null]],
        746 => [[['_route' => 'semaineStageShowAdd', 'idStage' => '0', 'numSemaine' => '0', '_controller' => 'App\\Controller\\StageController::showAddSemaineStage'], ['idStage', 'numSemaine'], null, null, false, true, null]],
        774 => [[['_route' => 'tacheRemove', '_controller' => 'App\\Controller\\TacheSemaineController::removeTache'], ['idTache'], null, null, false, true, null]],
        800 => [[['_route' => 'tacheEdit', '_controller' => 'App\\Controller\\TacheSemaineController::editTache'], ['idTache'], null, null, false, true, null]],
        834 => [[['_route' => 'stageAttestationPdf', '_controller' => 'App\\Controller\\StageController::createAttestation'], ['idStage'], null, null, false, true, null]],
        875 => [[['_route' => 'rpShow', '_controller' => 'App\\Controller\\RpController::show'], ['idRp'], null, null, false, true, null]],
        907 => [[['_route' => 'commentaireRpAdd', '_controller' => 'App\\Controller\\RpCommentaireController::addCommentaire'], ['idRp'], null, null, false, true, null]],
        933 => [[['_route' => 'rpValider', 'idRp' => '0', '_controller' => 'App\\Controller\\RpController::valider'], ['idRp'], null, null, false, true, null]],
        989 => [[['_route' => 'rpsEtudiantsParSpecialiteEtNiveau', '_controller' => 'App\\Controller\\EnseignantController::listRpsEtudiantsParSpecialiteEtNiveau'], ['idSpecialite', 'idNiveau', 'source'], null, null, false, true, null]],
        1022 => [[['_route' => 'rpsParEtudiant', '_controller' => 'App\\Controller\\RpController::listParEtudiant'], ['idEtudiant'], null, null, false, true, null]],
        1056 => [[['_route' => 'stageShow', '_controller' => 'App\\Controller\\StageController::showStage'], ['idStage'], null, null, false, true, null]],
        1094 => [[['_route' => 'showSemaineStage', '_controller' => 'App\\Controller\\StageController::showSemaine'], ['idStage', 'numSemaine'], null, null, false, true, null]],
        1133 => [[['_route' => 'stagesParEtudiant', '_controller' => 'App\\Controller\\StageController::listStagesByEtudiant'], ['idEtudiant'], null, null, false, true, null]],
        1188 => [[['_route' => 'showEditEnseignantAdmin', '_controller' => 'App\\Controller\\AdminController::showEditEnseignant'], ['idUser'], null, null, false, true, null]],
        1213 => [[['_route' => 'showEditEtudiantAdmin', '_controller' => 'App\\Controller\\AdminController::showEditEtudiant'], ['idEtudiant'], null, null, false, true, null]],
        1246 => [[['_route' => 'supprimerCompte', '_controller' => 'App\\Controller\\AdminController::supprimerCompte'], ['email'], null, null, false, true, null]],
        1278 => [[['_route' => 'validerCompte', '_controller' => 'App\\Controller\\AdminController::validerCompte'], ['email'], null, null, false, true, null]],
        1317 => [
            [['_route' => 'listerStagesAAffecter', '_controller' => 'App\\Controller\\StageController::listerStagesAAffecter'], ['idNiveau'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
