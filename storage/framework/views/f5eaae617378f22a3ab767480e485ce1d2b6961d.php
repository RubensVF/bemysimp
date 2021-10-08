<div class="col-12 col-md-4 d-none d-sm-none d-md-block d-lg-block" style="margin-top:-30px">
	<?php if( isset($feed) && $feed->count() ): ?>
		<input type="number" class="lastId d-none" value="<?php echo e($feed->last()->id); ?>">
	<?php endif; ?>

	<?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('creators-sidebar')->dom;
} elseif ($_instance->childHasBeenRendered('oSZn97q')) {
    $componentId = $_instance->getRenderedChildComponentId('oSZn97q');
    $componentTag = $_instance->getRenderedChildComponentTagName('oSZn97q');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('oSZn97q');
} else {
    $response = \Livewire\Livewire::mount('creators-sidebar');
    $dom = $response->dom;
    $_instance->logRenderedChild('oSZn97q', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?>

	<br>
</div><?php /**PATH /Users/crivion/Sites/patrons/resources/views/posts/sidebar-desktop.blade.php ENDPATH**/ ?>