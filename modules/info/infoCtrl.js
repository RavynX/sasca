angular.module('info', [])
  .config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider) {
    $locationProvider.html5Mode(true);
    $routeProvider
      .when('/info', {
        templateUrl: 'modules/info/views/infoView.html',
        controller: 'InfoCtrl'
      })
      .when('/membership', {
        templateUrl: 'modules/info/views/membershipView.html',
        controller: 'InfoCtrl'
      })
      .when('/bod', {
        templateUrl: 'modules/info/views/bodView.html',
        controller: 'InfoCtrl'
      })
      .when('/rules', {
        templateUrl: 'modules/info/views/rulesView.html',
        controller: 'InfoCtrl'
      })
      .when('/tech', {
        templateUrl: 'modules/info/views/techView.html',
        controller: 'InfoCtrl'
      })
      .when('/bylaws', {
        templateUrl: 'modules/info/views/bylawsView.html',
        controller: 'InfoCtrl'
      })
      .when('/history', {
        templateUrl: 'modules/info/views/historyView.html',
        controller: 'InfoCtrl'
      });
  }])
  .controller('InfoCtrl', function($scope) {
    $scope.message = "Info Page Message";
});
