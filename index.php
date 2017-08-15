 <?php echo '<p>Hello World</p>'; 

$dbopts = parse_url(getenv('DATABASE_URL'));
$link = pg_connect($dbopts);
if (!link) {
	die('接続失敗です。'.pg_last_error());
}

print('接続に成功しました。<br>');

$result = pg_query('SELECT name, name_kana__c, syubetsu__c FROM tou_jinji__c ORDER BY systemmodstamp DESC');
if (!$result) {
    die('クエリーが失敗しました。'.pg_last_error());
}

$close_flag = pg_close($link);

if($close_flag){
	print('切断に成功しました。<br>');
}

?> 


