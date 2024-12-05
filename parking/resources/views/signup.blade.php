@include('layouts.header')
    <div class="form-container">
        <h2>Sign Up</h2>
        <form action="{{url('/register')}}" method="POST">
        @csrf
            <label for="fullName">Name</label>
            <input type="text" id="fullName" name="fullname" class="input-field" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="input-field" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="input-field" required>

            <label for="confirmPassword">Confirm Password</label>
            <input type="password" id="confirmPassword" name="confirmPassword" class="input-field" required>

            <button type="submit" class="submit-btn">Sign Up</button>
        </form>

        <div class="form-footer">
            <p>Already have an account? <a href="/login">Login here</a></p>
        </div>
    </div>

@include('layouts.footer')



   
        
         