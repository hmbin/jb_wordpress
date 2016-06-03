<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'lightcar');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'miniserver');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'l+dV2vR11/`y}jBT4LSo4LgG$-,FIx)5b<>B;*(%(%}s7!;$H+-FxI/;wbpi|SZ9');
define('SECURE_AUTH_KEY',  '-Zab8Cil[?Q4$>2-2)Qk{;5cG3}7tfUc{O&H}%EXpYgz;*UT) daKq=b$kej,>YP');
define('LOGGED_IN_KEY',    'AD3seRGOWK_*Eo6+`CA^nT|x+z1T 7{V0+i}q>?ZX@;7%&)wHjm-MPxRD-F`uDJD');
define('NONCE_KEY',        '^F:z&+bOBDV5C>d3B0d&N#(1aSs)`uZ!54n8,3S,j}G(x(=g4P7o7i+`9%QDD<67');
define('AUTH_SALT',        's3XQyT}d4xeL5$0~YM~@,Bo#H`rNkWFD|9wf@.tS:5^/(PBc|[b{|rm/[gB=fGl>');
define('SECURE_AUTH_SALT', 'jy0&T,jkwj7m33SYQa}dD}*P5y9ai?d>aPy&~9*Py~hr</N!;8|u5<Rf{6lqEQ<]');
define('LOGGED_IN_SALT',   'tS,K%OMN2K#Lw-{/ qIz?,^bop+gd]G2:p0mL,gbo,@PS_KYA965}PsrquDB_W$A');
define('NONCE_SALT',       'EMUo-vD0z[06>NH38q.4q4uX?3SrS[`.7j)UeC+(rN5ex:-pu)UI(hD[hyE}8,m<');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'lc';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
