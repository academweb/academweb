/**
 * main.js
 * http://academweb.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * Author:@voitsekhovskymax
 * Copyright 2017, ACADEMWEB
 * http://www.academweb.com
 */
 jQuery(document).ready(function(){


// Сдесь следует дописать проверки для избежания ошибок
'use strict';

// Search
var openSearchCtrl = document.getElementById('btn-search');
var	closeSearchCtrl = document.getElementById('btn-search-close');
var containerSearch = document.querySelector('.search') ;
if(containerSearch !== null) 
{
	var inputSearch = containerSearch.querySelector('.search__input');
}
function openSearch() {
	if(containerSearch !== null) 
	{
		containerSearch.classList.add('search--open');
		inputSearch.focus();
	}
}
function closeSearch() {
	if(containerSearch !== null) 
	{
		containerSearch.classList.remove('search--open');
		inputSearch.blur();
		inputSearch.value = '';
	}
}


// Contact
var openContactCtrl = document.querySelector('.btn-contact');
var openContactCtrl2 = document.querySelector('.btn-contact-2');
var	closeContactCtrl = document.querySelector('.btn-contact-close');
var containerContact = document.querySelector('.contact-container');
if(containerContact !== null) 
{
	var inputContact = containerContact.querySelector('.contact-form input[name="your-name"]');
}
function openContact() {
	if(containerContact !== null) 
	{
		containerContact.classList.add('contact--open');
		inputContact.focus();
	}
}
function closeContact() {
	if(containerContact !== null) 
	{
		containerContact.classList.remove('contact--open');
		inputContact.blur();
	}
}


// request
var openRequestCtrl = document.querySelector('.btn-request');
var	closeRequestCtrl = document.querySelector('.btn-request-close');
var containerRequest = document.querySelector('.request-container');
if(containerRequest !== null) 
{
	var inputRequest = containerRequest.querySelector('.request-container .contact-form input[name="your-name"]');
}
function openRequest() {
	if(containerRequest !== null) 
	{
		containerRequest.classList.add('contact--open');
		inputRequest.focus();
	}
}
function closeRequest() {
	if(containerRequest !== null) 
	{
		containerRequest.classList.remove('contact--open');
		inputRequest.blur();
	}
}


function init() {
	if(openSearchCtrl !== null){
		openSearchCtrl.addEventListener('click', openSearch);
		closeSearchCtrl.addEventListener('click', closeSearch);
	}
	if(openContactCtrl !== null){
		openContactCtrl.addEventListener('click', openContact);
		openContactCtrl2.addEventListener('click', openContact);
		closeContactCtrl.addEventListener('click', closeContact);
	}
	if(openContactCtrl !== null){
		openRequestCtrl.addEventListener('click', openRequest);
		closeRequestCtrl.addEventListener('click', closeRequest);
	}
	document.addEventListener('keyup', function(ev) {
			// escape key.
			if( ev.keyCode == 27 ) {
				closeSearch();
				closeContact();
				closeRequest();
			}
		});
}


init();

});