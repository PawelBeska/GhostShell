<div class="layout-content">
    <div class="layout-content-body">
        <div class="title-bar">
            <h1 class="title-bar-title">
                <span class="d-ib">Panel - Moje zlecenia</span>

            </h1>

        </div>
        <div class="row gutter-xs">
            <div class="col-md-12">
                <div class="panel m-b-lg">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#home" data-toggle="tab" aria-expanded="true">
                                <span class="icon icon-home"></span>
                            </a>
                        </li>
                        <li class="">
                            <a href="#rozmowa" data-toggle="tab" aria-expanded="false">
                                <span class="icon icon-envelope"></span>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#podglad" data-toggle="tab" aria-expanded="false">
                                <span class="icon icon-desktop"></span>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#platnosc" data-toggle="tab" aria-expanded="false">
                                <span class="icon icon-money"></span>
                            </a>
                        </li>

                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="home">
                            <p>Nazwa: <b>{{$order->name}}</b></p>
                            <p>Przewidywalny koszt: <b>{{$order->value}}zł</b></p>
                            <p>Etap: <b>{{$order->stage->name}}</b></p>
                            <p>Postęp: <b>{{$order->stage->progress}}</b> </p>
                            <p>Opis: {{$order->description}}</p>
                            <p>Umowa:</p>
                            <div class="col-md-1 m-b-lg">
                                <a class="file-link" href="/zlecenia/{{$order->id}}/umowa" title="Umowa.pdf">
                                    <div class="file-thumbnail file-thumbnail-pdf"></div>
                                    <div class="file-info">
                                        <span class="file-ext">.pdf</span>
                                        <span class="file-name">Umowa</span>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="rozmowa">
                            <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
                            <p>Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park</p>
                        </div>
                        <div class="tab-pane fade" id="podglad">
                            <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony.</p>
                            <p>Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                        </div>
                        <div class="tab-pane fade" id="platnosc">
                            <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony.</p>
                            <p>Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>