## Attached Files Module
## 2016/10/24 / 1.1.5

$config{'dir.temp'} = "$config{'data.dir'}temp/";

## ファイルサイズ制限 (1ファイル当たり) / バイト数
$config{"att_file_size_limit"} = 1024 * 1024 * 100; ## 100MB

## ファイル全部のサイズ制限 (1ファイル当たり) / バイト数
$config{"att_file_size_total_limit"} = 1024 * 1024 * 100; ## 100MB

## ファイルをサーバに保持するオプション(0:off / 1:on)
$config{"att_file_log"} = 0;

## ファイルをサーバに保存する際に通し番号毎のフォルダに格納する(0:off / 1:on)
$config{"att_file_log_dir"} = 0;

## ファイルをサーバに保持するフォルダ名
$config{"dir.att_file_log_dir"} = "$config{'data.dir'}files/";

## メールに添付するオプション(0:off / 1:on)
$config{"mail_att_file"} = 1;

## メールに添付する場合のファイルサイズの上限値
$config{"mail_att_file_size_limit"} = 1024 * 1024 * 5; ## 5MB

## ダウンローダー用パスワード
#$config{"att_file_donwloader"} = 'ACDe2tgZ4ovPVd6ZRxwk';

## ホスト名によるダウンロード制限をする場合は以下に指定してください。
#$config{'att_file_DownloadHostName'} = 'localhost';

## IPアドレスによるダウンロード制限をする場合は以下に指定してください。
#$config{'att_file_DownloadIPAddress'} = '127.0.0.1';

## Dropboxにファイルをプッシュする
#$config{'att_file_dropbox_app_key'} = '*************';
#$config{'att_file_dropbox_app_secret'} = '*****************';
#$config{'att_file_dropbox_limit'} = 1024 * 1024 * 20; ## 20MB


## ファイル添付機能の対応拡張子
@att_filetype = ('jpg','jpeg','gif','png','ai','psd','pdf','zip','doc','docx','xls','xlsx','ppt','pptx','txt');

$lang{'ErrorCode8'} = '対応していないファイルか、ファイルサイズが制限を超過しています。<br />Do not support the file that is attached, the file size I have exceeded the limit.';

1;