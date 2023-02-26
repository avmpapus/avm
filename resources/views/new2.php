              oninput: <span id="result"></span>

<input type="text">  <script>
  var input = document.body.children[0]; 
 input.oninput = function() { 
   document.getElementById('result').innerHTML = input.value; 
      }; 
</script> 




<input type="text">oninput: <span id="result"></span>
<script>
  var input = document.body.children[0]; 
 input.oninput = function() { 
   document.getElementById('result').innerHTML = input.value; 
      }; 
</script> 