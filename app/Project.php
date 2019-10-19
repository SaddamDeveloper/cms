<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Project extends Model
{
    protected $table = 'projects';
    public $primaryKey = 'id';
    public $timestamps = true;

    public function ProjectID(){
        while (true) {
            $sql = DB::select('select max(projectid) FROM projects as max_val');
            return $sql;
            foreach ($sql as $row_data) {
                $postfix =  $row_data->max_val;
            }
            $caseid = 'CASE';
            $count = DB::table('projects')->select(DB::raw('max(substring(projectid, 5, 5)) as max_val'))->get()->count();
            if ($count == 0) {
                $caseid = $caseid . '00001';
            } else if ($count > 0) {
                $postfix = $postfix + 1;
                $addVal = str_pad($postfix, 5, '0', STR_PAD_LEFT);
                $caseid = $caseid . $addVal;
            }

            $res = DB::table('projects')->where('projectid', '=', $caseid)->count();
            if ($res == 0) {
                break;
            }
            return $res;
        }
    }
}
