<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class drm extends Model
{
Route::get('/drm', function () {
    $drm = drm::paginate(5);

    $drm->withPath('/admin/drm');

    //
});
