"use strict";

angular.module("cryptoApp", [
    "ngRoute"
], function ($locationProvider, $routeProvider) {

    $locationProvider.hashPrefix("");
    $routeProvider
    .when("/", {
        templateUrl: "public/pages/startAction.html",
        controller: "startCtrl"
    })
    .when("/usersList", {
        templateUrl: "public/pages/usersList.html",
        controller: "usersListCtrl"
    });
});





















