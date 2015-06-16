angular.module("sascaApp",
  ['ngRoute',
  'home',
  'info',
  'schedule',
  'events',
  'novice',
  'calendar',
  ])

.config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider) {
  if(window.history && window.history.pushState) {
    $locationProvider.html5Mode({
      enabled: true,
      requireBase: true
    });
  }

  $routeProvider
    .when("/", { templateUrl: "modules/home/homeView.html"})
    .otherwise({ redirectTo: '/'});

}]);
