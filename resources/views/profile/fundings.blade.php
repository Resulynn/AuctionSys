@extends('layout.app')
@section('content')
<div class="bg-white my-5 mx-5 " style="border: 1px #dddddd solid;">
    <a href="" class="d-flex  flex-shrink-0 p-3 link-dark text-decoration-none "
    style=" border-bottom:1px #dddddd solid;">
      <span class="fs-5 fw-bold text-center w-100">My Funds</span>
    </a>

<?php
    $refnum=Auth::user()->id.date('ymdHis');
?>
        
<div class="d-flex">
  <div class=" px-3 pt-3 pt-5 pb-5  list-group list-group-flush scrollarea"
        style=" border-right:1px #dddddd solid;">
    {!! Form::open(['action'=>['App\Http\Controllers\fundController@fundReq'],
    'method'=>'POST']) !!} 
    <div class="text-center">
      @if(Auth::user()->user_status == 0)
        {{Form::text('reqAmt','',['class'=>'form-control ','placeholder'=>'Enter Amount','style'=>'border-radius:0%; background:none; border:none; border-bottom:1px #000000 solid;','disabled' ])}}  
        
        {{Form::submit('ADD FUNDS',['class'=>' btn mt-3 mb-5 w-50 btn-dark', 'style'=>'border-radius:0%; ','disabled'])}}
        {{Form::hidden('refnum',$refnum)}}
        {{Form::hidden('accname',Auth::user()->username)}}
        {!! Form::close() !!}  

        @elseif(Auth::user()->user_status == 1)
        {{Form::text('reqAmt','',['class'=>'form-control ','placeholder'=>'Enter Amount','style'=>'border-radius:0%; background:none; border:none; border-bottom:1px #000000 solid;'])}}  
        {{Form::submit('ADD FUNDS',['class'=>' btn mt-3 mb-5 w-50 btn-dark', 'style'=>'border-radius:0%;'])}}
        {{Form::hidden('refnum',$refnum)}}
        {{Form::hidden('accname',Auth::user()->username)}}
        {!! Form::close() !!}  
      @endif
    </div>
    <h3>Your current funds: <b>{{Auth::user()->funds}}</b></h3>
    Your Reference number is <b>{{$refnum}}</b> 
    <div class="mt-3">   
      <p><small>Want to add funds? Pay thru: </small></p>  
      <a href=""><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100px" height="100px" viewBox="0 0 200 200" version="1.1">
          <!-- Generator: Sketch 53.2 (72643) - https://sketchapp.com -->
            <g id="3130-gcash" stroke="none" stroke-width="1" fill-rule="evenodd">
              <rect id="core" fill-opacity="0" x="100" y="100" width="1" height="1" fill="#000"/>
              <path d="M63.5541503,70.6058238 C63.5079845,63.9467565 65.1862746,58.3961347 68.4452383,53.3421451 C71.3670518,48.8109016 75.2443575,45.2656166 80.0103161,42.7271192 C83.4755492,40.8815751 87.177829,39.7359793 91.0786062,39.3307461 C96.4325959,38.7744249 101.599124,39.5363938 106.555808,41.6988808 C108.938244,42.7383109 111.142544,44.0578446 113.222803,45.5982591 C114.646016,46.6523005 114.990161,48.7675337 114.037311,50.1326114 C112.83156,51.8601762 110.799487,52.2044767 109.306326,51.1154611 C107.042959,49.4645285 104.647466,48.0574819 101.963788,47.2070674 C98.0501088,45.9669637 94.0773627,45.7336477 90.020057,46.431886 C86.1418187,47.0991917 82.6639948,48.6633886 79.6085026,51.0675855 C75.3397979,54.4261865 72.4447202,58.750228 71.1107306,64.0622487 C70.5819223,66.1675337 70.3105233,68.3088808 70.3573109,70.4747876 C70.4706269,75.7246321 72.0646684,80.517171 75.265342,84.6646321 C78.7899534,89.2316269 83.4110415,92.2763938 89.086171,93.4928705 C94.7404715,94.7048394 100.218813,94.0518342 105.414876,91.4346839 C106.784927,90.7445285 108.029539,89.8479482 109.287674,88.9731295 C110.813477,87.9125596 112.790679,88.2417824 113.887933,89.7947876 C114.957829,91.3090881 115.022648,92.9461865 113.332389,94.3415751 C109.591093,97.4295544 105.267052,99.3211088 100.530782,100.301316 C98.1003161,100.804321 95.6401606,101.023492 93.1657047,100.903181 C89.1952902,100.710124 85.383114,99.8416788 81.7405233,98.1923005 C77.9715596,96.4858756 74.6956528,94.1264456 71.8750311,91.1185181 C68.8395907,87.8814715 66.5877254,84.1613161 65.1618705,79.9619378 C64.0663264,76.7353057 63.4369482,73.4200725 63.5541503,70.6058238 Z M104.320762,66.4231244 C106.314907,66.4231244 108.309674,66.4553005 110.303041,66.4147306 C112.680969,66.3663886 114.170088,68.4752487 114.096565,70.3949378 C113.971435,73.6518808 113.202316,76.7269585 111.625062,79.5433834 C109.293611,83.7070104 105.88185,86.7258187 101.388689,88.4215181 C98.0925751,89.6655078 94.7036632,90.0121399 91.1986373,89.4191347 C87.4170829,88.779342 84.1324715,87.1972694 81.2863575,84.6466477 C78.7175492,82.3447306 76.8640777,79.5761813 75.7708653,76.305715 C74.8411762,73.5245751 74.6206062,70.6807927 74.9063057,67.7613109 C75.1874974,64.8876839 76.113456,62.2574767 77.5744404,59.7998083 C79.1834041,57.0931244 81.3458912,54.9346788 84.0325233,53.2758187 C85.8014352,52.1835389 87.6933005,51.3883057 89.6972383,50.9370622 C91.6290518,50.5021399 93.5956839,50.3100155 95.6086373,50.4611036 C97.9436632,50.636285 100.184803,51.0747824 102.307653,52.0591865 C103.372264,52.5528653 104.472938,52.9910518 105.37185,53.7844197 C106.656409,54.9182021 106.923922,56.856544 105.982109,58.4137461 C105.111021,59.8543679 103.295632,60.4150415 101.72242,59.8455078 C100.593922,59.4370104 99.6348549,58.646285 98.4730933,58.2970104 C93.6227306,56.8382021 89.2413316,57.7022953 85.6366684,61.2904819 C82.2772902,64.6347824 81.219829,68.7716736 82.4631969,73.3562332 C83.6017979,77.5546788 86.3740777,80.4374767 90.4478601,81.812658 C94.5855285,83.2094456 98.5302953,82.5155596 102.040606,79.8166477 C103.858171,78.4190829 105.179259,76.6374249 106.013041,74.5016736 C106.304337,73.7550933 106.22615,73.6678912 105.40185,73.6706891 C102.967653,73.6786166 100.533301,73.6991347 98.0991036,73.6870104 C95.5797254,73.6747306 93.7756839,71.2845233 94.5376528,69.0004819 C95.0871347,67.3534352 96.3891036,66.4464404 98.2610725,66.4361813 C100.280865,66.4249896 102.300813,66.4336943 104.320762,66.4336943 L104.320762,66.4231244 Z M59.9031347,124.978617 C61.5091451,124.978617 63.115,124.973642 64.7210104,124.980326 C66.0618394,124.985767 66.6909067,125.655404 66.7042746,126.988927 C66.7389378,130.469083 65.8352073,133.630741 63.4644301,136.246959 C61.5396114,138.370585 59.0604922,139.569964 56.2981606,140.20556 C53.0681088,140.94872 49.946399,140.447891 47.0679534,138.951622 C43.8363472,137.271777 41.6303368,134.630067 40.5909067,131.061311 C39.7076943,128.028668 39.8060881,125.047166 40.9434456,122.124886 C42.0223575,119.352917 43.8955699,117.187166 46.4391969,115.663694 C50.078057,113.484575 53.9945337,113.227321 57.9691451,114.455611 C60.4473316,115.221311 62.5030311,116.75271 64.0902332,118.840585 C64.7228756,119.672658 64.4915803,120.513435 63.5584715,121.025611 C63.0410104,121.309601 62.5408031,121.62499 62.027228,121.916285 C61.2823575,122.339083 60.6776943,122.249238 60.1300777,121.557839 C57.3169171,118.005093 51.8733938,117.553073 48.3315285,120.119394 C45.8084197,121.947528 44.824171,124.544782 44.9133938,127.645974 C45.0478497,132.31587 48.9365026,135.848409 53.4649482,135.842658 C56.6668653,135.838306 59.2205959,134.456907 61.0361399,131.800119 C61.3356736,131.361622 61.5377461,130.840741 61.7034456,130.331674 C61.8736528,129.808617 61.8351036,129.387218 61.0644301,129.402762 C59.1506477,129.441311 57.2354663,129.419238 55.3210622,129.431052 C54.8757254,129.433694 54.4369171,129.425611 54.0461399,129.182969 C53.8970725,129.090326 53.6723057,128.97701 53.6502332,128.845041 C53.4696114,127.760689 53.1968135,126.660326 53.6918912,125.592451 C53.9255181,125.088202 54.4024093,124.966337 54.9299741,124.968979 C56.5877461,124.976596 58.2453627,124.971777 59.9031347,124.971777 L59.9031347,124.978617 Z M136.71414,69.7962124 C136.795591,75.9432591 135.532016,81.1741399 133.50787,86.2382332 C133.000513,87.507715 132.62901,88.9023264 131.61958,89.8920155 C130.229632,91.2549171 129.264036,91.5176114 127.504917,90.5964715 C125.918337,89.7657979 125.371964,87.7289067 126.027767,86.3762642 C127.189839,83.9792176 128.188233,81.5356943 128.80129,78.9159016 C129.29901,76.7883886 129.624813,74.6616528 129.852067,72.4940363 C130.06129,70.4966269 129.961808,68.5184922 129.78414,66.5490622 C129.516782,63.5863679 128.881497,60.687715 127.824813,57.8897876 C127.289166,56.4713938 126.681394,55.0878187 126.056523,53.7079741 C125.302637,52.0433627 126.039114,50.2764715 127.821549,49.3393212 C129.121497,48.6556943 131.04756,49.212171 131.900772,50.554399 C132.814451,51.9919119 133.420668,53.5836218 134.023311,55.1619637 C135.009891,57.7450725 135.786627,60.4043472 136.201187,63.1390104 C136.567249,65.5531554 136.877197,67.9861088 136.71414,69.7962124 Z M112.426839,137.605554 C111.387098,138.463896 110.55114,139.199751 109.518705,139.708974 C105.483782,141.699078 100.550259,140.063378 98.0810881,136.54001 C95.2987047,132.569596 95.4417098,126.222653 98.4474611,122.602446 C100.480622,120.153637 103.142073,119.074104 106.28943,119.20172 C108.606736,119.295451 110.615026,120.067212 111.968446,122.09058 C112.053316,122.21742 112.12886,122.377679 112.32456,122.294518 C112.480466,122.228301 112.419689,122.071617 112.422487,121.955347 C112.43228,121.541098 112.419223,121.126228 112.428394,120.711979 C112.44487,119.985917 112.841865,119.536694 113.543368,119.516487 C114.448808,119.490373 115.356425,119.488974 116.26171,119.517264 C117.01342,119.54058 117.397358,119.941927 117.397979,120.678093 C117.403109,126.791876 117.403886,132.905503 117.397979,139.019285 C117.397202,139.807212 116.985751,140.203275 116.205751,140.210736 C115.350984,140.218819 114.496062,140.218197 113.64114,140.210891 C112.853212,140.204052 112.451088,139.812964 112.42886,139.035295 C112.417358,138.62913 112.426839,138.222187 112.426839,137.605554 Z M112.441917,129.892756 C112.59456,127.133067 111.02228,124.646176 108.492176,123.768093 C106.321606,123.014829 103.643057,123.834311 102.357098,125.679389 C100.841399,127.854 100.66,130.210321 101.60228,132.598197 C103.294093,136.886332 108.210674,137.273378 110.811813,134.465969 C111.993627,133.190114 112.477513,131.655451 112.441917,129.892756 Z M69.5248808,127.038202 C69.4347254,122.531984 71.299544,118.952192 74.8199585,116.248772 C76.7755544,114.746751 79.0936373,114.003591 81.541513,113.804316 C84.6826528,113.548772 87.6327565,114.189187 90.2900104,115.96385 C91.5955544,116.83556 92.6886114,117.927684 93.5836373,119.205404 C93.9437927,119.719601 93.9352435,120.321 93.3607358,120.713642 C92.5353472,121.277736 91.6689223,121.777166 90.7550881,122.197477 C90.1916166,122.456751 89.780943,122.272088 89.4680415,121.848824 C87.331513,118.959808 84.468456,118.104731 81.0217202,118.712347 C76.9062798,119.437943 74.3443109,123.006855 74.3303212,126.939808 C74.3197513,129.897684 75.2892332,132.351622 77.6710466,134.130948 C79.6047254,135.575767 81.836228,135.953487 84.2046736,135.624731 C86.3766425,135.323332 88.1314093,134.327891 89.4071088,132.525404 C89.8079896,131.958979 90.302601,131.774938 90.9408394,132.139135 C91.7236373,132.58587 92.5289741,132.99701 93.2890777,133.479497 C93.866228,133.84587 93.9644663,134.478202 93.596228,135.018513 C92.0332746,137.312658 89.8972124,138.955041 87.3109948,139.811363 C83.5440518,141.058461 79.7318756,140.819083 76.248456,138.89442 C72.5940518,136.875249 70.307057,133.721363 69.665399,129.503332 C69.6036891,129.098254 69.4846218,128.70328 69.517886,128.280793 C69.5502176,127.869031 69.5248808,127.452606 69.5248808,127.038202 Z M140.873244,126.407036 C140.873244,122.26315 140.874021,118.119264 140.872466,113.975223 C140.872155,113.11657 141.182415,112.711492 142.022259,112.644342 C142.794642,112.582632 143.574176,112.590715 144.35029,112.597088 C145.434487,112.605948 145.776922,112.990974 145.767907,114.060093 C145.750031,116.231751 145.751741,118.40372 145.749876,120.575378 C145.749565,120.797813 145.653658,121.086 145.910756,121.204912 C146.176249,121.32771 146.395264,121.122528 146.60713,120.972373 C148.501016,119.629834 150.631948,119.347244 152.873399,119.592684 C154.722674,119.795067 156.332104,120.511648 157.628477,121.873927 C159.261845,123.590301 159.905057,125.714083 159.951689,128.000922 C160.025679,131.625326 159.987907,135.252373 159.979979,138.878176 C159.977648,139.948073 159.691482,140.209834 158.662311,140.212632 C157.833503,140.215119 157.004228,140.199731 156.176197,140.225067 C155.570135,140.243254 155.253658,139.934083 155.15542,139.386466 C155.087337,139.007347 155.070083,138.61486 155.068062,138.228124 C155.052363,134.965119 155.041326,131.701959 155.03713,128.438798 C155.034642,126.702218 154.353347,125.316933 152.984228,124.240819 C151.783606,123.29714 149.046456,123.333668 147.837751,124.259938 C146.193192,125.519938 145.773347,127.283409 145.754539,129.179005 C145.721896,132.466259 145.781119,135.754601 145.797907,139.042321 C145.801482,139.782684 145.34744,140.212943 144.584383,140.212943 C143.781378,140.212943 142.978528,140.214187 142.175679,140.212166 C141.193762,140.210145 140.895472,139.928953 140.882881,138.91657 C140.865161,137.492114 140.876819,136.067503 140.876663,134.643047 C140.876508,131.897658 140.876663,129.152269 140.876663,126.407036 L140.873244,126.407036 Z M123.219518,133.372399 C123.349,133.372399 123.480036,133.385767 123.607497,133.370378 C124.730244,133.234368 125.51242,133.461622 126.009052,134.702192 C126.528378,135.999031 128.544907,136.618617 130.216513,136.27385 C130.793974,136.154627 131.352938,136.025922 131.858275,135.651466 C132.750813,134.990223 132.743819,133.626078 131.772005,133.067114 C130.351124,132.250119 128.746047,131.959756 127.196772,131.511466 C125.66242,131.067684 124.151539,130.571829 122.885321,129.541415 C120.749104,127.803591 120.263508,124.677839 121.814181,122.382606 C123.028016,120.58587 124.817912,119.730016 126.906254,119.372036 C128.400036,119.11587 129.893819,119.075611 131.365839,119.405767 C134.185995,120.038409 136.214648,121.57214 136.898896,124.533124 C137.138585,125.570534 137.100969,126.43556 135.472264,126.34214 C134.647808,126.295197 133.820554,126.406492 132.994078,126.279497 C132.599415,126.218876 132.37014,126.061415 132.199466,125.685093 C131.212109,123.506751 129.007808,122.735922 126.849052,123.772865 C126.223715,124.073332 125.880813,124.597477 125.84615,125.231674 C125.814285,125.813642 126.167135,126.256026 126.671694,126.622088 C127.576668,127.278824 128.649674,127.440793 129.663456,127.769083 C131.222212,128.273642 132.80413,128.663021 134.294337,129.410689 C137.943922,131.241933 138.228067,135.906389 135.607497,138.390482 C134.248637,139.678772 132.60299,140.288098 130.827238,140.485197 C128.654337,140.72613 126.489829,140.563694 124.511694,139.46986 C122.609881,138.418306 121.182627,136.976596 120.747394,134.745715 C120.585114,133.913798 120.986306,133.38157 121.821487,133.369446 C122.287342,133.362762 122.753508,133.368358 123.219518,133.368358 L123.219518,133.372399 Z M125.179078,70.020342 C125.35286,73.1255751 124.797938,76.1321036 123.91286,79.0613782 C123.451513,80.5884249 122.964363,82.1456269 122.023948,83.494228 C120.611306,85.5199275 117.597627,85.2791503 116.484984,83.2651088 C115.95742,82.3099275 115.740269,81.3332953 116.247782,80.2562487 C117.301513,78.0199275 117.969596,75.6475959 118.261513,73.2050052 C118.441513,71.6981658 118.306435,70.1546425 118.325554,68.6277513 C118.354622,66.3079585 117.789596,64.1126736 117.047523,61.9337098 C116.647886,60.7609119 115.865399,59.7056269 115.964104,58.3630881 C116.057057,57.0992021 117.048145,55.8050052 118.36799,55.3685285 C119.667627,54.9385803 120.995399,55.3735026 121.87286,56.3987876 C122.827264,57.5137617 123.116694,58.9167668 123.613482,60.2193575 C124.324622,62.0835544 124.732497,64.0422591 125.004518,66.0200829 C125.187472,67.3497202 125.263793,68.6894611 125.179078,70.020342 Z" id="Shape" fill="#000"/>
            </g>
        </svg>
        
      </a>
      <a href=""><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100px" height="100px" viewBox="0 0 200 200" version="1.1">
        <!-- Generator: Sketch 53.2 (72643) - https://sketchapp.com -->
        <g id="025-paypal-logo" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <rect id="core" fill-opacity="0" x="100" y="100" width="1" height="1" fill="#000"/>
          <path d="M153.269939,82.4805726 C160.108384,82.1697342 167.568507,84.9672802 166.014315,93.3599182 L161.662577,113.564417 L151.715746,113.564417 L152.337423,110.145194 C147.05317,115.740286 133.376278,115.429448 135.552147,102.99591 C137.106339,95.5357873 144.566462,93.3599182 155.756646,93.3599182 C156.378323,89.9406953 154.202454,89.3190184 150.472393,89.3190184 C146.742331,89.6298569 142.390593,90.8732106 140.836401,91.4948875 L141.768916,84.3456033 C144.877301,83.7239264 148.607362,82.4805726 153.269939,82.4805726 Z M153.891616,103.306748 C153.891616,102.374233 154.202454,101.130879 154.513292,101.441718 L152.026585,101.441718 C149.850716,101.441718 147.05317,101.441718 145.809816,103.306748 C144.566462,105.793456 146.431493,107.03681 148.607362,107.03681 C151.09407,106.725971 153.269939,105.793456 153.891616,103.306748 Z M174.406953,73.1554192 L184.664622,73.1554192 L176.271984,113.564417 L166.325153,113.564417 L174.406953,73.1554192 Z M128.092025,73.1554192 C133.376278,73.1554192 139.903885,79.993865 138.349693,89.00818 C136.795501,96.7791411 130.578732,101.130879 123.118609,101.130879 L115.347648,101.130879 L112.550102,113.564417 L101.670757,113.564417 L109.752556,73.1554192 L128.092025,73.1554192 Z M127.781186,87.1431493 C128.402863,84.3456033 126.848671,82.4805726 124.051125,82.4805726 L118.766871,82.4805726 L116.591002,91.805726 L121.564417,91.805726 C124.361963,91.805726 127.159509,89.9406953 127.781186,87.1431493 Z M56.2883436,82.4805726 C63.1267894,82.1697342 70.8977505,84.9672802 69.3435583,93.3599182 L64.99182,113.564417 L55.0449898,113.564417 L55.6666667,110.145194 C50.3824131,115.740286 37.0163599,115.429448 39.192229,102.99591 C40.7464213,95.5357873 48.206544,93.3599182 59.0858896,93.3599182 C59.7075665,89.9406953 57.5316973,89.3190184 53.801636,89.3190184 C50.0715746,89.6298569 45.408998,90.8732106 44.1656442,91.4948875 L45.0981595,84.3456033 C47.8957055,83.7239264 51.6257669,82.4805726 56.2883436,82.4805726 Z M57.2208589,103.306748 C57.2208589,102.374233 57.5316973,101.130879 57.8425358,101.441718 L55.3558282,101.441718 C53.4907975,101.441718 50.6932515,101.441718 49.4498978,103.306748 C47.8957055,105.793456 49.7607362,107.03681 51.9366053,107.03681 C54.4233129,106.725971 56.599182,105.793456 57.2208589,103.306748 Z M73.3844581,82.4805726 L83.3312883,82.4805726 L84.8854806,99.8875256 L94.8323108,82.4805726 L105.08998,82.4805726 L81.4662577,125.997955 L70.2760736,125.997955 L77.4253579,112.94274 L73.3844581,82.4805726 Z M31.7321063,73.1554192 C37.0163599,73.1554192 43.5439673,79.993865 41.6789366,89.00818 C40.1247444,96.7791411 33.9079755,101.130879 26.4478528,101.130879 L18.6768916,101.130879 L15.8793456,113.564417 L5,113.564417 L13.0817996,73.1554192 L31.7321063,73.1554192 Z M31.4212679,87.1431493 C32.0429448,84.3456033 30.4887526,82.4805726 27.6912065,82.4805726 L22.406953,82.4805726 L20.2310838,91.805726 L25.204499,91.805726 C28.002045,91.805726 30.799591,89.9406953 31.4212679,87.1431493 Z M186.840491,79.6830266 L186.840491,75.3312883 L185.286299,75.3312883 L185.286299,74.7096115 L189.327198,74.7096115 L189.327198,75.3312883 L187.773006,75.3312883 L187.773006,79.6830266 L186.840491,79.6830266 Z M189.948875,79.6830266 L189.948875,74.7096115 L190.881391,74.7096115 L192.124744,78.1288344 C192.124744,78.4396728 192.435583,78.7505112 192.435583,78.7505112 C192.435583,78.4396728 192.435583,78.4396728 192.746421,77.8179959 L193.989775,74.398773 L194.92229,74.398773 L194.92229,79.3721881 L194.300613,79.3721881 L194.300613,75.0204499 L192.746421,79.3721881 L191.813906,79.3721881 L190.259714,75.0204499 L190.259714,79.3721881 L189.948875,79.3721881 L189.948875,79.6830266 Z" id="Shape" fill="#000"/>
        </g>
      </svg>
    </a>
  </div>
</div>

  <div class="w-100 mx-3">
      <table class="table">
        <a class="d-flex  flex-shrink-0 p-3 link-dark text-decoration-none border-bottom">
          <span class="fs-6 fw-semibold text-center w-100"><b>Fund Transaction History</b> </span>
        </a>
        <thead>
          <tr>
            <th scope="col">Amount</th>
            <th scope="col">Status</th>
            <th scope="col">Payment Method</th>
            <th scope="col">Reference #</th>
            <th scope="col">Date</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $info)
            <tr>
              <th scope="row">{{$info->amount}}</td>
              @if($info->status == "Pending")
                <td class="text-warning">{{$info->status}}</td>
                @elseif($info->status =="Approved")
                <td class="text-success">{{$info->status}}</td>
                @elseif($info->status =="Denied")
                <td class="text-danger">{{$info->status}}</td>
              @endif
              
              <td></td>
              <td>{{$info->refnum}}</td>
              <td>{{$info->updated_at}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection