@extends('layout.app')
    @section('content')
  
    <div class="bidding">
        <div class="bidding-container">
            <div class="row">
                <div class="col">
                    <div class="title">
                        <h3><b>BIDDING</b></h3>
                    </div>
                </div>
                <div class="col">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 48.165 48.165">
                            <path id="Icon_awesome-icons" data-name="Icon awesome-icons" d="M10.973,20.635a1.475,1.475,0,0,0,2.131,0l9.1-9.391a6.741,6.741,0,0,0-.462-9.772,6.432,6.432,0,0,0-8.775.64l-.928.954-.927-.954a6.433,6.433,0,0,0-8.776-.64,6.754,6.754,0,0,0-.47,9.772Zm13.539,9.453H20l-.666-1.34a2.577,2.577,0,0,0-2.414-1.673H10.171a2.577,2.577,0,0,0-2.414,1.673L7.1,30.088H2.583A2.582,2.582,0,0,0,0,32.671V45.582a2.581,2.581,0,0,0,2.58,2.582H24.512a2.582,2.582,0,0,0,2.58-2.582V32.671a2.582,2.582,0,0,0-2.58-2.583ZM13.546,44.026a4.892,4.892,0,1,1,4.892-4.892A4.892,4.892,0,0,1,13.546,44.026Zm33.433-10.9h-5.7l2.1-4.774c.2-.626-.37-1.243-1.146-1.243H35.127a1.138,1.138,0,0,0-1.176.856l-1.58,10.059a1.07,1.07,0,0,0,1.176,1.119h5.862l-2.277,7.808c-.178.626.4,1.214,1.151,1.214a1.247,1.247,0,0,0,1.027-.494L48,34.6c.459-.65-.109-1.477-1.023-1.477ZM44.974.031,31,2.18a2.947,2.947,0,0,0-2.4,2.978V15.2a7.831,7.831,0,0,0-1.505-.16c-3.325,0-6.021,2.021-6.021,4.515s2.7,4.515,6.021,4.515,6-2.006,6.021-4.483V9.375l10.536-1.62v4.438a7.832,7.832,0,0,0-1.505-.16c-3.325,0-6.021,2.021-6.021,4.515s2.7,4.515,6.021,4.515,6-2.006,6.021-4.483V3.01A2.872,2.872,0,0,0,44.974.031Z" transform="translate(0 0)"/>
                        </svg>
                    </div>
                </div>
            </div>

             <div class="item ">
                <div class="item-container ">
                    <div class="row justify-content-center align-items-center">
                        <div class="col">
                            <img
                            src="/itemImages/{{$item->itemImg}}"
                            class="card-img-top  mx-auto" 
                            style="border-radius: 0%;
                            width: 300px;
                            height:300px;"
                            />
                        </div>
                        <div class="col">
                            <div class="details">
                                <h3><b>{{$item->prodName}}</b></h3> 
                                    <div class="item-det">
                                        <h5>Category: {{$item->category}}</h5>
                                        <h5>Size: M</h5>
                                        <h5>Price: {{$item->initialPrice}} PHP</h5>
                                        <h5>Auction Ends On: {{$item->created_at}}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container w-75 py-5">
                    <div class="row">
                        <div class="col">
                            <div class="bidding-det">
                                <h5>Your Max Bid: 999.99</h5>
                                <h5>Starting Bid: 999.99</h5>
                                <h5>Highest Bid: 999.99</h5>
                            </div>
                        </div>
                    
                        <div class="col">
                            <div class="bid-amt">
                                    <h5>Enter your Bidding Amount</h5>
                                    <input type = "number" name = "number">
                                <div class="button">
                                    <button type="button" class="btn btn-dark w-50">PLACE BID</button>
                                </div>
                            </div>
                        </div>  
                    </div> 
                    <hr>
                </div>
                OR
                <div class="container w-75">
                    <div class="buy-now">
                        <div class="row">
                            <div class="col">
                                <h5>Buy for <b>{{$item->buyPrice}} PHP</b></h5>
                            </div>
                            <div class="col">
                                    <button type="button" class="btn btn-dark w-50">BUY NOW</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>


        
    @endsection
