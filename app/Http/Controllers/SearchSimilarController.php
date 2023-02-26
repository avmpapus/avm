<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use App\Employee;

use App\Http\Controllers\Collection;

class SearchSimilarController extends Controller
{



    
   public function searchall(Request $request)
    {

    $cString = $request->searchString;
  $aString = explode(' ', $cString);  // строку в массив 

  $aFind = array(
/*
                             'психологии' => 'психология',
                             'психологию' => 'психология',
                             'психологов' => 'психология',
							 'психиатр' => 'психология',
							 'психолог' => 'психология',
							 'психотерапевт' => 'психология',
							 'психотерапия' => 'психология',
							 'психиатрия' => 'психология',							
							 'психологу' => 'психология',
							 'психология' => 'психологической',
							 
							 'шубы' => 'шуба',
							 'шуба' => 'шуба',
							 'шубу' => 'шуба',
							 'шубой' => 'шуба',
							 'шуб' => 'шуба',
							 
							 'экологические' => 'экологии',
							 'экологическая' => 'экологии',
							 'экологических' => 'экологии',
							 
							 'стикеров' => 'стикеры',
							 'стикер' => 'стикеры',
							 
							 'канал ZIK' => 'зик',
							 'канале ZIK' => 'зик',
							 'каналов' => 'zik',
							 'канала ZIK' => 'зик',
							 'канале ZIK' => 'зик',
							 'телеканал ZIK' => 'зик',
							 'телеканал' => 'зик',
							 
							 'зеленского' => 'зеленский',
							 
							 'велосипеда' => 'велосипеда',
							 'велосипеде' => 'велосипеда',
							 
							 'велосипеда' => 'велосипеде',
							 'велосипеде' => 'велосипеде',
							 
							 'велосипеда' => 'велосипедной',
							 'велосипеде' => 'велосипедной',
							 
							 'велосипеда' => 'велосипедную',
							 'велосипеде' => 'велосипедную',
							 
							 'аминов' => 'амины',
							 'аминами' => 'амины',
							 
							 'unboxing' => 'анбоксинг',
							 'unbox' => 'анбоксинг',
							 'unbox' => 'анбокс',
							 
							 'популярных' => 'популярные',
							 'популярным' => 'популярные',
							 
							 'фреймворков' => 'фреймворки',
							 'фреймворком' => 'фреймворки',
							 
							 'far cry' => 'farcry',
							 
							 'конституційного' => 'конституции',
							 'конституції' => 'конституции',
							 'конституции' => 'конституции',
							 
							 'української' => 'український',
							 'українськими' => 'український',
							 'українського' => 'український',
							 'українських' => 'український',
							 'українські' => 'український',
							 
							 'La Roche-posay' => 'липикар',
							 'Lipikar' => 'липикар',
							 
							 'квартиры' => 'квартиру',
							 
							 'УФ' => 'ультрафиолетовая',
							 
							 'человеческого' => 'человеческий',
							 'фактора' => 'фактор',
							 
							 'крымской' => 'крыма',
							 'крымского' => 'крыма',
							 
							 'конституція' => 'конституції',
							 'конституцію' => 'конституції',
							 
							 'конституції' => 'конституція',
							 'конституцію' => 'конституція',
							 
							 'battlefield' => 'батлфилд',
							 
							 'ботокса' => 'ботекс',
							 'ботокса' => 'ботекса',
							 
							 'пиво' => 'пивной',
							 'пивной' => 'пиво',
							 'пиве' => 'пиво',
							 
							 'пиво' => 'пивоварение',
							 'пиве' => 'пивоварение',
							 'пива' => 'пивоварение',
							 
							 'жена' => 'жена',
							 'жене' => 'жена',
							 'жены' => 'жена',
							 'женой' => 'жена',
							 
							 'урок' => 'уроки',
							 'уроков' => 'уроки',
							 'уроками' => 'уроки',
							 
							 'сбережения' => 'сьережения',
							 'действительных' => 'действительными',
							 'действительным' => 'действительными',
							 
							 'полипропилена' => 'полипропилен',
							 'полипропилен' => 'пп',
							 'питания' => 'питание',
							 
							 'страхование застраховать страхование' => 'страховка',
							 'страховку' => 'страховка',
							 
							 "Assassin's Creed" => 'assassin',
							 
							 "долбаеб" => 'далбаеб',
							 "долбаёб" => 'даун',
		 		
				
				'эмоции' => 'эмоций',
				*/
                                  ); 

					
   foreach ($aString as $value)

   { 

       if ($value) 

       {
           $cZnach = array_search($value,  $aFind);

           if  ($cZnach) { 
		   $cString = $cString.' '.$cZnach;  
		   }

       }

   }
   $search =  $cString;
   
   $request->searchString =  $cString;
   
   
   $aSearch = explode(" ", $search);



    $search = " ";

    $i = 1;

    foreach ($aSearch as $value)

    if ($value) 



    {



         $search = '% '.$value.' %';      

        $posts = Employee::where('title' , 'LIKE', ' %'.$search.'% ')

                       ->Where('email', 'LIKE', '%'.$request->searchString.'%')
					   
                       ->Where('htmlpost', 'LIKE', ' %'.$request->searchString.' %')					   
                       
                       ->get();

         view('website.searchall',['posts'=>$posts]);



     }



    $request->searchString = '% '.$search.' %';


/*
$posts = Employee::where('title' ,'LIKE','% '.$search.' %')

                       ->orWhere('email', 'LIKE', '% '.$search.' %')      

                       ->Where('htmlpost', 'LIKE', '%'.$search.'%')						   
					   
					   ->orWhere('spelling', 'LIKE', '%'.$search.'%')						   

                       ->orderBy('id', 'DESC')

                       ->get();
*/


$similar = Employee::where('title' ,'LIKE','% '.$search.' %')

                       ->orWhere('email', 'LIKE', '% '.$search.' %')      

                       ->orWhere('htmlpost', 'LIKE', '%'.$search.'%')						   
					   
					   ->orWhere('spelling', 'LIKE', '%'.$search.'%')						   

                       ->orderBy('id', 'DESC')

                       ->get();


					 //  print_r($posts); 


return view('website.searchalls',['similar'=>$similar]);
	}

 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
                $posts = DB::table('posts')
        //->leftJoin('users_profiles','users_profiles.user_id','=','posts.user_id')
		//->orderBy('users_profiles.user_id')
        ->get();
        
        
        /*
        $posts = DB::table('users_profiles')
        ->leftJoin('posts','users_profiles.user_id','=','posts.user_id')
		->orderBy('posts.id')
        ->get();
        */
        //return view('website.postindexall', compact('posts'));
        return View('website.postindexall',['posts'=>$posts]);
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
