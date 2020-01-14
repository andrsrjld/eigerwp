<?php
if (in_category('8')) {include (TEMPLATEPATH . '/page-templates/news-detail.php');
}
else if (in_category('9')) {include (TEMPLATEPATH . '/page-templates/csr-detail.php');
}
else if (in_category('25')) {include (TEMPLATEPATH . '/page-templates/about-detail.php');
}
else {include (TEMPLATEPATH . '/page-templates/detail-career.php');
}
?>