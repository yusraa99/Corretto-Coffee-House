
<!DOCTYPE html>
<html lang="en" class="">
    <base href="/public">
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
                    Edit User Information
                </h1>

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
      
        <form action="{{url('update_user_confirm',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="field">
                <label class="label">Username : </label>
                <div class="field-body">
                    <div class="field">
                        <div class="control icons-left">
                            <input name="username" class="input" type="text" value="{{$data->name}}">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="field">
                <label class="label">User First Name :</label>
                <div class="field-body">
                    <div class="field">
                        <div class="control icons-left">
                            <input name="first_name" class="input" type="text" value="{{$data->first_name}}">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="field">
                <label class="label">User Last Name : </label>
                <div class="field-body">
                    <div class="field">
                        <div class="control icons-left">
                            <input name="last_name" class="input" type="text" value="{{$data->last_name}}">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="field">
                <label class="label">User Email : </label>
                <div class="field-body">
                    <div class="field">
                        <div class="control icons-left">
                            <input name="email" class="input" type="text" value="{{$data->email}}">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="field">
                <label class="label">User Address : </label>
                <div class="field-body">
                    <div class="field">
                        <div class="control icons-left">
                            <input name="address" class="input" type="text" value=" {{$data->address}}">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="field">
                <label class="label">User Phone Number : </label>
                <div class="field-body">
                    <div class="field">
                        <div class="control icons-left">
                            <input name="phone" class="input" type="text" value="{{$data->phone}}">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="field">
                <label class="label">User Image : </label>
                <td data-label="Name">
                    <img style="max-width:150px; margin:auto" src="/user/{{$data->profile_photo_path}}">
                </td>
                <div class="field-body">
                    <div class="field">
                        <div class="control icons-left">
                            <input name="image" class="input" type="file" >
                        </div>
                    </div>
                </div>
            </div>

              <div class="buttons right nowrap">
                <div class="field grouped">
                    <div class="control">
                        <button name="submit" type="submit" class="button green">
                            Edit User
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
