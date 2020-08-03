
<h1 style="background:#f7810a;"> {{__('Bonjour admin')}} </h1>
<h2 style="background:#212126;"> {{__('Une nouvelle reservation a été faite par ')}} {{ $data['prenom'] }} {{  $data['nom'] }}</h2>
<br>
<h2 style="background:#f7810a;"> {{__('Informations sur ce client')}}</h2>
<h4 style="color:#f7810a;">
    {{__("nom :")}} <span style="color:#e3e3e3;">{{  $data['nom'] }}</span>
</h4>
<h4 style="color:#f7810a;">
    {{__("prénom :")}} <span style="color:#e3e3e3;">{{ $data['prenom'] }}</span>
</h4>
<h4 style="color:#f7810a;">
    {{__("téle :")}} <span style="color:#e3e3e3;">{{ $data['tele'] }}</span>
</h4>
<h4 style="color:#f7810a;">
    {{__("émail :")}} <span style="color:#e3e3e3;">{{ $data['email'] }}</span>
</h4>
<h2 style="background:#f7810a;"> {{__('Informations sur cette reservation')}}</h2>
<h4 style="color:#f7810a;">
    {{__("libellée de l'immobilier(Location) :")}} <span style="color:#e3e3e3;">{{$pro[0]->designation}}</span>
</h4>
<h4 style="color:#f7810a;">
    {{__("Type de l'immobilier :")}} <span style="color:#e3e3e3;">{{$pro[0]->lib}}</span>
</h4>
<h4 style="color:#f7810a;">
    {{__("date reservation :")}} <span style="color:#e3e3e3;">{{$res[0]->res_created_at}}</span>
</h4>
<h4 style="color:#f7810a;">
    {{__("date de debut de reservation:")}} <span style="color:#e3e3e3;">{{$res[0]->date_debut_reservation}}</span>
</h4>

<h4 style="color:#f7810a;">
    {{__("date de fin de reservation:")}} <span style="color:#e3e3e3;">{{$res[0]->date_fin_reservation}}</span>
</h4>

<h4 style="color:#f7810a;">
    {{__("nombre de personnes:")}} <span style="color:#e3e3e3;">{{$res[0]->nbr_personnes}}</span>
    
    
</h4>

<h5>
    {{__("Cordialement")}}
</h5>
<h1>
    {{__("Par : Marrakech Zone Immo")}}
</h1>