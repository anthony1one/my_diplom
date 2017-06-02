function upload(blob) {
	alert('start');
  var xhr=new XMLHttpRequest();
  xhr.onload=function(e) {
      if(this.readyState === 4) {
          console.log("Server returned: ",e.target.responseText);
      }
  };
  var fd=new FormData();
  fd.append("that_random_filename.wav",blob);
  xhr.open("POST","<url>",true);
  xhr.send(fd);
  alert('stop');
}

$(document).ready(function () {
	$(".btn-edit").on('click', function(){
		$(".btn-delete").fadeToggle('fast');
	});
});