<form role="search" method="get" id="searchform" class="search" action="<?php echo home_url( '/' ); ?>">
    <input type="text" name="s" id="s" class="required email"
        value="<?php if(get_search_query()) { the_search_query(); } else { echo 'Type search and hit enter'; } ?>" 
        onfocus="if (this.value == 'Type search and hit enter') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Type search and hit enter';}"  />
    <input type="submit" id="searchsubmit" value="Search" style="display:none;" />
</form>