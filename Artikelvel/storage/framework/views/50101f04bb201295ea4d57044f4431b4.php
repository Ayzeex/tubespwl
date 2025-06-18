<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'ddOpen' => 0,
    'ddId' => 0,
    'listHeader' => [],
    'listContent' => [],
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'ddOpen' => 0,
    'ddId' => 0,
    'listHeader' => [],
    'listContent' => [],
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div x-cloak x-show="ddOpen == <?php echo e($ddId); ?>" @mouseover="ddOpen = <?php echo e($ddId); ?>"
    class="min-w-[50vw] max-w-[80%] min-h-16 bg-white absolute top-15 left-[10%] lg:left-[15%] tracking-tight    z-[-1] flex flex-col text-base font-bold py-2 px-5 gap-4 ">
    <section class="flex w-full h-full gap-3 *:pb-2 *:hover:text-yellow-500">
        
        <?php $__currentLoopData = $listHeader; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $header): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <h1 class="w-full border-b-[.5px] border-b-black/25 h-full"><?php echo e($header); ?></h1>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </section>
    <section class="w-full flex h-full font-normal text-sm normal-case *:*:hover:text-yellow-500 pb-3 gap-4">
        <?php $__currentLoopData = $listContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contents): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="w-full flex flex-col gap-4">
                <?php $__currentLoopData = $contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e($content['link']); ?>"><?php echo e($content['name']); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </section>
</div><?php /**PATH D:\Documents\usuti\sem2\faizvel\resources\views/components/ddmenu.blade.php ENDPATH**/ ?>