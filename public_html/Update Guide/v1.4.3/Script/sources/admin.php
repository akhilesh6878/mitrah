<?php
$wo['description'] = $wo['config']['siteDesc'];
$wo['keywords']    = $wo['config']['siteKeywords'];
$wo['page']        = 'admin';
$wo['decode_android_v']  = $wo['config']['footer_background'];
$wo['decode_android_value']  = base64_decode('I2FhYQ==');
$wo['decode_windwos_v']  = $wo['config']['footer_text_color'];
$wo['decode_windwos_value']  = base64_decode('I2RkZA==');
$wo['title']       = $wo['lang']['admin_area'] . ' | ' . $wo['config']['siteTitle'];
$wo['content']     = Wo_LoadPage('admin/content');