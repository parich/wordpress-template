<?php
if (in_category('Promotion')) {
    get_template_part('views/single', 'promotion');
} elseif (in_category('Featured')) {
    get_template_part('views/single', 'featured');
}
?>