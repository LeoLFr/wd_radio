<form action="<?php echo home_url("/") ?>" role="search" id="main-search-form" autocomplete="off" class="bg-beige py-3 px-1 flex rounded-lg items-center w-70 h-12">
    <div class="flex gap-0.5 bg-black rounded-md h-10 w-10 items-center justify-center">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/search.svg" class="h-6 w-6 object-cover" alt="Rechercher">
    </div>
    <input class="opacity-50 ml-3 font-semibold" type="search" name="s" placeholder="Rechercher..." value="<?php echo get_search_query(); ?>">
</form>