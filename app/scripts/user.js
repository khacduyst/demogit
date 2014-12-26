(function(){
	var app = angular.module('myApp');

	var UserController=function($scope,github,$routeParams,$location){

		var onUserSuccess=function(respone){
			$scope.user=respone;
			github.getRepos($scope.user).then(onRepos,onErr);
		}
		var onRepos=function(repo){
			$scope.repos=repo;
		}
		var onErr=function(){
			$scope.err="Can't get user's data"
		}
		$scope.searchContributors=function(info){
			$location.path("/user/"+info);
		}
		$scope.username=$routeParams.username;
		$scope.predicate="name";
		$scope.reverse=false;
		github.getUser($scope.username).then(onUserSuccess,onErr);
	}
	app.controller('UserController', ['$scope','github','$routeParams','$location',UserController]);	
}())