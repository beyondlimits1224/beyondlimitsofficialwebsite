<?php 
    $bg_slide_img = "hero-bg2.jpg";
?>

<?php 
        echo "<style>
                .hero .slide{
                    background-image:" . "url" . "('." . "/" . "img" . "/" . $bg_slide_img . "');" . "}";
        echo   "</style>";
    ?>

<section class="hero">

    <div class="slide">
        <div class="container m-auto">
            <div class="flex-container jcc align-items-center">
                <div class="row-left">
                    <h1>Lebron James</h1>
                    <h2 class="f-w">Illustration Design</h2>
                    <a class="btn mt-2" href="#">
                        <div class="flex-container">
                            <img class="btn-icon" src="<?php echo URLROOT;?>/svg/readmore-icon.svg" alt="read more"/>
                            <span>View More</span>
                        </div>
                    </a>
                </div>
                <div class="row-right">
                    <img class="hero-image" src="<?php echo URLROOT;?>/img/lebron.png" alt="Lebron James"/>
                </div>
            </div>
        </div>
    </div>
</section>