$('.vimeo').each(function(){

    $.ajax({
        type:'GET',
        url: 'http://vimeo.com/api/v2/video/' + this.id  + '.json',
        jsonp: 'callback',
        url2:"//vimeo.com/"+this.id+" data-lity",
        dataType: 'jsonp',
        success: function(data){
                $('<img/>' ,{
                    src:data[0].thumbnail_large
                }).appendTo('#'+data[0].id);
        }
    });
});