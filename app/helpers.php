<?php
use App\Category;

function addParentCategories($categories) {
	$results = array();
	$categories = Category::whereIn('id', $categories)->get();
	
    foreach($categories as $category) {
    	$results[] = $category->id;
    	$parent_id = $category->parent_id;
        if (!is_null($parent_id))  {
            
            if (!in_array($parent_id, $results)) {
                $results[] = $parent_id; 
            }
        }
    }
	return $results;
}

?>