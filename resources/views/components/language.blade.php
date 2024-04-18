<form action="{{route('set_language_locale' , $lang)}}"  method="POST">
    @csrf
    <button type="submit" class="btn">
        <img src="{{ asset('vendor/blade-flags/language-' .$lang . '.svg')}}" alt="" width="50" height="50">
    </button>
</form>