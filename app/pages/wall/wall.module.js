'use strict';

angular.module('SCRUM.pages.wall',[])
    .config(routeConfig);

function routeConfig($stateProvider){
    $stateProvider
        .state('wall', {
            url: '/wall',
            title: 'Wall',
            templateUrl: 'app/pages/wall/wall.html',
            controller: 'wallCtrl',
        });
}