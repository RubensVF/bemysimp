<?php require_once 'filesList.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP FansOnly Upgrader</title>

    <link rel="stylesheet" href="/css/bootstrap.min.css">

</head>
<body>
<div class="container mt-5">
    <div class="card shadow p-5">
    <h1>PHP FansOnly Upgrader v1.9 to v2.0</h1>
    <h3>What's new?</h3>

    <?php if(!isset($_GET['backup'])): ?>
    <div class="alert alert-danger">
        MAKE SURE TO HAVE A BACKUP OF EVERYTHING BEFORE PROCEEDING IN CASE OF FAILURE.<br>
        CHECK YOUR CURRENT VERSION, IF YOU DON'T HAVE V1.9 - CONTACT ME. YOU CANNOT UPGRADE DIRECTLY TO V2.0 IF YOU HAVE LOWER THAN V1.9
    </div>

    <div class="alert alert-secondary">
    <ul class="p-1">
        <li>√ Completely New Layout</li>
        <li>√ Completely Revamped the Messaging system - now based on VueJS (formerly based on Livewire)</li>
        <li>√ Completely Revamped the Uploader: chunked uploads to support big files</li>
        <li>√ CoinPayments.net - Crypto Payments Integration</li>
        <li>√ TinyMCE Advanced Editor for the Pages CMS</li>
        <li>√ Fixed uploader not clearing images/list after finishing posting</li>
        <li>√ Fixed issue with pagination on the feed</li>
        <li>√ Updated Stripe Webhooks Controller to comply with latest changes on their side</li>
    </ul>
    </div>

    <h3 class="mt-3">What files have changed?</h3>

    <div class="alert alert-secondary p-4">
    <ol class="p-3">
    <?php
    foreach($filesList as $f) {
        if(empty($f)) continue;
        if(is_array($f)) continue;
        echo '<li>' . $f . '</li>';
    }
    ?>
    </ol>
    </div>

    <?php endif; ?>

    <h3 class="mt-3">Proceed with the update.</h3>

    <?php if(!isset($_GET['backup'])) { ?>
    <a href="/upgrader/index.php?backup=true" class="btn btn-primary">
        I have a backup and my current version is at least v1.9 - Continue
    </a>
    <?php } ?>

    <?php if (isset($_GET['backup'])) { ?>
    
    <div class="alert alert-info">
        Ok, you have confirmed that you have a backup and your current version is v1.9, click below to proceed
    </div>

    <a href="process-upgrade.php" class="btn btn-primary">
        Proceed with the upgrader
    </a>
    <?php } ?>

    <div class="ugrade-message"></div>
    

</div>
</body>
</html>