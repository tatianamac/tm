<?php
//Turn a category ID to a Name
function cat_id_to_name($id) {
	foreach((array)(get_categories()) as $category) {
    	if ($id == $category->cat_ID) { return $category->cat_name; break; }
	}
}

//	Pull theme options from database
function st_option($key) {
	global $settings;
	$option = get_option($settings);
	if(isset($option[$key])) return $option[$key];
	else return FALSE;
}

if ( function_exists('register_sidebars') )
	register_sidebar(array('name'=>'Right Sidebar','before_title'=>'<h4>','after_title'=>'</h4>'));
	register_sidebar(array('name'=>'Footer Left','before_title'=>'<h4>','after_title'=>'</h4>'));
	register_sidebar(array('name'=>'Footer Mid Left','before_title'=>'<h4>','after_title'=>'</h4>'));
	register_sidebar(array('name'=>'Footer Mid Right','before_title'=>'<h4>','after_title'=>'</h4>'));
	register_sidebar(array('name'=>'Footer Right','before_title'=>'<h4>','after_title'=>'</h4>'));

function the_content_limit($max_char, $more_link_text = 'Read More', $stripteaser = 0, $more_file = '') {

    $content = get_the_content($more_link_text, $stripteaser, $more_file);
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);
    $content = strip_tags($content);

   if (strlen($_GET['p']) > 0) {
      echo "<p>";
      echo $content;
      echo "&nbsp;<a href='";
      the_permalink();
      echo "'>"."Read More</a>";
      echo "</p>";
   }

   else if ((strlen($content)>$max_char) && ($espacio = strpos($content, " ", $max_char ))) {

        $content = substr($content, 0, $espacio);
        $content = $content;
        echo "<p>";
        echo $content;
        echo "...";
        echo "&nbsp;<a href='";
        the_permalink();
        echo "'>".$more_link_text."</a>";
        echo "</p>";
   }
   
   else {
      echo "<p>";
      echo $content;
      echo "&nbsp;<a href='";
      the_permalink();
      echo "'>"."Read More</a>";
      echo "</p>";

   }
}
?>