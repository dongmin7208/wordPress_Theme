<form role="search" method="get" id="searchform"
    class="searchform form-block row justify-content-center mb-4" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
        <input class="form-control col-7 mr-1" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
        <input class="btn btn-primary col-4" type="submit" id="searchsubmit"
            value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
</form>