<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         '4qlc bNOhhX/;FJGPWXd2w4I[894:RI2$>Uz<Ya|Y6>$?e$fajshxC>VG]~n2qHm' );
define( 'SECURE_AUTH_KEY',  'MS/,V.xI./y<=Y-iX FF<>9Ke_9+{WRA.kZKR{@LVN-@)25-#.fFh/bxnJdEa&xh' );
define( 'LOGGED_IN_KEY',    'jT0+~rn6E-ENWW7y{`9KM8bHt||-Qo]kS#.ys;;kw*-LoP{xhm>T{0DKITGOw? G' );
define( 'NONCE_KEY',        '~+kBHiM8ny!C/Rrw6VJuJ]d+7)xMLIqa[fejN+/%rCeNOuXK yra|meFM145.F=Q' );
define( 'AUTH_SALT',        '<_E,MgxeT3O3UqzMmTS<VV+dke3|h[LZIoL#Lt<.Mam+p#9,VC4cz+LU&jfnFCnM' );
define( 'SECURE_AUTH_SALT', 'W<KHw@?tqp/q,H:2=(9C932cU|#L7-wpCIsJ@[!7Roe:L>/z{+h,}/wX:weZ`T_l' );
define( 'LOGGED_IN_SALT',   '1k>W(lLz[RUnIX]k-HhX![(GN~2` 76FB84QVIF+Y**e.(Y)ZDu3>Gkv0U$ga8b-' );
define( 'NONCE_SALT',       'K^0L)[&y V(!`wa#*>)2q9*yly)P#p=EPqi9,n6o^#uh{G` BXqSf./.V0VT9![0' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
