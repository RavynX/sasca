angular.module('schedule', [])
  .config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider) {
    $routeProvider
      .when('/schedule', {
        templateUrl: 'modules/schedule/scheduleView.html',
        controller: 'ScheduleCtrl'
      });
  }])
  .controller('ScheduleCtrl', function($scope) {
  $scope.message = "Schedule Page Message";
});
