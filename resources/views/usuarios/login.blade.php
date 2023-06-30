<div style='border: 1px dotted pink; width:50%; margin:0 auto; text-align:center;'>

    <h1>Login!!!!!</h1>

    @if (session('erro'))
        <div>{{ session('erro') }}</div>
    @endif
    <form action="{{url()->current()}}" method='post'>
        @csrf
        <input type="email" name="email" placeholder="email"><br>
        <input type="password" name="password" placeholder="sem a"><br><br>
        <input type="submit" value="Logar">
    </form>
</div>
