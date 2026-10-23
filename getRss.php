<?php
// JSON形式で出力するためのヘッダーを設定
header('Content-Type: application/json; charset=utf-8');

/**
 * ニュース用RSSフィードのURL
 */
$RSS_URLs = [
  'https://rss.itmedia.co.jp/rss/2.0/news_bursts.xml',
  'https://news.yahoo.co.jp/rss/media/chibatele/all.xml',
  'https://news.yahoo.co.jp/rss/media/saitama/all.xml',
  'https://news.yahoo.co.jp/rss/media/kurumans/all.xml',
  'https://news.yahoo.co.jp/rss/media/tvtnews/all.xml',
  'https://news.yahoo.co.jp/rss/media/it_nlab/all.xml',
  'https://news.yahoo.co.jp/rss/media/bikeno/all.xml',
  'https://news.yahoo.co.jp/rss/media/bonichi/all.xml',
  'https://news.yahoo.co.jp/rss/media/biz_shoko/all.xml',
  'https://news.yahoo.co.jp/rss/media/impktw/all.xml',
  'https://news.yahoo.co.jp/rss/media/otakulab/all.xml',
  'https://news.yahoo.co.jp/rss/media/ascii/all.xml',
  'https://news.yahoo.co.jp/rss/media/impahw/all.xml',
  'https://rss.itmedia.co.jp/rss/2.0/kw_akiba.xml',
];

$randomUrlId = array_rand($RSS_URLs);

/** RSSデータの読み込み */
$xml = simplexml_load_file($RSS_URLs[$randomUrlId]);

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
