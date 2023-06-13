<?php

define( 'ITSEC_ENCRYPTION_KEY', 'ajldY3BHLElAdVBOc2ZBQGw/Tj00Q0pjOURKeShgSi04JjJ1MXtbXUctTWBqajgrbWw9PSZudyxyX153WCBKOw==' );

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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wpmarketingsofip' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',rmLN&wD(>,AqS?R$jm2DX)3/ZMcIoY.2>SMa=>sr~TIJ(jfMzJ-rY]d7^}@%?6C' );
define( 'SECURE_AUTH_KEY',  'A6hg)15G@EHyk%J5MD9|rbvcV`>FZy2a-f4+B$(1sZ-~[j]6.!VF!+;#GI3E|+M5' );
define( 'LOGGED_IN_KEY',    '*E&tO0[ji7p^zzt$y-{aF5& Jo]JMfPg+GG[?VE~B&qt%C#x*oY{?y`v1*m#+CMd' );
define( 'NONCE_KEY',        'bS`xpp.Wxtg}G)N2h;f!2arJ-$?tiZl5@bsrNyU(5o0D84v+.FX@[2,( u08 ,%_' );
define( 'AUTH_SALT',        'O57fnQ_&<MlP~viOrw+W(Bz8oY{rV0xrQ<Q4#RzZH#rEQw|g`@DsnVr/lmI{b%Za' );
define( 'SECURE_AUTH_SALT', 'sZy``=O`4NP3rN/GDa_q>@I,A]Ed*{VZkBUzuLfa~$<UU<49:Gjt@d<XhmmQKc)N' );
define( 'LOGGED_IN_SALT',   'PKH:)@( $yQue_0&E[C?@5_4Z>sp+[&1OptVjpqB5|!^8S)-?g=kuk+P6*UIB4x,' );
define( 'NONCE_SALT',       '4ga3/=#P=0R+I&ml(2iUK`/ofGO}*w%<x Q(%$SsNUxPw;CpiG^e FYk4r*#:gFW' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'mk_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
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
