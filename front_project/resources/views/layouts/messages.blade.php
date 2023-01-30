@if ($errors->any())
    <div class="alert alert-danger alert-dismissible show fade">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert"
                aria-label="Close"></button>
    </div>
@endif
@if(session('error'))
    <div class="notification error closeable">
        <p>  Gözlənilməyən xəta baş verdi!</p>
        <a class="close"></a>
    </div>
@endif
@if(session('non_user'))
    <div class="notification error closeable">
        <p> İstifadəçi sistemdə mövcud deyildir!</p>
        <a class="close"></a>
    </div>
@endif
@if(session('password'))
    <div class="notification error closeable">
        <p>    Email və ya şifrə yanlışdır!</p>
        <a class="close"></a>
    </div>
@endif
@if(session('success'))
    <div class="notification success closeable">
        <p>Əməliyyat uğurla tamamlandı!</p>
        <a class="close"></a>
    </div>
@endif
