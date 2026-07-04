<?php //子テーマ用関数
if ( !defined( 'ABSPATH' ) ) exit;

//子テーマ用のビジュアルエディタースタイルを適用
add_editor_style();

//以下に子テーマ用の関数を書く
// 登壇実績のカスタム投稿タイプを追加
function add_lecture_post_type(){
	register_post_type('lecture', array(
	'labels' => array(
		'name' => '登壇実績',
		'singular_name' => '登壇実績',
		'add_new' => '新規追加',
		'add_new_item' => '登壇実績を追加',
		'edit_item' => '登壇実績を編集',
		'all_items' => 'すべての登壇実績',
	),
	'public' => true,
	'has_archive' => true,
	'menu_icon' => 'dashicons-microphone',
	'supports' => array('title', 'editor', 'thumbnail'),
	'rewrite' => array('slug' => 'lecture'),
	));
}
add_action('init', 'add_lecture_post_type');