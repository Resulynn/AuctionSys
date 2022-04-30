@extends('layout.sidebar')

<div class=" py-5 text-center bg-white" style="width: 150px; height:100%; border-right:1px #f0eeee solid;">
  <div class="list-group-flush mb-3">
       <h3>MENU</h3> 
  </div>
  <div class="list-group-flush mb-3">
    <a href="/admin/index" class="{{Request::is('admin/index') ? 'active':''}} list-group-item list-group-item-action" aria-current="true">
        ADD ITEM
    </a>
  </div>
  <div class="list-group-flush mb-3">
    <a href="/admin/list" class="{{Request::is('admin/list') ? 'active':''}} list-group-item list-group-item-action" aria-current="true">
        ITEM LIST
    </a>
  </div>
  <div class="list-group-flush mb-3">
    <a href="/admin/auctionlist" class="{{Request::is('admin/auctionlist') ? 'active':''}} list-group-item list-group-item-action" aria-current="true">
        AUCTION LIST
    </a>
  </div>
  <div class="list-group-flush mb-3">
    <a href="#" class="{{Request::is('admin/toShip') ? 'active':''}} list-group-item list-group-item-action" aria-current="true">
        TO SHIP
    </a>
  </div>
  <div class="list-group-flush mb-3">
    <a href="#" class="{{Request::is('admin/shipped') ? 'active':''}} list-group-item list-group-item-action" aria-current="true">
        SHIPPED
    </a>
  </div>
  <div class="list-group-flush mb-3">
    <a href="#" class="{{Request::is('admin/toPay') ? 'active':''}} list-group-item list-group-item-action" aria-current="true">
        TO PAY
    </a>
  </div>
  <div class="list-group-flush mb-3">
    <a href="#" class="{{Request::is('admin/completed') ? 'active':''}} list-group-item list-group-item-action" aria-current="true">
        COMPLETED
    </a>
  </div>
  <div class="list-group-flush mb-3">
    <a href="#" class="{{Request::is('admin/blocked') ? 'active':''}} list-group-item list-group-item-action" aria-current="true">
        BLOCKED USERS
    </a>
  </div>
</div>