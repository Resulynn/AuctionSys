@extends('layout.admin')
    @section('content')
        <div class="reg">
            <div class="d-flex ms-2 mt-5 py-5">
                <h2 class="px-5"><b>Add Product</b></h2>
            </div>
            {!! Form::open(['action'=>'App\Http\Controllers\InventoryController@store',
            'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
            <div class="mb-3 px-3" style="width: 500px; margin-left:70px" >
                <div class="py-1">
                    <img src="" width="150px" height="150px" >
                </div>
                <br>
                    <div class="up-photo" style="padding-top: 5px; ">
                       <h4> <label for="uploadpic">Upload Item Picture</label></h4>
                        {{Form::file('itemImg',['class'=>'form-control'])}}
                    </div>
              </div>

            <div class="reg-content">
                <div class="col-5">
                    <div class="row ms-2">
                        {{Form::label('prodName','Product Name',['class'=>'lead text-dark'])}}
                        {{Form::text('prodName','',['class'=>'form-control','placeholder'=>'Product Name...'])}}
                    </div>
                    <div class="row ms-2">
                        {{Form::label('prodDeets','Product Details',['class'=>'lead text-dark'])}}
                        {{Form::textArea('prodDeets','',['class'=>'form-control','placeholder'=>'Product Details'])}}
                    </div>
                </div>
                <div class="col-5 ms-5 pe-5">
                    <div class="row ms-2">
                        {{Form::label('category','Category',['class'=>'lead text-dark mb-3'])}}
                        {{Form::select('category',[
                            'M' => 'Men', 
                            'W' => 'Women',
                            'A' => 'Accessories',
                            'O' => 'Others'], 
                            null, ['placeholder' => 'Choose Category..']
                        )}}
                    </div>
                    <div class="row ms-2">
                        {{Form::label('type','Type',['class'=>'lead text-dark mb-3'])}}
                        {{Form::select('type',[
                            'T' => 'Tees', 
                            'P' => 'Pants',
                            'S' => 'Shorts',
                            'Sh' => 'Shoes',
                            'NA' => 'N/A'], 
                            null, ['placeholder' => 'Choose Category..']
                        )}}
                    </div>
                    <div class="row ms-2">
                        {{Form::label('initialPrice','Initial Price',['class'=>'lead text-dark'])}}
                        {{Form::text('initialPrice','',['class'=>'form-control','placeholder'=>'Initial Price'])}}
                    </div>
                    <div class="row ms-2">
                        {{Form::label('buyPrice','Buyout Price',['class'=>'lead text-dark'])}}
                        {{Form::text('buyPrice','',['class'=>'form-control','placeholder'=>'Buy Out Price'])}}
                    </div>
                    <div class="reg-button">
                        <div class="row mt-5 pt-5 justify-content-end">
                            {{Form::submit('Save Changes',['class'=>'btn btn-dark w-75 textalign-center', 'style'=>'border-radius: 0%;'])}}
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    @endsection