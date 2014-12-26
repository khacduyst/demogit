(function(){
	var app = angular.module('myApp',["ngRoute"]);

	app.config(function($routeProvider,$locationProvider){
		$routeProvider
			.when("/",{
				templateUrl:"main.html",
				controller:"MainController"
			})
			.when("/user/:username/repos",{
				templateUrl:"user.html",
				controller:"UserController"
			})
			.when("/user/:username/:reponame",{
				templateUrl:"repo.html",
				controller:"RepoController"
			})
			.otherwise({redirectTo:"/"});
		// $locationProvider.html5Mode(true);
	})
}());