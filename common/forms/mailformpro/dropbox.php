<?php
ini_set("max_execution_time",0);
$tmpinclude = "./data/temp/" . $_GET['key'] . ".php";
if(file_exists($tmpinclude)){
	include $tmpinclude;
}
error_reporting(E_ALL);
require_once("librarys/attachedfiles/DropboxClient.php");

// you have to create an app at https://www.dropbox.com/developers/apps and enter details below:
$dropbox = new DropboxClient(array(
	'app_key' => $AppKey, 
	'app_secret' => $SecretKey,
	'app_full_access' => false,
),'en');

handle_dropbox_auth($dropbox); // see below

// File Upload
for($i=0;$i<count($UploadFiles);$i++){
	if(file_exists($UploadFiles[$i])){
		$meta = $dropbox->UploadFile($UploadFiles[$i], $UploadFileNames[$i]);
		if($file_clear){
			unlink($UploadFiles[$i]);
		}
	}
}
unlink($tmpinclude);
header("Location: $thanks_url");

// ================================================================================
// store_token, load_token, delete_token are SAMPLE functions! please replace with your own!
function store_token($token, $name)
{
	file_put_contents("data/tokens/$name.token", serialize($token));
}

function load_token($name)
{
	if(!file_exists("data/tokens/$name.token")) return null;
	return @unserialize(@file_get_contents("data/tokens/$name.token"));
}

function delete_token($name)
{
	@unlink("data/tokens/$name.token");
}
// ================================================================================

function handle_dropbox_auth($dropbox)
{
	// first try to load existing access token
	$access_token = load_token("access");
	if(!empty($access_token)) {
		$dropbox->SetAccessToken($access_token);
	}
	elseif(!empty($_GET['auth_callback'])) // are we coming from dropbox's auth page?
	{
		// then load our previosly created request token
		$request_token = load_token($_GET['oauth_token']);
		if(empty($request_token)) die('Request token not found!');
		
		// get & store access token, the request token is not needed anymore
		$access_token = $dropbox->GetAccessToken($request_token);
		store_token($access_token, "access");
		delete_token($_GET['oauth_token']);
	}

	// checks if access token is required
	if(!$dropbox->IsAuthorized())
	{
		// redirect user to dropbox auth page
		$return_url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']."?auth_callback=1&key=" . $_GET['key'];
		$auth_url = $dropbox->BuildAuthorizeUrl($return_url);
		$request_token = $dropbox->GetRequestToken();
		store_token($request_token, $request_token['t']);
		die("Authentication required. <a href='$auth_url'>Click here.</a>");
		//header("Location: $auth_url");
	}
}