'use strict';

angular.module('SCRUM.pages.addPost',[])
    .config(routeConfig);

function routeConfig($stateProvider){
    $stateProvider
        .state('addPost',{
            url: '/addPost',
            title: 'Add new post',
            templateUrl: 'app/pages/addPost/addPost.html',
            controller: 'addPostCtrl'
        });
}