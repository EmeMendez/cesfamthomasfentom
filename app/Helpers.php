<?php

function setActiveLink($routeName){
	return request()->routeIs($routeName) ? 'bg-fenton-gold' : '';
}
function setActiveSubLink($routeName){
	return request()->routeIs($routeName) ? 'text-white' : 'text-dark';
}

?>