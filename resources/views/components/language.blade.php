<form action="d-inline" action=""  method="post">
    @csrf
    <button type="submit" class="btn">
        <img src="{{ asset('vendor/blade-flags/language-' .$lang . '.svg')}}" alt="" width="50" height="50">
    </button>
</form>