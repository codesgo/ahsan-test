<?php

Route::get('timezones/{timezone}', 
  'anosim\timezones\TimezonesController@index');