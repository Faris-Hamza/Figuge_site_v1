<html>

<head>
    <title>Rapport de {{$Rapport->activite()->first()->name}}</title>
</head>

<body>

    <style>
        .container{
            padding: 2%;
            font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; 
        }
        .row{
            margin: 2% 0;
        }
        h2{
            font-size: 15px;
            line-height: 2rem;
        }
        table{
            border-collapse: collapse;
            border: 2px solid;
        }
        td{
            text-align: center;
            font-size: 12px;
            height: 20px;
        }

        .para{
            width: 95%;
            margin: 0 auto;
            font-size: 13px;
        }

        th{
            font-size: 14px;
        }
        
        

        .title_{
            display: block;
            color: orange;
            font-size: 22px;
        }
        .content-center{
            width: 100%;
            text-align: center;
        }
        .grid-container {
            margin-top: 35px;
            display: grid;
            grid-template-columns: auto auto ;
        }
        .grid-item {
            
            text-align: center;
        }
        .content-right{
            width: 100%;
            text-align: right;
        }
    </style>
        <div class="container">
           

        <div class="content-center">
            <img class="" src="assets\images\LOGO\logo.png" width="10%" alt="">
            <h5>Fondation Oriental Figug</h5>
        </div>
        <div class="content-right">
            <h4>
                Date : {{ Date('d/m/yy') }}
            </h4>
        </div>

        <div class="content-center">
            <h2>Rapport<br> <span class="title_"> Activité {{ $Rapport->activite()->first()->name }}</span></h2>
        </div>

       
        <div class="title">
            <h2>Résumé d'activité :</h2>
        </div>
        <div class="para">
           <p> {{ $Rapport->activite()->first()->detail }}</p>
        </div>

        <div class="title">
            <h2>Activité :</h2>
        </div>
        <div class="para">
            <table  border="2px">
               <thead>
                   <tr>
                        <th rowspan="2">Titre de projet</th>
                        <th rowspan="2">Titre d'activité</th>
                        <th rowspan="2">Lieu</th>
                        <th rowspan="2">Date de début</th>
                        <th rowspan="2">Date de fin</th>
                        <th colspan="2">Nombre des participants</th>
                   </tr>
                   <tr>
                        <th >Nombre des femmes</th>
                        <th >Nombre des hommes</th>
                   </tr>
                   
                  
               </thead>
               <tbody>
                   @if ($Rapport->activite->projet!=null)
                        <td> {{ $Rapport->activite->projet->titre }}</td>
                   @else
                       <td> --- </td>
                   @endif
                  
                   
                   <td> {{ $Rapport->activite->name }}</td>
                   <td> {{ $Rapport->activite->lieu }}</td>
                   <td> {{ $Rapport->activite->date_debut }}</td>
                   <td> {{ $Rapport->activite->date_fin }}</td>
                   <td> {{ $Rapport->nbr_femme }}</td>
                   <td> {{ $Rapport->nbr_homme }}</td>
               </tbody>
            </table>
        </div>

        <div class="title">
            <h2>Context :</h2>
        </div>
        <div class="para">
            <p> {{ $Rapport->context }}</p>
        </div>

        <div class="title">
            <h2>Quelque Photos :</h2>
        </div>

        <div class="container">
            <div class="grid-container">
               @foreach ($Photos as $item)
                   <img class="grid-item " src="{{public_path($item->URL)}}" width="48%" alt="">
               @endforeach
            </div>
           
        </div> 



    </div>

</body>

</html>
