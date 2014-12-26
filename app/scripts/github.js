(function(){

	var github=function($http){

		var getUser=function(username){
			return $http.get("https://api.github.com/users/"+username).then(function(response){return response.data;})
		}
		var getRepos=function(user){
			return $http.get(user.repos_url).then(function(repos){return repos.data;})
		}
		var getReposContributor=function(user,repo){
			var repo;
			var repoUrl="https://api.github.com/repos/" +user+"/"+repo;
			return $http.get(repoUrl).then(function(response){repo=response.data; return $http.get(repoUrl+"/contributors")})
		}
		return {
			getUser:getUser,
			getRepos:getRepos,
			getReposContributor:getReposContributor
		}
	}
	var module=angular.module("myApp");
	module.factory('github', github);

}())