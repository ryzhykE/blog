@if (Session::has('message'))
    <div class="flash alert-info">
        <p class="panel-body">
            {{ Session::get('message') }}
        </p>
    </div>
@endif

@if (count($errors) > 0)
    <div class="flash alert-info">
        <ul class=panel-body">
            @foreach ( $errors->all() as $error )
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif