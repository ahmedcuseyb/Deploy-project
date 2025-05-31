<div class="row wide-xl " >
            @foreach($BookResource as $R)
                <div class="col-lg-2 ">
                    <div class="feature-with-icon" data-aos="flip-up" >
                        <h5><strong>{{ucfirst($R)}}</strong></h5>
                    </div>
                </div>
            @endforeach
        </div>
