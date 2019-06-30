<?php

Route::get('/{name}', 'HikeController@index')
->where('name', '|Hikes\/.*');


