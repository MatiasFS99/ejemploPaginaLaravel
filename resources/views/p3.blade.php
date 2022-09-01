@extends('layouts.layout')
@section('titulo', 'Soy el inicio de la pagina')
@section('contenido')
    <div class="jumbotron text-center">
        <h1>Soy la pagina 3</h1>
        <p>No hay nada aca</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h3>Columna 1</h3>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi quis elit sodales, gravida erat quis,
                    sollicitudin risus. Donec congue faucibus turpis, sit amet bibendum erat gravida eget. Suspendisse
                    sodales erat sed augue volutpat tristique. Mauris semper accumsan finibus. Integer pulvinar eros quam,
                    placerat pellentesque orci laoreet ut. Aliquam leo mauris, feugiat in dolor quis, interdum malesuada ex.
                    Fusce sapien massa, volutpat vel risus eget, rutrum fermentum velit. Praesent pretium ligula commodo
                    dolor euismod pulvinar. Curabitur vitae mattis metus. Vivamus auctor, dolor laoreet tempus vehicula,
                    arcu dolor congue quam, sed tristique elit turpis consequat justo. Curabitur eu rhoncus nibh. Etiam et
                    hendrerit magna.

                    Vivamus urna tortor, interdum a condimentum quis, aliquet quis est. Fusce eros felis, facilisis non
                    efficitur ut, vulputate nec orci. Integer consectetur mattis egestas. Curabitur sit amet turpis id massa
                    tristique laoreet at in tellus. Nulla dictum dolor a tellus finibus, nec consectetur felis maximus.
                    Donec semper sapien ut lacus consequat, quis dapibus massa consectetur. Duis in mauris erat. Nulla
                    tincidunt libero at suscipit volutpat. Mauris pretium auctor pellentesque.

                    Donec est arcu, gravida at lectus vitae, luctus bibendum risus. Duis tincidunt tortor magna, at
                    vestibulum leo elementum ac. Etiam hendrerit facilisis augue, nec eleifend nibh convallis et. Maecenas
                    turpis massa, auctor nec rhoncus ut, suscipit at diam. Morbi placerat turpis enim, ac semper arcu
                    tincidunt vel. Nunc a suscipit metus. Cras vehicula egestas dui, ut dapibus dui. Donec non aliquam
                    lacus. Curabitur fringilla mauris quis ligula congue, ac eleifend augue placerat. Fusce pharetra
                    malesuada mauris, sed sagittis libero accumsan a. Sed eu dapibus dui, sed dictum metus. Curabitur
                    lobortis felis arcu, sed hendrerit dui sollicitudin molestie. Cras pretium felis sit amet libero
                    efficitur, et scelerisque metus pretium. Aliquam rutrum lacinia tristique. Pellentesque sed sagittis
                    diam. Sed porta, velit eget facilisis facilisis, nisl ipsum rhoncus arcu, non eleifend sem mi
                    consectetur velit.

                    Nulla eget dapibus purus, at feugiat nibh. Nam ac nulla vel est dictum placerat. Proin vitae dictum
                    urna. Nulla ut vehicula diam. Integer ultricies leo id imperdiet eleifend. Quisque eleifend ullamcorper
                    lorem eget condimentum. Fusce vitae nisi ut mi rutrum aliquet. Sed venenatis fringilla cursus. Curabitur
                    facilisis iaculis dui in hendrerit. Cras commodo, dui in porttitor placerat, arcu nulla tincidunt lacus,
                    vel condimentum ante tortor ut dui. Aliquam a elit ut enim euismod commodo. Integer tristique egestas
                    rutrum. Donec ornare tortor vel velit aliquet, eget sollicitudin justo laoreet. Curabitur pharetra, sem
                    vitae facilisis vulputate, metus nisl blandit erat, lobortis cursus mauris mauris vel lacus. </p>
            </div>
            <div class="col-sm-4">
                <h3>Columna 2</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi quis elit sodales, gravida erat quis,
                    sollicitudin risus. Donec congue faucibus turpis, sit amet bibendum erat gravida eget. Suspendisse
                    sodales erat sed augue volutpat tristique. Mauris semper accumsan finibus. Integer pulvinar eros quam,
                    placerat pellentesque orci laoreet ut. Aliquam leo mauris, feugiat in dolor quis, interdum malesuada ex.
                    Fusce sapien massa, volutpat vel risus eget, rutrum fermentum velit. Praesent pretium ligula commodo
                    dolor euismod pulvinar. Curabitur vitae mattis metus. Vivamus auctor, dolor laoreet tempus vehicula,
                    arcu dolor congue quam, sed tristique elit turpis consequat justo. Curabitur eu rhoncus nibh. Etiam et
                    hendrerit magna.

                    Vivamus urna tortor, interdum a condimentum quis, aliquet quis est. Fusce eros felis, facilisis non
                    efficitur ut, vulputate nec orci. Integer consectetur mattis egestas. Curabitur sit amet turpis id massa
                    tristique laoreet at in tellus. Nulla dictum dolor a tellus finibus, nec consectetur felis maximus.
                    Donec semper sapien ut lacus consequat, quis dapibus massa consectetur. Duis in mauris erat. Nulla
                    tincidunt libero at suscipit volutpat. Mauris pretium auctor pellentesque.
                </p>
                <img src="{{ asset('images/cangrejo.png') }}" class="img-responsive" width="30%" alt="crab...">
                <h5>prueba de imagen con cangrejo</h5>
                <p>
                    Donec est arcu, gravida at lectus vitae, luctus bibendum risus. Duis tincidunt tortor magna, at
                    vestibulum leo elementum ac. Etiam hendrerit facilisis augue, nec eleifend nibh convallis et. Maecenas
                    turpis massa, auctor nec rhoncus ut, suscipit at diam. Morbi placerat turpis enim, ac semper arcu
                    tincidunt vel. Nunc a suscipit metus. Cras vehicula egestas dui, ut dapibus dui. Donec non aliquam
                    lacus. Curabitur fringilla mauris quis ligula congue, ac eleifend augue placerat. Fusce pharetra
                    malesuada mauris, sed sagittis libero accumsan a. Sed eu dapibus dui, sed dictum metus. Curabitur
                    lobortis felis arcu, sed hendrerit dui sollicitudin molestie. Cras pretium felis sit amet libero
                    efficitur, et scelerisque metus pretium. Aliquam rutrum lacinia tristique. Pellentesque sed sagittis
                    diam. Sed porta, velit eget facilisis facilisis, nisl ipsum rhoncus arcu, non eleifend sem mi
                    consectetur velit.

                    Nulla eget dapibus purus, at feugiat nibh. Nam ac nulla vel est dictum placerat. Proin vitae dictum
                    urna. Nulla ut vehicula diam. Integer ultricies leo id imperdiet eleifend. Quisque eleifend ullamcorper
                    lorem eget condimentum. Fusce vitae nisi ut mi rutrum aliquet. Sed venenatis fringilla cursus. Curabitur
                    facilisis iaculis dui in hendrerit. Cras commodo, dui in porttitor placerat, arcu nulla tincidunt lacus,
                    vel condimentum ante tortor ut dui. Aliquam a elit ut enim euismod commodo. Integer tristique egestas
                    rutrum. Donec ornare tortor vel velit aliquet, eget sollicitudin justo laoreet. Curabitur pharetra, sem
                    vitae facilisis vulputate, metus nisl blandit erat, lobortis cursus mauris mauris vel lacus.
                </p>
            </div>
            <div class="col-sm-4">
                <h3>Columna 3</h3>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi quis elit sodales, gravida erat quis,
                    sollicitudin risus. Donec congue faucibus turpis, sit amet bibendum erat gravida eget. Suspendisse
                    sodales erat sed augue volutpat tristique. Mauris semper accumsan finibus. Integer pulvinar eros quam,
                    placerat pellentesque orci laoreet ut. Aliquam leo mauris, feugiat in dolor quis, interdum malesuada ex.
                    Fusce sapien massa, volutpat vel risus eget, rutrum fermentum velit. Praesent pretium ligula commodo
                    dolor euismod pulvinar. Curabitur vitae mattis metus. Vivamus auctor, dolor laoreet tempus vehicula,
                    arcu dolor congue quam, sed tristique elit turpis consequat justo. Curabitur eu rhoncus nibh. Etiam et
                    hendrerit magna.

                    Vivamus urna tortor, interdum a condimentum quis, aliquet quis est. Fusce eros felis, facilisis non
                    efficitur ut, vulputate nec orci. Integer consectetur mattis egestas. Curabitur sit amet turpis id massa
                    tristique laoreet at in tellus. Nulla dictum dolor a tellus finibus, nec consectetur felis maximus.
                    Donec semper sapien ut lacus consequat, quis dapibus massa consectetur. Duis in mauris erat. Nulla
                    tincidunt libero at suscipit volutpat. Mauris pretium auctor pellentesque.

                    Donec est arcu, gravida at lectus vitae, luctus bibendum risus. Duis tincidunt tortor magna, at
                    vestibulum leo elementum ac. Etiam hendrerit facilisis augue, nec eleifend nibh convallis et. Maecenas
                    turpis massa, auctor nec rhoncus ut, suscipit at diam. Morbi placerat turpis enim, ac semper arcu
                    tincidunt vel. Nunc a suscipit metus. Cras vehicula egestas dui, ut dapibus dui. Donec non aliquam
                    lacus. Curabitur fringilla mauris quis ligula congue, ac eleifend augue placerat. Fusce pharetra
                    malesuada mauris, sed sagittis libero accumsan a. Sed eu dapibus dui, sed dictum metus. Curabitur
                    lobortis felis arcu, sed hendrerit dui sollicitudin molestie. Cras pretium felis sit amet libero
                    efficitur, et scelerisque metus pretium. Aliquam rutrum lacinia tristique. Pellentesque sed sagittis
                    diam. Sed porta, velit eget facilisis facilisis, nisl ipsum rhoncus arcu, non eleifend sem mi
                    consectetur velit.

                    Nulla eget dapibus purus, at feugiat nibh. Nam ac nulla vel est dictum placerat. Proin vitae dictum
                    urna. Nulla ut vehicula diam. Integer ultricies leo id imperdiet eleifend. Quisque eleifend ullamcorper
                    lorem eget condimentum. Fusce vitae nisi ut mi rutrum aliquet. Sed venenatis fringilla cursus. Curabitur
                    facilisis iaculis dui in hendrerit. Cras commodo, dui in porttitor placerat, arcu nulla tincidunt lacus,
                    vel condimentum ante tortor ut dui. Aliquam a elit ut enim euismod commodo. Integer tristique egestas
                    rutrum. Donec ornare tortor vel velit aliquet, eget sollicitudin justo laoreet. Curabitur pharetra, sem
                    vitae facilisis vulputate, metus nisl blandit erat, lobortis cursus mauris mauris vel lacus. </p>
            </div>
        </div>
    </div>
@endsection
