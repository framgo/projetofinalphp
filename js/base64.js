$('#fotoId').on('change', function(){
    var reader = new FileReader();

    var svgTag = document.getElementsByTagName('svg')[0];
    if(svgTag != null){
        var imgTag = document.createElement('img');
        
        imgTag.setAttribute('id', 'animeId');
         
        svgTag.parentNode.replaceChild(imgTag, svgTag);   
    }
    
    reader.onloadend = function() {
        $('#animeId').attr('src', reader.result);
    }
    reader.readAsDataURL(this.files[0]);
});