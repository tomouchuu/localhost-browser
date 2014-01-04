function MainCtrl ($scope, $q, $http) {    
    $scope.order = 'site';
    $scope.orderby = 'false';

    $http({method: 'GET', url: '/sites'}).
        success(function(data,status){
            $scope.status = status;
            $scope.data = data;
        }).
        error(function(data,status){
            $scope.status = status;
            $scope.data = data || 'Request Failed';
        });
};