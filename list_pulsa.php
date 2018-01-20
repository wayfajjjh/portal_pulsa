<html>
<head>
      <title>list</title>
      <script src="public/js/jquery.js"></script>
      <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<table class="table table-bordered table-striped">
                        <thead>
                              <tr>
                                    <th>Operator</th>
                                    <th>Code</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Status</th>
                              </tr>
                        </thead>
                        <tbody id="show_data">
                              
                        </tbody>
                  </table>
</body>
</html>

<script>
function tampil() {
            $.ajax({
                  type  : 'ajax',
                  url: 'pulsa.php',
                  async : false,
            dataType : 'json',
            success:function (data) {
                  var html ="";
                  var i;
                  for (var i = 0; i < data.message.length; i++) {
                        html+=  '<tr>'+
                                          '<td>'+data.message[i].operator+'</td>'+
                                          '<td>'+data.message[i].code+'</td>'+
                                          '<td>'+data.message[i].description+'</td>'+
                                          '<td>'+data.message[i].price+'</td>'+
                                          '<td>'+data.message[i].status+'</td>'+
                                    '</tr>';
                  }
                  $('#show_data').html(html);
            }
            });
            
      }



$(document).ready(function() {
            tampil();
  
      });   

</script>