<?php
/**
 * Files updated array list
 * 
 * @var $filesList[]
**/
$filesList = [

    // folders
    'js',
    'public/uploads/cms-uploads',
    'public/uploads/chunks',
    'css',
    'images',
    'resources/vueapp',
    'resources/views/partials',
    'resources/views/posts',
    'svg',


    // controllers 
    'app/Http/Controllers/MercadoPagoController.php',
    'app/Http/Controllers/SubscriptionController.php',
    'app/Http/Controllers/TipsController.php',
    'app/Http/Controllers/MessagesController.php',
    'app/Http/Controllers/Admin.php',
    'app/Http/Controllers/PostsController.php',
    'app/Http/Controllers/ProfileController.php',
    'app/Http/Controllers/HomeController.php',
    'app/Http/Controllers/MessagesController.php',
    'app/Http/Livewire/CreatorsSidebar.php',
    

    // middleware
    'app/Http/Middleware/VerifyCsrfToken.php',
    
    // models
    'app/User.php',
    'app/Message.php',
    'app/MessageMedia.php',
    'app/PaymentMethod.php',


    // views
    'resources/views/livewire/admin-payment-settings.blade.php',
    'resources/views/subscribe/crypto-coinpayments.blade.php',
    'resources/views/tips/tip-form.blade.php',
    'resources/views/tips/coinpayments-crypto.blade.php',
    'resources/views/messages/coinpayments-crypto-unlock.blade.php',
    'resources/views/livewire/search-creators.blade.php',
    'resources/views/profile/set-fee.blade.php',
    'resources/views/admin/verification-requests.blade.php',
    
    'resources/views/page.blade.php',
    'resources/views/welcome.blade.php',
    'resources/views/homepagev2.blade.php',
    'resources/views/account.blade.php',
    'resources/views/profile/user-profile.blade.php',
    'resources/views/profile/create.blade.php',
    'resources/views/creators/loop.blade.php',
    'resources/views/messages/inbox.blade.php',
    'resources/views/contact-page.blade.php',
    'resources/views/user-feed.blade.php',
    'resources/views/posts/create-post.blade.php',
    'resources/views/posts/edit-post.blade.php',
    'resources/views/posts/ajax-single-comment.blade.php',
    'resources/views/posts/comments.blade.php',
    'resources/views/livewire/notifications-icon.blade.php',
    'resources/views/livewire/unread-messages-count.blade.php',


    'resources/views/admin/configuration.blade.php',
    'resources/views/admin/simulator-config.blade.php',
    'resources/views/admin/pages.blade.php',
    'resources/views/admin/base.blade.php',
    'resources/views/admin/update-page.blade.php',


    // lang
    'resources/lang/en/v192.php',
    
    
    // routes
    'routes/web.php',
    
    // images
    'images/coinpayments-img.png',
   

    // helpers

    // css

    // others
    'resources/assets/js/admin.js',
    'js/app.js',
    'helpers/opt.helper.php',
    'serviceworker.js',
    
    'delete' => [
        'resources/views/home.blade.php',
        'app/Http/Livewire/Message.php',
        'resources/views/messages/message-media.blade.php',
        'resources/views/livewire/message-in.blade.php',
        'resources/views/livewire/message.blade.php',
        'resources/views/messages/single-media.blade.php',
        'js/homepage-sliders.js'

    ],

    // version related
    'index.php'

];
