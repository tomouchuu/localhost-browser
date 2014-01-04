<!DOCTYPE HTML>
<html ng-app>
    <head>
        <title>Localhost</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" type="text/css" href="/sites/style.css">
    </head>
    <body ng-controller="MainCtrl">
        <div id="container">
            <h1>Localhost</h1>
            <div id="search">
                <p>Search:</p>
                <input ng-model="searchText" id="searchbox" />
            </div>
            <div id="sites">
                <div class="site" ng-repeat="site in data | filter:searchText">
                    <h3><a href="{{site}}">{{site}}</a></h3>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="/sites/angular.min.js"></script>
        <script type="text/javascript" src="/sites/site.js"></script>
    </body>
</html>