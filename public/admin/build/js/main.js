jQuery(document).ready(function($) {
tinymce.init({
	
    selector: "#story", <!-- ให้ tag ที่เป็น textarea มี tool tinymce และกำหนดขนาด -->
    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak",
         "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
         "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
   ], <!-- ปลั๊กอินที่เราจะเพิ่มเข้ามา ถ้าอยากลดหรือเพิ่มอะไรก็ยัดเข้าไปในนี้ได้เลย ดูได้จาก document ของ tinymce -->
   toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
   toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
   image_advtab: true ,
   
   external_filemanager_path:"tinymce/plugins/responsivefilemanager/", <!-- จัด path ดี ๆ  -->
   filemanager_title:"Responsive Filemanager" ,
   external_plugins: { "filemanager" : "plugins/responsivefilemanager/plugin.min.js"} 
   ,relative_urls:false,
   remove_script_host:false,
   document_base_url:"http://localhost/spi_co_th2/public" <!-- url ถ้านำไปใช้บทโฮสก็เปลี่ยนตาม domain name -->
 });
//page 

//$(".dropzone").dropzone();
//$("form#img-upload").dropzone({

  //var myDropzone = new Dropzone(element, {

  Dropzone.options.myDropzone = {
    url: "imgUpload",
    maxFilesize: 5,
    addRemoveLinks: true,
    autoProcessQueue: true,
    dictResponseError: 'Server not Configured',
    acceptedFiles: ".png,.jpg,.gif,.bmp,.jpeg",
    init:function(){
      var self = this;
      // config
      self.options.addRemoveLinks = true;
      self.options.dictRemoveFile = "Delete";
      //New file added
      self.on("addedfile", function (file) {
       // console.log('new file added ', file);
      });
      // Send file starts
      self.on("sending", function (file) {
        //console.log('upload started', file);
        $('.meter').show();

      });
      
      // File upload Progress
      self.on("totaluploadprogress", function (progress) {
       // console.log("progress ", progress);
        $('.roller').width(progress + '%');
      });

      self.on("queuecomplete", function (progress) {
        $('.meter').delay(999).slideUp(999);
      });
      
      // On removing file
      self.on("removedfile", function (file) {
        //console.log(file);
        var name = file.name;
         $.ajax({
                type: 'GET',
                url: 'imgRemove/'+name,
                sucess: function(data){
                  console.log('success: ' + data);
                }
            });
      });

      self.on("success", function (file, response) {
        //var json_data = jQuery.parseJSON(response);
        //document.getElementById('attachment_id').value = response.uuid;
        console.log(response['succ']);
      });
    }
  };
  //add_file();
});

function form_page_submit() {
  //$("#img-upload").submit();
  $("#form_page").submit();
  //var myDropzone = Dropzone.forElement(".dropzone");
   // myDropzone.processQueue();
  //console.log("Submitt");
}

function add_file() {
    var mockFile = { name: "151126129522542.jpg",name: "151126129522542.jpg"};
    var myDropzone = new Dropzone("#my-dropzone");
    myDropzone.options.addedfile.call(myDropzone, mockFile);
    myDropzone.options.thumbnail.call(myDropzone, mockFile, "http://127.0.0.1/spi_co_th2/public/images/news/151125936285902/151126129522542.jpg");
    myDropzone.options.thumbnail.call(myDropzone, mockFile, "http://127.0.0.1/spi_co_th2/public/images/news/151125936285902/151126129522542.jpg");
}