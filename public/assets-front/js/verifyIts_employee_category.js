             /******************обработка синонимов*****************/
			 //-------------------------------------------
             function verifyIts_employee_category(field)  
             {                   
                  var aSynonyms = {
							  'єкономика':  'Экономика',
							  'Єкономика':  'Экономика',
                                  };



                  var string = field.value; 

                  string = string.trim();


                            for (var j in aSynonyms)              
                            {
                                 if (string == j)
                                 {
                            
                                     field.value = aSynonyms[j];
                                     return true; 
                                 }
                            }

                   return true;
            }