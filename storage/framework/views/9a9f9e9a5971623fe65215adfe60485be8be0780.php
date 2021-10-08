<?php $__env->startSection('section_title'); ?>
	<strong>Payments Settings</strong>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('section_body'); ?>

<?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('admin-payment-settings')->dom;
} elseif ($_instance->childHasBeenRendered('0AFJ64P')) {
    $componentId = $_instance->getRenderedChildComponentId('0AFJ64P');
    $componentTag = $_instance->getRenderedChildComponentTagName('0AFJ64P');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('0AFJ64P');
} else {
    $response = \Livewire\Livewire::mount('admin-payment-settings');
    $dom = $response->dom;
    $_instance->logRenderedChild('0AFJ64P', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u748092880/domains/bemysimp.com/public_html/resources/views/admin/payments-setup.blade.php ENDPATH**/ ?>