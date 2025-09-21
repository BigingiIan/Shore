<?php
class forms {
    public function login_form() {
        ?>
        <form method="POST" action="login.php" novalidate>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" 
                        class="form-control" 
                        id="email" 
                        name="email" 
                        required>
                <div class="invalid-feedback">
                    Please enter a valid email address.
                </div>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" 
                        class="form-control" 
                        id="password" 
                        name="password" 
                        required>
                <div class="invalid-feedback">
                    Please enter your password.
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <?php
    }

    public function signup_form() {
        ?>
        <form method="POST" action="signup.php" novalidate>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text"
                        class="form-control"
                        id="username" 
                        name="username" 
                        required>
                <div class="invalid-feedback">
                    Username must be at least 3 characters long.
                </div>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email"
                        class="form-control" 
                        id="email" 
                        name="email" 
                        required>
                <div class="invalid-feedback">
                    Please enter a valid email address.
                </div>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password"
                        class="form-control"
                        id="password"
                        name="password"
                        minlength="8"
                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                        required>
                <div class="invalid-feedback">
                    Password must be at least 8 characters long and include at least one uppercase letter, one lowercase letter, one number, and one special character.
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>
        <?php
    }
}