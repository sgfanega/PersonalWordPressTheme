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
        ]
    ];

    function getLogo($language) : string 
    {
        switch($language) {
            case "C#":
                return "http://stevefanegaii.test/wp-content/uploads/2020/05/CsharpLogo.png";
            case "PHP":
                return "http://stevefanegaii.test/wp-content/uploads/2020/05/PhpLogo.png";
            case "Java":
                return "";
            case "C++":
                return "";
            default:
                return "";
        }
    }
?>
<?php get_header();?>

<div class="container d-flex main-section">
    <div class="row">
        <div class="container d-flex project-section">
            <a href='<?php echo $projects[0]["Link"]; ?>'>
                <img src='<?php echo getLogo($projects[0]["Language"]); ?>'>
            </a>

            <div class="row">
                <div class="col">
                    <a href='<?php echo $projects[0]["Link"]; ?>'>
                        <h3><?php echo $projects[0]["Name"]; ?>
                    </a>
                </div>
                <div class="w-100 d-md-block"></div>
                <div class="col">
                    <p><?php echo $projects[0]["Description"]; ?>
                </div>
            </div>
        </div>

        <div class="container d-flex project-section">
            <a href='<?php echo $projects[1]["Link"]; ?>'>
                <img src='<?php echo getLogo($projects[1]["Language"]); ?>'>
            </a>

            <div class="row">
                <div class="col">
                    <a href='<?php echo $projects[1]["Link"]; ?>'>
                        <h3><?php echo $projects[1]["Name"]; ?>
                    </a>
                </div>
                <div class="w-100"></div>
                <div class="col">
                    <p><?php echo $projects[1]["Description"]; ?>
                </div>
            </div>

        </div>
    </div>
</div>

<?php get_footer();?>