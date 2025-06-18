<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

        <section class="min-w-full max-w-full w-full h-auto bg-white text-black overflow-hidden"></section>
            <div class="flex items-center justify-start px-18 w-full h-fit !aspect-video bg-contain bg-fit bg-no-repeat"
                style="background-image: url('<?php echo e(asset('img/headartikel.png')); ?>');">
                <h1 class="text-2xl sm:text-3xl md:text-5xl lg:text-7xl font-bold text-white">Artikel</h1>
            </div>
        </section>

        <section class="min-w-full max-w-full w-full h-45 bg-neutral-100 flex items-center justify-center flex-col text-black overflow-hidden">
            <span class="uppercase font-bold text-2xl">Artikel</span>
            <div class="flex items-center justify-center w-fit h-fit text-xl gap-2 text-black">
                <a class="text-neutral-400 font-light" href="#">Beranda</a> >
                <a class="text-black font-normal" href="#">ARTIKEL</a>
            </div>
        </section>

        <section class="min-w-full max-w-full w-full h-fit bg-white text-black overflow-hidden flex items-start justify-center md:justify-around flex-col md:flex-row flex-wrap gap-5 py-10">

            <?php $__empty_1 = true; $__currentLoopData = $artikels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $artikel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                
           
                <article class="w-full md:w-85 md:!max-w-85 h-fit bg-white text-black/70 flex flex-col md gap-2">
                    <img class="max-w-full w-full h-fit !aspect-video object-cover" src="<?php echo e($artikel->gambar); ?>" alt="">
                    <span class="w-full max-w-full mt-2 truncate max-h-10 text-xs flex tracking-normal items-center gap-2 px-1">
                        <img class="w-3 h-3 inline opacity-70 aspect-square" src="<?php echo e(asset('img/jam.png')); ?>" />
                        <?php echo e($artikel->tanggal->format('d M Y')); ?>

                    </span>
                    <a class="text-black font-bold text-lg px-1 hover:text-yellow-500 text-wrap max-w-full" href="#"><?php echo e($artikel->judul); ?></a>
                    <a class="text-black font-light text-lg px-1 hover:text-yellow-500 max-w-full" href="#">Read More >></a>
                </article>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

            <div class="w-full h-fit bg-white text-black/70 flex items-center justify-center flex-col gap-2">
                <span class="text-lg font-bold">Tidak ada artikel yang ditemukan</span>
            </div>

            <?php endif; ?>

        </section>
        <?php echo e($artikels->links()); ?>

    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php /**PATH D:\Documents\usuti\sem2\faizvel\resources\views/artikel.blade.php ENDPATH**/ ?>