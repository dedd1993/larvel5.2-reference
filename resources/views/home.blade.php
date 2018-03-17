<!DOCTYPE html>
<html ng-app='MyAngularAppName'>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Angular Skeleton</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="AdminLTE/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="AdminLTE/dist/css/AdminLTE.min.css">

    <link rel="stylesheet" href="AdminLTE/plugins/iCheck/square/blue.css">

    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="AdminLTE/dist/css/skins/skin-blue.min.css">

</head>

<body ui-view class="hold-tsransition" ng-class="getLocation()=='/login' ? 'login-page' : 'skin-blue sidebar-mini'">

<!-- Angular Proyect Dependencies  -->
<script src="bower_components/angular/angular.min.js"></script>
<script src="bower_components/angular-ui-router/release/angular-ui-router.min.js"></script>

<!-- Angular Proyect main code -->
<script src="js/main.js"></script>
<script src="js/config.js"></script>
<script src="js/routes.js"></script>
<script src="js/factories.js"></script>
<script src="js/services.js"></script>
<script src="js/directives.js"></script>
<script src="js/controllers/login-controller.js"></script>
<script src="js/controllers/dashboard-controller.js"></script>
<script src="js/controllers/venta-controller.js"></script>
<script src="js/controllers/cliente-controller.js"></script>

<!-- REQUIRED JS SCRIPTS (AdminLTE) -->
<script src="AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script src="AdminLTE/bootstrap/js/bootstrap.min.js"></script>
<!-- <script src="AdminLTE/dist/js/app.min.js"></script>     -->

<script src="AdminLTE/plugins/iCheck/icheck.min.js"></script>

</body>
</html>
