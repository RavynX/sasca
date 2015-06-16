angular.module('calendar', [])
  .config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider) {
    $routeProvider
      .when('/calendar', {
        templateUrl: 'modules/calendar/calendarView.html',
        controller: 'CalendarCtrl'
      });
  }])
  .controller('CalendarCtrl', function($scope) {
    $scope.message = "Calendar Page Message";
});
