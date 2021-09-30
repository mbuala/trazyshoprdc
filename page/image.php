
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
  var loadFile2 = function(event) {
    var output2 = document.getElementById('output2');
    output2.src = URL.createObjectURL(event.target.files[0]);
    output2.onload = function() {
      URL.revokeObjectURL(output2.src) // free memory
    }
  };
  var loadFile_logo = function(event) {
    var output_logo = document.getElementById('output_logo');
    output_logo.src = URL.createObjectURL(event.target.files[0]);
    output2.onload = function() {
      URL.revokeObjectURL(output_logo.src) // free memory
    }
  };
</script>
<form enctype="multipart/form-data" action="fileupload.php" method="post">
<div class="single-head">
    <div class="single-info">
    	<h4>Logo de l'entreprise</h4>
	  <img id="output_logo" src="images/foire/profil/logo_tous.png" style="width:450px;"/>
	</div>
</div>
</form>