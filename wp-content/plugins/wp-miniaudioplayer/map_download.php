<?php
/**
 * Download file.
 */
$file_name = $_GET["filename"];
$file_url = $_GET["fileurl"];
$filename = basename ($file_url) ;
$file_extension = strtolower (substr (strrchr ($filename, '.'), 1)) ;

function getFileSize($url) {
    if (substr($url,0,4)=='http') {
        $x = array_change_key_case(get_headers($url, 1),CASE_LOWER);
        if ( strcasecmp($x[0], 'HTTP/1.1 200 OK') != 0 ) { $x = $x['content-length'][1]; }
        else { $x = $x['content-length']; }
    }
    else { $x = @filesize($url); }
    return $x;
}

$filesize = getFileSize($file_url);
//$filesize = filesize($file_url);

//This will set the Content-Type to the appropriate setting for the file
switch ($file_extension)
{
    case 'kmz':
        $content_type = 'application/vnd.google-earth.kmz' ;
        break ;
    case 'kml':
        $content_type = 'application/vnd.google-earth.kml+xml' ;
        break ;
    case 'pdf':
        $content_type = 'application/pdf' ;
        break ;
    case 'exe':
        $content_type = 'application/octet-stream' ;
        break ;
    case 'zip':
        $content_type = 'application/zip' ;
        break ;
    case 'doc':
        $content_type = 'application/msword' ;
        break ;
    case 'xls':
        $content_type = 'application/vnd.ms-excel' ;
        break ;
    case 'ppt':
        $content_type = 'application/vnd.ms-powerpoint' ;
        break ;
    case 'gif':
        $content_type = 'image/gif' ;
        break ;
    case 'png':
        $content_type = 'image/png' ;
        break ;
    case 'jpeg':
    case 'jpg':
        $content_type = 'image/jpg' ;
        break ;
    case 'mp3':
        $content_type = 'audio/mpeg' ;
        break ;
    case 'mp4a':
        $content_type = 'audio/mp4' ;
        break ;
    case 'wav':
        $content_type = 'audio/x-wav' ;
        break ;
    case 'mpeg':
    case 'mpg':
    case 'mpe':
        $content_type = 'video/mpeg' ;
        break ;
    case 'mov':
        $content_type = 'video/quicktime' ;
        break ;
    case 'avi':
        $content_type = 'video/x-msvideo' ;
        break ;

    //The following are for extensions that shouldn't be downloaded (sensitive stuff, like php files)
    case 'php':
    case 'htm':
    case 'html':
    case 'txt':
        die ('<b>Cannot be used for '. $file_extension .' files!</b>') ;
        break;
    default:
        $content_type = 'application/force-download' ;
}

//die($file_extension ."   ". $content_type ."   ". $file_name ."   ". $file_url."   ". ini_get('allow_url_fopen'));

header ('Pragma: public') ;
header ('Expires: 0') ;
header ('Cache-Control: must-revalidate, post-check=0, pre-check=0') ;
header ('Cache-Control: private') ;
header ('Content-Type: ' . $content_type);
header("Content-Description: File Transfer");
header("Content-Transfer-Encoding: Binary");
header("Content-disposition: attachment; filename=\"".$filename."\"");
header('Content-Length: '.$filesize);
header('Connection: close');

if($fp=@fopen($file_url,'rb')){
    sleep(1);
    ignore_user_abort();
    set_time_limit(0);
    while(!feof($fp))
    {
        echo (@fread($fp, 1024*8));
        ob_flush();
        flush();
    }
    fclose ($fp);

}else{
    $ch = curl_init();
    curl_setopt ($ch, CURLOPT_URL, $file_url);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
    $contents = curl_exec($ch);
    curl_close($ch);
// display file
    echo $contents;
}

clearstatcache();

exit;
