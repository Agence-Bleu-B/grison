<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

	<title>admin</title>
	<META NAME="robots" CONTENT="noindex,nofollow">
	<meta name="description" content="admin"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<!-- CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo css_url('admin_style');?>" />
</head>
<body>
	<div id="wrapper">
		<div class="navbar navbar-inverse navbar-fixed-top">
		    <div class="adjust-nav">
		        <div class="navbar-header">
		            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		            <a class="navbar-brand" href="#">
		                <img class="img-responsive" src="<?php echo img_url("LOGO_CCAS2.png"); ?>" />
		            </a>
		        </div>
		      
		         <span class="logout-spn" >
		          <a href="<?php echo site_url('admin?deco'); ?>" style="color:#fff;">Se déconnecter</a>  

		        </span>
		    </div>
		</div>
		       <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
 					<li <?php if ($pagecours == 'index') {echo 'class="active-link"';}?>>
                        <a href="<?php echo site_url('admin'); ?>" ><i class="fa fa-desktop "></i>Accueil</a>
                    </li>
                    <li <?php if ($pagecours == 'actu' || $pagecours == 'creation' || $pagecours == 'modifactu'  ) {echo 'class="active-link"';}?>>
                        <a href="<?php echo site_url('admin/actu'); ?>"><i class="fa fa-newspaper-o "></i>Actualités</a>
                    </li>
                    <li <?php if ($pagecours == 'gestionpersonnel'||$pagecours == 'modifperso') {echo 'class="active-link"';}?>>
                        <a href="<?php echo site_url('admin/gestionpersonnel'); ?>"><i class="fa fa-users "></i>Personnel CCAS</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i>Statistiques</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit"></i>Pages</a>
                    </li>
                    <li <?php if ($pagecours == 'documents'||$pagecours == 'gestionimg'||$pagecours == 'gestionpdf') {echo 'class="active-link"';}?>>
                        <a href="<?php echo site_url('admin/documents'); ?>"><i class="fa fa-book"></i>Documents</a>
                    </li>
                </ul>
            </div>
            <?php if ($pagecours == 'creation' || $pagecours == 'modifactu'  ){ ?>
			<div class="sidemedia">
				<p class="sidemediatitre">Medias</p>
				<div class="sidemediabloc">
					<?php foreach ($medias as $key => $value) { ?><img class="img-responsive" src="<?php echo img_url('medias/'.$value) ;?>">
						
					<?php } ?>
				</div>
			</div>
			<?php } ?>
        </nav>
        <!-- /. NAV SIDE  -->