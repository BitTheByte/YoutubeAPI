
 	
PHP Beautifier
Beautify and format your PHP code
 
Here is your PHP code :
 	
 Source
 
See as Text 	

<?php
error_reporting(0);
class YouTubeAPI

	{
	private $ch;
	private $cookies;
	private $state;
	function state()
		{
		return $this->state;
		}

	function __construct($email, $password)
		{
		$this->ch = curl_init();
		$this->cookies = tempnam("tmp", "cookies.txt");
		curl_setopt($this->ch, CURLOPT_COOKIEJAR, $this->cookies);
		curl_setopt($this->ch, CURLOPT_COOKIEFILE, $this->cookies);
		$this->state = $this->Glogin($this->G_identifier($email) , $password);
		if ($this->state != "STOP_CODE")
			{
			$this->YTlogin();
			}
		}

	private
	function G_identifier($email)
		{
		curl_setopt($this->ch, CURLOPT_URL, "https://accounts.google.com/_/signin/sl/lookup?hl=en&_reqid=53136&rt=j");
		curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($this->ch, CURLOPT_POSTFIELDS, "continue=https%3A%2F%2Fwww.google.com%2F&hl=en&f.req=%5B%22$email%22%2C%22%22%2C%5B%5D%2Cnull%2C%22EG%22%2Cnull%2Cnull%2C2%2Cfalse%2Ctrue%2C%5Bnull%2Cnull%2C%5B2%2C1%2Cnull%2C1%2C%22https%3A%2F%2Faccounts.google.com%2FAddSession%3Fhl%3Den%26continue%3Dhttps%253A%252F%252Fwww.google.com%252F%22%2Cnull%2C%5B%5D%2C4%2C%5B%5D%2C%22GlifWebSignIn%22%5D%2C1%2C%5Bnull%2Cnull%2C%5B%5D%5D%2Cnull%2Cnull%2Cnull%2Ctrue%5D%2C%22$email%22%5D&bgRequest=%5B%22identifier%22%2C%22%22%5D&at=&azt=&cookiesDisabled=false&deviceinfo=%5Bnull%2Cnull%2Cnull%2C%5B%5D%2Cnull%2C%22EG%22%2Cnull%2Cnull%2C%5B%5D%2C%22GlifWebSignIn%22%2Cnull%2C%5Bnull%2Cnull%2C%5B%5D%5D%5D&gmscoreversion=undefined&checkConnection=youtube%3A1468%3A1&checkedDomains=youtube&pstMsg=1&");
		curl_setopt($this->ch, CURLOPT_POST, 1);
		curl_setopt($this->ch, CURLOPT_ENCODING, 'gzip, deflate');
		$headers = array();
		$headers[] = "Cookie: GAPS=1:5anptsFCcX86o8zx79JaMKbjR6SUSg:i9ZZi85-G8eD7wsC;";
		$headers[] = "X-Same-Domain: 1";
		$headers[] = "Origin: https://accounts.google.com";
		$headers[] = "Accept-Encoding: gzip, deflate, br";
		$headers[] = "Accept-Language: en-US,en;q=0.9,ar;q=0.8";
		$headers[] = "Google-Accounts-Xsrf: 1";
		$headers[] = "X-Chrome-Connected: mode=0,enable_account_consistency=false";
		$headers[] = "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36";
		$headers[] = "Content-Type: application/x-www-form-urlencoded";
		$headers[] = "Accept: */*";
		$headers[] = "Authority: accounts.google.com";
		$headers[] = "Dnt: 1";
		curl_setopt($this->ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($this->ch);
		$result = str_replace(")]}'", "", $result);
		return json_decode($result, true) [0][0][2];
		}

	private
	function Glogin($G_identifier, $password)
		{
		curl_setopt($this->ch, CURLOPT_URL, "https://accounts.google.com/_/signin/sl/challenge?hl=en&_reqid=253136&rt=j");
		curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($this->ch, CURLOPT_POSTFIELDS, "continue=https%3A%2F%2Fwww.google.com%2F&hl=en&f.req=%5B%22$G_identifier%22%2Cnull%2C1%2Cnull%2C%5B1%2Cnull%2Cnull%2Cnull%2C%5B%22$password%22%2Cnull%2Ctrue%5D%5D%2C%5Bnull%2Cnull%2C%5B2%2C1%2Cnull%2C1%2C%22https%3A%2F%2Faccounts.google.com%2FAddSession%3Fhl%3Den%26continue%3Dhttps%253A%252F%252Fwww.google.com%252F%22%2Cnull%2C%5B%5D%2C4%2C%5B%5D%2C%22GlifWebSignIn%22%5D%2C1%2C%5Bnull%2Cnull%2C%5B%5D%5D%2Cnull%2Cnull%2Cnull%2Ctrue%5D%5D&bgRequest=%5B%22identifier%22%2C%22%22%5D&bghash=&at=&azt=&cookiesDisabled=false&deviceinfo=%5Bnull%2Cnull%2Cnull%2C%5B%5D%2Cnull%2C%22EG%22%2Cnull%2Cnull%2C%5B%5D%2C%22GlifWebSignIn%22%2Cnull%2C%5Bnull%2Cnull%2C%5B%5D%5D%5D&gmscoreversion=undefined&checkConnection=youtube%3A1468%3A1&checkedDomains=youtube&pstMsg=1&");
		curl_setopt($this->ch, CURLOPT_POST, 1);
		curl_setopt($this->ch, CURLOPT_ENCODING, 'gzip, deflate');
		$headers = array();
		$headers[] = "Cookie: CONSENT=YES+EG.en-GB+20161120-18-0;";
		$headers[] = "X-Same-Domain: 1";
		$headers[] = "Origin: https://accounts.google.com";
		$headers[] = "Accept-Encoding: gzip, deflate, br";
		$headers[] = "Accept-Language: en-US,en;q=0.9,ar;q=0.8";
		$headers[] = "Google-Accounts-Xsrf: 1";
		$headers[] = "X-Chrome-Connected: mode=0,enable_account_consistency=false";
		$headers[] = "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36";
		$headers[] = "Content-Type: application/x-www-form-urlencoded";
		$headers[] = "Accept: */*";
		$headers[] = "Authority: accounts.google.com";
		$headers[] = "Dnt: 1";
		curl_setopt($this->ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($this->ch);
		if (strpos($result, 'CheckCookie') == false)
			{
			return "STOP_CODE";
			}

		return $result;
		}

	private
	function YTlogin()
		{
		curl_setopt($this->ch, CURLOPT_URL, "https://accounts.google.com/ServiceLogin?passive=true&continue=https%3A%2F%2Fwww.youtube.com%2Fsignin%3Fapp%3Ddesktop%26next%3D%252F%26hl%3Den%26action_handle_signin%3Dtrue&hl=en&uilel=3&service=youtube");
		curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($this->ch, CURLOPT_ENCODING, 'gzip, deflate');
		curl_setopt($this->ch, CURLOPT_FOLLOWLOCATION, true);
		$headers = array();
		$headers[] = "X-Same-Domain: 1";
		$headers[] = "Origin: https://accounts.google.com";
		$headers[] = "Accept-Encoding: gzip, deflate, br";
		$headers[] = "Accept-Language: en-US,en;q=0.9,ar;q=0.8";
		$headers[] = "Google-Accounts-Xsrf: 1";
		$headers[] = "X-Chrome-Connected: mode=0,enable_account_consistency=false";
		$headers[] = "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36";
		$headers[] = "Content-Type: application/x-www-form-urlencoded";
		$headers[] = "Accept: */*";
		$headers[] = "Authority: accounts.google.com";
		$headers[] = "Dnt: 1";
		curl_setopt($this->ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($this->ch);
		}

	function Like($VIDEO_ID)
		{
		curl_setopt($this->ch, CURLOPT_URL, "https://www.youtube.com/watch?v=$VIDEO_ID");
		curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, 1);
		$headers = array();
		$headers[] = "Authority: www.youtube.com";
		$headers[] = "Upgrade-Insecure-Requests: 1";
		$headers[] = "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36";
		$headers[] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8";
		$headers[] = "Dnt: 1";
		$headers[] = "Accept-Encoding: html";
		$headers[] = "Accept-Language: en-US,en;q=0.9,ar;q=0.8";
		curl_setopt($this->ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($this->ch);
		preg_match("/XSRF_TOKEN\W*(.*)=/", $result, $matches, PREG_OFFSET_CAPTURE);
		preg_match('/XSRF_TOKEN":"(.*?)"/', $result, $matches, PREG_OFFSET_CAPTURE);
		$XSRF_TOKEN = str_replace('XSRF_TOKEN":"', "", $matches[0][0]);
		$XSRF_TOKEN = str_replace('"', "", $XSRF_TOKEN);
		$XSRF_TOKEN = urlencode($XSRF_TOKEN);
		curl_setopt($this->ch, CURLOPT_URL, "https://www.youtube.com/service_ajax?name=likeEndpoint");
		curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($this->ch, CURLOPT_POSTFIELDS, "sej=%7B%22clickTrackingParams%22%3A%22%22%2C%22commandMetadata%22%3A%7B%22webCommandMetadata%22%3A%7B%22url%22%3A%22%2Fservice_ajax%22%2C%22sendPost%22%3Atrue%7D%7D%2C%22likeEndpoint%22%3A%7B%22status%22%3A%22LIKE%22%2C%22target%22%3A%7B%22videoId%22%3A%22$VIDEO_ID%22%7D%7D%7D&csn=&session_token=$XSRF_TOKEN");
		curl_setopt($this->ch, CURLOPT_POST, 1);
		$headers = array();
		$headers[] = "Origin: https://www.youtube.com";
		$headers[] = "Accept-Encoding:html";
		$headers[] = "Accept-Language: en-US,en;q=0.9,ar;q=0.8";
		$headers[] = "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36";
		$headers[] = "Content-Type: application/x-www-form-urlencoded";
		$headers[] = "Accept: */*";
		$headers[] = "Authority: www.youtube.com";
		$headers[] = "Dnt: 1";
		curl_setopt($this->ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($this->ch);
		return $result;
		}

	function Subscribe($CHANNEL_ID)
		{
		curl_setopt($this->ch, CURLOPT_URL, "https://www.youtube.com/channel/$CHANNEL_ID");
		curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, 1);
		$headers = array();
		$headers[] = "Authority: www.youtube.com";
		$headers[] = "Upgrade-Insecure-Requests: 1";
		$headers[] = "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36";
		$headers[] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8";
		$headers[] = "Dnt: 1";
		$headers[] = "Accept-Encoding: html";
		$headers[] = "Accept-Language: en-US,en;q=0.9,ar;q=0.8";
		curl_setopt($this->ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($this->ch);
		preg_match("/XSRF_TOKEN\W*(.*)=/", $result, $matches, PREG_OFFSET_CAPTURE);
		preg_match('/XSRF_TOKEN":"(.*?)"/', $result, $matches, PREG_OFFSET_CAPTURE);
		$XSRF_TOKEN = str_replace('XSRF_TOKEN":"', "", $matches[0][0]);
		$XSRF_TOKEN = str_replace('"', "", $XSRF_TOKEN);
		$XSRF_TOKEN = urlencode($XSRF_TOKEN);
		curl_setopt($this->ch, CURLOPT_URL, "https://www.youtube.com/service_ajax?name=subscribeEndpoint");
		curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($this->ch, CURLOPT_POSTFIELDS, "sej=%7B%22clickTrackingParams%22%3A%22%22%2C%22commandMetadata%22%3A%7B%22webCommandMetadata%22%3A%7B%22url%22%3A%22%2Fservice_ajax%22%2C%22sendPost%22%3Atrue%7D%7D%2C%22subscribeEndpoint%22%3A%7B%22channelIds%22%3A%5B%22$CHANNEL_ID%22%5D%2C%22params%22%3A%22EgIIAg%253D%253D%22%7D%7D&csn=&session_token=$XSRF_TOKEN");
		curl_setopt($this->ch, CURLOPT_POST, 1);
		$headers = array();
		$headers[] = "Origin: https://www.youtube.com";
		$headers[] = "Accept-Encoding:html";
		$headers[] = "Accept-Language: en-US,en;q=0.9,ar;q=0.8";
		$headers[] = "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36";
		$headers[] = "Content-Type: application/x-www-form-urlencoded";
		$headers[] = "Accept: */*";
		$headers[] = "Authority: www.youtube.com";
		$headers[] = "Dnt: 1";
		curl_setopt($this->ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($this->ch);
		return $result;
		}

	function clean()
		{
		curl_close($this->ch);
		unlink($this->cookies);
		}
	}

function YouTubeProductionAPI($email, $password, $action, $id)
	{
	if (!empty($action) and !empty($email) and !empty($password) and !empty($id))
		{
		$api = new YouTubeAPI($email, $password);
		if (strtolower($action) == "subscribe")
			{
			$id = str_replace("https://www.youtube.com/channel/", "", $id);
			if ($api->state() == "STOP_CODE")
				{
				echo "NO_SESSION";
				}
			  else
				{
				$s = $api->Subscribe($id);

				// if (stripos($s, 'invalid') !== false) {
				//    for ($x = 0; $x <= 1; $x++) {
				//        $s = $api->Subscribe($id);
				//    }
				// }

				echo $s;
				}
			}

		if (strtolower($action) == "like")
			{
			$id = str_replace("https://www.youtube.com/watch?v=", "", $id);
			if ($api->state() == "STOP_CODE")
				{
				echo "NO_SESSION";
				}
			  else
				{
				$s = $api->Like($id);

				// if (stripos($s, 'invalid') !== false) {
				//    for ($x = 0; $x <= 1; $x++) {
				//        $s = $api->Like($id);
				//    }
				// }

				echo $s;
				}
			}

		$api->clean();
		}
	}

?>
