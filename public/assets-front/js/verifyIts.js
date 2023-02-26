/*******************допустимые английские слова при вводе запроса*********************/
function verifyIt(field)  

             {                   

                  var aEnglish = [ 'IQOS',
				                      'gjplhfdktybz',

                                      'JBL',

                                      'Civilization 6',

                                      'setam',

                                      'Sanix',

                                      'Mafia 2 Definitive Edition',

                                      '104.ua',

                                      'google.com.',

                                      'google.com.ua',

                                      'yandex.ru',

                                      'yandex.ua',

                                      'mail.ru',

                                      'go3.com.ua',

                                      'go3',

                                      'google',

                                      'yandex',

                                      'mail',

                                      'i.ua',

                                      'Epic Games',

                                      'games',

                                      'All Visible Objects',

                                      'IKEA',

                                      '6ix9ine',

                                      'B2B Jewelry',

                                      'Uber Eats',

                                      'Yasno',

                                      "Assassin's Creed Valhalla",

                                      'Irfan khan',

                                      'WizzAir',

                                      'SnowRunner',

                                      'UA:',

                                      'UA',

                                      'Zoom',

                                      'Atari VCS',

                                      'Playdate',

                                      'Intellivision Amico',

                                      'PlayStation 5',

                                      'Xbox Series X',

                                      'Monster Hunter: World',

                                      'Iceborne',

                                      'Bug Academy',

                                      'DLC: Monster Hunter: World — Iceborne',

                                      'Lightmatter',

                                      'To the Moon',

                                      'A Long Way Down',

                                      'Tokyo Mirage Sessions #FE Encore',

                                      'Dragon Ball Z: Kakarot',

                                      'The Walking Dead: Saints & Sinners',

                                      'Pillars of Eternity 2: Deadfire',

                                      'Journey to tne Savage Planet',

                                      'Warcraft III: Reforged',

                                      'Through the Darkest of Times',

                                      'Dawn of Fear',

                                      'Zombie Army 4: Dead War',

                                      'Tne Dark Crystal: Age of Resistance Tactics',

                                      'Survive the Blackout',

                                      'DLC: Metro Exodus: Sam’s Story',

                                      'Luna The Shadow Dust',

                                      'Wolcen: Lords of Mayhem',

                                      'Narcos: Rise of the Cartels',

                                      'Darksiders Genesis',

                                      'Dreams',

                                      'Snack World: Tne Dungeon Crawl — Gold',

                                      'Bayonetta',

                                      'Vanquish',

                                      'The Suicide of Rachel Foster',

                                      'How do you like it, Elon Musk?',

                                      'Two Point Hospital',

                                      'Dota Underlords',

                                      'Iron Man VR',

                                      'One Punch Man: A Hero Nobody Knows',

                                      'Halo: Combat Evolved Anniversary',

                                      'DLC: Tom Clancy’s The Division 2: Warlords of New York',

                                      'Granbulue Fantasy: Versus',

                                      'The Longing',

                                      'Murder by Numbers',

                                      'Yes, Your Grace',

                                      'Murder by Numbers',

                                      'Call of Duty: Warzone',

                                      'Ori and the Will of the Wisps',

                                      'Bless Unleashed',

                                      'Half Past Fate',

                                      'Nioh 2',

                                      'My Hero One’s Justice 2',

                                      'Granbulue Fantasy: Versus',

                                      'Animal Crossing: New Horizons',

                                      'Doom Eternal',

                                      'Doom 64',

                                      'Half-Life: Alyx',

                                      'Bleeding Edge',

                                      'DLC: Borderlands 3 – Guns, Love, and Tentacles',

                                      'DLC: Control: The Foundation',

                                      'One Piece: Pirate Warriors 4',

                                      'Call of Duty: Modern Warfare 2 – Campaign Remastered',

                                      'Persona 5 Royal',

                                      'Win',

                                      'Switch',

                                      'macOS',

                                      'Lin',

                                      'linux',

                                      'windows',

                                      'PS4',

                                      'XOne',

                                      'huawei',

                                      'samsung',

                                      'honor',

                                      'xiaomi',

                                      'oppo',

                                      'apple',

                                      'Acer',

                                      'AirOn',

                                      'Alcatel ONETOUCH',

                                      'AllCall',

                                      'Amazon',

                                      'ANYCOOL',

                                      'Apache',

                                      'Archos',

                                      'ASUS',

                                      'Lenovo',

                                      'LG',

                                      'Sony',

                                      'Siemens',

                                      'Sharp',

                                      'Sony Ericsson',

                                      'Xiaomi',

                                    ];



                  var string = field.value; 

                  var aString = string.split(' '); 

                   

                   var english = ''; 

                   for (i=0; i < aString.length; i++)

                   {                        

                        if (aString[i].search(/[А-яЁё]/) == -1)  

                        {

                          

                           english = english + ' ' + aString[i];  

                        }

                        else

                        {

                           

                            english = english.trim();

                            if (aEnglish.indexOf(english) == -1 && english.length != 0)

                            {

                                alert('Недопустимое слово-1 ' + english);

                                return false;

                            }                               

                            else

                                 english = "";

                        }

                   }



                        

                        english = english.trim();



                        if (aEnglish.indexOf(english) == -1 && english.length != 0)

                        {

                     
							id.innerHTML='<h2>Недопустимое слово ' + english+'</h2>';

                            return false;

                         }                              



                    return true;

            }   
			