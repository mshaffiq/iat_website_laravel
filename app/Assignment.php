<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    public function completeAssignment()
    {
        $this->completed = true;
        $this->save();
    }
}
