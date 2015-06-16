angular.module('archive', [])
  .config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider) {
    $routeProvider
      .when('/archive', {
        templateUrl: 'modules/archive/archiveView.html',
        controller: 'ArchiveCtrl'
      });
  }])
  .controller('ArchiveCtrl', function($scope) {
    $scope.message = "Archive Page Message";
});
