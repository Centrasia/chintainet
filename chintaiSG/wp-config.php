<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'LAA0227965-chintainet');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'LAA0227965');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'chintainet2012');

/** MySQL のホスト名 */
define('DB_HOST', 'mysql576.phy.lolipop.jp');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|kgr;8?{=ixQMlHrWo( eoo!Q$zu`p?]|f[Fv8$6Hfp||KDWAa|G_|h}Xlf6,[l*');
define('SECURE_AUTH_KEY',  '-?X+%bY)V05Av|([jhc7YM ?PEexO}RiLU^{yP<4X.ZxR,i`ttv>H9Kq_5#-DG9(');
define('LOGGED_IN_KEY',    'Py8?^A+89+GC=xcm~LtpCI&lh9W0#wH/:rh#-h&h0`(|vAlxO]7{Z=}|qp&_2O[8');
define('NONCE_KEY',        'C-4On&pBAvGF!.;BA>/0}}s3Jqwo-eg7fCl#x|MwHrf=[dKHnydPAgj<l>+rVo+}');
define('AUTH_SALT',        '@P&m|.tc|_~.rV=.+PpIGQb)q-*U +5/{iD#hz:<%}+&EA)FXgjn~S/p:]sBUAqi');
define('SECURE_AUTH_SALT', 'av6Q/E!sviD^|O6o84h:pQ5ko5FRH&x(n scoM^gt>0|d=c-CmX~`Tv-# p9IDih');
define('LOGGED_IN_SALT',   '_@dC(&<m%/#|YA-zl;Oy(R|bawP3>:$Cd;70Jtb<W<e1gkP<=s.zg<c<Bht!$,A[');
define('NONCE_SALT',       '?!fxK0knw=z1Z|3/BZ<0B|Zp4d.IvjVmV9`g!un-lFSi8L1oEw0/8qA(`#+{V{|f');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'chintai_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
