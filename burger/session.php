<?php
session_start();
if (!isset($_SESSION['product-img'])) $_SESSION['product-img'] = array();
if (!isset($_SESSION['product-name'])) $_SESSION['product-name'] = array();
if (!isset($_SESSION['options-bread'])) $_SESSION['options-bread'] = array();
if (!isset($_SESSION['price'])) $_SESSION['price'] = array();
if (!isset($_SESSION['options-meat'])) $_SESSION['options-meat'] = array();
if (!isset($_SESSION['options-vegetable'])) $_SESSION['options-vegetable'] = array();
if (!isset($_SESSION['options-topping'])) $_SESSION['options-topping'] = array();
if (!isset($_SESSION['options-sauce'])) $_SESSION['options-sauce'] = array();

?>