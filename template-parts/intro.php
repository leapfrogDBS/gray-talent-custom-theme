<?php
    $intro_title = get_field('intro_title');
    $intro_build_your = get_field('intro_build_your'); // get the repeater field
?>

<section class="bg-stone-gray pt-16 pb-[24vw] relative -z-20">
    <div class="container mx-auto">
        <div class="row ">
            <div class="col">
                <?php if ($intro_title) : ?>
                    <h1 id="curved-text" class="text-burnt-orange font-roboto-mono text-[10px]"><?php echo $intro_title; ?></h1>
                <?php endif; ?>             
                <div class="mt-5 font-cabinet-grotesk font-black text-[#A7A492] leading-none uppercase text-4xl sm:text-[5.5vw] xl:text-[80px]">
                    <?php if( have_rows('intro_build_your') ): // check if the repeater field has rows of data
                        while ( have_rows('intro_build_your') ) : the_row(); // loop through the rows of data
                            $build_your_title = get_sub_field('intro_build_your_title'); // get the sub field value
                    ?>
                        <h2 class="intro-text">Build your <span class="text-burnt-orange scroll-fade inline-block mb-3"><?php echo $build_your_title; ?></span></h2>
                    <?php endwhile;
                    endif; ?>
                </div>
                
            </div>
        </div>
    </div>
</section>

<script>


</script>
