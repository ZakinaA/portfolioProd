<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin']], [], []],
    'enseignant' => [[], ['_controller' => 'App\\Controller\\EnseignantController::index'], [], [['text', '/enseignant']], [], []],
    'app_forgot_password_request' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::request'], [], [['text', '/reset-password']], [], []],
    'app_check_email' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], [], [['text', '/reset-password/check-email']], [], []],
    'app_reset_password' => [['token'], ['token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/reset-password/reset']], [], []],
    'commentaire' => [[], ['_controller' => 'App\\Controller\\RpCommentaireController::index'], [], [['text', '/commentaire']], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\SecurityController::index'], [], [['text', '/']], [], []],
    'accueil_global' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/']], [], []],
    'inscription' => [[], ['_controller' => 'App\\Controller\\RegisterController::addUserEtudiant'], [], [['text', '/inscription']], [], []],
    'confirmMail' => [['token'], ['_controller' => 'App\\Controller\\RegisterController::confirmMail'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/confirmMail']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'login_success' => [[], ['_controller' => 'App\\Controller\\SecurityController::home'], [], [['text', '/login_success']], [], []],
    'showEditEtudiant' => [[], ['_controller' => 'App\\Controller\\EtudiantController::showEdit'], [], [['text', '/etudiant/showEdit']], [], []],
    'etudiantHome' => [[], ['_controller' => 'App\\Controller\\EtudiantController::home'], [], [['text', '/etudiant/home']], [], []],
    'etudiantRps' => [[], ['_controller' => 'App\\Controller\\EtudiantController::getLesRP'], [], [['text', '/etudiant/rps']], [], []],
    'etudiantRpsArchivees' => [[], ['_controller' => 'App\\Controller\\EtudiantController::getLesRPArchivées'], [], [['text', '/etudiant/rpsArchivees']], [], []],
    'rpShowEditAdd' => [['idRp'], ['idRp' => '0', '_controller' => 'App\\Controller\\RpController::showEditAdd'], ['idRp' => '\\d+'], [['variable', '/', '\\d+', 'idRp', true], ['text', '/rp/showEditAdd']], [], []],
    'rpArchiver' => [['idRp'], ['idRp' => '0', '_controller' => 'App\\Controller\\RpController::archiver'], ['idRp' => '\\d+'], [['variable', '/', '\\d+', 'idRp', true], ['text', '/rp/archiver']], [], []],
    'rpDesarchiver' => [['idRp'], ['idRp' => '0', '_controller' => 'App\\Controller\\RpController::desarchiver'], ['idRp' => '\\d+'], [['variable', '/', '\\d+', 'idRp', true], ['text', '/rp/desarchiver']], [], []],
    'rpActiviteList' => [['idRp'], ['idRp' => '0', '_controller' => 'App\\Controller\\RpActiviteController::rpActiviteList'], ['idRp' => '\\d+'], [['variable', '/', '\\d+', 'idRp', true], ['text', '/rp/activite/list']], [], []],
    'rpActiviteEdit' => [['idRpActivite'], ['idRpActivite' => '0', '_controller' => 'App\\Controller\\RpActiviteController::rpActiviteEdit'], ['idRpActivite' => '\\d+'], [['variable', '/', '\\d+', 'idRpActivite', true], ['text', '/rp/activite/edit']], [], []],
    'rpActiviteAdd' => [['idRp'], ['idRp' => '0', '_controller' => 'App\\Controller\\RpActiviteController::rpActiviteAdd'], ['idRp' => '\\d+'], [['variable', '/', '\\d+', 'idRp', true], ['text', '/rp/activite/add']], [], []],
    'rpActiviteRemove' => [['idRpActivite'], ['idRpActivite' => '0', '_controller' => 'App\\Controller\\RpActiviteController::rpActiviteRemove'], ['idRpActivite' => '\\d+'], [['variable', '/', '\\d+', 'idRpActivite', true], ['text', '/rp/activite/remove']], [], []],
    'rpProductionList' => [['idRp'], ['idRp' => '0', '_controller' => 'App\\Controller\\RpProductionController::rpProductionList'], ['idRp' => '\\d+'], [['variable', '/', '\\d+', 'idRp', true], ['text', '/rp/production/list']], [], []],
    'rpProductionAdd' => [['idRp'], ['idRp' => '0', '_controller' => 'App\\Controller\\RpProductionController::rpProductionAdd'], ['idRp' => '\\d+'], [['variable', '/', '\\d+', 'idRp', true], ['text', '/rp/production/add']], [], []],
    'rpProductionEdit' => [['idProduction'], ['idProduction' => '0', '_controller' => 'App\\Controller\\RpProductionController::rpProductionEdit'], ['idProduction' => '\\d+'], [['variable', '/', '\\d+', 'idProduction', true], ['text', '/rp/production/edit']], [], []],
    'rpProductionRemove' => [['idProduction'], ['idProduction' => '0', '_controller' => 'App\\Controller\\RpProductionController::rpProductionRemove'], ['idProduction' => '\\d+'], [['variable', '/', '\\d+', 'idProduction', true], ['text', '/rp/production/remove']], [], []],
    'rpCommentaireList' => [['idRp'], ['idRp' => '0', '_controller' => 'App\\Controller\\RpCommentaireController::rpCommentaireList'], ['idRp' => '\\d+'], [['variable', '/', '\\d+', 'idRp', true], ['text', '/rp/commentaire/list']], [], []],
    'rpCommentaireNotifierEnseignant' => [['idRp'], ['idRp' => '0', '_controller' => 'App\\Controller\\RpCommentaireController::rpNotifier'], ['idRp' => '\\d+'], [['variable', '/', '\\d+', 'idRp', true], ['text', '/rp/commentaire/notifierEnseignant']], [], []],
    'etudiantStages' => [[], ['_controller' => 'App\\Controller\\StageController::getLesStagesByEtudiant'], [], [['text', '/etudiant/stages']], [], []],
    'stageAddEdit' => [['idStage'], ['idStage' => '0', '_controller' => 'App\\Controller\\StageController::addEdit'], ['idStage' => '\\d+'], [['variable', '/', '\\d+', 'idStage', true], ['text', '/etudiant/stage/add']], [], []],
    'showEditSemaineStage' => [['idStage', 'numSemaine'], ['idStage' => '0', 'numSemaine' => '0', '_controller' => 'App\\Controller\\StageController::showEditSemaineStage'], ['idStage' => '\\d+', 'numSemaine' => '\\d+'], [['variable', '/', '\\d+', 'numSemaine', true], ['variable', '/', '\\d+', 'idStage', true], ['text', '/etudiant/stage/showEditSemaineStage']], [], []],
    'removeTache' => [['idTache'], ['_controller' => 'App\\Controller\\TacheSemaineController::remove'], [], [['variable', '/', '[^/]++', 'idTache', true], ['text', '/etudiant/stage/tache/removeTache']], [], []],
    'editTache' => [['idTache'], ['_controller' => 'App\\Controller\\TacheSemaineController::editTache'], [], [['variable', '/', '[^/]++', 'idTache', true], ['text', '/etudiant/stage/tache/editTache']], [], []],
    'enseignantHome' => [[], ['_controller' => 'App\\Controller\\EnseignantController::home'], [], [['text', '/enseignant/home']], [], []],
    'showRp' => [['idRp'], ['_controller' => 'App\\Controller\\RpController::show'], [], [['variable', '/', '[^/]++', 'idRp', true], ['text', '/enseignant/rp/show']], [], []],
    'listPromos' => [[], ['_controller' => 'App\\Controller\\PromotionController::list'], [], [['text', '/enseignant/promo/list/']], [], []],
    'listEtudiantsParPromo' => [['idSpecialite', 'idNiveau', 'source'], ['_controller' => 'App\\Controller\\PromotionController::listEtudiantsParPromo'], [], [['variable', '/', '[^/]++', 'source', true], ['variable', '/', '[^/]++', 'idNiveau', true], ['variable', '/', '[^/]++', 'idSpecialite', true], ['text', '/enseignant/promo/etudiants/list']], [], []],
    'addCommentaireRp' => [['idRp'], ['_controller' => 'App\\Controller\\RpCommentaireController::addCommentaire'], [], [['variable', '/', '[^/]++', 'idRp', true], ['text', '/enseignant/rp/commentaire/add']], [], []],
    'listRpParEtudiant' => [['idEtudiant'], ['_controller' => 'App\\Controller\\RpController::listParEtudiant'], [], [['variable', '/', '[^/]++', 'idEtudiant', true], ['text', '/enseignant/etudiant/rp/list']], [], []],
    'listToutesLesRpPromosEnCours' => [['idSpecialite'], ['_controller' => 'App\\Controller\\EnseignantController::listRp'], [], [['variable', '/', '[^/]++', 'idSpecialite', true], ['text', '/enseignant/rp/list']], [], []],
    'validerRp' => [['idRp'], ['idRp' => '0', '_controller' => 'App\\Controller\\RpController::valider'], ['idRp' => '\\d+'], [['variable', '/', '\\d+', 'idRp', true], ['text', '/enseignant/rp/valider']], [], []],
    'showEditEnseignant' => [[], ['_controller' => 'App\\Controller\\EnseignantController::showEdit'], [], [['text', '/enseignant/showEdit']], [], []],
    'listRpsArchivees' => [[], ['_controller' => 'App\\Controller\\EnseignantController::listRpsArchivees'], [], [['text', '/enseignant/listRpsArchivees']], [], []],
    'listeStagesSuivis' => [[], ['_controller' => 'App\\Controller\\StageController::getLesStagesSuivis'], [], [['text', '/enseignant/stages']], [], []],
    'showStage' => [['idStage'], ['_controller' => 'App\\Controller\\StageController::showStage'], [], [['variable', '/', '[^/]++', 'idStage', true], ['text', '/enseignant/stage/show']], [], []],
    'showSemaineStage' => [['idStage', 'numSemaine'], ['_controller' => 'App\\Controller\\SemaineStageController::showSemaine'], [], [['variable', '/', '[^/]++', 'numSemaine', true], ['variable', '/', '[^/]++', 'idStage', true], ['text', '/enseignant/stage/semaine/show']], [], []],
    'adduserEnseignant' => [[], ['_controller' => 'App\\Controller\\AdminController::addUserEnseignant'], [], [['text', '/admin/addUserEnseignant']], [], []],
    'listEnseignants' => [[], ['_controller' => 'App\\Controller\\AdminController::listEnseignants'], [], [['text', '/admin/listEnseignants']], [], []],
    'showEditEnseignantAdmin' => [['idUser'], ['_controller' => 'App\\Controller\\AdminController::showEditEnseignant'], [], [['variable', '/', '[^/]++', 'idUser', true], ['text', '/admin/showEditEnseignant']], [], []],
    'listPromoEtudiants' => [[], ['_controller' => 'App\\Controller\\AdminController::listPromoEtudiants'], [], [['text', '/admin/listPromoEtudiants']], [], []],
    'showEditEtudiantAdmin' => [['idEtudiant'], ['_controller' => 'App\\Controller\\AdminController::showEditEtudiant'], [], [['variable', '/', '[^/]++', 'idEtudiant', true], ['text', '/admin/showEditEtudiant']], [], []],
    'listerComptesNonActifs' => [[], ['_controller' => 'App\\Controller\\AdminController::listerComptesNonActifs'], [], [['text', '/admin/listerComptesNonActifs']], [], []],
    'validerCompte' => [['email'], ['_controller' => 'App\\Controller\\AdminController::validerCompte'], [], [['variable', '/', '[^/]++', 'email', true], ['text', '/admin/validerCompte']], [], []],
    'supprimerCompte' => [['email'], ['_controller' => 'App\\Controller\\AdminController::supprimerCompte'], [], [['variable', '/', '[^/]++', 'email', true], ['text', '/admin/supprimerCompte']], [], []],
];
