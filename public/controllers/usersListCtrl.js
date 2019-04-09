"use strict";

angular.module("cryptoApp")
    .controller("usersListCtrl", function($rootScope, $scope, db) {

        $scope.usersData = $rootScope.usersList;
        console.log($scope.usersData);
    });