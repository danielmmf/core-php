<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{

    protected $fillable = ["name", "group_id", "group_id"];

    protected $dates = ["baithday"];

    public static $rules = [
        "name" => "required",
        "group_id" => "numeric",
        "group_id" => "required|numeric",
    ];

    public function group()
    {
        return $this->belongsTo("App\Group");
    }

    public static function novoPlayer($novo_player)
    {
        $player = new self;
        $player->name = $novo_player['name'];
        $player->save();
        return $player;
    }
}
