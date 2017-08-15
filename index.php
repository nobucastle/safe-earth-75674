 <?php echo '<p>Hello World</p>'; 

$dbopts = parse_url(getenv('DATABASE_URL'));
$link = pg_connect($dbopts);
if (!link) {
	die('接続失敗です。'.pg_last_error());
}

print('接続に成功しました。<br>');

$close_flag = pg_close($link);

if($close_flag){
	print('切断に成功しました。<br>');
}

?> 


