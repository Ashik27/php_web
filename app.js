//Define an angular module for our app
var sampleApp = angular.module('sampleApp', []);

//Define Routing for app
//Uri /AddNewOrder -> template AddOrder.html and Controller AddOrderController
//Uri /ShowOrders -> template ShowOrders.html and Controller AddOrderController
sampleApp.config(['$routeProvider',
  function($routeProvider,$locationProvider){
//      $locationProvider.html5Mode(true);
    $routeProvider.
      when('/', {
	templateUrl: 'templates/home.html',
	controller: 'HomeController'
      }).
    when('/About', {
        templateUrl: 'templates/About.html',
        controller: 'AboutController'
    }).
    when('/Courses', {
        templateUrl: 'templates/courses.html',
        controller: 'CourseController'
    }).
    when('/News', {
        templateUrl: 'templates/news.html',
        controller: 'newsController'
    }).
    when('/Gallery', {
        templateUrl: 'templates/gallery.html',
        controller: 'galleryController'
    }).
    when('/Contact', {
        templateUrl: 'templates/contact.html',
        controller: 'contactController'
    }).
      otherwise({
	redirectTo: '/AddNewOrder'
      });
}]);
sampleApp.run(function($rootScope,$location,$http,$routeParams) {
    $rootScope.$on('$routeChangeStart', function(event,data,next){
//        if(next.templateUrl=='pages/profile.html'){
//            alert(JSON.stringify(data.params.serviceprovider_route_name))
//        }
        if(data.params.company_route!=undefined){
//alert(data.params.company_route);


            // var data = $.param({
            //     'type':'loadcompany',
            //     'data':{
            //         'company_route':data.params.company_route
            //     }
            // });
            // var config = {
            //     headers : {
            //         'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
            //     }
            // };



            // $http.post('action.php',data,config).success(function(response){
            //     //alert("Route Alert "+JSON.stringify(response));
            //     if(response.status == 'OK'){
            //         $rootScope.profileView = response.company;
            //
            //         $rootScope.profileAbout = response.about;
            //         $rootScope.profileServices = response.services;
            //         $rootScope.profileImages = response.cimages;
            //         $rootScope.profileSocials = response.socials;
            //         //alert(JSON.stringify($rootScope.profileImages));
            //     }
            // });





        }
        // if(data.title!='Provider | '){
        //     $rootScope.pageTitle=data.title;
        // }
    });
});
sampleApp.controller('galleryController', function($scope,$http,$rootScope,$location) {

    $rootScope.homeActClass="";
    $rootScope.aboutActClass="";
    $rootScope.courseActClass="";
    $rootScope.newsActClass="";
    $rootScope.galleryActClass="active";
    $rootScope.contactActClass="";

    $rootScope.changeBG="banner1";
    $rootScope.agileHidden="hidden";
    $rootScope.agileTexthidden="";
    $rootScope.text1="Our";
    $rootScope.text2="Gallery";






    $scope.getImages = function(){

        $http.get('action.php', {
            params:{
                'type':'gallary'
            }
        }).success(function(response){
            alert(JSON.stringify(response));
            if(response.status == 'OK'){
                $scope.imageList = response.cimages;

            }
        });
    };
    $scope.getImages();

    //Company Load

    // $rootScope.goToServiceProfile = function(company) {
    //     //alert("c"+JSON.stringify(company));
    //     $rootScope.company_route = company.company_route;
    //     $location.path("/" + $rootScope.company_route)
    // };
    $rootScope.Profile=function(){
        $location.path('/Profile');
    };


});

