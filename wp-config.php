<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
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

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wp_test');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ',tikCud;KGKClN(=AM,4{uPsNMhGNhI/Ki}/B*l~<M,V+b(%PlgecTA]crY<rK*(');
define('SECURE_AUTH_KEY',  'l>(8U^t[i)7f MO!Hl~Ja-Y]2eRyB>Oa8VGn<PG*O`tVFiv|sRkK[Qm1-kzW=]ra');
define('LOGGED_IN_KEY',    'R^PE):7:>/-(7sV`oTKIgpbW3OSYmQg@}pVRQ6HagIW4F_ikJ%}6SO~vBCg@83;2');
define('NONCE_KEY',        'gMXg,t.]EeDhhgz?Qt),7viY_#:n/tp.|OwHkqzr]+@zHqnSurH$^8J?Qu-z{-n.');
define('AUTH_SALT',        'm]zUt@q{:B#{kHYVt%aiz>7q/F3ENJ*T3+k8S~%ZR@Z6$F&S9&gSYU~O&.awR!79');
define('SECURE_AUTH_SALT', 'M-I=Ko6MZ?6R4 Fr?wZPFRi#WsH_a|VL:yMTW}.MqmQ5ap6OcUhpMGrVif|]DZT.');
define('LOGGED_IN_SALT',   'MV<AV8ea}Tlr`{p:lC&c(U?1m*!I5JHKf~]ul-JD}tW@Pdocz0UUptA!N*dTi#.X');
define('NONCE_SALT',       '>uc -rz|~P%oq5*ZPB>VBPnOc0_)@J39PcdDTBxBi:cJ&t!a7h0d<k~}ci@H|)Rb');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wpt_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
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
