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
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost:8888/localhost/wordpress');

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
define('AUTH_KEY',         'tQ5df#_0rluJ-PfNu( K!-sM($6ZAgV]#-0WV`]|@D4<cV VO_/%%^cjB2p^?4[]');
define('SECURE_AUTH_KEY',  'r2,H#Qid?M$vDJW|m]An/OeQK} =fjnc&D:wNErcH_x3z+j&6BuO%X<VQz>Z`gC]');
define('LOGGED_IN_KEY',    'kN&tdG3b`ffv{i ?HGrfa940b)88zgZ@}+w#F|I|vyGHal]zk{]Wb].QO}`acL);');
define('NONCE_KEY',        '#+9,q=`,EzEOB}x(]pX.U`i|yo$iQrE4J !+F_UX59>3UQ!&)N0U[wst&Cf8D0R}');
define('AUTH_SALT',        'G~cTdcjwj@%eU@iQ[?-Tto}#*XtDFrs43`F|wP-}aG*5F@Ly&_k;[/<0bO/,@/1M');
define('SECURE_AUTH_SALT', ';U2%Jq]e/Jb41j*W| YEU(oofz,;g(bP1$HDqtZ^,*Vdd7A5Cj?%tj>i>8VK+-6h');
define('LOGGED_IN_SALT',   '@mO WZk(pzVuCZE2AFIh00fPeiE@h@JO7ND5~#xuwQi2BKZ7.ix_2WUhLdBo!h1c');
define('NONCE_SALT',       'b[FwsG^SI3DO9oKG|u3cT53X7t%n{(?IU2jxh=M_&u{H/chh>Bwa2{7QY#@rScz*');
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