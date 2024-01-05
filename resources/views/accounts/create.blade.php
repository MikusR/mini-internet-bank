<form method="post" action="{{ route('accounts.store') }}">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{ old('name') }}" required autofocus autocomplete="name">
    @if($errors->has('name'))
        <p>{{ $errors->first('name') }}</p>
    @endif
    <label for="currency">currency</label>
    <input type="text" name="currency" id="currency" value="{{ old('currency') }}" required autofocus
           autocomplete="currency">
    <label for="type">type</label>
    <input type="text" name="type" id="type" value="{{ old('type') }}" required autofocus autocomplete="type">
    <button type="submit">Submit</button>
</form>
