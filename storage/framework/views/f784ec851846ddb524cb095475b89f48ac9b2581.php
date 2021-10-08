<div class="col-12 col-md-4 d-none d-sm-none d-md-block d-lg-block" style="margin-top:-30px">
	<?php if( isset($feed) && $feed->count() ): ?>
		<input type="number" class="lastId d-none" value="<?php echo e($feed->last()->id); ?>">
	<?php endif; ?>

	<?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('creators-sidebar')->dom;
} elseif ($_instance->childHasBeenRendered('daoi0jM')) {
    $componentId = $_instance->getRenderedChildComponentId('daoi0jM');
    $componentTag = $_instance->getRenderedChildComponentTagName('daoi0jM');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('daoi0jM');
} else {
    $response = \Livewire\Livewire::mount('creators-sidebar');
    $dom = $response->dom;
    $_instance->logRenderedChild('daoi0jM', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?>

	<br>
</div><?php /**PATH /home/u748092880/domains/bemysimp.com/public_html/resources/views/posts/sidebar-desktop.blade.php ENDPATH**/ ?>