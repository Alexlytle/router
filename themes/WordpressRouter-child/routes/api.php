<?php

// WP_Api(request ,namespace, route, callback function)
//http://localhost/{your_site_name}/wp-json/namespace/v1/route

new WP_Api('GET','namespace/v1','route',function(){
    return 'hello worldss';
});


new WP_Api('GET','names/v1','test',function(){
    return 'hello dsf';
});


new WP_Api('POST','routerAddToCart/v1','cart',function($data){

$my_post = array(
    'post_title'    => $data['test'],
    'post_content'  => 'test',
    'post_status'   => 'publish',
  
  );
   return wp_insert_post($my_post);
   
});