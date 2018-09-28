<?php

if (empty($_GET['menu'])) {
	include("konten/home.php");
} 
elseif ($_GET['menu'] == "login") {
	if (empty($_SESSION['hak'])) {
		include("konten/login.php");
	}
	else {
		header('Location: index.php');
	}
}
elseif ($_GET['menu'] == "laporan-servis-elevator") {
	if (empty($_SESSION['hak'])) {
		include("konten/login.php");
	} else {
	include("konten/laporan-servis-elevator.php");
	}
}
elseif ($_GET['menu'] == "form-servis-elevator") {
	if (empty($_SESSION['hak'])) {
		include("konten/login.php");
	} else {
	include("konten/form-servis-elevator.php");
	}
}
elseif ($_GET['menu'] == "desain-tambah-form") {
	if (empty($_SESSION['hak'])) {
		include("konten/login.php");
	} else {
	include("konten/desain-tambah-form.php");
	}
}
elseif ($_GET['menu'] == "laporan-servis-ac") {
	if (empty($_SESSION['hak'])) {
		include("konten/login.php");
	} else {
	include("konten/laporan-servis-ac.php");
	}
}
elseif ($_GET['menu'] == "logout") {
	if (empty($_SESSION['hak'])) {
		include("konten/login.php");
	} else {
	include("konten/logout.php");
	}
}
?>
