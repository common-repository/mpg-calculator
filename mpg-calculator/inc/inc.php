<?php


add_action('wp_enqueue_scripts','mpgc_init');
function mpgc_init() {

    wp_enqueue_style( 'mpgc-style', plugins_url( '/css/mpgc-style.css', __FILE__ ) );
    wp_enqueue_script( 'mpgc-functions', plugins_url( '/js/mpgc-functions.js', __FILE__ ), array( 'jquery' ));
}

function mpg_calculator( $atts ) {

    $eot = '';
    $eot .= '<div class="mpg-box">';
    $eot .= '<p>Distance (Miles):<input t id="mpg-distance" class="mpg-field" type="number" name="distance"  min="150" max="1000000" ></p>';
    $eot .= '<p>Fuel Used (Litres):<input id="mpg-fuel" class="mpg-field" type="number" name="mpg"  min="10" max="10000000" step="1" ></p>';
    $eot .= '<p>Price per litre in pence (£):<input id="mpg-costper" class="mpg-field" type="number" min="1.49" max="10" step="0.01" ></p>';
    $eot .= '<input id="mpg-calculate" type="button" name="button" value="Calculate" disabled="disabled">';
    $eot .= '<h3 id="mpg-consumption"></h3>';
    $eot .= '</div>';

    return $eot;
    
}
add_shortcode('mpg_calculator', 'mpg_calculator');
// Use: [mpg_calculator]

function fuel_calculator( $atts ) {

    $eot = '';
    $eot .= '<div class="fuel-box">';
    $eot .= '<p>Distance (Miles):<input t id="fuel-miles" class="fuel-field" type="number" name="miles"></p>';
    $eot .= '<p>MPG :<input id="fuel-fuel" class="fuel-field" type="number" name="fuel"></p>';
    $eot .= '<p>Fuel Price (pence/Litre): <input id="fuel-cost" class="fuel-field" type="number" ></p>';
    $eot .= '<input id="fuel-calculate" type="button" name="button" value="Calculate" disabled="disabled">';
    $eot .= '<h3 id="fuel-consumption"></h3>';
    $eot .= '</div>';

    return $eot;
   
}
add_shortcode('fuel_calculator', 'fuel_calculator');
// Use: [fuel_calculator]
