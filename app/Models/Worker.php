<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    public function setBirthCertificateOfTheChildsAttribute($pictures)
    {
        if (is_array($pictures)) {
            $this->attributes['birth_certificate_of_the_childs'] = json_encode($pictures);
        }
    }

    public function getBirthCertificateOfTheChildsAttribute($pictures)
    {
        return json_decode($pictures, true);
    }
}
