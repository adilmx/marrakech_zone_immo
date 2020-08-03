<h1 style="background:red;"> {{__('Bonjour')}} {{ $user[0]->name }}</h1>
<p>
    {{__('vous pouvez changer votre mot de passe en cliquant sur :')}} <a href="{{ route('password.prevreset',['user' => $user[0]->email,'token' => $code]) }}">{{__('CE LIEN')}}</a>
</p>
