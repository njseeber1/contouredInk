
<?php
/*
* Plugin Name: WordPress ShortCode
* Description: Create your WordPress shortcode.
* Version: 1.0
* Author: Nick Seeber
* Author URI: 
*/


function Create(){
	?>



<div ng-app="myApp" ng-controller="myController1">
	<div class="container">
		<div class="col-md-5" style="margin-bottom:25px">
			<div class="form-area">  
				<form role="form">
				<br style="clear:both">
							<h3 style="margin-bottom: 25px; text-align: center;">Contact Form</h3>
							<div class="form-group">
								<input ng-model="form.Name"type="text" class="form-control" id="name" name="name" placeholder="Name" required>
							</div>
							<div class="form-group">
								<input ng-model="form.Email"type="text" class="form-control" id="email" name="email" placeholder="Email" required>
							</div>
							<div class="form-group">
								<input ng-model="form.Phone"type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
							</div>
							<div class="form-group">
								<input ng-model="form.Subject" type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
							</div>
							<div class="form-group">
							<textarea class="form-control"ng-model="form.MessageName" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
								<span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>                    
							</div>
				<button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Submit Form</button>
				</form>
			</div>
		</div>
	
	</div>
</div>



	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
	<script>
	var app = angular.module("myApp", []); 
	app.controller("myController1", function($scope, $http) {
		$scope.TestArray = ["Test1", "Test2", "Test3"];
		$scope.CurrentUser = {};
		$scope.ControllerEndpoint = "/wp-content/plugins/Nick-WPPlugin/controllers/homeController.php?method=";


		$scope.GetData = function(){
			$http({method:'GET',url:$scope.ControllerEndpoint + "Gethomepage"}).then(function(data){
				$scope.CurrentUser = data.data;
				console.log($scope.CurrentUser);
		});
		}
		$scope.GetData();
	});
	</script>
	<?php
	}
	add_shortcode('contact-form', 'Create');
