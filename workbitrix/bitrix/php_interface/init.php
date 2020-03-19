<?php
define("DEFAULT_TEMPLATE_PATH", '/local/templates/my_template');
define("PRODUCT_TEMPLATE_PATH", '/local/templates/template-without-sidebar');
function debug($data){
	echo '<pre>' . print_r($data,1) . '</pre>';
}