//Add code to "functions.php"
function swiper_template( $params = array() ) {
    extract( shortcode_atts( array( 'file' => 'default' ), $params ));
    ob_start();
    include( STYLESHEETPATH . "/$file.php" );
    return ob_get_clean();
}
add_shortcode( 'swiper', 'swiper_template' );
