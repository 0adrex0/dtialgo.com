<?php

$recepient = "info@dtialgo.com";
$sitename = "DTI";
$from = "no-reply@dtialgo.com";

$name = trim($_POST["mail_name"]);
$mail = trim($_POST["mail_email"]);
$phone = trim($_POST["mail_phone"]);

$message = "Имя: $name \nТелефон: $phone \nE-mail: $mail";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $from");

