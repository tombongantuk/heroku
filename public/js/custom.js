$('.search-text').on('keyup',function(){
    $.ajax({
        url:'/article',
        type:'GET',
        dataType:'json',
        data:{
            'search':$('.search-text').val()
        },
        success:function(data){
            $('.article_list').html(data['view']);
            console.log(data);
        },
        error:function(xhr,status){
            console:log(xhr.error+"ERROR STATUS: "+status);
        },
        complete:function(){
            alreadyloading=false;
        }
    });
});
// // AJAX CRUD Operation
$('.comment').on('click',function(e) {
    e.preventDefaut();
    $.ajax({
        type: 'POST',
        url: '/comments',
        dataType:'json',
        data:$('.form-comment').serialize()
            // '_token':$('input[name=_token]').val(),
            // 'title':$('#article_id').val(),
            // 'content':$('#content').val(),
            // 'user':$('#user').val()
        ,
        success:function(data){
            $('.article.show').html(data['view']);
            console.log(data);
        },
        error:function(data){
            if (data.status === 422){
                var error=data.responseJSON;
                $.each(data.responseJSON,function(key,value){
                    $('.content').html(value['content']);
                });
            }
        },
        complete:function(){
            alreadyloading=false;
        }
    });
});
