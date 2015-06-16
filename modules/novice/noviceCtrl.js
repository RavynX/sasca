angular.module('novice', [])
  .config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider) {
    $routeProvider
      .when('/novice', {
        templateUrl: 'modules/novice/firsttimeView.html',
        controller: 'NoviceCtrl'
      })
      .when('/firsttime', {
        templateUrl: 'modules/novice/firsttimeView.html',
        controller: 'NoviceCtrl'
      }).when('/improve', {
        templateUrl: 'modules/novice/improveView.html',
        controller: 'NoviceCtrl'
      })
      .when('/articles', {
        templateUrl: 'modules/novice/articlesView.html',
        controller: 'NoviceCtrl'
      });
  }])
  .controller('NoviceCtrl', function($scope) {
  $scope.message = "Novice Page Message";
});
