"use strict";

angular.module("cryptoApp")
    .controller("startCtrl", function ($rootScope, $scope, db) {

        $scope.newUserData = {
            full_name: "Mladen Jaramaz",
            investment: "10000"
        };
        $scope.newUser = () => {
            
            db.newUser($scope.newUserData)
            .then((res) => {
                if (res.data.constructor === Array) {
                    
                    $rootScope.usersList = res.data;
                    location.assign("#/usersList");
                } else {
                    // error handling
                }
            });
        };
    });