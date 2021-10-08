<div wire:poll.3000ms>
<div>
    <a href="<?php echo e(route('messages.inbox')); ?>">
        <?php echo app('translator')->get('navigation.messages'); ?>
        <span class="notifc">
            <?php echo e($count); ?>

        </span>
    </a>
</div>
<?php /**PATH /home/u748092880/domains/bemysimp.com/public_html/resources/views/livewire/unread-messages-count.blade.php ENDPATH**/ ?>