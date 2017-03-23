$(document).ready(function(){
	if (!window.sessionStorage.signedUp === true){
		videoModalCustomRequest();
	}else{
		loadVideo();
	}
	$(".signUpBeforeVideo").click(function(e){
		e.preventDefault();
		videoModalCustomRequest();
	})
})
function videoModalCustomRequest(){
	global_customRequestSignUpModal(
		function(){
			loadVideo();
		},
		function(){
			$(".customCloseEvent").html("Assistir o vídeo!");
		}
	);
}
function loadVideo(){
	$(".signUpRequired").hide();
	$(".youtubeFrame").show();
}