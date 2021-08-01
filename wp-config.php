<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'db_chalets-et-caviar' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost:3309' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'K<<hkA%I]PW8?wk]A-v9uC)68_^#fU?5leO3hiYmc+yuGnJ99)<@|FKE?*R38+x:' );
define( 'SECURE_AUTH_KEY',  'OV^IH%q03wWyx}j|Hz<Vv=SZm;J6+D+n{!sx:$u{>7&Yy6p=u#8b%f#G^RvLZ%&T' );
define( 'LOGGED_IN_KEY',    'OS1N9dCIN$FMii^ 4[m>IvC9L4^Eu0jh}wjR.2vcPkIN=MJz+^*p?!xLoNppb51{' );
define( 'NONCE_KEY',        'tX/8n-kU,$&Y,em{s<e>pOa]WOFj9,}cOmA$,$^0Ul+;)rmMM.;[#h!2:*J*qN  ' );
define( 'AUTH_SALT',        'elGFbGmg&4(fv1VQ{.UI,G{Z9@Rl2!NP,*]sEGg6*zITY3[I)lkY<- t?/47ys f' );
define( 'SECURE_AUTH_SALT', 'H>KwM[az#}OT+q& 7?X9j~H20F/(}(;:/ P3Xheq)$Vi9Lc~5f.lkccP;J@Lz>lj' );
define( 'LOGGED_IN_SALT',   'MDsrAkzE}!Zm=+-})C?ib7J RP1p)mGH7STR!i,laQ*M9DO5[qK^inf_r]5sg524' );
define( 'NONCE_SALT',       'mt![Y6d9FJ-xq})~j5i4.Ugzp0yRS6d2nS6AACIg2}(@p+[cO<~E!iXARgzn[17F' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'ljpatkkra_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
