
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
                    Receipts Information
                </h1>

            </div>
        </section>

    </section>

    @if(session()->has('message'))
          <div class="notification red">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0">
              <div>
                <span class="icon"><i class="mdi mdi-buffer"></i></span>
                <b>{{session()->get('message')}}</b>
              </div>
              <button type="button" class="button small textual --jb-notification-dismiss">Dismiss</button>
            </div>
          </div>
    @endif

    <div class="card-content" >
        
        <table >
            <thead >
                <tr>
                    <th style="text-align: center">User ID</th>
                    <th style="text-align: center">Payment Type</th>
                    <th style="text-align: center">Order Shipment</th>
                    <th style="text-align: center">Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $data)
                    
                
                    <tr>
                        <td data-label="Name" style="text-align: center">{{$data->user_id}}</td>
                        
                        <td data-label="Category" style="text-align: center">{{$data->payment_id}}</td>
                           
                        <td data-label="Category" style="text-align: center">{{$data->ordershipment_id}}</td>
                        <td data-label="Category" style="text-align: center">{{$data->status}}</td>

                        <td data-label="Name">
                        </td>
                        <td class="actions-cell">
                            <div class="buttons right nowrap">
                                <button class="button small green --jb-modal" data-target="sample-modal-2" type="button">
                                    <a href="">Accept</a>
                                </button>
                                <button class="button small red --jb-modal" data-target="sample-modal" type="submit">
                                    <a href=""onclick="return confirm('Are You Sure To Delete This Item ?..')">Not Accept</a>
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    

    
</div>

<!-- Start Tail -->
@include('admin.sections.tailAdmin')
<!-- End Tail -->
