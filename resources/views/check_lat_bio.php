<?



function translit($searchStringBio)
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
 
	$searchStringBio = strtr($searchStringBio, $converter);
	return $searchStringBio;
}

$str;


	/*
if((strpos($searchString,' sa')==false)||(strpos($searchString,' so')==false)
	   ||(strpos($searchString,' pla')==false)||(strpos($searchString,' ga')==false)
	   ||(strpos($searchString,' phi')==false))
  {
	  */
//if(!preg_match('#[а-яё/!]+#i',$searchString) 
	if(!preg_match('#[а-яё/0-9-)(*--=></|!]+#i',$searchStringBio) 
	and (strpos($searchStringBio,' ga')==false)
 and (strpos($searchStringBio,' so')==false) and (strpos($searchStringBio,' pla')==false)
 and (strpos($searchStringBio,' phi')==false) and (strpos($searchStringBio,' sa')==false)
  and (strpos($searchStringBio,' hu')==false)and (strpos($searchStringBio,' app')==false)
  and (strpos($searchStringBio,'app')==false)and (strpos($searchStringBio,'id')==false)
  and (strpos($searchStringBio,'id app')==false)and (strpos($searchStringBio,'id apk')==false)
  and (strpos($searchStringBio,'apk')==false)and (strpos($searchStringBio,'nde')==false)
  and (strpos($searchStringBio,' bun')==false)and (strpos($searchStringBio,'loj')==false)
  and (strpos($searchStringBio,'crip')==false)and (strpos($searchStringBio,'rlan')==false)
  and (strpos($searchStringBio,'lue')==false)and (strpos($searchStringBio,'cite')==false)
  and (strpos($searchStringBio,'t d;t')==false))
{	  
	echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Может Вы имели ввиду <b><a href="/public/search?_token=72x4ZFfJdwuRaCsO4dVm0sJ4Ut2tcEaO8GdXWHGs&searchString='.translit($searchStringBio).'">'.translit($searchStringBio).'</a></b> ?<br><br>';
}
//}

?>