<?php
/** API URL */
$API_URL = 'https://radio.enoki.xyz/api/nowplaying/neruru-radio';

// JSON形式で出力するためのヘッダーを設定
header('Content-Type: application/json; charset=utf-8');

// HTTP経由でファイルを取得（別リクエストとして実行される）
$output = @file_get_contents($API_URL);

if ($output === false) {
  return 'API取得エラー';
}

echo $output;