<?php
add_action( 'wp_enqueue_scripts', 'wpm_enqueue_styles' );
function wpm_enqueue_styles(){
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

// Ajout de tailles d’images personnalisées
/* function wpm_nouvelles_tailles_images() {
    add_image_size( 'taille-01', 580, 200 );
    add_image_size( 'taille-thumb', 80, 80 );
    }
    add_action( 'after_setup_theme', 'wpm_nouvelles_tailles_images' ); */

/* $bdd = new PDO('mysql:host=localhost:3309;dbname=db_chalets-et-caviar;charset=utf8','root',''); */