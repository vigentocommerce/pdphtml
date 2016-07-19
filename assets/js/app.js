/* script.js */

// create the module and name it document_guide
var app = angular.module('document_guide', [ 'ngRoute' , 'angularUtils.directives.dirPagination' ]);

// configure our routes
app.config(function($routeProvider) {
	$routeProvider

		// route for the content1 page
		.when('/content1', {
			templateUrl : 'templates/pages/content1.html',
			controller  : 'mainController'
		})
		// route for the content2 page
		.when('/collapse2', {
			templateUrl : 'templates/pages/content2.html',
			controller  : 'mainController'
		})
		// route for the content3 page
		.when('/content3', {
			templateUrl : 'templates/pages/content3.html',
			controller  : 'mainController'
		})
		// route for the content4 page
		.when('/content4', {
			templateUrl : 'templates/pages/content4.html',
			controller  : 'mainController'
		})
		// route for the content5 page
		.when('/content5', {
			templateUrl : 'templates/pages/content5.html',
			controller  : 'mainController'
		})
		// route for the content6 page
		.when('/content6', {
			templateUrl : 'templates/pages/content6.html',
			controller  : 'mainController'
		})
		// route for the content7 page
		.when('/content7', {
			templateUrl : 'templates/pages/content7.html',
			controller  : 'mainController'
		})
		// route for the content8 page
		.when('/content8', {
			templateUrl : 'templates/pages/content8.html',
			controller  : 'mainController'
		})
});

// create the controller and inject Angular's $scope
app.controller('mainController', function($scope) {});
//
app.controller("testController", function($scope) {
                    $scope.data = {
                        title : 'Test Controller',
                        des : 'Hello Word',
						name : 'Leo'
                    };
                });
//
app.controller('MyController', ['$scope', function($scope) 
            {
                $scope.sayHello = function() {
                $scope.greeting = 'Xin chào ' + $scope.username + '!';
                };
            }]);
app.directive('myDirective', function() {
                    return {
                        template: '<h1>Hello World</h1>'
                    };
                });
app.directive('myForm', function(){
	var html = '<table>';
                        html += '<tr>';
                            html += '<td>Username:</td>';
                            html += '<td><input type="text"/></td>';
                        html += '</tr>';
                        html += '<tr>';
                            html += '<td>Password:</td>';
                            html += '<td><input type="password"/></td>';
                        html += '</tr>';
                        html += '<tr>';
                            html += '<td></td>';
                            html += '<td><input type="Button" value="Login"/></td>';
                        html += '</tr>';
                    html += '</table>';
                     
                    return {
                        template: html
                    };
});

//
app.controller('MyController', ['$scope', function($scope) 
{
    // Khởi tạo giá trị ban đầu
    $scope.message = {
        title : 'Test Tính Toán',
        num1 : 'Số thứ nhất',
        num2: 'Số thứ Hai',
        phep_cong : "Cộng hai số:",
        phep_tru : "Trừ hai số:",
        phep_nhan : "Nhân hai số:",
        phep_chia : "Chia hai số:"
    };
    // vì ban đầu chưa nhập gì nên ẩn khung kết quả
    $scope.styleresult = 'display:none';
	// Khi nhập các số vào các input thì gọi sự kiện này
	$scope.show_result = function()
	{
		// Nếu validate form đúng
		if ($scope.calForm.$valid){
			$scope.styleresult = 'display:block';
			$scope.result = {
				phep_cong : parseInt($scope.so_thu_nhat) + parseInt($scope.so_thu_hai),
				phep_tru : parseInt($scope.so_thu_nhat) - parseInt($scope.so_thu_hai),
				phep_nhan : parseInt($scope.so_thu_nhat) * parseInt($scope.so_thu_hai),
				phep_chia : parseInt($scope.so_thu_nhat) / parseInt($scope.so_thu_hai)
			};
		}
		// nếu validate form sai thì ẩn result
		else {
			$scope.styleresult = 'display:none';
		}
	};
 
}]);

