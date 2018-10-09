var table = '<table id="table-js" class="table"></table>';
$('#div-table-js').append(table);

var thead = '<thead id="thead-js"></thead>';
$(thead).appendTo('#table-js');
var tr ='<tr id ="tr-js"></tr>';
$(tr).appendTo('#thead-js');
var th ='<th id ="th-js"></th>';
$(th).appendTo('#tr-js');


var th = '<th>Mã Số</th>';
$('#th-js').append(th);
var td = '<td>Name</td><td>Email</td><td>Password</td>';
$('#tr-js').append(td);

var tbody = '<tbody id="tdBody-js"></tbody>';
$('#thead-js').after(tbody);
var trBody = '<tr id ="trBody"></tr>';
$(trBody).appendTo('#tdBody-js');
var thBody = '<th>1</th>';
var tdBody = '<td> Nguyễn Thị Thu Hường</td><td>huong@gmail.com</td><td>123</td>';
$('#trBody').append(thBody,tdBody);

var trBody1 = '<tr id ="trBody1"></tr>';
$(trBody1).appendTo('#tdBody-js');
var thBody1 = '<th>2</th>';
var tdBody1 = '<td>Lê Nguyễn Hoàng Nguyên</td><td>nguyen@gmail.com</td><td>123</td>';
$('#trBody1').append(thBody1,tdBody1);

