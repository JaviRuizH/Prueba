var path = 'http://localhost/test/public/';
//obtener las publicaciones de acuedo a la categoria
$(document).on('change','#category',function(){
    var id_category = $('#category').val();
    get_publication(id_category);
});


function get_publication(id_category){
    $.ajax({
        'url':this.path+'home/publication/'+id_category,
        'method':'get',
        success:function(info){
            var publications = "";
            $.each(info,function(e){
                console.log(this.title);
                publications+='<div class="col-md-3">'+this.title+'</div><div class="col-md-3">'+this.description+'</div><br/><hr/>';
            });
            $(".publications").html(publications);
        },error:function(error){
        
        }
    });
}
//obtener todas la publicaciones 

$(document).on('click','#list',function(){
    get_all_publicaciones();
    
});
function get_all_publicaciones(){
    $.ajax({
        'url':this.path+'home/publication',
        'method':'get',
        success:function(info){
            var publications = "<table class='table table-bordered table-striped'><tr>\
                <td>titulo</td>\
                <td>descripcion</td>\
                <td>categoria</td>\
            </tr>";

            $.each(info,function(e){
                console.log(this.title);
                publications+='<tr>\
                        <td>'+this.title+'</td>\
                        <td>'+this.description+'</td>\
                        <td>'+this.name+'</td>\
                    </tr>';
            });
            publications+="</table>"
            $(".publications").html(publications);
        },error:function(error){
        
        }
    });
}