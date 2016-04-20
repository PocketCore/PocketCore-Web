<?php
$this->setTitle('Account');

# TODO: Show different content for Guest and Use
?>
<div class="wrapper">
    <div class="container">
        <div class="auth-holder" style="margin-top: 20%;">
            <div class="col s4 authBox theme-color">
                
                <form action="#" method="POST">
                    <h6 class="messageBox info">Hi stranger, please login or signup to use all features we offer</h6>
                    <div class="input-field">
                        <input type="text" class="" id="username" name="username"></input>
                        <label for="username">Username</label>
                    </div>
                    <div class="input-field">
                        <input type="password" class="col s6" id="password" name="password"></input>
                        <label for="password">Password</label>
                    </div>
                
                    <input type="submit" value="Sign in" class="waves-effect waves-light btn"></input>    
                </form>
                
                
            </div>
        </div>
    </div>
</div>