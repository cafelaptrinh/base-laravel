<?php
if(!function_exists('cproute')){
    function cproute($route,$params=[],$status=302,$header=[]){
        return route(config('admin.name').$route,$params,$status,$header);
    }
}