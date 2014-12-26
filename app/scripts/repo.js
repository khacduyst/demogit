(function(){
	var app = angular.module('myApp');

	var RepoController=function($scope,github,$routeParams){

		var onRepos=function(repo){
			$scope.repos=repo.data;
		}
		var onErr=function(){
			$scope.err="Can't get contributors's data"
		}
		$scope.username=$routeParams.username;
		$scope.reponame=$routeParams.reponame;
		$scope.predicate="+login";
		github.getReposContributor($scope.username,$scope.reponame).then(onRepos,onErr);
	}
	app.controller('RepoController', ['$scope','github','$routeParams',RepoController]);	
}())