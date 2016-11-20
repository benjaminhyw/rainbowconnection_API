<!DOCTYPE html>
<html>
  <head>
    <title>Users</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  </head>
  <body>
  
    <div>
      <h2>List of all users</h2>
      <br>
        <div id="user-data">
        @foreach($users as $user)
        <div>
          <h3><a href="/users/{{$user->id}}">{{$user->fullname}}</a>  |  {{$user->favorite_color}}</h3>
        </div>
        @endforeach
      </div>
    </div>

    <div class="ajax-load">
      <p><img src="http://i.imgur.com/seuaOqf.gif">Loading More users</p>
    </div>

    <script type="text/javascript">
      var page = 1;
      $(window).scroll(function() {
        if($(window).scrollTop() + $(window).height() >= $(document).height()) {
            page++;
            loadMoreData(page);
          }
      });

      function loadMoreData(page){
        $.ajax(
        {
          url: '?page=' + page,
          type: "get",
          beforeSend: function()
          {
            $('.ajax-load').show();
          }
        })
        .done(function(users)
        {
          if(users.html == " "){
            $('.ajax-load').html("No more records found");
            return;
          }
          $('.ajax-load').hide();
          $("#user-data").append(users.html);
        })
        .fail(function(jqXHR, ajaxOptions, thrownError)
        {
          alert('server not responding...');
        });
      }
    </script>
    
  </body>
</html>


