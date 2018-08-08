<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'learnandsahre');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '0aQ`2L:eNZJlrE#OnLs{kS7a<92$maBscl<uS;Ic|&Wh[t%:2p}xa>}jZmPi/9f+');
define('SECURE_AUTH_KEY',  'ern2ZUD[3};tQ6p&yW/7C +2!.0Vc[~lm3O,cnSgH8<2e+`Fr@Qq4Kv17tI9h0Wp');
define('LOGGED_IN_KEY',    ':h8C%6f?|6)#R)*;PxIhGw1s(X]P<lQ7[dNppP3Oie#2FC,W uH7+5zJWwE]B,5&');
define('NONCE_KEY',        '{>l*+(CpSgLv}+Ti8:jrl/HB%}l4FaV0+BkHl5oQpAM2un^xmoFqq{~N+6P?#X@K');
define('AUTH_SALT',        '/DzJq`0:%o&62^k<*vLifJ.3|gQ>Ka7YvKNN5+7]#OassmL?rt8?9UP_3_.!;bJ]');
define('SECURE_AUTH_SALT', 'SjWc~.3BfMNfw5(G+akY3?)UnPo+ANO`2XPMr5y$y>jB?t~iJ!u4n8N~<F>$mD:X');
define('LOGGED_IN_SALT',   '*Q+z)B;^R8,E=:Z?>wBWY]B9>!jk>(w0eAuTbax:,*!]tL6l?|iZROrT|6?_$kAJ');
define('NONCE_SALT',       '#v5&2>{Y[sQ}pb]iz@SV-N(v,ZjIh05)9,K~C.0miho`(AUM.:7X},B$yREZ[[V4');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');