sampleApp.controller('appHomeController', function($scope,$rootScope,$location) {

    $rootScope.homeActClass="active";
    $rootScope.aboutActClass="";
    $rootScope.courseActClass="";
    $rootScope.newsActClass="";
    $rootScope.galleryActClass="";
    $rootScope.contactActClass="";



});
sampleApp.controller('HomeController', function($scope,$rootScope,$location) {

    $rootScope.homeActClass="active";
    $rootScope.aboutActClass="";
    $rootScope.courseActClass="";
    $rootScope.newsActClass="";
    $rootScope.galleryActClass="";
    $rootScope.contactActClass="";

    $rootScope.changeBG="banner";
    $rootScope.agileHidden="";
    $rootScope.agileTexthidden="hidden";

    $("#flexiselDemo1").flexisel({
        visibleItems: 4,
        animationSpeed: 1000,
        autoPlay: true,
        autoPlaySpeed: 3000,
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: {
            portrait: {
                changePoint:480,
                visibleItems: 1
            },
            landscape: {
                changePoint:640,
                visibleItems:2
            },
            tablet: {
                changePoint:768,
                visibleItems: 2
            }
        }
    });


    $(".center").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 2,
        slidesToScroll: 2,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: true,
                    centerMode: false,
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: true,
                    centerMode: false,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });

//    flexiSlider



});
sampleApp.controller('AboutController', function($scope,$rootScope,$location) {

    $rootScope.homeActClass="";
    $rootScope.aboutActClass="active";
    $rootScope.courseActClass="";
    $rootScope.newsActClass="";
    $rootScope.galleryActClass="";
    $rootScope.contactActClass="";

    $rootScope.changeBG="banner1";
    $rootScope.agileHidden="hidden";
    $rootScope.agileTexthidden="";
    $rootScope.text1="About";
    $rootScope.text2="Us";

});

sampleApp.controller('CourseController', function($scope,$http,$rootScope,$location) {

    $rootScope.homeActClass="";
    $rootScope.aboutActClass="";
    $rootScope.courseActClass="active";
    $rootScope.newsActClass="";
    $rootScope.galleryActClass="";
    $rootScope.contactActClass="";

    $rootScope.changeBG="banner1";
    $rootScope.agileHidden="hidden";
    $rootScope.agileTexthidden="";
    $rootScope.text1="Our";
    $rootScope.text2="Courses";

    $('.counter').countUp();


    $scope.getSyllubus = function(){

        $http.get('action.php', {
            params:{
                'type':'syllubus'
            }
        }).success(function(response){
            alert(JSON.stringify(response));
            if(response.status == 'OK'){
                $scope.syllubusList = response.rsyllubus;

            }
        });
    };
    $scope.getSyllubus();

    $rootScope.Profile=function(){
        $location.path('/Profile')
    };


});
sampleApp.controller('newsController', function($scope,$http,$rootScope,$location) {

    $rootScope.homeActClass="";
    $rootScope.aboutActClass="";
    $rootScope.courseActClass="";
    $rootScope.newsActClass="active";
    $rootScope.galleryActClass="";
    $rootScope.contactActClass="";

    $rootScope.changeBG="banner1";
    $rootScope.agileHidden="hidden";
    $rootScope.agileTexthidden="";
    $rootScope.text1="News";
    $rootScope.text2="& Events";



    $scope.getNews = function(){

        $http.get('action.php', {
            params:{
                'type':'news'
            }
        }).success(function(response){
            alert(JSON.stringify(response));
            if(response.status == 'OK'){
                $scope.newsList = response.rnews;

            }
        });
    };
    $scope.getNews();




});

sampleApp.controller('contactController', function($scope,$rootScope,$location) {
    $rootScope.homeActClass="";
    $rootScope.aboutActClass="";
    $rootScope.courseActClass="";
    $rootScope.newsActClass="";
    $rootScope.galleryActClass="";
    $rootScope.contactActClass="active";

    $rootScope.changeBG="banner1";
    $rootScope.agileHidden="hidden";
    $rootScope.agileTexthidden="";
    $rootScope.text1="Mail";
    $rootScope.text2="Us";

    $scope.message = 'This is Show orders screen';

});

sampleApp.controller('productController', function($scope,$rootScope,$location) {
    $rootScope.homeActClass="";
    $rootScope.serviceActClass="";
    $rootScope.productActClass="active";
    $rootScope.contactActClass="";
    $scope.message = 'This is Show orders screen';

});
sampleApp.controller('forumController', function($scope,$rootScope,$location) {
    $rootScope.homeActClass="";
    $rootScope.serviceActClass="";
    $rootScope.productActClass="";
    $rootScope.contactActClass="active";
    $scope.message = 'This is Show orders screen';

});

