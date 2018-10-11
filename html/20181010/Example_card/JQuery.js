$(document).ready(function(){
    $('#js-button').click(function(){
    $.get("http://101.0.86.110:6699/api/v1/posts?page=2", 
    function(response){
       var data = response.data.posts.data;
       console.log(data[0]);
       //console.log(data.length);
        for(i = 0; i< 3; i++){
           //tạo div
           var div = '<div id ="js-div" class="col-12 d-flex flex-row" ></div>';
           $(div).appendTo('#js-div1');

           //tạo card
           var card = '<div id = "js-card-' + data[i].id + '" class="card col-4 mx-4 mt-4 border border-success" style="width: 20rem;"></div>';
           $(card).appendTo('#js-div');
           var cardbody = '<div id = "js-card-body-' + data[i].id + '"></div>';
           $(cardbody).appendTo('#js-card-' +data[i].id);

           var h1 = '<h1>' + data[i].title + '</h1>';
           $(h1).appendTo('#js-card-body-' +data[i].id);
           var a = '<p>' + data[i].slug + '</p>';
           $(a).appendTo('#js-card-body-' +data[i].id);
           var h4 = '<h4>' + data[i].description +'</h4>';
           $(h4).appendTo('#js-card-body-' + data[i].id);
           var b = '<p>' + data[i].content + '</p>';
           $(b).appendTo('#js-card-body-' +data[i].id);

           /*var div1 = '<div id = "div-js-col-4"  class="card bg-danger"></div>';
           $(div1).appendTo('#js-div-' +data[i].id);
           var div2 = '<div class = "card-body"></div>';*/
           

       }

       for(i = 3; i < 5; i++){
        var div1 = '<div id ="js--div1" class="col-12 d-flex flex-row" ></div>';
        $(div1).appendTo('#js-div1');

        //tạo card
        var card1 = '<div id = "js-card-1-' + data[i].id + '" class="card col-6 mx-4 mt-4 border border-primary" style="width: 20rem;"></div>';
        $(card1).appendTo('#js--div1');

        var cardhead = '<div id = "card-head-">'  + data[i].title +' </div>';
        $(cardhead).appendTo('#js-card-1-' +data[i].id);


        //tao carrd body
        var cardbody1 = '<div id = "js-card-body1-' + data[i].id + '" class="card-body"></div>';
        $(cardbody1).appendTo('#js-card-1-' +data[i].id);

        var img = '<img id="image-card-' + data[i].id + '" src="">';
        $(img).appendTo('#js-card-body1-' +data[i].id);

       
        var h11 = '<h1>' + data[i].title + '</h1>';
        $(h11).appendTo('#js-card-body1-' +data[i].id);
        var a1 = '<p>' + data[i].slug + '</p>';
        $(a1).appendTo('#js-card-body1-' +data[i].id);
        var h41 = '<h4>' + data[i].description +'</h4>';
        $(h41).appendTo('#js-card-body1-' + data[i].id);
        var b1 = '<p>' + data[i].content + '</p>';
        $(b1).appendTo('#js-card-body1-' +data[i].id);
       }
       
    });
    $('#js-button').hide();
});
});