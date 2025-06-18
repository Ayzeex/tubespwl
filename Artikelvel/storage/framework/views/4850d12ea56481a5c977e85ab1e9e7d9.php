<?php if($paginator->hasPages()): ?>
    <nav role="navigation" aria-label="Navigasi Paginasi" class="flex items-center justify-center my-8">
        <ul class="inline-flex items-center gap-1">
            
            <?php if($paginator->onFirstPage()): ?>
                <li>
                    <span class="px-4 py-2 rounded-md bg-neutral-200 text-neutral-400 font-bold cursor-not-allowed select-none">Sebelumnya</span>
                </li>
            <?php else: ?>
                <li>
                    <a href="<?php echo e($paginator->previousPageUrl()); ?>" class="px-4 py-2 rounded-md bg-white border border-black text-black font-bold transition-colors duration-150 hover:bg-black hover:text-white focus:bg-black focus:text-white active:bg-black active:text-white">Sebelumnya</a>
                </li>
            <?php endif; ?>

            
            <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(is_string($element)): ?>
                    <li>
                        <span class="px-4 py-2 text-neutral-400 select-none"><?php echo e($element); ?></span>
                    </li>
                <?php endif; ?>
                <?php if(is_array($element)): ?>
                    <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($page == $paginator->currentPage()): ?>
                            <li>
                                <span class="px-4 py-2 rounded-md bg-black text-white font-bold border border-black select-none"><?php echo e($page); ?></span>
                            </li>
                        <?php else: ?>
                            <li>
                                <a href="<?php echo e($url); ?>" class="px-4 py-2 rounded-md bg-white border border-black text-black font-bold transition-colors duration-150 hover:bg-black hover:text-white focus:bg-black focus:text-white active:bg-black active:text-white"><?php echo e($page); ?></a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            
            <?php if($paginator->hasMorePages()): ?>
                <li>
                    <a href="<?php echo e($paginator->nextPageUrl()); ?>" class="px-4 py-2 rounded-md bg-white border border-black text-black font-bold transition-colors duration-150 hover:bg-black hover:text-white focus:bg-black focus:text-white active:bg-black active:text-white">Berikutnya</a>
                </li>
            <?php else: ?>
                <li>
                    <span class="px-4 py-2 rounded-md bg-neutral-200 text-neutral-400 font-bold cursor-not-allowed select-none">Berikutnya</span>
                </li>
            <?php endif; ?>
        </ul>
    </nav>
<?php endif; ?>
<style>
    .hover\:text-white:hover { color: #fff !important; }
    .focus\:text-white:focus { color: #fff !important; }
    .active\:text-white:active { color: #fff !important; }
</style>
<?php /**PATH D:\Documents\usuti\sem2\faizvel\resources\views/vendor/pagination/tailwind.blade.php ENDPATH**/ ?>