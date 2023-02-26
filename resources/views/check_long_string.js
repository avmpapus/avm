      function countChar(val) {
        var len = val.value.length;
        if (len >= 500) {
          val.value = val.value.substring(0, 500);
        } else {
          $('#charNum').text(0 + len);
		  if (val.value.length > 1000) {
		  document.getElementById("charNum").innerHTML = "<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color='blue'>Этого достаточн для читаемого поста или описания содержания ресурса!</font>";
		  }
		  if (val.value.length > 4999) {
		  document.getElementById("charNum").innerHTML = "<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color='red'>Это много!</font>";
		  }
		  if (val.value.length < 20) {
			  document.getElementById("charNum").innerHTML = "";
		  }
        }
      };