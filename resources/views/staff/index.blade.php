
<!DOCTYPE html>
<html lang="en">
<title>Staff List</title>
 <style>
    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
      </style>
  @include('layouts.header')
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
        <div class="site-wrap">
            <div class="site-mobile-menu site-navbar-target">
                <div class="site-mobile-menu-header">
                    <div class="site-mobile-menu-close mt-3">
                        <span class="icon-close2 js-menu-toggle"></span>
                    </div>
                </div>
                <div class="site-mobile-menu-body"></div>
            </div>
           
            <br><br><br><br>
            <div class="col-lg-8 offset-lg-2">
                <div class="btn btn-primary" style="margin-bottom: 20px;"><a href="{{route('staff.create')}}" style="color:#ffffff">Create Staff</a></div>
          
                    <div class="border rounded-lg" style="overflow-x:auto;">
                <table>
                      <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Position</th>
                     
                      </tr>
                      @foreach ($data as $key=> $value)
                      <tr>
                        <td>{{ ++$key}}</td>
                        <td>{{ $value->firstname }}</td>
                        <td>{{ $value->lastname }}</td>
                       
                      </tr>
                      @endforeach
                      


                    </table>

            </div>
            </div>

               

        </div>
        <script src="js/jquery-3.3.1.min.js"></script>
    </body>

</html>
