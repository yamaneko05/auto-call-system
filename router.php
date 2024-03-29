<?php 

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
	$r->addRoute("GET", "/", "index");
	$r->addRoute("GET", "/home", "home");
	$r->addRoute("GET", "/login", "login");
	$r->addRoute("GET", "/surveys/{id:\d+}", "survey");
	$r->addRoute("GET", "/reserves/{id:\d+}", "reserve");
	$r->addRoute("GET", "/reserves/{id:\d+}/result", "result");
	$r->addRoute("GET", "/calls/{id:\d+}", "call");
	$r->addRoute("GET", "/faqs/{id:\d+}", "faq");
	$r->addRoute("GET", "/options/{id:\d+}", "option");	
	$r->addRoute("GET", "/favorites/{id:\d+}", "favorite");
	$r->addRoute("GET", "/account", "account");
	$r->addRoute("GET", "/send-emails/{id:\d+}", "sendEmail");

	$r->addRoute("POST", "/login", "loginPost");
	$r->addRoute("POST", "/logout", "logout");

	$r->addRoute("PUT", "/account/email", "updateEmail");
	$r->addRoute("PUT", "/account/password", "updatePassword");

	$r->addRoute("POST", "/send-emails", "storeSendEmail");
	$r->addRoute("PUT", "/send-emails/{id:\d+}", "updateSendEmail");
	$r->addRoute("DELETE", "/send-emails/{id:\d+}", "deleteSendEmail");

	$r->addRoute("POST", "/surveys", "storeSurvey");
	$r->addRoute("PUT", "/surveys/{id:\d+}", "updateSurvey");
	// $r->addRoute("DELETE", "/surveys/{id:\d+}", "deleteSurvey");
	$r->addRoute("PUT", "/surveys/{id:\d+}/greeting", "updateGreeting");
	$r->addRoute("PUT", "/surveys/{id:\d+}/ending", "updateEnding");

	$r->addRoute("POST", "/faqs", "storeFaq");
	$r->addRoute("PUT", "/faqs/{id:\d+}", "updateFaq");
	$r->addRoute("DELETE", "/faqs/{id:\d+}", "deleteFaq");
	
	$r->addRoute("POST", "/options", "storeOption");
	$r->addRoute("PUT", "/options/{id:\d+}", "updateOption");
	$r->addRoute("DELETE", "/options/{id:\d+}", "deleteOption");
	$r->addRoute("POST", "/options/{id:\d+}/order", "orderOption");

	$r->addRoute("POST", "/reserves", "storeReserve");
	$r->addRoute("PUT", "/reserves/{id:\d+}", "updateReserve");
	$r->addRoute("DELETE", "/reserves/{id:\d+}", "deleteReserve");

	$r->addRoute("POST", "/reserves_areas", "storeReservesAreas");
	$r->addRoute("DELETE", "/reserves_areas/{id:\d+}", "deleteReservesAreas");

	$r->addRoute("POST", "/favorites", "storeFavorite");
	$r->addRoute("PUT", "/favorites/{id:\d+}", "updateFavorite");
	$r->addRoute("DELETE", "/favorites/{id:\d+}", "deleteFavorite");

	$r->addRoute("POST", "/favorites_areas", "storeFavoritesAreas");
	$r->addRoute("DELETE", "/favorites_areas/{id:\d+}", "deleteFavoritesAreas");
});

