<form class="form-inline my-2 my-lg-0" action="<?php esc_url(home_url('/')) ?>">
    <input class="form-control mr-sm-2" type="search" name="s" placeholder="recherche" aria-label="Search" value="<?php echo (get_search_query()) ?>">
    <button class="btn btn-dark my-2 my-sm-0" type="submit">Rechercher</button>
</form>