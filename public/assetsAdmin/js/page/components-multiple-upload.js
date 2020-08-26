"use strict";
 
 
Dropzone.options.mydropzone = {
  autoProcessQueue: false,
  maxFiles:4,
  acceptedFiles:".png,.jpg,.gif,.bmp,.jpeg",
  init: function(){
    this.on('addedfile', function(file) {
      if (this.files.length > 4) {

        document.getElementById("swal-3").click();
      
      }
    });
   this.on("complete", function(){
    if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0)
    {
     var _this = this;
     _this.removeAllFiles();
    }
    list_image();
   });
  },
 };
 
var dropzone = new Dropzone("#mydropzone", {
  url: "#"
});
  var minSteps = 6,
  maxSteps = 60,
  timeBetweenSteps = 100,
  bytesPerStep = 100000;

dropzone.uploadFiles = function(files) {
  var self = this;

  for (var i = 0; i < files.length; i++) {
 
    var file = files[i];
      totalSteps = Math.round(Math.min(maxSteps, Math.max(minSteps, file.size / bytesPerStep)));

    for (var step = 0; step < totalSteps; step++) {
      var duration = timeBetweenSteps * (step + 1);
      setTimeout(function(file, totalSteps, step) {
        return function() {
          file.upload = {
            progress: 100 * (step + 1) / totalSteps,
            total: file.size,
            bytesSent: (step + 1) * file.size / totalSteps
          };

          self.emit('uploadprogress', file, file.upload.progress, file.upload.bytesSent);
          if (file.upload.progress == 100) {
            file.status = Dropzone.SUCCESS;
            self.emit("success", file, 'success', null);
            self.emit("complete", file);
            self.processQueue();
          }
        };
      }(file, totalSteps, step), duration);
    }
  }
}