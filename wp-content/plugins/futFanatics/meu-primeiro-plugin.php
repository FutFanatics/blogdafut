<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/*
Plugin Name: Produtos FutFanatics
Plugin URI:  https://www.futfanatics.com.br/
Description: Plugin para buscar produtos informando apenas o código do produto
Version:     1.0
Author:      Yuri Rodrigues
Author URI:  https://www.linkedin.com/in/yuri-rodrigues-a54b5bb8/
Domain Path: /languages
*/

//[foobar]

function wpse_related( $atts, $content = null ) {
    $a = shortcode_atts( [
        'type'   => false,
		'codigos' => '',
    ], $atts );
    $url = 'https://www.futfanatics.com.br/web_api/search/?id='.$a['codigos'];

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($curl, CURLOPT_HEADER, false);
    $data = curl_exec($curl);
    $data = json_decode($data);
    curl_close($curl);

	
	$html = '<div class="texto-antes-vitrine"><h2>Confira nossos produtos</h2></div>';
    $html .= '<div class="owl-carousel owl-theme" id="lancamento-meio">';
    foreach ($data->Products as $key => $value) {
    	$porcentagemDesconto = ($value->Product->price - $value->Product->promotional_price)*100/$value->Product->price;

    	$html .='<div class="product-item">';
    	$html .='<div class="product-discount">';
    	if ($porcentagemDesconto < 100){
    		$html .='<div class="seal">';
	    	$html .=' <i class="glyphicon glyphicon-triangle-bottom"></i>'.floor($porcentagemDesconto).'%';
	    	$html .='</div>';
    	}
    	$html .='</div>';
    	$html .='<a href="'.$value->Product->url->https.'" target="_blank">';
    	$html .='<div class="product-image">';
    	$html .='<img src="'.$value->Product->ProductImage[0]->thumbs->{'180'}->https.'">';
    	$html .='</div>';
    	$html .='<div class="product-labels">';
    	if($value->Product->release > 0){
    	   $html .='<div class="lancamento">Lançamento</div>';
        }
    	if($value->Product->hot > 0){
           $html .='<div class="oferta">Oferta</div>'; 
        }
    	
    	if($value->Product->additional_button > 0){
            $html .='<div class="personalize">Personalize</div>';
        }
    	
    	$html .='</div>';	
    	$html .='<div class="product-name">';
    	$html .='<h2>'. $value->Product->name.'</h2>';
    	$html .='</div>';
    	if($value->Product->promotional_price > 0){
			$html .='<span  class="promo">R$ '. str_replace('.',',',$value->Product->promotional_price).'</span >';
			$html .='<span class="de-preco">R$ '. str_replace('.',',',$value->Product->price).'</span >';
    	}else{
    		$html .='<p> R$ '. $value->Product->price.'</p>';
    	}
    	$html .='</a>';
    	$html .='</div>';
    }
   
   	$html .='</div>';


    return $html;
}

add_shortcode( 'produtos', 'wpse_related' );
