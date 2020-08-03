<style>
h4 span{
    color:#e3e3e3;
}
</style>


<h1 style="background:#f7810a;"> {{__('Bonjour')}} {{ $data['prenom'] }} {{  $data['nom'] }}</h1>
<h2 style="background:#212126;"> {{__('Merci Pour Votre Visite')}}</h2>
<h3 style="background:#212126;"> {{__('Votre Reservation a bien été faite ')}}</h4>
<br>
<h2 style="background:#f7810a;"> {{__('Informations sur votre reservation')}}</h2>
<h4 style="color:#f7810a;">
    {{__("libellée de voiture :")}} <span>{{$pro[0]->libelle}}</span>
</h4>
<h4 style="color:#f7810a;">
    {{__("date reservation :")}} <span>{{$res[0]->res_created_at}}</span>
</h4>
<h4 style="color:#f7810a;">
    {{__("date de debut de reservation:")}} <span>{{$res[0]->date_debut_reservation}}</span>
</h4>

<h4 style="color:#f7810a;">
    {{__("date de fin de reservation:")}} <span>{{$res[0]->date_fin_reservation}}</span>
</h4>

<h4 style="color:#f7810a;">
@if($res[0]->car_driver == 1)
    {{__("avec chauffeur:")}} <span>{{__('oui')}}</span>
    @else
    {{__("avec chauffeur:")}} <span>{{__('non')}}</span>
@endif
    
</h4>

<p>
    {{__("vous pouvez nous contacter , si vous voulez plus d'information sur votre reservation et pour la confirmer veuillez utiliser notre email ou notre numéro tele :")}} 
</p>
<h4>
    {{__("email :")}} example@gmail.com
</h4>
<h4>
    {{__("tele :")}} +212554654454654
</h4>
<h4>
    {{__("Whatsapp :")}} +212554654454654
</h4>
<h5>
    {{__("Cordialement")}}
</h5>
<h1>
    {{__("Marrakech Zone Immo à votre service")}}
</h1>