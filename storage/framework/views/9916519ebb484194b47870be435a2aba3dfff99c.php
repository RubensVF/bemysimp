<?php $__env->startSection('seo_title'); ?> <?php echo app('translator')->get('navigation.myNotifications'); ?> - <?php $__env->stopSection(); ?>

<?php $__env->startSection( 'section_title' ); ?>
<i class="fa fa-code"></i> <?php echo app('translator')->get( 'navigation.myNotifications' ); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection( 'account_section' ); ?>

<?php echo $__env->yieldContent( 'account_section' ); ?>

<?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('notifications-page')->dom;
} elseif ($_instance->childHasBeenRendered('tR11f7z')) {
    $componentId = $_instance->getRenderedChildComponentId('tR11f7z');
    $componentTag = $_instance->getRenderedChildComponentTagName('tR11f7z');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('tR11f7z');
} else {
    $response = \Livewire\Livewire::mount('notifications-page');
    $dom = $response->dom;
    $_instance->logRenderedChild('tR11f7z', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make( 'account' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u748092880/domains/bemysimp.com/public_html/resources/views/profile/notifications.blade.php ENDPATH**/ ?>