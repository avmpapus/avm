<?



function translit($searchString)
{
	$converter = array(
		'а' => 'f',    'б' => ',',    'в' => 'd',    'г' => 'u',    'д' => 'l',
		'е' => 't',    'ё' => '`',    'ж' => ';',   'з' => 'p',    'и' => 'b',
		'й' => 'q',    'к' => 'r',    'л' => 'k',    'м' => 'v',    'н' => 'y',
		'о' => 'j',    'п' => 'g',    'р' => 'h',    'с' => 'c',    'т' => 'n',
		'у' => 'e',    'ф' => 'a',    'х' => '[',    'ц' => 'w',    'ч' => 'x',
		'ш' => 'i',   'щ' => 'o',  'ь' => 'm',     'ы' => 's',    'ъ' => ']',
		'э' => "'",    'ю' => '.',   'я' => 'z',
 
		'f' => 'а',    ',' => 'б',    'd' => 'в',    'u' => 'г',   'l'  => 'д',
		't' => 'е',     '`'=> 'ё',     ';'=> 'ж',   'p'=> 'з' ,    'b'=> 'и' ,
		'q' => 'й',    'r' => 'к',    'k'=> 'л' ,    'v' => 'м',    'y' => 'н',
		 'j' =>'о',     'g'=> 'п',     'h'=> 'р',    'c' => 'с',     'n' =>'т',
		 'e'=> 'у',     'a'=> 'ф',     '[' =>'х',    'w'=> 'ц' ,    'x' => 'ч',
		 'i'=> 'ш',    'o'=> 'щ',   'm'=> 'ь',     's' => 'ы',     ']'=> 'ъ',
		"'" => 'э',     '.'=> 'ю',   'z' => 'я',
	);
 
	$searchString = strtr($searchString, $converter);
	return $searchString;
}

$str;


	/*
if((strpos($searchString,' sa')==false)||(strpos($searchString,' so')==false)
	   ||(strpos($searchString,' pla')==false)||(strpos($searchString,' ga')==false)
	   ||(strpos($searchString,' phi')==false))
  {
	  */
//if(!preg_match('#[а-яё/!]+#i',$searchString) 
	if(!preg_match('#[а-яё/0-9-)(*--=></|!]+#i',$searchString) 
	and (strpos($searchString,' ga')==false)
 and (strpos($searchString,' so')==false) and (strpos($searchString,' pla')==false)
 and (strpos($searchString,' phi')==false) and (strpos($searchString,' sa')==false)
  and (strpos($searchString,' hu')==false)and (strpos($searchString,' app')==false)
  and (strpos($searchString,'app')==false)and (strpos($searchString,'id')==false)
  and (strpos($searchString,'id app')==false)and (strpos($searchString,'id apk')==false)
  and (strpos($searchString,'apk')==false)and (strpos($searchString,'nde')==false)
  and (strpos($searchString,' bun')==false)and (strpos($searchString,'loj')==false)
  and (strpos($searchString,'crip')==false)and (strpos($searchString,'rlan')==false)
  and (strpos($searchString,'lue')==false)and (strpos($searchString,'cite')==false)
  and (strpos($searchString,'t d;t')==false))
{	  
	echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Может Вы имели ввиду <b><a href="/public/search?_token=72x4ZFfJdwuRaCsO4dVm0sJ4Ut2tcEaO8GdXWHGs&searchString='.translit($searchString).'">'.translit($searchString).'</a></b> ?<br><br>';
}
//}

?>