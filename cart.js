var app = angular.module('angularModule',[]);
app.controller('ProductController',['$scope',function($scope){
	$scope.products = [
		{   "product_id" : 1,
			"product_image":"Box.jpg",
			"product_description" :"Complete set including Housing, Belt clip 5 x sets of cap magnets, 3 x Protective caps and a Frii Designs. Available for Canon EF, Nikon F or sony E/FE lenses. Import fees may apply outside of the EU.",
			"product_name" :"TRILENS",
			"product_price" :99,
     "cart_btn" : "Add to Cart"

		},
		{    "product_id" : 2,
			"product_image":"Box.jpg",
			"product_description" :"Two complete set including Housing, Belt clip 5 x sets of cap magnets, 3 x Protective caps and a Frii Designs. Available for Canon EF, Nikon F or sony E/FE lenses. Import fees may apply outside of the EU.",
			"product_name" :"2 xTRILENS",
			"product_price" :179,
     "cart_btn" : "Add to Cart"

		}

	]

	$scope.cart = [];
	$scope.cartCount= 0;

	$scope.addTocart = function(productIndex){
		$scope.cart.push($scope.products[productIndex]);
		$scope.products[productIndex].disable =true;
		$scope.cartCount= $scope.cart.length;
    $scope.products[productIndex].cart_btn = 'Added...';
	};
	$scope.removeItem = function(itemIndex){
		$scope.cart[itemIndex].disable = false;
    $scope.cart[itemIndex].cart_btn = 'Add to Cart';
		$scope.cart.splice(itemIndex,1);
		$scope.cartCount= $scope.cart.length;
   
	};

	$scope.getTotal = function(){
		var total = 0;
		angular.forEach($scope.cart,function(value){
			total = total + value.product_price;
		});
		return total;
	};

}]);
app.controller('IndexController',['$scope',function($scope){
  $scope.languages =[
 	{
 		"name" : "Javascript",
 		"version" : 1.0,
 	},
 	{
 		"name" : "php",
 		"version" : 5.5,
 	},
 	{
 		"name" : "AngularJs",
 		"version" : 1.6
 	}
];
}]);


      $("#cart").on("click", function() {
    $(".caption").fadeToggle( "fast");
  });

$(document).on('click','.product',function(e){
  e.preventDefault();
  $('.empty').hide();
  
  if($(this).hasClass('disable')){   
  
  }
  $(document).find('.product').addClass('disable');
    return false;
});