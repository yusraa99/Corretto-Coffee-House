
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
                    User Information
                </h1>

            </div>
        </section>

    </section>

    
    <div class="card-content" style="padding: 60px">
      
            <div class="field">
                <label class="label">Username : {{$data->name}}</label>
                
            </div>
            <br>
            <div class="field">
                <label class="label">User First Name : {{$data->first_name}}</label>
                
            </div>
            <br>
            <div class="field">
                <label class="label">User Last Name : {{$data->last_name}}</label>
                
            </div>
            <br>
            <div class="field">
                <label class="label">User Email : {{$data->email}}</label>
            </div>
              <br>
              <div class="field">
                <label class="label">User Address : {{$data->address}}</label>
            </div>
              <br>
              <div class="field">
                <label class="label">User Phone Number : {{$data->phone}}</label>
            
              
            </div>
              <br>
              <div class="field">
                <label class="label">User Created at : {{$data->created_at}}</label>
            </div>
              <br>
              
            <div class="field">
                <label class="label">User Image :</label>
                <td data-label="Name">
                    <img style="max-width:150px; margin:auto" src="/user/{{$data->profile_photo_path}}">
                </td>
                
            </div>

              <div class="buttons right nowrap">
                <div class="field grouped">
                    <div class="control">
                        <a href="{{url('edit_user_details',$data->id)}}"><button name="submit" type="submit" class="button green">
                            Edit User
                            <i class="mdi mdi-database-plus"></i>
                        </button></a>
                        <a href="{{url('delete_user',$data->id)}}" onclick="return confirm('Are You Sure To Delete This Item ?..')"><button name="submit" type="submit" class="button red">
                            Delete User  <i class="mdi mdi-trash-can"></i>
                        </button></a>
                    </div>
                </div>
            </div>
        
    </div>    
</div>

<!-- Start Tail -->
@include('admin.sections.tailAdmin')
<!-- End Tail -->
