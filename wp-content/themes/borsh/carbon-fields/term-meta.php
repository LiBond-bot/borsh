<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'term_meta', 'Доп.поля' )
    ->where( 'term_taxonomy', '=', 'addon_cat' )
    ->add_fields( array(
        Field::make( 'text', 'icon', 'Иконка' ),
    ) );