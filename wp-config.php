<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'interatisa' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '>nU~4@D2vkA;0B1!wc*dn0zA)TfFnpKhl{VY)T[7!u%oB(>41nW<}3pbk)?bEBv;' );
define( 'SECURE_AUTH_KEY',  'lrMew0sK:R*u$JTca(-kll^tG$Y7kp21%yK.D<T_2J%$jEn}*f=-OHS)-pite#6C' );
define( 'LOGGED_IN_KEY',    'dMA6(:.>m&}>/R_N23j(aEM~HYoEK_e%V.O8,%<w^-Y#s6*[0Gwpy!0j]dvRzymu' );
define( 'NONCE_KEY',        'tRqC~l7j 6Re,@)W5!8CUTZE,aE>LUi*{xL$AA*rpFlP%~;a&y}Pw3!G|D4^vt@;' );
define( 'AUTH_SALT',        '}S&LvWQ.1g93Dr]y$MTLoS1$~?#!oD/f4D%G14tTgj4yjIL79=/kUB%=h!G%()j1' );
define( 'SECURE_AUTH_SALT', '6]%|T:8!WC@M$rLL`*[vqYn4Q2Bz 7x?2F[w7tFTkW)XlwXTCjp2!~oo(/S5P:7*' );
define( 'LOGGED_IN_SALT',   'Kt/Lev^r^<oZnG_)vyJb3G51@nio)f8Rs7DL4;1(il`06|0~>L2z~hL?l|uLzH4G' );
define( 'NONCE_SALT',       'U.Ax{#3i}P=#u.LB3`5>0rY[>buZ+zV; s~4z5M 3(8Y(Y=w:vMV^x.M!X*93UjS' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_intera';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
