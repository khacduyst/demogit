(function(){
	var app=angular.module("myApp");

	var MainController=function($scope,$location){
		$scope.helloMessage = "Hello directive";

		$scope.search=function(username){
			$location.path("/user/"+username+"/repos");
		}
		$scope.username="";
	}

	app.directive('co2Login',  function(){
		// Runs during compile
		return {
			// name: '',
			// priority: 1,
			// terminal: true,
			// scope: {}, // {} = isolate, true = child, false/undefined = no change
			// controller: function($scope, $element, $attrs, $transclude) {},
			// require: 'ngModel', // Array = multiple requires, ? = optional, ^ = check parent elements
			restrict: 'E', // E = Element, A = Attribute, C = Class, M = Comment
			// template: '',
			templateUrl: 'directives/loginform.html',
			replace: true,
			// transclude: true,
			// compile: function(tElement, tAttrs, function transclude(function(scope, cloneLinkingFn){ return function linking(scope, elm, attrs){}})),
			link: function($scope, iElm, iAttrs, controller) {
				// $(iElm).html("<h1>GOGOG</h1>");
				$scope.helloMessage = "hello Duy";
			}
		};
	});

	app.controller('MainController', ['$scope','$location',MainController]);	

	


}());