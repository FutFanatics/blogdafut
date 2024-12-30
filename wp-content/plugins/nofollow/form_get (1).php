<?php
function get_br_whois( $url, $array_fields )
{
    $options = array(
        CURLOPT_RETURNTRANSFER => true,     // return web page
        CURLOPT_HEADER         => false,    // don't return headers
        CURLOPT_FOLLOWLOCATION => true,     // follow redirects
        CURLOPT_ENCODING       => "",       // handle all encodings
        CURLOPT_USERAGENT      => "PHP Whois/Curl script", // who am i
        CURLOPT_AUTOREFERER    => true,     // set referer on redirect
        CURLOPT_CONNECTTIMEOUT => 120,      // timeout on connect
        CURLOPT_TIMEOUT        => 120,      // timeout on response
        CURLOPT_MAXREDIRS      => 10,       // stop after 10 redirects
        CURLOPT_POST           => 1,
        CURLOPT_POSTFIELDS     => http_build_query($array_fields),
        CURLOPT_SSL_VERIFYPEER => false     // Disabled SSL Cert checks
    );

    $ch      = curl_init( $url );
    curl_setopt_array( $ch, $options );
    $content = curl_exec( $ch );
    $err     = curl_errno( $ch );
    $errmsg  = curl_error( $ch );
    $header  = curl_getinfo( $ch );
    curl_close( $ch );

    $header['errno']   = $err;
    $header['errmsg']  = $errmsg;

    // the return is a webpage... stripping useless data (menu, links) and trim it...
    $trim_content = substr($content, strpos($content, '% Copyright'));
    
    return array('header' => $header, 'content' => trim(strip_tags(utf8_encode($trim_content))));
}


// and now let's get it...
print_r(
    get_br_whois('https://rdap.registro.br/domain/', array('qr' => 'g1.com.br'))
);

// OUTPUTS:
/*


?>