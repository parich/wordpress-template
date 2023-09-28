<form action="<?php echo home_url('/'); ?>" method="get" class="form">
    <div class="form-group group-with-button">
        <input type="text" name="s" id="search" class="form-control" value="<?php the_search_query(); ?>" />
        <button type="submit" value="Search" class="btn btn-primary">Search</button>
    </div>
</form>