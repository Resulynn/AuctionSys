@extends('layout.app')

    @section('content')
    <div class="reg">
        <div class="d-flex ms-2 mt-5 py-5">
            <h2 class="px-5"><b> Your Biddings </b></h2>
        </div>
        <div class="d-flex ms-5 me-5 ps-5 py-1">
            <div class="row">
                <div class="col">
                    <img src="" width="150px" height="150px" alt="">    
                </div>
            </div>  
            <div class="container ps-2">
                <div class ="row">
                    <div class="col">
                        <p class="h4">Item Name</p>
                    </div>
                </div> 
                <div class ="row ps-4">
                    <div class="col">
                        <p>Item Description</p>
                    </div>
                </div>
                <div class="row ps-5 text-end w-25">
                    <div class ="row">
                        <div class="col">
                            <small>Highest Bid:</small>                                               
                        </div>
                    </div>  
                    <div class ="row">
                        <div class="col">
                            <small>Your Bid:</small>                                               
                        </div>
                    </div>
                </div>                       
            </div>     

            <div class="reg-button">
                <div class="row mt-5 pt-5 justify-content-end">
                    <a href="/profile/edit" class= "btn btn-dark w-100 textalign-center ps-5 pe-5 me-5">View</a>
                </div>
            </div>
        </div>
    </div>


        
    @endsection