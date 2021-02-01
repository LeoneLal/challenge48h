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
            <h1>Le titre</h1>

            <div class="cartes">
                <div class="carte un">
                    <!-- <form action="" method="post">
                        <div>
                            <label for="julesVerne">Comment décririez-vous Jules Verne en quelques mots ?</label>
                            <textarea name="julesVerne" id="julesVerne">Entrez votre réponse ici</textarea>
                        </div>
                        <div>
                            <input type="submit" value="Valider" class="submitButton">
                        </div>
                    </form> -->

                    <div class="wrapper">
                        <form class="form">
                            <div class="pageTitle title">Jules Verne</div>
                            <label for="julesVerne" class="secondaryTitle title">Comment décririez-vous Jules Verne en quelques mots ?</label>
                            <textarea class="message formEntry" placeholder="Réponse"></textarea>
                            <br>
                            <button class="submit formEntry" onclick="thanks()">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="carte deux">
                    <p class="mainText">
                        On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.
                    </p>
                    <p class="textToo">
                        That's totally hidden
                    </p>
                </div>
                <div class="carte trois">

                </div>
                <div class="carte quatre">
                    <form action="" method="post">

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