<?php 

namespace App;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model {
  	protected $fillable = array('id', 'nom', 'description', 'src');
   
   public function users(){
     return $this->belongToMany('App\User')->withPivot('niveau');
   }
}
?>