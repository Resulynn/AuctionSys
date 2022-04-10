@extends('layout.app')

    {{-- user status bar --}}
    @section('userbar')
        <div class="d-flex justify-content-end bg-light border-bottom border-dark">
            <a class="text-decoration-none text-dark me-2" href="/login"><i class="bi bi-key pe-1"></i>Login</a>
            <a class="text-decoration-none text-dark pe-3" href="/register"><i class="bi bi-pen pe-1"></i>Register</a>
        </div>
    @endsection

    @section('content')
  
    <div class="login">
        <div class="row"> 
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 48.165 48.165">
                <path id="Icon_awesome-icons" data-name="Icon awesome-icons" d="M10.973,20.635a1.475,1.475,0,0,0,2.131,0l9.1-9.391a6.741,6.741,0,0,0-.462-9.772,6.432,6.432,0,0,0-8.775.64l-.928.954-.927-.954a6.433,6.433,0,0,0-8.776-.64,6.754,6.754,0,0,0-.47,9.772Zm13.539,9.453H20l-.666-1.34a2.577,2.577,0,0,0-2.414-1.673H10.171a2.577,2.577,0,0,0-2.414,1.673L7.1,30.088H2.583A2.582,2.582,0,0,0,0,32.671V45.582a2.581,2.581,0,0,0,2.58,2.582H24.512a2.582,2.582,0,0,0,2.58-2.582V32.671a2.582,2.582,0,0,0-2.58-2.583ZM13.546,44.026a4.892,4.892,0,1,1,4.892-4.892A4.892,4.892,0,0,1,13.546,44.026Zm33.433-10.9h-5.7l2.1-4.774c.2-.626-.37-1.243-1.146-1.243H35.127a1.138,1.138,0,0,0-1.176.856l-1.58,10.059a1.07,1.07,0,0,0,1.176,1.119h5.862l-2.277,7.808c-.178.626.4,1.214,1.151,1.214a1.247,1.247,0,0,0,1.027-.494L48,34.6c.459-.65-.109-1.477-1.023-1.477ZM44.974.031,31,2.18a2.947,2.947,0,0,0-2.4,2.978V15.2a7.831,7.831,0,0,0-1.505-.16c-3.325,0-6.021,2.021-6.021,4.515s2.7,4.515,6.021,4.515,6-2.006,6.021-4.483V9.375l10.536-1.62v4.438a7.832,7.832,0,0,0-1.505-.16c-3.325,0-6.021,2.021-6.021,4.515s2.7,4.515,6.021,4.515,6-2.006,6.021-4.483V3.01A2.872,2.872,0,0,0,44.974.031Z" transform="translate(0 0)"/>
              </svg>
              
            <div class="login-container">
                
                <div class="welcome col">
                    <h3><b>PRODUCT NAME</b></h3>
                </div>

                <div class="picture">
                <h1 style="text-align:Left"><img src = "\img\sample6.jpg">
                <label><h3><b>Name:</b></h3><label> 
                <label><h3><b>Category:</b></h3><label> 
                <label><h3><b>Size:</b></h3><label>
                <label><h3><b>Price:</b></h3><label> 

                </div>

               
                
        
            </div>
    
            <div class="button col pt-4">
            <label>Enter your Bidding Amount<label>
                    <input type = "number" name = "number">
                <button type="button" class="btn btn-dark w-75">PLACE BID</button>
                <br> </br>
                <br> </br>
                <br> </br>
               
            </div>
            
            <div class="button col pt-4">
            <label>Buy for 999<label>
                <button type="button" class="btn btn-dark w-75">PLACE BID</button>
                <br> </br>
                <br> </br>
                <br> </br>
               
            </div>
           
        </div>
    </div>

 

        
    @endsection
