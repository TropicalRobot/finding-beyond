<?php
/*
Plugin Name: Finding Beyond Photos
Description: Finding Beyond Photos.
Author: Ryan Griffiths
Version: 1.0.0
*/

tev_post_factory_register('fbphotos', 'FindingBeyond\Model\Photos');

tev_app()->bind('fb_photos_repo', function ($app) {
    return new FindingBeyond\Repository\PhotosRepository(
        $app->fetch('post_factory'),
        $app->fetch('field_factory')
    );
});

tev_app()->fetch('plugin_loader')->load(__DIR__);


