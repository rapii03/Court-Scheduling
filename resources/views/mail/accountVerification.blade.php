<div>
    <p>Untuk melakukan aktifasi akun anda pada aplikasi scheduling, mohon klik tombol dibawah ini</p>

    <form action="{{ url('/AccountVerification') }}">
        <input type="hidden" name="token" value="{{ $data['token'] }}">
        <input type="hidden" name="email" value="{{ $data['email'] }}">
        <button type="submit">
            Aktifkan
        </button>
    </form>
</div>
