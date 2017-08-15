 <?php echo '<p>Hello World</p>'; 

$url = parse_url(getenv('ec2-54-227-252-202.compute-1.amazonaws.com:5432/d83v5gtterpnj3'));

return [
    'default' => 'pgsql',

    'connections' => [
        'pgsql' => [
            'data_id' => $url['Id'],
            'giinname' => $url['Name'],
            'giinkana' => $url['name_kana__c'],
            'e_mail' => $url['e_mail__c'],
        ],
    ],
];

?> 


