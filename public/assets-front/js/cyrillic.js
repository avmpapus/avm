             //-------------------------------------------
             function verifyCyrillic(field)  
             {                   
                  var aCyrillic = [
                                      'купио',
                                      'цу',
                                      'ук',
                                      'ке',
                                      'ен',
                                      'нг',
                                      'гш',
                                      'шщ',
                                      'щз',
                                      'зх',
                                      'хъ',
                                      'ъф',
                                      'фы',
                                      'ыв',
                                      'ва',
                                      'ап',
                                      'пр',
                                      'ро',
                                      'ол',
                                      'лд',
                                      'дж',
                                      'жэ',
                                      'яч',
                                      'чс',
                                      'см',
                                      'ми',
                                      'ит',
                                      'ть',
                                      'ьб',
                                      'бю ',
                                    ];

                  var string = field.value; 
                  var aString = string.split(' '); 
                   
                   for (i=0; i < aString.length; i++)
                   {                   
                        if (aString[i].search(/[А-яЁё]/) != -1)  
                        {
                            //---   Попалось русское слово, ищем в массиве ---
                            if (aCyrillic.indexOf(aString[i]) != -1 && aString[i].length != 0)
                            {
                                alert('Недопустимое слово ' + aString[i]);
                                return false;
                            }// if                                
                        }// if
                   }// for

                    return true;
            }//  verifyCyrillic()    


