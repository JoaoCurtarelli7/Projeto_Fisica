<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
  protected $table = "turma";

  public function professor()
  {
      return $this->belongsTo(Professor::class,'prof_id','id');
  }
}