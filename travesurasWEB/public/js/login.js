$(".login").click(function(){

	console.log("asdasdasda");
	var user = $(".mail").val();
	var pass = $(".password").val();
	debugger;
	$.ajax({
		type:"GET",
    	url: "https://pelotero.herokuapp.com/usuario/username/"+user,
    	success: function(data){
    	  console.log(data);
    	  debugger;
    	}
	});
});