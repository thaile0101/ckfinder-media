<?php
use Illuminate\Support\Facades\Route;

Route::get('media-test', '\ThaiLe\FileManager\Controllers\MediaController@media')->name('thaile.media');
