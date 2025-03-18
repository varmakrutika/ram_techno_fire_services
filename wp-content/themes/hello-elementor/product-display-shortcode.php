<?php
/*
 * Product Display Shortcode
 */

add_shortcode('product_display', 'product_display_shortcode');

function product_display_shortcode() {
    ob_start(); 
    ?>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly; 
            padding: 20px;
        }

        .card {
            width: calc(30% - 20px);
            margin-bottom: 20px; 
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
            background-color: #fff;
            cursor: pointer;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card img {
            max-width: 100%;
            height: auto;
            display: block;
            border-bottom: 1px solid #ddd;
        }

        .card-content {
            padding: 10px;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .card-title {
            font-size: 1.2em;
            margin-bottom: 5px;
            color: #333;
        }

        .card-description {
            font-size: 0.9em;
            color: #555;
            flex-grow: 1;
        }

        @media only screen and (max-width: 768px) {
            .card {
                width: calc(100% - 20px);
            }
        }
    </style>

    <?php
    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => -1,
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        echo '<div class="card-container">';

        while ($query->have_posts()) : $query->the_post();
            echo '<div class="card">';
            the_post_thumbnail();
            echo '<div class="card-content">';
            echo '<h2 class="card-title">' . get_the_title() . '</h2>';
            the_content();
            echo '</div>';
            echo '</div>';
        endwhile;

        echo '</div>';
        wp_reset_postdata();
    else :
        echo 'No products found.';
    endif;

    return ob_get_clean(); 
}
?>
