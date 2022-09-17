<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel= "stylesheet" href= "\css\style.css">
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">    
</head>
<body>

    <div class="d-flex justify-content-center">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Condition</th>
                <th scope="col">Category</th>
                <th scope="col">Type</th>
                <th scope="col">Starting Price</th>
                <th scope="col">Buy Price</th>
                <th scope="col">Stock Left</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $rep)
                <tr>
                    <td>{{$rep->prodName}}</td>
                    <td>{{$rep->cond}}</td>
                    <td>{{$rep->category}}</td>
                    <td>{{$rep->type}}</td>
                    <td>{{$rep->initialPrice}}</td>
                    <td>{{$rep->buyPrice}}</td>
                    <td>{{$rep->qty}}</td>
                  </tr>
                @endforeach
            </tbody>
          </table>
    </div>
    
</body>
</html>