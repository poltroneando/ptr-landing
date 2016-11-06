<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CadastroEmail extends Model
{
	public $table = 'cadastroemail';
    protected $fillable = ['nome','email'];

}
