
<!DOCTYPE html>
<html lang="en">
<title>Create Staff</title>
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
                <div class="btn btn-primary" style="margin-bottom: 20px;"><a href="{{route('staff.index')}}" style="color:#ffffff">View Staff</a></div>
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
                                    <input type="text" name="firstname" class="form-control" id="" placeholder="Firstname">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Lastname</label>
                                    <input type="text" name="lastname" class="form-control" id="" placeholder="Lastname">
                                </div>
                            </div>
                              
                              
                              
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Position</label>
                                <input type="text" name="position" class="form-control" id="" placeholder="Position">
                            </div>

                            <button type="submit" class="btn btn-primary">Create Staff</button>
                        </form>
                    </div>
            </div>

               

        </div>
        <script src="js/jquery-3.3.1.min.js"></script>
    </body>

</html>


