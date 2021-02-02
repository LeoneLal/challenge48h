@extends('layouts.app')

@section('content')
    <!--Menu "burger"-->
    <div class="menu">
        <p><a href="https://fr.wikipedia.org/wiki/Jules_Verne">Voici Jules Verne</a></p>
        <p><a href="https://www.linternaute.fr/biographie/litterature/1775048-jules-verne-biographie-courte-dates-citations/#:~:text=Biographie%20courte%20de%20Jules%20Verne,une%20famille%20d'armateurs%20nantais.">Sa vie</a></p>
        <p><a href="https://www.livredepoche.com/auteur/jules-verne">Ses livres</a></p>
    </div>

    <!--Bouton menu "burger" :-->
    <div class="burger">
        <div class="barre"></div>
        <div class="barre"></div>
        <div class="barre"></div>
    </div>

    <!-- Main container -->
    <div class="container">
        <div class="corps">

            <div class="cartes">
                <div class="carte un">
                    <div class="wrapper">
                        <form method="GET" action="{{ route('descriptionJV') }}" class="form">
                            @csrf
                            <div class="pageTitle title">Jules Verne</div>
                            <label for="julesVerne" class="secondaryTitle title">Comment décririez-vous Jules Verne en quelques mots ?</label>
                            <textarea class="message formEntry" placeholder="Réponse" name="msg"></textarea>
                            <br>
                            <button class="submit formEntry" onclick="thanks()">Valider</button>
                        </form>

                        @isset($resultDescription)
                            <div class="result">
                                <p>{{ $resultDescription }}</p>
                            </div>
                        @endisset
                    </div>
                </div>
                <div class="carte deux">
                    <p class="mainText">
                        On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.<span class="textToo">Enigme 4.1 : h     47.21322, -1.55484</span>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted.<span class="textToo">Plaque</span>The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.
                    </p>
                </div>
                <div class="carte trois">
                    <blockquote class="citation">
                        C'est à force de répandre le bon grain qu'une semence finit par tomber dans un sillon fertile.
                        <span>Jules Verne</span>
                    </blockquote>

                    <img src="{{ asset('img/julesVerne.png') }}" alt="énigme 6 ?">
                </div>
                <div class="carte quatre">
                    <div class="wrapper">
                        <form method="GET" action="{{ route('leLivre') }}" class="form2">
                            @csrf
                            <div class="pageTitle title">Les oeuvres</div>
                            <label for="form2" class="secondaryTitle title">Remplacez le nom du livre faussé par le nom correct</label>
                            <select class="formEntry select" name="leLivre" id="leLivre">
                                <option value="leTourDuMondeEn80Jours">Le Tour Du Monde en 80 jours</option>
                                <option value="vingtMilleLieuxSousLesMers">Vingt Mille Lieux Sous les Mers</option>
                                <option value="voyageAuCentreDeLaTerre">Voyage au Centre de la Terre</option>
                                <option value="lIleMysterieuse">L'Île Mystérieuse</option>
                                <option value="deLaTerreALaLune">De la Terre à la Lune</option>
                            </select>
                            <br>
                            <button class="submit formEntry" onclick="thanks()">Submit</button>
                        </form>

                        @isset($resultLivre)
                            <div class="result">
                                <p>{{ $resultLivre }}</p>
                            </div>
                        @endisset
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection