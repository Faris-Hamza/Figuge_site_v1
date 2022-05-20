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
         width: 340px;
         padding: 10px;
         margin: 40px 0;
         border: 1px solid black;
         background: transparent;
         text-align: left;
       }
       .Content-center{
         text-align: center;
         width: 100%;
       }
     
    </style>
  </head>
  <body>
    <div class="Content-center">
       <img  src="{{public_path('assets\images\LOGO\logo.png')}}" width="50px" alt="">
       <h4 >Fondation Oriental Figug</h4>
       <br>
       <h1 >Rapport des Revenus</h1>
    </div>
    
    
    <p >Date : {{date('Y-m-d')}}</p>
    <table style="width: 100%;  text-align: center; border-collapse: collapse; border: 1px solid ;">
      <thead>
        <tr>
         
          <th style="width: 30px">..</th>
          <th style="width: 150px">Date</th>
          <th style="width: 250px">Libellé</th>
          <th >Monatant</th>
          <th >Source</th>
          
        </tr>
      </thead>
      <tbody>
        @php
            $i=1;
            $total=0;
        @endphp
        @foreach ($Revenus as $item)
            <tr>
              
              <td >{{$i++}}</td>
              <td >{{$item->date}}</td>
              <td>{{$item->libelle}}</td>
              <td>{{$item->montant}}</td>
              <td>{{$item->source}}</td>
            </tr>
            @php
                $total +=$item->montant;
            @endphp
        @endforeach

        
        </div>
        
        
        
      </tbody>
    </table>
    <div class="total">
      <button class="btn" type="button" >
      <strong> Total des revenus : </strong>{{$total}} MAD
    </button>
  </body>
</html>