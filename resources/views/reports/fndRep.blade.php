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
                <th scope="col">Reference Number</th>
                <th scope="col">Amount</th>
                <th scope="col">Time of Request</th>
              </tr>
            </thead>
            <?php
             $total = 0;
            ?>
            <tbody>
                @foreach ($data as $rep)
                <tr>
                    <td>{{$rep->uname}}</td>
                    <td>{{$rep->refnum}}</td>
                    <td>{{$rep->amount}}</td>
                    <td>{{$rep->created_at}}</td>
                </tr>
                <?php
                $total = $total+$rep->amount;
                ?>
                @endforeach
            </tbody>
          </table>
<br>
          total: {{$total}}
    </div>
    
</body>
</html>