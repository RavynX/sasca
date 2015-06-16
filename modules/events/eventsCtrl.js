angular.module('events', [])
  .config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider) {
    $routeProvider
      .when('/register', {
        templateUrl: 'modules/events/eventsView.html',
        controller: 'EventsCtrl'
      });
  }])
  .controller('EventsCtrl', function($scope) {
    $scope.message = "Events Page Message";
});
