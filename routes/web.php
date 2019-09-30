<?php

Route::get('/{any}', 'Module\MainController@index')->where('any', '.*');
