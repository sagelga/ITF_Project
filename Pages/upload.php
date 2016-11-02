<?php include("Templates/NavigationBar.html");?>


<script>+function(e){"use strict";var n=document.getElementById("drop-zone"),o=document.getElementById("js-upload-form"),t=function(e){console.log(e)};o.addEventListener("submit",function(e){var n=document.getElementById("js-upload-files").files;e.preventDefault(),t(n)}),n.ondrop=function(e){e.preventDefault(),this.className="upload-drop-zone",t(e.dataTransfer.files)},n.ondragover=function(){return this.className="upload-drop-zone drop",!1},n.ondragleave=function(){return this.className="upload-drop-zone",!1}}(jQuery);.
</script>

<style>.upload-drop-zone{height:200px;border-width:2px;margin-bottom:20px;color:#ccc;border-style:dashed;border-color:#ccc;line-height:200px;text-align:center}.upload-drop-zone.drop{color:#222;border-color:#222}
</style>

<h1 align="center">Upload files</h1>
<br>
<hr>
<br>
<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading"><strong>Upload Files</strong> <small>Bootstrap files upload</small></div>
    <div class="panel-body">

      <!-- Standar Form -->
      <h4>Select files from your computer</h4>
      <form action="" method="post" enctype="multipart/form-data" id="js-upload-form">
        <div class="form-inline">
          <div class="form-group">
            <input type="file" name="files[]" id="js-upload-files" multiple>
        </div>
        <button type="submit" class="btn btn-sm btn-primary" id="js-upload-submit">Upload files</button>
    </div>
</form>

<!-- Drop Zone -->
<h4>Or drag and drop files below</h4>
<div class="upload-drop-zone" id="drop-zone">
    Just drag and drop files here
</div>

<!-- Progress Bar -->
<div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
      <span class="sr-only">60% Complete</span>
  </div>
</div>

<!-- Upload Finished -->
<div class="js-upload-finished">
    <h3>Processed files</h3>
    <div class="list-group">
      <a href="#" class="list-group-item list-group-item-success"><span class="badge alert-success pull-right">Success</span>image-01.jpg</a>
      <a href="#" class="list-group-item list-group-item-success"><span class="badge alert-success pull-right">Success</span>image-02.jpg</a>
  </div>
</div>
</div>
</div>
</div> <!-- /container -->

<?php include("Templates/FooterBar.html");?>
