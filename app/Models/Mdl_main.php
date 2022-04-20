<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Mdl_main extends Model {	
    
  	//get all data
  	public static function getAll($table)
	{
    	$data = DB::table($table)->get();
    	return $data;
  	}

  	//get data where condition
  	public static function getByCond($table, $where, $val)
    {
        $data = DB::table($table)
                    ->where($where, $val)
                    ->get();
        return $data;
    }

    //get data with 2 where condition
    public static function getByCond2Where($table, $where1, $val1, $where2, $val2)
    {
        $data = DB::table($table)
                    ->where($where1, $val1)
                    ->where($where2, $val2)
                    ->get();
        return $data;
    }

    //get data with 2 where condition
    public static function getByCond2WhereMY($table, $where1, $val1, $where2, $val2)
    {
        $data = DB::table($table)
                    ->where(DB::raw('MONTH('.$where1.')'), $val1)
                    ->where(DB::raw('YEAR('.$where2.')'), $val2)
                    ->get();
        return $data;
    }

    //get data with 2 where condition
    public static function getByCond2WhereMYJoin($table, $where1, $val1, $where2, $val2, $pk1, $table2, $pk2)
    {
        $data = DB::table($table)
                    ->where(DB::raw('MONTH('.$where1.')'), $val1)
                    ->where(DB::raw('YEAR('.$where2.')'), $val2)
                    ->join($table2, $table2.'.'.$pk2, '=', $table.'.'.$pk1)
                    ->get();
        return $data;
    }

    //get data with 3 where condition
    public static function getByCond3Where($table, $where1, $val1, $where2, $val2, $where3, $val3)
    {
        $data = DB::table($table)
                    ->where(DB::raw('WEEKDAY('.$where1.')'), '>', $val1)
                    ->where(DB::raw('WEEKDAY('.$where2.')'), '<', $val2)
                    ->where(DB::raw('MONTH('.$where3.')'), $val3)
                    ->get();
        return $data;
    }

    //get data with 3 where condition
    public static function getByCond3WhereJoin($table, $where1, $val1, $where2, $val2, $where3, $val3, $pk, $table1, $pk1, $where4, $val4)
    {
        $data = DB::table($table)
                    ->where(DB::raw('WEEKDAY('.$where1.')'), '>', $val1)
                    ->where(DB::raw('WEEKDAY('.$where2.')'), '<', $val2)
                    ->where(DB::raw('MONTH('.$where3.')'), $val3)
                    ->join($table, $table.'.'.$pk, '=', $table1.'.'.$pk1)
                    ->where($where4, $val4)
                    ->get();
        return $data;
    }

    //get data with 2 where condition
    public static function getByCond2OrWhere($table, $where1, $val1, $where2, $val2)
	{
    	$data = DB::table($table)
                    ->where($where1, $val1)
    				->Orwhere($where2, $val2)
    				->get();
    	return $data;
  	}

    //where tidak sama dengan
    public static function getByCond2($table, $where, $val)
    {
        $data = DB::table($table)
                    ->where($where,'<>',$val)
                    ->get();
        return $data;
    }

    //tidak sama dengan first
    public static function getByCond2First($table, $where, $val)
    {
        $data = DB::table($table)
                    ->where($where,'<>',$val)
                    ->get();
        return $data;
    }    

    //next interval day get data
    public static function getNextDay($table, $where, $val1, $val2)
    {
        $data = DB::table($table)
                ->whereBetween($where, [DB::raw($val1), DB::raw($val2)])->get();
        return $data;
    }

    //next interval day get data
    public static function getNextDayAndWhere($table, $where, $wheres, $val1, $val2, $val3)
    {
        $data = DB::table($table)
                ->whereBetween($where, [DB::raw($val1), DB::raw($val2)])
                ->where($wheres, $val3)
                ->get();
        return $data;
    }

    //next interval day get data
    public static function getNextDayAndWhere2($table, $where1, $where2, $where3, $val1, $val2, $val3, $val4)
    {
        $data = DB::table($table)
                ->whereBetween($where1, [DB::raw($val1), DB::raw($val2)])
                ->where($where2, $val3)
                ->where($where3, $val4)
                ->get();
        return $data;
    }

    //get data interval and join table
    public static function getNextDayJoin($table1, $table2, $pk1, $pk2, $where, $val1, $val2)
    {
        $data = DB::table($table1)
                ->whereBetween($where, [DB::raw($val1), DB::raw($val2)])
                ->join($table2, $table2.'.'.$pk2, '=', $table1.'.'.$pk1)
                ->get();
        return $data;
    }

    //get data interval and join table
    public static function getNextDayLeftJoin($table1, $table2, $pk1, $pk2, $where, $val1, $val2)
    {
        $data = DB::table($table1)
                ->whereBetween($where, [DB::raw($val1), DB::raw($val2)])
                ->leftJoin($table2, $table2.'.'.$pk2, '=', $table1.'.'.$pk1)
                ->get();
        return $data;
    }

    //get data interval and join table with where
    public static function getNextDayJoinWhere($table1, $table2, $pk1, $pk2, $where, $val1, $val2, $where2, $field)
    {
        $data = DB::table($table1)
                ->whereBetween($where, [DB::raw($val1), DB::raw($val2)])
                ->join($table2, $table2.'.'.$pk2, '=', $table1.'.'.$pk1)
                ->where($where2, $field)
                ->get();
        return $data;
    }

    //get data interval and join table with where
    public static function getNextDay2JoinWhere($table1, $table2, $table3, $pk1, $pk2, $pk3, $where, $val1, $val2, $where2, $field)
    {
        $data = DB::table($table1)
                ->whereBetween($where, [DB::raw($val1), DB::raw($val2)])
                ->join($table2, $table2.'.'.$pk2, '=', $table1.'.'.$pk1)
                ->join($table3, $table3.'.'.$pk3, '=', $table2.'.'.$pk3)
                ->where($where2, $field)
                ->get();
        return $data;
    }

    //get data interval and join table with 2where
    public static function getNextDay2JoinWhere2($table1, $table2, $table3, $pk1, $pk2, $pk3, $where, $val1, $val2, $where2, $field, $where3, $field1)
    {
        $data = DB::table($table1)
                ->whereBetween($where, [DB::raw($val1), DB::raw($val2)])
                ->join($table2, $table2.'.'.$pk2, '=', $table1.'.'.$pk1)
                ->join($table3, $table3.'.'.$pk3, '=', $table2.'.'.$pk3)
                ->where($where2, $field)
                ->where($where3, $field1)
                ->get();
        return $data;
    }

    //get by LIKE and JOIN
    public static function getByLikeJoin($table, $field, $value, $table2, $val1, $val2)
    {
        $data = DB::table($table)
                ->join($table2, $table2.'.'.$val2, '=', $table.'.'.$val1)
                ->where($field, 'LIKE', "%$value%")
                ->paginate(4);

        return $data;
    }

    //get by LIKE and another condition Join
    public static function getByLike2Join($table, $field, $value, $where, $val, $table2, $val1, $val2)
    {
        $data = DB::table($table)
                ->join($table2, $table2.'.'.$val2, '=', $table.'.'.$val1)
                ->where($field, 'like', $value.'%')
                ->orwhere($where,$val)
                ->paginate(4);

        return $data;
    } 

    //get by LIKE
    public static function getByLike($table, $field, $value)
    {
        $data = DB::table($table)
                ->where($field, 'LIKE', "%$value%")
                ->paginate(4);

        return $data;
    } 

    //get by LIKE and another condition
    public static function getByLike2($table, $field, $value, $where, $val)
    {
        $data = DB::table($table)
                ->where($field, 'like', $value.'%')
                ->orwhere($where,$val)
                ->paginate(4);

        return $data;
    } 

    //get data by where
    public static function getJoinWhereFirst($table, $where, $val, $table2, $val2, $val1)
    {
        $data = DB::table($table)
                    ->join($table2, $table2.'.'.$val2, '=', $table.'.'.$val1)
                    ->where($where,$val)
                    ->first();
        return $data;
    }

    //get where order data
    public static function getWhereOrder($table, $where, $val)
    {
        $data = DB::table($table)
                ->where($where, '<=', DB::raw('NOW()'))
                ->orderBy($val, 'DESC')
                ->get();

        return $data;
    }

    public static function getIDFromUserId($table, $where){
        $data = DB::table($table)
                ->where($where)->first();

        return $data;
    }

    //get where order data
    public static function getWhereOrder2($table, $where, $val, $val2)
    {
        $data = DB::table($table)
                ->where($where, $val)
                ->orderBy($val2, 'DESC')
                ->paginate(9);

        return $data;
    }

    //get data first where desc
    public static function getWhereOrderFirst($table, $where, $val, $val2)
    {
        $data = DB::table($table)
                ->where($where, $val)
                ->orderBy($val2, 'DESC')
                ->first();

        return $data;
    }

    //order date
    public static function getOrderPaginante($table, $val)
    {
        $data = DB::table($table)
                ->orderBy($val, 'DESC')
                ->paginate(5);

        return $data;
    }

    //get where order data
    public static function getOrder($table, $val)
    {
        $data = DB::table($table)
                ->orderBy($val, 'DESC')
                ->take(5)
                ->get();

        return $data;
    }

    //get where order 2 data
    public static function getWhereLimit2($table, $where, $val)
    {
        $data = DB::table($table)
                ->where($where, '<=', DB::raw('NOW()'))
                ->orderBy($val, 'DESC')
                ->limit(2)
                ->get();

        return $data;
    }

    //get where order 2 data and join table
    public static function getWhereLimit2Join($table, $table2, $val1, $val2, $where, $val)
    {
        $data = DB::table($table)
                ->join($table2, $table2.'.'.$val2, '=', $table.'.'.$val1)
                ->where($where, '<=', DB::raw('NOW()'))
                ->orderBy($val, 'DESC')
                ->limit(2)
                ->get();

        return $data;
    }

    // get data join desc
    public static function getJoinDesc($table, $table2, $val1, $val2, $where, $val)
    {
        $data = DB::table($table)
                ->join($table2, $table2.'.'.$val2, '=', $table.'.'.$val1)
                ->where($where, '<=', DB::raw('NOW()'))
                ->orderBy($val, 'DESC')
                ->get();

        return $data;
    }

  	//get data by id
    public static function getById($table, $where, $id)
    {
        $data = DB::table($table)
                ->where($where, $id)
                ->first();
        return $data;
    }

    //get data by id
    public static function getByConditionArray($table, $where)
    {
        $data = DB::table($table)
                ->where($where)
                ->first();
                
        return $data;
    }

    //get data by id
  	public static function getById2($table, $where, $id, $where2, $id2)
	{
    	$data = DB::table($table)
                ->where($where, $id)
    			->where($where2, $id2)
    			->first();
    	return $data;
  	}

    //get data join table
    public static function getJoin($table1, $table2, $val1, $val2)
    {
        $data = DB::table($table1)
                  ->join($table2, $table2.'.'.$val2, '=', $table1.'.'.$val1)
                  ->get();
          return $data;
    }

  	//get data join 3 table
    public static function getJoin2($table1, $table2, $table3, $table4, $val1, $val2, $val3, $val4)
    {
        $data = DB::table($table1)
                    ->join($table2, $table2.'.'.$val2, '=', $table1.'.'.$val1)
                    ->join($table3, $table3.'.'.$val3, '=', $table2.'.'.$val3)
                    ->join($table4, $table4.'.'.$val4, '=', $table3.'.'.$val4)
                    ->groupBy($table2.'.'.$val2)
                    ->get();
          return $data;  	
    }

    //get data join 4 table
    public static function getJoin3($table1, $table2, $table3, $table4, $table5, $val1, $val2, $val3, $val4, $val5, $val6)
  	{
  		$data = DB::table($table1)
                    ->join($table2, $table2.'.'.$val2, '=', $table1.'.'.$val1)
                    ->join($table3, $table3.'.'.$val3, '=', $table2.'.'.$val3)
                    ->join($table4, $table4.'.'.$val4, '=', $table2.'.'.$val4)
                    ->join($table5, $table5.'.'.$val5, '=', $table2.'.'.$val6)
                    ->get();
          return $data;
  	}

    //get data join 44 table
    public static function getJoin33($table1, $table2, $table3, $table4, $table5, $val1, $val2, $val3, $val4, $val5)
    {
        $data = DB::table($table1)
                    ->join($table2, $table2.'.'.$val2, '=', $table1.'.'.$val1)
                    ->join($table3, $table3.'.'.$val3, '=', $table1.'.'.$val3)
                    ->join($table4, $table4.'.'.$val4, '=', $table1.'.'.$val4)
                    ->join($table5, $table5.'.'.$val5, '=', $table1.'.'.$val5)
                    ->get();
          return $data;
    }

    //get data join and where table
    public static function getJoinWhere($table1, $table2, $val1, $val2, $where, $value)
    {
        $data = DB::table($table1)
                  ->join($table2, $table2.'.'.$val2, '=', $table1.'.'.$val1)
                  ->where($where, $value)
                  ->get();
          return $data;
    }

    //get data join and 2 where table
    public static function getJoinWhere2($table1, $table2, $val1, $val2, $where, $value, $where1, $value1)
    {
        $data = DB::table($table1)
                  ->join($table2, $table2.'.'.$val2, '=', $table1.'.'.$val1)
                  ->where($where, $value)
                  ->where($where1, $value1)
                  ->get();
          return $data;
    }    

    //get data 2 join and where table
    public static function getJoi2Where($table1, $table2, $table3, $val1, $val2, $val3, $val4, $where, $value)
    {
        $data = DB::table($table1)
                  ->join($table2, $table2.'.'.$val2, '=', $table1.'.'.$val1)
                  ->join($table3, $table3.'.'.$val3, '=', $table2.'.'.$val4)
                  ->where($where, $value)
                  ->get();
          return $data;
    }

    //get data 2 join and where 2 table
    public static function getJoi2Where2($table1, $table2, $table3, $val1, $val2, $val3, $val4, $where, $value, $where1, $value1)
    {
        $data = DB::table($table1)
                  ->join($table2, $table2.'.'.$val2, '=', $table1.'.'.$val1)
                  ->join($table3, $table3.'.'.$val3, '=', $table2.'.'.$val4)
                  ->where($where, $value)
                  ->where($where1, $value1)
                  ->get();
          return $data;
    }

    //get data 2 join and where table
    public static function getJoi2WhereFirst($table1, $table2, $table3, $val1, $val2, $val3, $where, $value)
    {
        $data = DB::table($table1)
                  ->join($table2, $table2.'.'.$val2, '=', $table1.'.'.$val1)
                  ->join($table3, $table3.'.'.$val3, '=', $table2.'.'.$val3)
                  ->where($where, $value)
                  ->first();
          return $data;
    }

    //get data 2 join and where table and select
    public static function getJoi2WhereSelGrp($table1, $table2, $table3, $select, $val1, $val2, $val3, $where, $value, $group)
    {
        $data = DB::table($table1)
                    ->join($table2, $table2.'.'.$val2, '=', $table1.'.'.$val1)
                    ->join($table3, $table3.'.'.$val3, '=', $table2.'.'.$val3)
                    ->select($select)
                    ->where($where, $value)
                    ->groupBy($group)
                    ->get();
          return $data;
    }

    //get data join and where table order desc
    public static function getJoinWhereOrder($table1, $table2, $val1, $val2, $where, $value, $val)
    {
        $data = DB::table($table1)
                  ->join($table2, $table2.'.'.$val2, '=', $table1.'.'.$val1)
                  ->where($where, $value)
                  ->orderBy($val, 'ASC')
                  ->get();
          return $data;
    }

    //get data join and where table order desc
    public static function getJoinWhereOrderDesc($table1, $table2, $val1, $val2, $where, $value, $val)
    {
        $data = DB::table($table1)
                  ->join($table2, $table2.'.'.$val2, '=', $table1.'.'.$val1)
                  ->where($where, $value)
                  ->orderBy($val, 'DESC')
                  ->get();
          return $data;
    }

    //get data join table order desc
    public static function getJoinOrderDesc($table1, $table2, $val1, $val2, $val)
    {
        $data = DB::table($table1)
                  ->join($table2, $table2.'.'.$val2, '=', $table1.'.'.$val1)
                  ->orderBy($val, 'DESC')
                  ->get();
        return $data;
    }

    //get data join and where table
    public static function getJoinWhereOrderlimit($table1, $table2, $val1, $val2, $where, $value, $val)
    {
        $data = DB::table($table1)
                  ->join($table2, $table2.'.'.$val2, '=', $table1.'.'.$val1)
                  ->where($where, $value)
                  ->orderBy($val, 'ASC')
                  ->limit(2)
                  ->get();
          return $data;
    }    

    //get data join and 2 where table 
    public static function getJoin2WhereOrderlimit($table1, $table2, $val1, $val2, $where, $value, $val, $where2, $value2)
    {
        $data = DB::table($table1)
                  ->join($table2, $table2.'.'.$val2, '=', $table1.'.'.$val1)
                  ->where($where, $value)
                  ->where($where2, '>' ,$value2)
                  ->orderBy($val, 'ASC')
                  ->limit(2)
                  ->get();
          return $data;
    }    

  	//get data with select
  	public static function getSelect($table, $sel1, $sel2)
	{
    	$data = DB::table($table)
    			->select($sel1, $sel2)
    			->get();
    	return $data;
  	}

  	//insert data
  	public static function InsertData($table, $val) 
  	{
        $data = DB::table($table)->insert($val);
        return $data;
    }

    //insert with last id
    public static function InsertDataID($table, $val) 
    {
        $data = DB::table($table)->insertGetId($val);
        return $data;
    }

    //update data
    public static function updateWhere1($table, $where1, $id, $val) 
    {
        $data = DB::table($table)->where($where1, $id)->update($val);
        return $data;
    }

    //update data
    public static function updateWhere2($table, $where1, $id1, $where2, $id2, $val) 
    {
        $data = DB::table($table)
                ->where($where1, $id1)
                ->where($where2, $id2)
                ->update($val);
        return $data;
    }

    //update data
    public static function updateWhereArray($table, $where, $val) 
    {
        $data = DB::table($table)
                ->where($where)
                ->update($val);
        return $data;
    }


    //delete data
  	public static function delete1($table, $id, $idx) 
  	{
        DB::table($table)->where($id, $idx)->delete();
    }

    public static function deleteWhereArray($table, $where) 
    {
        $data = DB::table($table)
                ->where($where)
                ->delete();
                
        return $data;
    }

    //join select
    public static function getJoinS($table1, $table2, $val1, $val2, $val3)
    {
        $data = DB::table($table1)
                  ->join($table2, $table2.'.'.$val2, '=', $table1.'.'.$val1)
                  ->select($table1.'.'.$val1, $table1.'.'.$val3)
                  ->groupBy($table1.'.'.$val1)
                  ->get();
          return $data;
    }

    //get data with select 1
    public static function getSelect1($table, $sel1)
    {
        $data = DB::table($table)
                ->select($sel1, 'dest')
                ->whereNotin($sel1, function($query)
                {
                    $query->select('id_dest')
                          ->from('itinerary');
                })
                ->get();
        return $data;
    }

    //get data with select 2 with group
    public static function getSelect2($table, $sel1)
    {
        $data = DB::table($table)
                ->select($sel1)
                ->groupBy($sel1)
                ->get();
        return $data;
    }

    //cek data
    public static function cekData($table, $where1, $data1) 
    {
        $data = DB::table($table)
                ->where($where1, $data1)
                ->first();
        
        return $data;
    }

    //cek data2
    public static function cekData2($table, $where1, $val1, $where2, $val2) 
    {
        $data = DB::table($table)
                ->where($where1,$val1)
                ->where($where2,$val2)
                ->first();
        
        return $data;
    }

    //cek data array
    public static function cekDataArray($table, $where) 
    {
        $data = DB::table($table)
                ->where($where)
                ->first();
        
        return $data;
    }

    public static function getDataFirst($table, $where){
        $data = DB::table($table)
                ->where($where)
                ->first();
        
        return $data;
    }

    //get data with dynamic query
    public static function getDataWithQuery($query) 
    {
        $data = DB::select($query);
        
        return $data;
    }


}