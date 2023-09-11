<?php
    $founder_image = get_field('founder_image');
    $founder_title = get_field('founder_title');
    $founder_name = get_field('founder_name');
    $founder_copy = get_field('founder_copy');
    $founder_years = get_field('founder_years');
    $founder_combined_audience = get_field('founder_combined_audience');
    $founder_content_views = get_field('founder_content_views');
?>

<section class="pt-1 mt-72 bg-cover bg-top bg-no-repeat" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/apply-bg.png);">
    <div class="container max-w-5xl mx-auto">
        <div class="row">
            <div class="col bg-stone-gray rounded-xl p-9 text-forest-green -mt-40 flex flex-col md:grid md:grid-cols-2 gap-x-12">
                <img src="<?php echo $founder_image['url']; ?>" alt="Charlie Lawrence" class="w-full h-auto mb-9 object-cover">
                <div>
                    <h2 class="text-burnt-orange font-roboto-mono text-[10px]"><?php echo  $founder_title; ?></h2>
                    <h3 class="font-cabinet-grotesk font-black text-3xl my-3 leading-none lg:text-4xl"><?php echo  $founder_name; ?></h3>
                    <div class="blurb font-roboto-mono font-light text-base pb-10 border-b border-forest-green text-copy lg:text-lg">
                        <?php echo $founder_copy; ?>
                    </div>
                    <div class="stats flex flex-wrap gap-x-12 gap-y-4 mt-10 items-center">
                        <div class="stat flex flex-col items-center">
                            <h4 class="font-cabinet-grotesk font-black text-3xl"><?php echo $founder_years; ?></h4>
                            <p class="font-cabinet-grotesk text-base">Years</p>
                        </div>
                        <div class="stat flex flex-col items-center">
                            <h4 class="font-cabinet-grotesk font-black text-3xl"><?php echo $founder_combined_audience; ?></h4>
                            <p class="font-cabinet-grotesk text-base">Combined Audience</p>
                        </div>
                        <div class="stat flex flex-col items-center">
                            <h4 class="font-cabinet-grotesk font-black text-3xl"><?php echo $founder_content_views; ?></h4>
                            <p class="font-cabinet-grotesk text-base">Content Views</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>