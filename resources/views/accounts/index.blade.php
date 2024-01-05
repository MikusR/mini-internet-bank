@foreach($accounts as $account)
    <span>{{ $account->id }}</span>
    <span>{{ $account->name }}</span>
    <span>{{ $account->type }}</span>
    <span>{{ $account->currency }}</span>
    <br/>
@endforeach
