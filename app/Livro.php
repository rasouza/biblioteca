<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model {

	protected $fillable = ['isbn', 'titulo', 'edicao', 'ano', 'paginas', 'editora', 'autor'];

	// Dono do livro
	public function dono() {
		return $this->belongsTo('App\User', 'dono_id');
	}

	// Tema do livro
	public function tema() {
		return $this->belongsTo('App\Tema', 'tema_id');
	}

	// Ponto de troca
	public function ponto() {
		return $this->belongsTo('App\Ponto', 'ponto_id');
	}

    public function status() {
        return $this->belongsTo('App\Status', 'status_id');
    }

    public function emprestimos() {
        return $this->hasMany('App\Emprestimo', 'livro_id');
    }
}
