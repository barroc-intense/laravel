@extends('app')
@section('content')

<section>
    <div class="imgright">
        <img src="img/right.jpg" alt="">
    </div>
    <div class="cookie">
        <div class="apraats">
            <div class="apraat">
                <img src="img/apraaat.png" alt="">
                <a href="{{ route("quotations.index") }}">bestel</a>
            </div>
            <div class="apraat">
                <img src="img/apraat.png" alt="">
                <a href="javascript:void(0)">bestel</a>
            </div>
        </div>
        <div class="info" id="info">
            <h2>cookies en privacy</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Aut beatae dignissimos eius eveniet nisi recusandae, saepe velit vero.
                Aut cumque debitis deleniti expedita harum laborum mollitia odio qui temporibus vel?
                Amet consequuntur corporis culpa dicta dolor dolore, ea exercitationem harum inventore laboriosam,
                laborum maiores mollitia nihil praesentium rem saepe sequi ullam unde voluptas voluptatum.
                Aspernatur debitis id nesciunt nostrum obcaecati optio perspiciatis quidem, saepe, sed temporibus,
                unde veritatis voluptatum! Accusantium at atque corporis delectus dolorem doloremque dolores eaque explicabo
                fugit harum ipsa iure laborum maxime molestias nesciunt,

            </p>

            <p class="close" onclick="popUp()">accepteren</p>
        </div>
    </div>
    <div class="imglinks">
        <img src="img/links.jpg" alt="">
    </div>

</section>
<div class="imgmiddel">
    <img src="img/onder.jpg" alt="">
</div>
@endsection
