<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      body{
        font-family: Verdana, Geneva, Tahoma, sans-serif;
          }
       td{
        border: 0.5px solid ;
        height: 30px;
       }
      
       th{
          border: 0.5px solid ;
       }

       
       h6{
        text-align: right;
        font-size: 20px;
       }
       .total{
         width: 100%;
         text-align: right;
       }
       .btn{
         width: 200px;
         height: 20px;
         background: transparent;
         text-align: left;
       }
     
    </style>
  </head>
  <body>
    <div style="text-align: center;width:100%">
          <img src="assets\images\LOGO\logo.png" width="50px"  alt="">

    </div>
    <h4 style="text-align: center">Fondation Oriental Figug</h4>
    <h1 style="text-align: center">Rapport des dépenses</h1>
    <h6 >{{date('Y-m-d')}}</h6>
    <table style="width: 100%;  text-align: center; border-collapse: collapse;
    border: 1px solid;">
      <thead>
        <tr>
         
          <th style="width: 30px">..</th>
          <th style="width: 150px">Date</th>
          <th style="width: 250px">Libellé</th>
          <th style="width: 150px">Contarante</th>
          <th >Bénéficiaire</th>
          <th >Mode de payment</th>
          <th >Monatant (MAD)</th>
          
        </tr>
      </thead>
      <tbody>
        @php
            $i=1;
            $total=0;
        @endphp
        @foreach ($Depenses as $item)
            <tr>
              
              <td >{{$i++}}</td>
              <td >{{$item->date}}</td>
              <td>{{$item->libelle}}</td>
              <td>{{$item->contrante}}</td>
              <td>{{$item->Beneficiaire}}</td>
              <td>{{$item->modePayment}}</td>
              <td>{{$item->montant}}</td>
            </tr>
            @php
                $total +=$item->montant;
            @endphp
        @endforeach

        
        
        
        
        
      </tbody>
    </table>
    <div class="total">
      <button class="btn" type="button" >
      Total : {{$total}} MAD
    </button>
  </div>
  </body>
</html>