@include('layouts.header')
<div class="form-container login-form">
        <h2>login Up</h2>
        <form action="{{url('/user_login')}}" method="POST">
        @csrf
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="input-field" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="input-field" required>

            
            <button type="submit" class="submit-btn">Login</button>
        </form>

        <div class="form-footer">
            <p>Don't have an account? <a href="/signup">Sign up</a></p>
        </div>
    </div>
@include('layouts.footer')