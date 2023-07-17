<?php
    add_theme_support( 'post-thumbnails', array( 'post' ));
    add_theme_support( 'post-thumbnails', array( 'company' ));

// Set no title for post
add_action('edit_form_advanced', 'force_post_title');
function force_post_title($post)
{

    // List of post types that we want to require post titles for.
    $post_types = array(
        'post',
        'company',
        'service_post'
        // 'event', 
        // 'project' 
    );

    // If the current post is not one of the chosen post types, exit this function.
    if (!in_array($post->post_type, $post_types)) {
        return;
    }

?>
    <script type='text/javascript'>
        (function($) {
            $(document).ready(function() {
                //Require post title when adding/editing Project Summaries
                $('body').on('submit.edit-post', '#post', function() {
                    // If the title isn't set
                    if ($("#title").val().replace(/ /g, '').length === 0) {
                        // Show the alert
                        if (!$("#title-required-msj").length) {
                            $("#titlewrap")
                                .append('<div id="title-required-msj"><em>タイトルが必要です。</em></div>')
                                .css({
                                    "padding": "5px",
                                    "margin": "5px 0",
                                    "background": "#ffebe8",
                                    "border": "1px solid #c00"
                                });
                        }
                        // Hide the spinner
                        $('#major-publishing-actions .spinner').hide();
                        // The buttons get "disabled" added to them on submit. Remove that class.
                        $('#major-publishing-actions').find(':button, :submit, a.submitdelete, #post-preview').removeClass('disabled');
                        // Focus on the title field.
                        $("#title").focus();
                        return false;
                    }
                });
            });
        }(jQuery));
    </script>
<?php
}

// chuyen category tu checkbox sang range
function wpse_139269_term_radio_checklist( $args ) {
    if ( ! empty( $args['taxonomy'] ) && $args['taxonomy'] === 'category' /* <== Change to your required taxonomy */ ) {
        if ( empty( $args['walker'] ) || is_a( $args['walker'], 'Walker' ) ) { // Don't override 3rd party walkers.
            if ( ! class_exists( 'WPSE_139269_Walker_Category_Radio_Checklist' ) ) {
                /**
                 * Custom walker for switching checkbox inputs to radio.
                 *
                 * @see Walker_Category_Checklist
                 */
                class WPSE_139269_Walker_Category_Radio_Checklist extends Walker_Category_Checklist {
                    function walk( $elements, $max_depth, ...$args ) { $output = parent::walk( $elements, $max_depth, ...$args );
                        $output = str_replace(
                            array( 'type="checkbox"', "type='checkbox'" ),
                            array( 'type="radio"', "type='radio'" ),
                            $output
                        );

                        return $output;
                    }
                }
            }

            $args['walker'] = new WPSE_139269_Walker_Category_Radio_Checklist;
        }
    }

    return $args;
}

add_filter( 'wp_terms_checklist_args', 'wpse_139269_term_radio_checklist' );
add_filter('wpcf7_autop_or_not', '__return_false');
function cf7_add_custom_class($error) {
    $error=str_replace("class=\"","class=\"c-erorr ", $error);
    return $error;
}
add_filter('wpcf7_validation_error', 'cf7_add_custom_class');

add_filter('wpcf7_validate_configuration', '__return_false');
add_filter('wpcf7_autop_or_not', '__return_false');
add_filter('wpcf7_load_css', '__return_false');

