<?php 
 
/* Constants definitions */
define("POSTS", 1);
define("FILES", 2);
define("POSTS_PER_PAGE", 15);
 
/* ------------------------------------------ */

/* Create a list for every posts */

function the_prebreeding_list($option, $limit) {
    if ($limit == null || $limit == 1) {
        $args = array('post_type' => 'prebreeding_eval', 'posts_per_page' => constant("POSTS_PER_PAGE"), 'orderby' => 'date', 'order' => 'DESC');
    } else {
        $args = array('post_type' => 'prebreeding_eval', 'posts_per_page' => -1, 'orderby' => 'date', 'order' => 'DESC');
    }

    if ($option == constant("POSTS")) {
        the_post_list($args);
    } else if ($option == constant("FILES")) {
        $args = array('post_type' => 'prebreeding_eval', 'posts_per_page' => -1, 'orderby' => 'date', 'order' => 'DESC'); //PROBLEM WITH RESOURCES
        show_resources_list($args);
    }
}

/* Create a list for every taxonomies */

function the_taxonomies_list() {
    $output = 'objects';
    $taxonomies = get_taxonomies('', $output);

    if ($taxonomies) {
        foreach ($taxonomies as $taxonomy) {
            echo '<p>' . $taxonomy->name . '</p>';
        }
    }else{
        echo '<p>No taxanomies to list</p>';
    }
}

/* Create a list for every crops in taxonomy_crops */

function the_crop_list($crop_id) {
    $args = array('hide_empty' => 0);
    $terms = get_terms('taxonomy_crops', $args);
    $count = count($terms);
    if ($count > 0) {
        echo "<ul>";
        if ($crop_id == null) {
            echo "<li class='menu_top'></li>";
            echo "<li class='selected' ><a href='" . get_home_url() . "/prebreeding/'>All</a></li>";
            foreach ($terms as $term) {
                echo "<li><a href='" . get_home_url() . "/prebreeding/?crop_id=" . $term->term_id . "'>" . ucwords($term->name) . "</a></li>";
            }
            echo "<li class='menu_bot'></li>";
        } else {
            echo "<li class='menu_top'></li>";
            echo "<li><a href='" . get_home_url() . "/prebreeding/'>All</a></li>";
            foreach ($terms as $term) {
                if ($term->term_id == $crop_id) {
                    echo "<li class='selected'><a href='" . get_home_url() . "/prebreeding/?crop_id=" . $term->term_id . "'>" . ucwords($term->name) . "</a></li>";
                } else {
                    echo "<li><a href='" . get_home_url() . "/prebreeding/?crop_id=" . $term->term_id . "'>" . ucwords($term->name) . "</a></li>";
                }
            }
            echo "<li class='menu_bot'></li>";
        }
        echo "</ul>";
    }else{
        echo "<ul>";
        echo "<li class='menu_top'></li>";
        echo "<li class='menu_bot'></li>";
        echo "</ul>";
    }
}

/* Show crop information by id */

function the_crop_by_id($crop_id) {
    if ($crop_id != null) {
        $args = array('hide_empty' => 0);
        $terms = get_terms('taxonomy_crops', $args);

        if ($terms) {
            foreach ($terms as $crop) {
                if ($crop->term_id == $crop_id) {
                    $head = array(0 => "ID",
                        1 => "Name",
                        2 => "Slug",
                        3 => "Description");
                    $data = array(0 => $crop->term_id,
                        1 => $crop->name,
                        2 => $crop->slug,
                        3 => $crop->description);
                }
            }

            echo ucfirst($data[1]);
        } else {
            echo "No items by crop_id " . $crop_id;
        }
    } else {
        echo "Focal Crops";
    }
}

/* Get every crops post by crop id */

function the_post_by_idcrop($crop_id, $limit) {
    if ($crop_id != null) {
        if ($limit == null || $limit == 1) {
            $args = array(
                'posts_per_page' => constant("POSTS_PER_PAGE"),
                'tax_query' => array(
                    array(
                        'taxonomy' => 'taxonomy_crops',
                        'field' => 'tag_ID',
                        'terms' => $crop_id
                    )
                )
            );
        } else {
            $args = array(
                'posts_per_page' => -1,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'taxonomy_crops',
                        'field' => 'tag_ID',
                        'terms' => $crop_id
                    )
                )
            );
        }
        the_post_list($args);
    } else {
        the_prebreeding_list(constant("POSTS"), $limit);
    }
}

/* Get every crops post by slug */

function the_post_by_slug($slug) {
    if ($slug != null) {
        $args = array(
            'tax_query' => array(
                array(
                    'taxonomy' => 'taxonomy_crops',
                    'field' => 'slug',
                    'terms' => $slug
                )
            )
        );

        the_post_list($args);
    } else {
        the_prebreeding_list(constant("POSTS"));
    }
}

/* Show a post list by args */

