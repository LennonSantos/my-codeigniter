<!DOCTYPE html>
<html>
    <head>
    	<meta charset="utf-8">
        <title>CodeIgniter Tutorial - <?php echo $title; ?></title>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">
    </head>
    <body>
        <div class="container">
        	<header>
            	<h1>Page <?php echo $title; ?></h1>
            	<nav>
            		<ul class="menu">
            			<li class="menu-item"><a href="<?php echo base_url(); ?>" class="menu-item-link">Home</a></li>
            			<li class="menu-item"><a href="<?php echo base_url('news'); ?>" class="menu-item-link">News</a></li>
                        <li class="menu-item"><a href="<?php echo base_url('news/create'); ?>" class="menu-item-link">Create</a></li>
            		</ul>
            	</nav>
            </header>