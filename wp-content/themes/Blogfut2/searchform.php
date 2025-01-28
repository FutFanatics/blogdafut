<?php 
/**
Template Name: Search Form
**/
?>

<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" accept-charset="utf-8" id="searchform" role="search">
  <div class="relative-form">
    <input type="text" placeholder="Procure por posts antigos" name="s" id="s" value="<?php the_search_query(); ?>" />
    <button type="submit" id="searchsubmit"><i class="glyphicon glyphicon-search"></i></button>
  </div>
</form>