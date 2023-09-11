    <?php 
        $build_your_audience_subtitle  = get_field('build_your_audience_subtitle');
        $build_your_audience_copy = get_field('build_your_audience_copy');
        

        $build_your_partnership_subtitle = get_field('build_your_partnership_subtitle');
        $build_your_partnership_copy = get_field('build_your_partnership_copy');
        

        $build_your_business_subtitle = get_field('build_your_business_subtitle');
        $build_your_business_copy = get_field('build_your_business_copy');
        

        $build_your_best_self_subtitle = get_field('build_your_best_self_subtitle');
        $build_your_best_self_copy = get_field('build_your_best_self_copy');
        
    ?>

    
    <section id="circle-section">
        <div class="top-circle-section relative -z-10">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/circles-bg-top.png" alt="Circles Background" class="w-full h-auto -mt-[20vw]">
        </div>
        <div id="circles-container" class="bg-burnt-orange z-10">
            <div class="container2 relative z-20">
                <div class="row relative z-30">
                    <div class="col  relative flex flex-col md:grid grid-cols-2 lg:justify-center lg:items-center">
                        
                        <div id="audience-circle" class="circle rounded-full bg-burnt-orange text-white flex flex-col justify-center items-center aspect-square text-center mt-16 lg:flex-row">
                            <div class="start-content flex flex-col items-center justify-center max-w-4xl lg:flex-row lg:items-start gap-x-6">
                                <div class="max-w-[200px] lg:max-w-none flex-1">
                                    <p class="font-roboto-mono text-xl mb-2">01</p>
                                    <div class="title font-cabinet-grotesk text-4xl mb-2">
                                    <h2 class="font-normal">Build your</h2>
                                    <h2 class="font-black">Audience</h2>
                                    </div>
                                    <p class="text-center font-roboto-mono font-light text-base mb-6"><?php echo $build_your_audience_subtitle; ?> </p>
                                    <div class="btn-container">
                                        <p class="find-out-more cursor-pointer font-roboto-mono text-[10px] text-brick-red bg-white px-6 py-2 rounded-3xl inline-block">Learn More</p>
                                    </div>
                                </div>
                                <div class="content-container hidden px-9 max-w-4xl mx-auto lg:max-w-[600px] lg:border-l lg:border-white relative">
                                    <hr class="text-white my-16 lg:hidden">
                                    <div class="text-copy font-roboto-mono text-left text-xs md:text-base">
                                        <?php echo $build_your_audience_copy; ?>
                                    </div>
                                    <div class="grid grid-cols-2 gap-4 mt-12 lg:grid-cols-4">
                                        <?php if( have_rows('build_your_audience_brand_logos') ): // check if the repeater field has rows of data
                                            while ( have_rows('build_your_audience_brand_logos') ) : the_row(); // loop through the rows of data
                                                $logo = get_sub_field('logo'); // get the sub field value
                                            ?>
                                                <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
                                            <?php endwhile;
                                        endif; ?>
                                    </div>
                                    <div class="text-right">
                                        <a href="#application-form" class="hidden apply-now cursor-pointer font-roboto-mono text-[10px] text-brick-red bg-white px-6 py-2 rounded-3xl inline-block mt-12">Apply Now</a>
                                    </div>
                                    <span class="hidden close-btn text-2xl font-bold">X</span>
                                </div>    
                            </div>                             
                        </div>

                        <div id="partnership-circle" class="circle rounded-full bg-burnt-orange text-white flex flex-col justify-center items-center aspect-square text-center mt-12 sm:mt-0 md:mt-12 lg:flex-row">
                            <div class="start-content flex flex-col items-center justify-center max-w-4xl lg:flex-row lg:items-start gap-x-6">
                                <div class="max-w-[200px] lg:max-w-none flex-1">
                                    <p class="font-roboto-mono text-xl mb-2">02</p>
                                    <div class="title font-cabinet-grotesk text-4xl mb-2">
                                    <h2 class="font-normal">Build your</h2>
                                    <h2 class="font-black">Partnerships</h2>
                                    </div>
                                    <p class="text-center font-roboto-mono font-light text-base mb-6"><?php echo $build_your_partnership_subtitle; ?></p>
                                    <div class="btn-container">
                                        <p class="find-out-more cursor-pointer font-roboto-mono text-[10px] text-brick-red bg-white px-6 py-2 rounded-3xl inline-block">Learn More</p>
                                    </div>
                                </div>
                                <div class="content-container hidden px-9 max-w-4xl mx-auto lg:max-w-[600px] lg:border-l lg:border-white relative">
                                    <hr class="text-white my-16 lg:hidden">
                                    <div class="text-xs md:text-base font-roboto-mono text-left text-copy">
                                        <?php echo $build_your_partnership_copy; ?>
                                    </div>
                                    <div class="grid grid-cols-2 gap-4 mt-12 lg:grid-cols-4">
                                    <?php if( have_rows('build_your_parntership_brand_logos') ): // check if the repeater field has rows of data
                                            while ( have_rows('build_your_parntership_brand_logos') ) : the_row(); // loop through the rows of data
                                                    $logo = get_sub_field('logo'); // get the sub field value
                                            ?>
                                                    <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
                                            <?php endwhile;
                                        endif; ?>
                                    </div>
                                    <div class="text-right">
                                        <a href="#application-form" class="hidden apply-now cursor-pointer font-roboto-mono text-[10px] text-brick-red bg-white px-6 py-2 rounded-3xl inline-block mt-12">Apply Now</a>
                                    </div>
                                    <span class="hidden close-btn text-2xl font-bold">X</span>
                                </div>    
                            </div>
                        </div>

                        <div id="business-circle" class="circle rounded-full bg-burnt-orange text-white flex flex-col justify-center items-center aspect-square text-center mt-12 sm:mt-0 md:mt-12 lg:flex-row">
                            <div class="start-content flex flex-col items-center justify-center max-w-4xl lg:flex-row lg:items-start gap-x-6">
                                <div class="max-w-[200px] lg:max-w-none flex-1">
                                    <p class="font-roboto-mono text-xl mb-2">03</p>
                                    <div class="title font-cabinet-grotesk text-4xl mb-2">
                                    <h2 class="font-normal">Build your</h2>
                                    <h2 class="font-black">Business</h2>
                                    </div>
                                    <p class="text-center font-roboto-mono font-light text-base mb-6"><?php echo $build_your_business_subtitle; ?></p>
                                    <div class="btn-container">
                                        <p class="find-out-more cursor-pointer font-roboto-mono text-[10px] text-brick-red bg-white px-6 py-2 rounded-3xl inline-block">Learn More</p>
                                    </div>
                                </div>
                                <div class="content-container hidden px-9 max-w-4xl mx-auto lg:max-w-[600px] lg:border-l lg:border-white relative">
                                    <hr class="text-white my-16 lg:hidden">
                                    <div class="text-xs md:text-base font-roboto-mono text-left text-copy">
                                        <?php echo $build_your_business_copy; ?>
                                    </div>
                                    <div class="grid grid-cols-2 gap-4 mt-12 lg:grid-cols-4">
                                    <?php if( have_rows('build_your_business_brand_logos') ): // check if the repeater field has rows of data
                                            while ( have_rows('build_your_business_brand_logos') ) : the_row(); // loop through the rows of data
                                                $logo = get_sub_field('logo'); // get the sub field value
                                        ?>
                                                <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
                                            <?php endwhile;
                                        endif; ?>
                                    </div>
                                    <div class="text-right">
                                        <a href="#application-form" class="hidden apply-now cursor-pointer font-roboto-mono text-[10px] text-brick-red bg-white px-6 py-2 rounded-3xl inline-block mt-12">Apply Now</a>
                                    </div>
                                    <span class="hidden close-btn text-2xl font-bold">X</span>
                                </div>    
                            </div>
                        </div>

                        <div id="best-self-circle" class="circle rounded-full bg-burnt-orange text-white flex flex-col justify-center items-center aspect-square text-center mt-12 sm:mt-0 md:mt-12 lg:flex-row">
                            <div class="start-content flex flex-col items-center justify-center max-w-4xl lg:flex-row lg:items-start gap-x-6">
                                <div class="max-w-[200px] lg:max-w-none flex-1">
                                    <p class="font-roboto-mono text-xl mb-2">04</p>
                                    <div class="title font-cabinet-grotesk text-4xl mb-2">
                                    <h2 class="font-normal">Build your</h2>
                                    <h2 class="font-black">Best Self</h2>
                                    </div>
                                    <p class="text-center font-roboto-mono font-light text-base mb-6"><?php echo $build_your_best_self_subtitle; ?></p>
                                    <div class="btn-container">
                                        <p class="find-out-more cursor-pointer font-roboto-mono text-[10px] text-brick-red bg-white px-6 py-2 rounded-3xl inline-block">Learn More</p>
                                    </div>
                                </div>
                                <div class="content-container hidden px-9 max-w-4xl mx-auto lg:max-w-[600px] lg:border-l lg:border-white relative">
                                    <hr class="text-white my-16 lg:hidden">
                                    <div class="text-xs md:text-base font-roboto-mono text-left text-copy">
                                        <?php echo $build_your_best_self_copy; ?>
                                    </div>
                                    <div class="grid grid-cols-2 gap-4 mt-12 lg:grid-cols-4">
                                        <?php if( have_rows('build_your_audience_best_self_logos') ): // check if the repeater field has rows of data
                                            while ( have_rows('build_your_audience_best_self_logos') ) : the_row(); // loop through the rows of data
                                                $logo = get_sub_field('logo'); // get the sub field value
                                        ?>
                                                <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
                                            <?php endwhile;
                                        endif; ?>
                                    </div>
                                    <div class="text-right">
                                        <a href="#application-form" class="hidden apply-now cursor-pointer font-roboto-mono text-[10px] text-brick-red bg-white px-6 py-2 rounded-3xl inline-block mt-12">Apply Now</a>
                                    </div>
                                    <span class="hidden close-btn text-2xl font-bold">X</span>
                                </div>    
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-circle-section relative -z-10">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/circles-bg-bottom.png" alt="Circles Background" class="w-full h-auto">
        </div>
        
    </section>

   

    <script>
    document.addEventListener("DOMContentLoaded", function() {
  let isPaused = false;

  document.querySelectorAll('.find-out-more').forEach(button => {
    button.addEventListener('click', function(event) {
      event.stopPropagation();
      const closestCircle = event.target.closest('.circle');
      expandCircle(closestCircle);
    });
  });

  document.querySelectorAll('.close-btn').forEach(button => {
    button.addEventListener('click', function(event) {
      event.stopPropagation();
      const closestCircle = event.target.closest('.circle');
      expandCircle(closestCircle);
    });
  });

  function expandCircle(element) {
    const closeButton = element.querySelector('.close-btn');
    const applyNowButton = element.querySelector('.apply-now');
    const findOutMoreButton = element.querySelector('.find-out-more');
    const contentContainer = element.querySelector('.content-container');
    const container = document.querySelector('#circle-section');
    const startContent = element.querySelector('.start-content');

    element.classList.toggle('expanded');
    contentContainer.classList.toggle('hidden');

    if (element.classList.contains('expanded')) {
      closeButton.classList.remove('hidden');
      applyNowButton.classList.remove('hidden');
      findOutMoreButton.classList.add('hidden');
      container.classList.add('hide-pseudo');
      isPaused = true;

      const rect = startContent.getBoundingClientRect();
      window.scrollTo({
        top: rect.top + window.pageYOffset,
        behavior: 'smooth'
      });
    } else {
      closeButton.classList.add('hidden');
      applyNowButton.classList.add('hidden');
      findOutMoreButton.classList.remove('hidden');
      container.classList.remove('hide-pseudo');
      isPaused = false;
    }
  }

  const circles = document.querySelectorAll('.circle');

  circles.forEach(circle => {
    floatElement(circle, Math.random() * Math.PI * 2);
  });

  function floatElement(element, phase) {
    let originalTop = parseFloat(window.getComputedStyle(element).top);
    let originalLeft = parseFloat(window.getComputedStyle(element).left);
    let start = null;
    let amplitude = 20;
    let frequency = 0.001;
    let horizontalAmplitude = 10;

    function step(timestamp) {
      if (isPaused) {
        requestAnimationFrame(step);
        return;
      }

      if (!start) start = timestamp;
      let progress = timestamp - start;
      let newY = originalTop + amplitude * Math.sin(frequency * progress + phase);
      let newX = originalLeft + horizontalAmplitude * Math.sin(0.5 * frequency * progress + phase);

      element.style.top = newY + 'px';
      element.style.left = newX + 'px';

      requestAnimationFrame(step);
    }

    requestAnimationFrame(step);
  }
});



    </script>