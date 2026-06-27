<?php
/**
 * RSS URL
 */
define('RSS_URL', 'https://rss.itmedia.co.jp/rss/2.0/kw_akiba.xml');
// JSON形式で出力するためのヘッダーを設定
header('Content-Type: application/json; charset=utf-8');

/** RSSデータの読み込み */
$xml = simplexml_load_file(RSS_URL);

// もしRSSの読み込みに失敗した場合はエラーメッセージを返して終了
if ($xml === false) {
    $output = [
        'status' => 'error',
        'message' => 'Failed to load RSS feed.'
    ];
    echo json_encode($output);
    exit;
}

// RSSデータをJSON形式に変換して出力
echo json_encode($xml, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);