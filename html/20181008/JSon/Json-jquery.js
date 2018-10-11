$(document).ready(function() {
    $('#js-button').click(function() {
      $.get('data.json', function(data, status) {
        if (status === 'success') {
          var table = '<table id="js-table" class="table"></table>';
          $('#js-div-table').append(table);
          var thead = '<thead id="js-thead"></thead>';
        //   $(thead).appendTo('#js-table');
        $('#js-table').append(thead);
          var tr = '<tr id="js-tr-head"></tr>';
          $(tr).appendTo('#js-thead');
          var th =
            '<th scope="col">#</th><th scope="col">Name</th><th scope="col">Email</th><th>Password</th><th>created_at</th><th>updated_at</th>';
          $(th).appendTo('#js-tr-head');
          var tbody = ' <tbody></tbody>';
          $('#js-thead').after(tbody);

          var users = data.users;
          users.forEach(function(user, index) {
            var trBody = '<tr id="js-tr-body-' + index + '"></tr>';
            $(trBody).appendTo('tbody');
            var thBody = ' <th>' + user.id + '</th>';
            var tdBody = '<td>' + user.name + '</td><td>' + user.email + '</td><td>' + user.password + '</td><td>' + user.created_at + '</td><td>' + user.updated_at + '</td>';
            $('#js-tr-body-' + index).append(thBody, tdBody);
          });

          }
          $('#js-button').hide();
        
      });
    });
  });