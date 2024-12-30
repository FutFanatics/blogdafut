<?php
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
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

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'futfanatics01');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'futfanatics01');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '5Sm1RPQe3UUJx08s');

/** Nome do host do MySQL */
define('DB_HOST', 'mysql.futfanatics.com.br');

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
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Qz$2O7e7NURy##X+KpdW|GIw>.s@{xT85UV{M_mRF*-S7ndUnR_b>Y?j.ox@l;o#');
define('SECURE_AUTH_KEY',  '4,8=,v*2=v`HT+hJ2eu2,Jri]`&Tz9-*lO*cNum_E#IX5Xo$uFQDA>4)S,) 1D+!');
define('LOGGED_IN_KEY',    '9XJb17>DE@%`(ea,5w>D+G*e+y6.X7!~nTxL*y/<W|<#=xEt_>fZdrq6OU$}L//B');
define('NONCE_KEY',        '54^)g1:pu6L- >Ee:l}gXIynMZ<>hUhVfJWgB!`Bjp8c=kkQb3o/ph/X6(|rU<n.');
define('AUTH_SALT',        '{|Ba*nD(M>_|%$K&<w*&a{UiA40mj.duIr81hL6d|.vJ3a&!N;ye)i$_Ge0)!<U-');
define('SECURE_AUTH_SALT', 'lCemt8=MXfd5xLeBf?t7)?R8!1fwtVH5Omt-G%R(+{Vo=0*-;cHs6qFs`xc(f!:4');
define('LOGGED_IN_SALT',   'dpd=[GuClq(z0iE[Bk>p2KPzh|+?a^hjOjS{|L%iB{y6^p[!-)4{,S~buDgOBC*g');
define('NONCE_SALT',       'dR[l2M?(Li|%WN)8+uAbrK!XDzC.3t=?$(I)!q):ZnqT/Y|/Wi}#81<FGca>i]J2');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
