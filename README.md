# YoutubeAPI
```php
<?php
include 'YTApi.php';
$api = new YouTubeAPI('myemail@somedomain.com', '123456789'); //Youtube login
echo  $api->Like('vid_id');

//alternatively
echo YouTubeProductionAPI('myemail@somedomain.com', '123456789', 'like', 'vid_id');

?>


```
