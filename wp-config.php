<?php
/**
 * La configuration de base de votre installation WordPress.
 * 
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'bap-jcr-peintre');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ',eBHPbb>mhUQrsN/q+]qS//08GRy|in_#fYY1W|N9:pHdTl|q{FrQ<|gcpLd+x.l');
define('SECURE_AUTH_KEY',  ':`iT IUD0k,O`v3lmH3os}~QX>.TkR>!j!u?=3nr]Yl,T0Z@4HSMI]>A;EY1|c `');
define('LOGGED_IN_KEY',    'HS{_qQO2{PrLaVEM1i#(H?%jGmNUf_]_|gS-]]1{|AC>yPHWYBV>mD-!X9r+[^e^');
define('NONCE_KEY',        'ki[KOolP`_Z^`y^^mJ[P+s8cpkus+5(6&b<-9i+}P-~kJkmlwE(r>sHen4o{Y:C=');
define('AUTH_SALT',        '1k<fG.:Y7Pp(|hyJ;ew|>Z9RUu&d()Akf`zW<F|J|GzFjYz&_,+E]f99&Mi%O[Jo');
define('SECURE_AUTH_SALT', '$zE0!,xLvMpS?t{I*TCSsYZ(=5/P^>U~QBX?n+LgOKJG=j@yXYO=fOa:sGWNK,!6');
define('LOGGED_IN_SALT',   '4+kf-};*Y=dOw{KG+I[WLHpPl<uEvv_ 8+&)p2i_:!,VadqAqZn%G]aNqiXs7+v-');
define('NONCE_SALT',       'w)H=TrTxH3C(Y7i9f]q8>Ko2IZw_#?SPuJ%9;biGl|mbt1:V$}-:o{;8v+G}]nCh');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wpjcr_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');