"use strict";

angular.module("cryptoApp")
    .factory("db", function($http) {

        return {

            newUser : (newUserData) => {

                return $http({
                    url: "queryLogic.php?query=newUser",
                    method: "post",
                    data: newUserData
                });
            },
        };
    });