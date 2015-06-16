angular.module('home', [])
  .config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider) {
    $routeProvider
      .when('/', {
        templateUrl: 'modules/home/homeView.html',
        controller: 'HomeCtrl'
      });
  }])
  .controller('HomeCtrl', function($scope) {
    $scope.message = "Home Page Message";
});
