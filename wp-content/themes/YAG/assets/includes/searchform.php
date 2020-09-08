<!-- generates a unique ID for the input fields esc_attr makes sure string is safe for use in html element attribute -->
<?php $unique_id = esc_attr( uniqid( 'search-form')); ?>

<!-- search input action, method, name be set and search value set must be set to ‘s’ -->
<form role="search" method="get" class="search-form"
action="<?php echo esc_url( home_url( '/')); ?>">
<div class="input-group">
    <input type="search" id="<?php echo $unique_id; ?>"
    class="form-control" name="s"
    value="<?php the_search_query(); ?>"
    placeholder="<?php _e('Search', 'yag' ); ?>"
    />
    <span>
        <button type="submit" class="btn-btn-danger">
            <i class="icon-search">
                
            </i>
        </button>
   </span>
</div>

</form>