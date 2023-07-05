$(document).ready(function(){
    $(".nav-tabs a").click(function(){
      $(this).tab('show');
    });
    $('.nav-tabs a').on('shown.bs.tab', function(event){
      var x = $(event.target).text();         // active tab
      var y = $(event.relatedTarget).text();  // previous tab
      $(".act span").text(x);
      $(".prev span").text(y);
    });
  });

  $(document).ready(function(){
    $.getJSON("message.json", function(data){
      var message_data = '';
      $.each(data, function(key, value){
        message_data += '<tr>';
        message_data += '<td>' +value.Name+'</td>';
        message_data += '<td>' +value.Color_Code+'</td>';
        message_data += '<td>' +value.Circle_Icon+'</td>';
        message_data += '<td>' +value.Triangle_Icon+'</td>';
        message_data += '</tr>';
      });
      $('#message_table').append(message_data);
    });
  });

  
  $(document).ready(function(){
    $.getJSON("region.json", function(data){
      var region_data = '';
      $.each(data, function(key, value){
        region_data += '<tr>';
        region_data += '<td>' +value.ID+'</td>';
        region_data += '<td>' +value.RColor_Code+'</td>';
        region_data += '<td>' +`<button type="button" class="btn btn-danger" onclick='removeItem()'>Remove</button>`+'</td>';
        region_data += '</tr>';
      });
      $('#region_table').append(region_data);
    });
  });