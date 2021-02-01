@extends('layouts.app')

@section('content')
    <!--Menu "burger"-->
    <div class="menu">
        <p>Bla Bla Bla 1</p>
        <p>Bla Bla Bla 2</p>
        <p>Bla Bla Bla 3</p>
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

                        @isset($result)
                            <div class="resultJV">
                                <p>{{ $result }} :)</p>
                            </div>
                        @endisset
                    </div>
                </div>
                <div class="carte deux">
                    <p class="mainText">
                        On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.<span class="textToo">That's totally hidden</span>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.
                    </p>
                </div>
                <div class="carte trois">
                    <img src="../../public/img/julesVerne.png" alt="Jules Verne">
                </div>
                <div class="carte quatre">
                    <form method="GET" action="" class="form2">
                        <div class="pageTitle title">Form 2</div>
                        <label for="form2" class="secondaryTitle title">Je ne sais pas quoi mettre dans ce formulaire</label>
                        <textarea class="message formEntry" placeholder="Réponse" name="msg2"></textarea>
                        <br>
                        <button class="submit formEntry" onclick="thanks()">Submit</button>
                    </form>
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