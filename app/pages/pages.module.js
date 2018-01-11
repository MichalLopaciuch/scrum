'use strict';

angular.module('SCRUM.pages',[
    'ui.router',
    'SCRUM.pages.wall',
    'SCRUM.pages.addPost'
])
    .config(routeConfig);

function routeConfig($urlRouterProvider, $qProvider){
    $qProvider.errorOnUnhandledRejections(false);
    $urlRouterProvider.otherwise('/wall');
}