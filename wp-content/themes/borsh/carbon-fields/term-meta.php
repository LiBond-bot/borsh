<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'term_meta', __( 'Category Properties' ) )
    ->where( 'term_taxonomy', '=', 'service_cat' )
    ->add_fields( array(
        Field::make( 'rich_text', 'add_decp', 'дополнительное описание' ),
    ) );