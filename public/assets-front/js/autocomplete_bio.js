$( function() {
var src = [
	  "жизнь что это",
	  "пауки",
	  "пауки это",
	  "пауки ядовитые",
	  "Каракурты",
	  "арахниды",
	  "паукообразные",
	  "гены",
	  "днк",
	  "метаболизм",
	  "энергия",
	  "энергия жизни",
	  "цепь химических превращений",
	  "взаимосвязь",
	  "степень окисления элементов",
	  "цепочки химических превращений",
	  "рнк",
    ];
$("#tags").autocomplete({
	autoFocus: true,	
    maxResults: 10,
    source: function(request, response) {
        var results = $.ui.autocomplete.filter(src, request.term);
        response(results.slice(0, this.options.maxResults));
    },
    select: function (e, ui) {
    	$("#tags").val(ui.item.value);
        $("#tags_submit").click();
    }
});
$("#tags").on('keydown',function(ev){
	if(ev.keyCode==13)
		$("#tags_submit").click();
});

});