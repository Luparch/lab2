<!DOCTYPE html>
<html lang="ru">
    <head>
        <h1>Покупатель и его адреса</h1>
    </head>
    <body>
        <h2>Адреса</h2>
        <div>
            @foreach($addresses as $a)
                <p>
                    {{$a->address_id}}
                    {{$a->created_at}}
                    {{$a->denotation}}
                    {{$a->city}}
                    {{$a->street}}
                    {{$a->house}}
                    {{$a->floor}}
                    {{$a->flat}}
                    {{$a->intercom}}
                </p>
                <br>
            @endforeach
        </div>
        <h2>Покупатель</h2>
        <div>
            <p>
                {{$c->customer_id}}
                {{$c->created_at}}
                {{$c->name}}
                {{$c->blocked ? 'blocked' : 'free'}}
                {{$c->second_name}}
                {{$c->phone}}
                {{$c->email}}
            </p>
            <br>
        </div>
    </body>
</html>