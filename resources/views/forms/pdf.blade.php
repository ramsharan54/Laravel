
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table class="table table-bordered">
      <tr>
        <td>
          Name:{{$user->full_name}}
        </td>
        <td>
         Street Name: {{$user->street_address}}
        </td>
      </tr>
      <tr>
        <td>
         City: {{$user->city}}
        </td>
        <td>
        Zip No:  {{$user->zip_code}}
        </td>
      </tr>
    </table>
  </body>
</html>