
<!DOCTYPE html>
<html lang="en">
<title>Visitor List</title>
       
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
                <div class="btn btn-primary" style="margin-bottom: 20px;"><a href="{{route('visitors.create')}}" style="color:#ffffff">Record Visitor</a></div>
                
                <div class="border rounded-lg" style="overflow-x:auto;">
                    <table>
                      <tr>
                        
                        <th>Visitor's Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Staff's Name</th>
                        <th>Time in</th>
                        <th>Time out</th>
                        <th>Action</th>

                      
                      </tr>

                        @foreach ($data as $key=> $value)
                            <tr>
                                
                                <td>{{ $value->firstname . ' '. $value->lastname }}</td>
                                <td>{{ $value->address }}</td>
                                <td>{{ $value->phone }}</td>
                                <td>{{ $value->staffname }}</td>
                                <td>{{ $value->created_at }}</td>
                                @if($value->timeout =='')         
                                      <td>null</td>         
                                @else
                                     <td>{{ $value->timeout }}</td>       
                                @endif
                                <td>
                                    <div class="btn-group">
                                        <a href="visitors/edit/{{$value->id}}" class="btn btn-primary btn-xs">Edit</a>
                                    </div>
                                </td>
                            </tr>

                        @endforeach
                    </table>
                    <br>
                     @if ($data->hasPages())
                        <div class="pagination-wrapper" style="color: red;">
                             <span style="color:red">{{ $data->links() }}</span>
                        </div>
                    @endif

                </div>
            </div>
        </div>
        <script src="js/jquery-3.3.1.min.js"></script>
    </body>

</html>