function the_post_list($args) {
    $loop = new WP_Query($args);
    while ($loop->have_posts()) : $loop->the_post();
        $id = get_the_ID();
        $file = get_post_meta($id, 'cwr_attached_file');
        if (empty($file)) {//Empty array mean no Files
            $no_posts = true;
            $feat_image = wp_get_attachment_url(get_post_thumbnail_id($post->$id)); // feat_image = feature image url\
            echo "<div class='post_no_attachement'>";
            if ($feat_image != null) {
                echo "<div class='prebreeding feature_image left'>
                          <a href=" . get_permalink() . ">
                             <img src='" . get_template_directory_uri() . "/scripts/timthumb.php?src=" . $feat_image . "'>
                          </a>
                      </div>";
            }
            echo "<div class='post_resum_content right'>";
            echo "<div class='post_title' ><a href=" . get_permalink() . ">";
            the_title();
            echo "</a><br><span>" . get_the_date() . "</span><br>";
            $postterms = get_the_terms(get_the_ID(), "taxonomy_crops");
            if ($postterms) {
                echo "<div class='terms' >";
                foreach ($postterms as $term) {
                    if ($i < (count($postterms) - 1) && count($postterms) != 1) {
                        echo ucwords($term->name) . ', ';
                    } else {
                        echo ucwords($term->name);
                    }

                    $i++;
                }
                $i = 0;
                echo "</div>";
            }
            echo "</div>";
            echo "<div id='num_comments'>";
            $num_comments = get_comments_number();
            echo $num_comments;
            echo '</div>';
            echo "<div><p>";
            the_excerpt();
            echo "</p></div>";
            echo "</div><div class='clear'></div>";
            echo "</div>";
        }

    endwhile;

    if (!$no_posts) {
        //echo "<div class='post_no_attachement'><p class='data-no-found center'>No registered post with these search parameters</p></div>";
        //echo "<div class='post_no_attachement'><p class='data-no-found center'>Please visit this page soon for information related to pre-breeding the wild relatives of this crop for climate change adaptation</p></div>";
        echo "<div class='post_no_attachement'><p class='data-no-found center'>Please visit this page soon for information on the use of wild relatives in pre-breeding efforts</p></div>";
        
    } else {
        if (!empty($args['tax_query'])) {
            //echo "<div id='older_post'><a href='" . get_home_url() . "/prebreeding/?crop_id=" . $args['tax_query'][0]['terms'] . "&limit=0' >See Older Post</a></div>";
            $term = get_term_by('crop_id',$args['tax_query'][0]['terms'],'taxonomy_crops');
            echo "<div id='older_post'><a href='" . get_home_url() . "/crop/". $term->slug ."'>See Older Posts</a></div>";
        } else {
            echo "<div id='older_post'><a href='" . get_home_url() . "/prebreeding/?limit=0' >See Older Post</a></div>";
        }
    }
}

function the_resources_by_idcrop($crop_id, $limit) {
    if ($crop_id != null) {
        /* if($limit == null || $limit == 1){
          $args = array(
          'posts_per_page' => constant("POSTS_PER_PAGE"),
          'tax_query' => array(
          array(
          'taxonomy' => 'taxonomy_crops',
          'field' => 'tag_ID',
          'terms' => $crop_id
          )
          )
          );
          }else{ */
        $args = array(
            'posts_per_page' => -1,
            'tax_query' => array(
                array(
                    'taxonomy' => 'taxonomy_crops',
                    'field' => 'tag_ID',
                    'terms' => $crop_id
                )
            )
        );
        // }

        show_resources_list($args);
    } else {
        the_prebreeding_list(constant("FILES"), $limit);
    }
}

/* Show a resources list by args */

function show_resources_list($args) {
    $loop = new WP_Query($args);

    while ($loop->have_posts()) : $loop->the_post();
        $id = get_the_ID();
        $file = get_post_meta($id, 'cwr_attached_file');

        if (!empty($file) /* && !eregi('[[:space:]]', $file[0]) */) {//Not empty array mean Files and no space in a correct url
            $no_posts = true;
            echo "<div class='resources_box'>";
            echo "<div class='left'>";
            echo "<a href='" . $file[0] . "' target='_blank'>";
            the_display_image($file);
            echo "</a></div>";
            echo "<div class='res_title' ><a href='" . $file[0] . "' target='_blank'>";
            the_title();
            echo "</a><br><span>" . get_the_date() . "</span></div>";
            echo "<div class='both'></div>";
            echo "<div class='resources_content'>";
            echo "<p>";
            the_content();
            echo "</p>";
            echo "</div>";
            echo "</div>";
        }

    endwhile;

    if (!$no_posts) {
        //echo "<p class='data-no-found center'>please visit this page soon for information related to pre-breeding the wild relatives of this crop for climate change adaptation</p>";
        //echo "<p class='data-no-found center'>No resources found</p>";
    }
}

/* Show image to display */

function the_display_image($file_url) {
    $file_ext = transform_extension(determine_the_file_type($file_url));
    echo "<img src='" . get_stylesheet_directory_uri() . "/images/file-extensions/" . str_replace(" ", "", $file_ext) . ".png' alt='download' title='download'>";
}

/* Transform the file extension */

function transform_extension($file_ext) {
    if ($file_ext == "docx") {
        return "doc";
    } else {
        return $file_ext;
    }
}

function determine_the_file_type($file_url) {
    $tok = strtok($file_url[0], "/");

    while ($tok != false) {
        $tok = strtok("/");
        $array[] = $tok;
    }

    $index = count($array);
    $tok = strtok($array[$index - 2], ".");
    $tok = strtok(".");
    return strtolower($tok);
}

/* Determine if the url reference an existent file in db NO USE */
/* function is_really_file($file){
  try{
  if(file_exists($file[0])){
  return true;
  }else{
  return false;
  }
  }catch (Exception $e) {
  return false;
  }
  } */
?>