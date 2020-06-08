<?php
    /* Template Name: Projects */
    
    $projects = [
        [
            "Language" => get_field('first_project_language'),
            "Link" => get_field('first_project_link'),
            "Name" => get_field('first_project_name'),
            "Description" => get_field('first_project_description')
        ],
        [
            "Language" => get_field('second_project_language'),
            "Link" => get_field('second_project_link'),
            "Name" => get_field('second_project_name'),
            "Description" => get_field('second_project_description')
        ],       
        [
            "Language" => get_field('third_project_language'),
            "Link" => get_field('third_project_link'),
            "Name" => get_field('third_project_name'),
            "Description" => get_field('third_project_description')
        ],
        [
            "Language" => get_field('fourth_project_language'),
            "Link" => get_field('fourth_project_link'),
            "Name" => get_field('fourth_project_name'),
            "Description" => get_field('fourth_project_description')
        ],
    ];

    function getLogo($language) : string 
    {
        switch($language) {
            case "C#":
                return "http://stevefanegaii.test/wp-content/uploads/2020/05/CsharpLogo.png";
            case "PHP":
                return "http://stevefanegaii.test/wp-content/uploads/2020/06/PHPLogo.png";
            case "Java":
                return "";
            case "C++":
                return "";
            case "Python":
                return "http://stevefanegaii.test/wp-content/uploads/2020/05/PythonLogo.png";
            default:
                return "";
        }
    }
?>

<?php get_header();?>

<div class="container d-flex main-section">
    <div class="row">
    <?php 
        foreach ($projects as $key => $project) {
            echo '<div class="container d-flex project-section">';
            echo '  <a href="' . $project['Link'] .'">';
            echo '      <img src="' . getLogo($project['Language']) . '">';
            echo '  </a>';
            echo '  <div class="row">';
            echo '      <div class="col">';
            echo '          <a href="' . $project['Link'] . '">';
            echo '              <h3>' . $project['Name'] . '</h3>';
            echo '          </a>';
            echo '      </div>';
            echo '      <div class="w-100 d-md-block"></div>';
            echo '      <div class="col">';
            echo '          <p>' . $project['Description'] . '</p>';
            echo '      </div>';
            echo '  </div>';
            echo '</div>';
        }
    ?>
    </div>
</div>

<?php get_footer();?>
