<!DOCTYPE html>
<html>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <?php wp_head(); ?>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114926448-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-114926448-1');
        </script>
    </head>
    <body <?php body_class(); ?>>

        <header id="header" class="open">
            <div class="search-container">
               
                <div class="container">
                    <div class="nav-middle container-menu-superior">

                        <button id="menu-button" class="visible-xs">
                            <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg" class="svg-hamburger-menu">
                                <path d="M1 12.5215C0.716667 12.5215 0.479167 12.4257 0.2875 12.234C0.0958333 12.0423 0 11.8048 0 11.5215C0 11.2382 0.0958333 11.0007 0.2875 10.809C0.479167 10.6173 0.716667 10.5215 1 10.5215H17C17.2833 10.5215 17.5208 10.6173 17.7125 10.809C17.9042 11.0007 18 11.2382 18 11.5215C18 11.8048 17.9042 12.0423 17.7125 12.234C17.5208 12.4257 17.2833 12.5215 17 12.5215H1ZM1 7.52148C0.716667 7.52148 0.479167 7.42565 0.2875 7.23398C0.0958333 7.04232 0 6.80482 0 6.52148C0 6.23815 0.0958333 6.00065 0.2875 5.80898C0.479167 5.61732 0.716667 5.52148 1 5.52148H17C17.2833 5.52148 17.5208 5.61732 17.7125 5.80898C17.9042 6.00065 18 6.23815 18 6.52148C18 6.80482 17.9042 7.04232 17.7125 7.23398C17.5208 7.42565 17.2833 7.52148 17 7.52148H1ZM1 2.52148C0.716667 2.52148 0.479167 2.42565 0.2875 2.23398C0.0958333 2.04232 0 1.80482 0 1.52148C0 1.23815 0.0958333 1.00065 0.2875 0.808984C0.479167 0.617318 0.716667 0.521484 1 0.521484H17C17.2833 0.521484 17.5208 0.617318 17.7125 0.808984C17.9042 1.00065 18 1.23815 18 1.52148C18 1.80482 17.9042 2.04232 17.7125 2.23398C17.5208 2.42565 17.2833 2.52148 17 2.52148H1Z" fill="white"/>
                            </svg>
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="svg-close-menu">
                                    <path d="M7.00273 8.074L2.10273 12.974C1.9194 13.1573 1.68607 13.249 1.40273 13.249C1.1194 13.249 0.886068 13.1573 0.702734 12.974C0.519401 12.7907 0.427734 12.5573 0.427734 12.274C0.427734 11.9907 0.519401 11.7573 0.702734 11.574L5.60273 6.674L0.702734 1.774C0.519401 1.59067 0.427734 1.35733 0.427734 1.074C0.427734 0.790666 0.519401 0.557332 0.702734 0.373999C0.886068 0.190666 1.1194 0.098999 1.40273 0.098999C1.68607 0.098999 1.9194 0.190666 2.10273 0.373999L7.00273 5.274L11.9027 0.373999C12.0861 0.190666 12.3194 0.098999 12.6027 0.098999C12.8861 0.098999 13.1194 0.190666 13.3027 0.373999C13.4861 0.557332 13.5777 0.790666 13.5777 1.074C13.5777 1.35733 13.4861 1.59067 13.3027 1.774L8.40273 6.674L13.3027 11.574C13.4861 11.7573 13.5777 11.9907 13.5777 12.274C13.5777 12.5573 13.4861 12.7907 13.3027 12.974C13.1194 13.1573 12.8861 13.249 12.6027 13.249C12.3194 13.249 12.0861 13.1573 11.9027 12.974L7.00273 8.074Z" fill="white"/>
                                </svg>
                        </button>

                        <div class="box-logo-superior">

                            <a href="<?= bloginfo('url') ?>" target="_self" class="logo">
                                <svg width="43" height="32" viewBox="0 0 43 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M25.0037 13.3748C25.2692 13.9555 25.4044 14.6133 25.4044 15.3434C25.4044 16.3408 25.1708 17.2862 24.7099 18.1541C24.2466 19.0253 23.5268 19.788 22.5704 20.4204C21.6291 21.0426 20.4345 21.5387 19.0193 21.8955C18.6193 21.9962 18.1973 22.0824 17.7557 22.155L13.8193 31.9921L20.8361 32L23.2383 25.9956L25.2406 20.9921L26.1884 18.6213L40.4512 18.6348L42.5478 13.3931L25.0041 13.3755L25.0037 13.3748Z" fill="white"/>
                                    <path d="M24.2617 26.021L35.7337 26.0326L37.7466 21.0035L26.275 20.9923L24.2617 26.021Z" fill="white"/>
                                    <path d="M26.3198 3.2607C26.033 2.62009 25.5517 2.05848 24.876 1.57513C24.1998 1.09214 23.306 0.708751 22.1947 0.425325C21.0826 0.1419 19.7136 0 18.0864 0H8.08233L0.180664 22.0536H14.0638C15.9203 22.0536 17.5361 21.8803 18.9112 21.534C20.2864 21.1873 21.4262 20.7148 22.332 20.1161C23.2369 19.5174 23.9073 18.8087 24.3432 17.9895C24.7783 17.1703 24.9965 16.2882 24.9965 15.3432C24.9965 14.2091 24.6582 13.2794 23.9825 12.555C23.3064 11.8305 22.4296 11.2898 21.3527 10.9323C23.0486 10.5541 24.3718 9.87197 25.3233 8.88428C26.274 7.89735 26.75 6.7 26.75 5.2926C26.75 4.57899 26.6066 3.90131 26.3202 3.26033L26.3198 3.2607ZM17.3126 16.4664C16.6593 16.8936 15.7483 17.1074 14.5794 17.1074L8.90065 17.2335L10.3747 13.075H15.3704C17.3179 13.075 18.2927 13.6486 18.2927 14.7947C18.2927 15.4824 17.9663 16.0396 17.313 16.4668L17.3126 16.4664ZM19.2548 8.19612C18.6359 8.59187 17.7191 8.78993 16.5045 8.78993L11.3756 8.91611L12.7986 4.94665H17.2607C18.2919 4.94665 19.0367 5.08743 19.4954 5.36861C19.9534 5.65016 20.183 6.05078 20.183 6.57158C20.183 7.25936 19.8738 7.80075 19.2548 8.1965V8.19612Z" fill="white"/>
                                </svg>
                            </a>
                        </div>

                        <?php if($redes_sociais = obter_redes_sociais()){?>
                            <div class="box-redesociais-superior">

                                <?php if(isset($redes_sociais['twitter']) && strlen($redes_sociais['twitter'])){ ?>
                                    <a href="<?= $redes_sociais['twitter']?>" target="_blank">
                                        <svg width="19" height="16" viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.5136 0.0501099H17.2125L11.2866 6.79734L18.2099 15.9501H12.7769L8.5232 10.388L3.65346 15.9501H0.954569L7.23243 8.7335L0.602539 0.0501099H6.17047L10.0135 5.13107L14.5136 0.0501099ZM13.569 14.366H15.0651L5.38427 1.57557H3.77667L13.569 14.366Z" fill="white"/>
                                        </svg>
                                    </a>
                                <?php } ?>
                                 
                                <?php if(isset($redes_sociais['instagram']) && strlen($redes_sociais['instagram'])){ ?>
                                    <a href="<?= $redes_sociais['instagram']?>" target="_blank">
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.17 7.10212e-05H5.17003C4.5177 -0.0034291 3.87114 0.122476 3.26779 0.370499C2.66443 0.618523 2.11626 0.983741 1.65498 1.44502C1.1937 1.90629 0.828484 2.45447 0.58046 3.05783C0.332437 3.66118 0.206532 4.30773 0.210032 4.96007V10.9601C0.206532 11.6124 0.332437 12.259 0.58046 12.8623C0.828484 13.4657 1.1937 14.0138 1.65498 14.4751C2.11626 14.9364 2.66443 15.3016 3.26779 15.5496C3.87114 15.7977 4.5177 15.9236 5.17003 15.9201H11.17C11.8224 15.9236 12.4689 15.7977 13.0723 15.5496C13.6756 15.3016 14.2238 14.9364 14.6851 14.4751C15.1464 14.0138 15.5116 13.4657 15.7596 12.8623C16.0076 12.259 16.1335 11.6124 16.13 10.9601V4.96007C16.1235 3.64661 15.5988 2.38879 14.6701 1.46002C13.7413 0.531253 12.4835 0.00658957 11.17 7.10212e-05ZM14.61 11.0401C14.6019 11.9711 14.2284 12.8617 13.57 13.5201C12.9117 14.1785 12.0211 14.5519 11.09 14.5601H5.09003C4.15899 14.5519 3.26839 14.1785 2.61002 13.5201C1.95165 12.8617 1.57818 11.9711 1.57003 11.0401V4.96007C1.57818 4.02903 1.95165 3.13843 2.61002 2.48006C3.26839 1.82169 4.15899 1.44822 5.09003 1.44007H11.09C12.0211 1.44822 12.9117 1.82169 13.57 2.48006C14.2284 3.13843 14.6019 4.02903 14.61 4.96007V11.0401Z" fill="white"/>
                                            <path d="M8.12988 4.0002C7.33876 4.0002 6.5654 4.23479 5.9076 4.67432C5.24981 5.11384 4.73712 5.73856 4.43437 6.46946C4.13162 7.20037 4.0524 8.00463 4.20674 8.78056C4.36108 9.55648 4.74205 10.2692 5.30146 10.8286C5.86087 11.388 6.5736 11.769 7.34952 11.9233C8.12545 12.0777 8.92971 11.9985 9.66062 11.6957C10.3915 11.393 11.0162 10.8803 11.4558 10.2225C11.8953 9.56468 12.1299 8.79132 12.1299 8.00019C12.1351 7.47345 12.0352 6.95095 11.8361 6.46328C11.6369 5.97562 11.3425 5.53257 10.97 5.16009C10.5975 4.78761 10.1545 4.49317 9.66679 4.294C9.17913 4.09484 8.65663 3.99496 8.12988 4.0002ZM8.12988 10.4802C7.63939 10.4802 7.1599 10.3347 6.75207 10.0622C6.34424 9.78973 6.02637 9.40241 5.83866 8.94925C5.65096 8.49609 5.60184 7.99744 5.69754 7.51637C5.79323 7.0353 6.02942 6.5934 6.37626 6.24657C6.72309 5.89974 7.16499 5.66354 7.64606 5.56785C8.12713 5.47216 8.62578 5.52127 9.07894 5.70897C9.5321 5.89668 9.91942 6.21455 10.1919 6.62238C10.4644 7.03021 10.6099 7.5097 10.6099 8.00019C10.6065 8.65689 10.3442 9.28574 9.87979 9.7501C9.41543 10.2145 8.78658 10.4768 8.12988 10.4802Z" fill="white"/>
                                            <path d="M12.4496 4.23972C12.5604 4.23972 12.6687 4.20688 12.7608 4.14534C12.8529 4.08381 12.9246 3.99635 12.967 3.89402C13.0094 3.7917 13.0205 3.6791 12.9989 3.57047C12.9773 3.46184 12.9239 3.36206 12.8456 3.28374C12.7673 3.20542 12.6675 3.15209 12.5589 3.13048C12.4503 3.10887 12.3377 3.11996 12.2353 3.16235C12.133 3.20473 12.0456 3.27651 11.984 3.3686C11.9225 3.46069 11.8896 3.56896 11.8896 3.67972C11.8896 3.82824 11.9486 3.97068 12.0537 4.0757C12.1587 4.18072 12.3011 4.23972 12.4496 4.23972Z" fill="white"/>
                                        </svg>
                                    </a>
                                <?php }?>

                                <?php if(isset($redes_sociais['facebook']) && strlen($redes_sociais['facebook'])){ ?>
                                    <a href="<?= $redes_sociais['facebook']?>" target="_blank">
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.13056 0C6.11235 0.00124531 4.16909 0.764714 2.68977 2.13757C1.21045 3.51043 0.304238 5.39138 0.152543 7.40387C0.000847638 9.41636 0.614866 11.4119 1.87168 12.991C3.12849 14.5701 4.93535 15.6162 6.93056 15.92V10.32H4.85056V8H6.85056V6.24C6.80737 5.83711 6.85358 5.42966 6.9859 5.04667C7.11821 4.66369 7.33337 4.3146 7.61604 4.02429C7.89871 3.73398 8.24194 3.50959 8.62126 3.36711C9.00058 3.22463 9.40666 3.16757 9.81055 3.2C10.4005 3.20722 10.989 3.26072 11.5706 3.36V5.28H10.6106C10.4447 5.26113 10.2768 5.27854 10.1183 5.33103C9.95991 5.38351 9.81479 5.46982 9.69303 5.58397C9.57127 5.69812 9.47579 5.83738 9.4132 5.9921C9.35061 6.14682 9.32241 6.3133 9.33055 6.48V8H11.4906L11.1706 10.32H9.33055V15.92C11.3258 15.6162 13.1326 14.5701 14.3894 12.991C15.6462 11.4119 16.2603 9.41636 16.1086 7.40387C15.9569 5.39138 15.0507 3.51043 13.5713 2.13757C12.092 0.764714 10.1488 0.00124531 8.13056 0Z" fill="white"/>
                                        </svg>
                                    </a>
                                <?php } ?>

                                <?php if(isset($redes_sociais['youtube']) && strlen($redes_sociais['youtube'])){ ?>
                                    <a href="<?= $redes_sociais['youtube']?>" target="_blank">
                                        <svg width="17" height="13" viewBox="0 0 17 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.1339 6.54855C16.1596 5.1247 16.0254 3.70248 15.7339 2.30855C15.629 1.94772 15.4347 1.61922 15.169 1.35351C14.9033 1.0878 14.5748 0.893474 14.2139 0.78855C12.8539 0.38855 8.13394 0.38855 8.13394 0.38855C8.13394 0.38855 3.41394 0.38855 2.05394 0.78855C1.69311 0.893474 1.36463 1.0878 1.09891 1.35351C0.833201 1.61922 0.638872 1.94772 0.533948 2.30855C0.278167 3.70764 0.144332 5.1263 0.133948 6.54855C0.108299 7.97239 0.242471 9.39462 0.533948 10.7885C0.638872 11.1494 0.833201 11.4779 1.09891 11.7436C1.36463 12.0093 1.69311 12.2036 2.05394 12.3085C3.41394 12.7085 8.13394 12.7085 8.13394 12.7085C8.13394 12.7085 12.8539 12.7085 14.2139 12.3085C14.5748 12.2036 14.9033 12.0093 15.169 11.7436C15.4347 11.4779 15.629 11.1494 15.7339 10.7885C16.0254 9.39462 16.1596 7.97239 16.1339 6.54855ZM6.37395 9.10855V3.98855L10.9339 6.54855L6.37395 9.10855Z" fill="white"/>
                                        </svg>
                                    </a>
                                <?php } ?>

                                <?php if(isset($redes_sociais['tiktok']) && strlen($redes_sociais['tiktok'])){ ?>
                                    <a href="<?= $redes_sociais['tiktok']?>" target="_blank">
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.13769 0C6.55544 0 5.00872 0.469192 3.69313 1.34824C2.37753 2.22729 1.35216 3.47672 0.746656 4.93853C0.141155 6.40034 -0.0172627 8.00887 0.291419 9.56072C0.600101 11.1126 1.36202 12.538 2.48083 13.6569C3.59965 14.7757 5.02513 15.5376 6.57698 15.8463C8.12882 16.155 9.73735 15.9965 11.1992 15.391C12.661 14.7855 13.9104 13.7602 14.7894 12.4446C15.6685 11.129 16.1377 9.58225 16.1377 8C16.1316 5.88015 15.2868 3.84887 13.7878 2.34991C12.2888 0.850941 10.2575 0.00612097 8.13769 0ZM12.9377 6.96H12.6977C12.2017 6.96894 11.7119 6.84816 11.2769 6.60962C10.8419 6.37108 10.4768 6.02305 10.2177 5.6V10.24C10.211 11.1503 9.84641 12.0214 9.20273 12.665C8.55905 13.3087 7.68797 13.6733 6.7777 13.68C5.85932 13.6553 4.98666 13.274 4.34454 12.6169C3.70243 11.9599 3.34131 11.0787 3.33769 10.16C3.33429 9.7073 3.42094 9.25844 3.59261 8.83955C3.76428 8.42065 4.01754 8.04007 4.33766 7.71996C4.65777 7.39984 5.03834 7.14658 5.45724 6.97491C5.87614 6.80324 6.325 6.71659 6.7777 6.72H7.0177V8.4H6.7777C6.43695 8.41587 6.10815 8.53043 5.83131 8.72973C5.55447 8.92903 5.3415 9.20449 5.21833 9.5226C5.09516 9.8407 5.0671 10.1877 5.13754 10.5215C5.20797 10.8553 5.37389 11.1614 5.6151 11.4026C5.85631 11.6438 6.16241 11.8097 6.49618 11.8802C6.82995 11.9506 7.17698 11.9225 7.49509 11.7994C7.8132 11.6762 8.08866 11.4632 8.28796 11.1864C8.48726 10.9095 8.60182 10.5807 8.6177 10.24V2.4H10.2177C10.2818 3.0921 10.5911 3.73851 11.0899 4.2226C11.5886 4.7067 12.244 4.9966 12.9377 5.04V6.96Z" fill="white"/>
                                        </svg>
                                    </a>
                                <?php } ?>
                            </div>
                        <?php } ?>

                    </div>

                </div>

                <div class="nav-middle container-menu-inferior">
                    <div class="container">
                        <div class="hidden-xs">
                            <?php wp_nav_menu(array('theme_location' => 'meu_menu_principal', 'container' => false)); ?>
                        </div>

                    </div>
                </div>
                
            </div>

            
            <div class="menu-mobile visible-xs">
                <?php wp_nav_menu(array('theme_location' => 'meu_menu_principal', 'container' => false)); ?>
            </div> 

        </header>
        
        <script>
            jQuery("#menu-button").on('click', function () {
                jQuery(".menu-mobile").toggleClass('menu-open');
                jQuery('body').toggleClass('disable-scroll');
            })
        </script>


