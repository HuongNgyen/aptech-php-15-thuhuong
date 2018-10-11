$(document).ready(function(){
    $('#js-button').click(function(){
    $.get ("data.json", function(response){
        
            //console.log(response)
            
            var table = '<table id="js-table" class="table"></table>';
            $('#demo-js').append(table);
            var thead = '<thead id="js-thead"></thead>';
            $(thead).appendTo('#js-table');
            var tr = '<tr id="js-tr-head"></tr>';
            $(tr).appendTo('#js-thead');
            var th = '<th>#</th><th>Name</th><th>Email</th>';
            $(th).appendTo('#js-tr-head');
            var tbody = ' <tbody></tbody>';
            $('#js-thead').after(tbody);
            for (i = 0; i < response.users.length - 1; i++) {
              var trBody = '<tr id="trBody-' + response.users[i].id + '"></tr>';
              $(trBody).appendTo('tbody');
              var thBody = ' <th>' + (i + 1) + '</th>';
              var tdBody = '<td>' + response.users[i].name + '</td><td>' + response.users[i].email + '</td> ';
              $('#trBody-' + response.users[i].id).append(thBody, tdBody);
            }
        
    });
});
});