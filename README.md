# LEDNEWS

LED電光掲示板を使って最新ニュースを流すためのスクリプト

## 動作環境

- Linux推奨（Windowsでも多分動く）
- apache
- php
- LEDは別のWindows端末を使い、LEDVISIONを使用して表示
- LED制御基板は5A-75Bを使用
- 128x32pxのLEDマトリクスパネル

## 使い方

- ./matrix.html をLEDVISIONで表示させる

## RSSフィードについて

- デフォルトではITmediaの秋葉原関連のニュースを取得
- 変更するには ./getRss.php の以下を編集

```php
/**
 * RSS URL
 */
define('RSS_URL', 'https://rss.itmedia.co.jp/rss/2.0/kw_akiba.xml');
```

## 画像

### スクリーンショット

![スクリーンショット](./screenshot.png)

### 動作画像

![動作画像](./photosample.jpg)
