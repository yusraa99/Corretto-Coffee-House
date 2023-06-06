
<!DOCTYPE html>
<html lang="en" class="">
@include('admin.sections.headAdmin')
<div id="app">

    <!-- Start Nav -->
    @include('admin.sections.nav')
    <!-- End Nav -->

    <!-- Start Slider -->
    @include('admin.sections.slider')
    <!-- End Slider -->
    <section class="section main-section">

        <!-- Start Performance -->
        @include('admin.sections.performance')
        <!-- End Performance -->
        <section class="is-hero-bar">
            <div class="flex flex-col md:flex-row justify-between space-y-6 md:space-y-0">
                <h1 class="title">
                    Add Ordershipment
                </h1>

            </div>
            <div class="buttons right nowrap">
                <div class="field grouped">
                    <div class="control">
                        <a href="{{url('view_ordershipment')}}"><button name="submit" type="submit" class="button blue">
                            Back to Ordershipment
                        </button></a>
                    </div>
                </div>
            </div>
        </section>

    </section>

    @if(session()->has('message'))
          <div class="notification green">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0">
              <div>
                <span class="icon"><i class="mdi mdi-buffer"></i></span>
                <b>{{session()->get('message')}}</b>
              </div>
              <button type="button" class="button small textual --jb-notification-dismiss">Dismiss</button>
            </div>
          </div>
        
    @endif
    <div class="card-content">
      
        <form action="{{url('create_ordershipment')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="field">
                <label class="label">Company Name</label>
                <div class="field-body">
                    <div class="field">
                        <div class="control icons-left">
                            <input name="compname" class="input" type="text" placeholder="Please Enter Company Name" required>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="field">
                <label class="label">Company Phone Number</label>
                <div class="field-body">
                    <div class="field">
                        <div class="control icons-left">
                            <input name="compphone" class="input" type="text" placeholder="Please Enter Company Phone Number" required>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="field">
                <label class="label">Company Email</label>
                <div class="field-body">
                    <div class="field">
                        <div class="control icons-left">
                            <input name="compemail" class="input" type="email" placeholder="Please Enter Company Email" required>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="field">
                <label class="label">Days Work</label>
                <div class="field-body">
                    <div class="field">
                        <div class="control icons-left">
                            <input name="compwork" class="input" type="text" placeholder="Please Enter Days Work" required>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            
              <div class="buttons right nowrap">
                <div class="field grouped">
                    <div class="control">
                        <button name="submit" type="submit" class="button green">
                            Add Ordershipment
                            <i class="mdi mdi-database-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </form>
        
    </div>    
</div>

<!-- Start Tail -->
@include('admin.sections.tailAdmin')
<!-- End Tail -->
