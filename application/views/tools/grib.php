<!doctype html>
<html ng-app="app">
<head>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.7.0/angular.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.7.0/angular-touch.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.7.0/angular-animate.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.7.0/angular-aria.js"></script>
	<script src="http://ui-grid.info/docs/grunt-scripts/csv.js"></script>
	<script src="http://ui-grid.info/docs/grunt-scripts/pdfmake.js"></script>
	<script src="http://ui-grid.info/docs/grunt-scripts/vfs_fonts.js"></script>
	<script src="http://ui-grid.info/docs/grunt-scripts/lodash.min.js"></script>
	<script src="http://ui-grid.info/docs/grunt-scripts/jszip.min.js"></script>
	<script src="http://ui-grid.info/docs/grunt-scripts/excel-builder.dist.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-grid/4.8.1/ui-grid.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-grid/4.8.1/ui-grid.min.css" type="text/css">
	<style>
		.grid {
			width: 100%;
			height: 300px;
		}
		.ui-grid-menu-button {
			height: 31px;
		}
	</style>
</head>
<body>
<div ng-controller="MainCtrl as $ctrl">
	<div id="grid1" ui-grid="$ctrl.gridOptions" ui-grid-pagination class="grid"  ui-grid-exporter ui-grid-selection class="grid"></div>
	<div ng-if="$ctrl.columnChanged">
		Column Visibility Changed - name: {{ $ctrl.columnChanged.name }} visible: {{ $ctrl.columnChanged.visible }}
	</div>
</div>
<script type="text/ng-template" id="mapAddress.html">
	<div class="ui-grid-cell-contents">
		<button class="btn" type="button" ng-click="grid.appScope.Main.openAddress()">Map Address</button>
	</div>
</script>
<script>
	var app = angular.module('app', ['ngTouch', 'ui.grid', 'ui.grid.exporter', 'ui.grid.selection','ui.grid.pagination']);

	app.controller('MainCtrl', function ($scope, $http, $interval, $q) {
		var vm = this;


		function fakeI18n(title){
			return $q(function(resolve) {
				$interval(function() {
					resolve( 'col: ' + title );
				}, 1000, 1);
			});
		}

		vm.gridOptions = {
			paginationPageSizes: [25, 50, 75],
			paginationPageSize: 25,
			exporterMenuCsv: false,
			enableGridMenu: true,
			gridMenuTitleFilter: fakeI18n,
			columnDefs: [
				{name:'MSBA', field: 'msba'},
				{ name:'Họ tên bệnh nhân',field: 'ho_ten_bn' },
				{ name:'Năm sinh',field: 'nam_sinh' },
				{ name:'Chẩn đoán xác định',field: 'chan_doan_xac_dinh' },
				{name:'Ngày báo cáo', field: 'date_create' },
				{name:'Trạng thái', field: 'status' },
				{ name: 'address', cellTemplate: 'mapAddress.html' },
			],
			gridMenuCustomItems: [

				{
					title: 'Rotate Grid',
					action: function ($event) {
						this.grid.element.toggleClass('rotated');
					},
					order: 210
				}
			],
			onRegisterApi: function( gridApi ){
				vm.gridApi = gridApi;

				// interval of zero just to allow the directive to have initialized
				$interval( function() {
					gridApi.core.addToGridMenu( gridApi.grid, [{ title: 'Dynamic item', order: 100}]);
				}, 0, 1);

				gridApi.core.on.columnVisibilityChanged( $scope, function( changedColumn ){
					vm.columnChanged = { name: changedColumn.colDef.name, visible: changedColumn.colDef.visible };
				});
			}
		};

		$http.get('http://localhost:8080/hait/api/form')
			.then(function(response) {
				vm.gridOptions.data = response.data;
			});
		this.openAddress = function () {
			alert('hello')
		};
	});
</script>
</body>
</html>
