
<!DOCTYPE html>
<html lang="en">
<title>Edit Staff</title>
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
                <div class="btn btn-primary" style="margin-bottom: 20px;"><a href="{{route('home')}}" style="color:#ffffff">View Visitor</a></div>
          
                    <div class="border rounded-lg">
                        <form method="POST">
                             @csrf
                             @method('PUT')
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label for="inputEmail4">Firstname</label>
                                      <input type="text" name="firstname" required value="{{$data->firstname}}" class="form-control" id="" placeholder="Firstname">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label for="inputPassword4">Lastname</label>
                                      <input type="text" name="lastname" required value="{{$data->lastname}}" class="form-control" id="" placeholder="Lastname">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputAddress">Address</label>
                                    <input type="text" name="address" required value="{{$data->address}}" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                </div>
                              
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label for="inputEmail4">Phone</label>
                                      <input type="text" name="phone" required value="{{$data->phone}}" class="form-control" id="" placeholder="Phone">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label for="inputPassword4">Staff Name</label>
                                        <select name="staffname" required  class="form-control" >              
                                            <option>{{$data->staffname}}</option>
                                        </select>
                                    </div>
                                </div>
                                 <input type="hidden" name="timeout" value="{{$data->timeout}}" class="form-control" id="" placeholder="Phone">
                                <div class="form-check">
                                    <input type="checkbox" {{ ($data->timeout) ? "checked" : "" }}  name="timeout2" class="form-check-input" >
                                    <label class="form-check-label"  >Check me out</label>
                                </div>
 
                              <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
            </div>

               

        </div>
        <script src="js/jquery-3.3.1.min.js"></script>
    </body>

</html>


