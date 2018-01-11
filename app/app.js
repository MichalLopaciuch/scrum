'use strict';

angular.module('SCRUM',[
    'ngAnimate',
    'ui.router',
    'SCRUM.pages'
])
    .controller('indexCtrl', indexCtrl)
    .run(['$rootScope', '$location', '$http', '$state',
     function($rootScope, $location, $http, $state){
        $rootScope.$on('$locationChangeStart', function(event, next, current){
            if(sessionStorage.getItem('auth') == '' || !sessionStorage.getItem('auth'))
               window.location.href = 'login.html';
    });
}]);

function indexCtrl($rootScope){
    var vm = this;
    vm.name = sessionStorage.getItem('name') + " " + sessionStorage.getItem('surname');
    if(sessionStorage.getItem('photo_url'))
        vm.photo_url = sessionStorage.getItem('photo_url');
    vm.logout = function(){
        sessionStorage.removeItem('auth');
        window.location.href = 'login.html';
    }
}