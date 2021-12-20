
<!DOCTYPE html>
<html lang="en">
<title>Create Visitor</title>
   @include('layouts.header')
    @section('title', 'Page Title')
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
                 @if (session('mssg'))
                <div class="alert alert-success">{{session('mssg')}}</div>
                @endif
                <div class="border rounded-lg">
                    
                    <form method="POST">
                        @csrf
                        @method('POST')
                          <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Firstname</label>
                                <input type="text" name="firstname" required class="form-control" id="" placeholder="Firstname">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Lastname</label>
                                <input type="text" name="lastname" required class="form-control" id="" placeholder="Lastname">
                            </div>
                          </div>
                          <div class="form-group">
                                <label for="inputAddress">Address</label>
                                <input type="text" name="address" required class="form-control" id="inputAddress" placeholder="1234 Main St">
                          </div>
                          
                           <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Phone</label>
                                <input type="text" name="phone" required class="form-control" id="" placeholder="Phone">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputPassword4">Staff Name</label>

                              <select name="staffname" required class="form-control" >
                                  @foreach ($data as $key=> $value)
                                              
                                          
                                  <option>{{ $value->firstname . ' '. $value->lastname  }}</option>
                                      @endforeach
                              </select>
                            </div>
                          </div>
                         
                          <button type="submit" class="btn btn-primary">Create Staff</button>
                    </form>
                </div>
            </div>
        </div>
    </body>

</html>


