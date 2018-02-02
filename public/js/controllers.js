
var myApp = angular.module('myApp', []);

myApp.controller('SearchController', function MyController($scope,$http) {
  $http.get('js/data.json').then(function(response) {
    $scope.artists = response.data;
  });
});
