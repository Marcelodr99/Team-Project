function exec(elem){
    var el = elem.parentNode.parentNode;
    //red
    if(el.style.background === "" || el.style.background === "rgb(255, 255, 255)"){
        el.style.background = "rgb(255, 0, 0)";
        el.contentEditable = "true";
    }
    else{ // White
        elem.checked = false;
        el.style.background = "rgb(255, 255, 255)";
        el.contentEditable = "false";
    }
    
    var first = el.childNodes[0].innerHTML;
    var last = el.childNodes[1].innerHTML;
    var phone = el.childNodes[2].innerHTML;
    var email = el.childNodes[3].innerHTML;
    var address = el.childNodes[4].innerHTML;
    var info = el.childNodes[5].innerHTML;
    var services = el.childNodes[6].innerHTML;
    var date = el.childNodes[7].innerHTML;
    var time = el.childNodes[8].innerHTML;

    time = time.replace(" ", "");


    var asd= first + "|" + last+ "|" +phone+ "|" +email+ "|" +address+ "|" +info+ "|" +services+ "|" +date+ "|" +time;

    document.getElementById("place").value = asd;
        
    
}
function uploadFile(){
    var input = document.getElementById("file");
    file = input.files[0];
    if(file != undefined){
      formData= new FormData();
      if(!!file.type.match(/image.*/)){
        formData.append("image", file);
        $.ajax({
          url: "upload.php",
          type: "POST",
          data: formData,
          processData: false,
          contentType: false,
          success: function(data){
              alert('Image has been successfully updated');
          }
        });
      }else{
        alert('Not a valid image!');
      }
    }else{
      alert('Input something!');
    }
  }