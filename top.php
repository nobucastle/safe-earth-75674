 <?php 
#echo '<p>Hello World</p>'; 

# This function reads your DATABASE_URL config var and returns a connection
# string suitable for pg_connect. Put this in your app.
function pg_connection_string_from_database_url() {
  extract(parse_url($_ENV["DATABASE_URL"]));
  return "user=$user password=$pass host=$host dbname=" . substr($path, 1); # <- you may want to add sslmode=require there too
}
# Here we establish the connection. Yes, that's all.
$pg_conn = pg_connect(pg_connection_string_from_database_url());
# Now let's use the connection for something silly just to prove it works:
$result = pg_query($pg_conn, "SELECT name, name_kana__c, syubetsu__c FROM salesforce.tou_jinji__c where id = 1 ORDER BY systemmodstamp DESC");

#print "<pre>\n";

if (!pg_num_rows($result)) {
	print("Your connection is working, but your database is empty.\nFret not. This is expected for new apps.\n");
} else {
	#print "Tables in your database:\n";
	while ($row = pg_fetch_row($result))
	{
		#print("- $row[0]\n");
		#print("- $row[1]\n");
		#print("- $row[2]\n");
		
		$name_chr = $row[0];
		$name_kana_chr = $row[1];
		$syubetsu_chr = $row[2];
		
	}
}
#print "\n";

?> 



