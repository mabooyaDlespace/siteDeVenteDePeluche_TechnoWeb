<?php

include('../database.php');
include('../modelStore.php');
include('../session.php');
include('../user.php');

require 'model.php';
$msgid = 0;
$msgquant = 0;
$msgErreur ="";
$var = getPanier();
$msgid = $var['msgid'];
$msgquant = $var['msgquant'];
$msgErreur =$var['msgErreur'];
require 'view.php';

