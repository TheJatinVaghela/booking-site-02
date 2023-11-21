<!-- <?php $this->print_stuf($this->user_info)?> -->
<section class="banner-section">
 <div class="container">
    <div class="banner-content">
        <div class="account-area">
            <form action="" method="post" class="account-form">
                <div class="form-group">
                    <input type="text" name="user_name" id="name" placeholder="NAME = <?php echo $this->user_info["user_name"]?>" disabled> </input>
                    </div>
                    <div class="form-group">
                        <input type="text" name="user_mail" id="mail" placeholder="Mail = <?php echo $this->user_info["user_mail"]?>" disabled></input>
                    </div>
                    <div class="form-group">
                        <input type="text" name="user_pass" id="pass1" placeholder="pass = <?php echo $this->user_info["user_pass"]?>" disabled></input>
                    </div>
                    <div class="form-group text-center">
                        <input type="submit"  name="log_out"  value="log out">
                    </div>
                    <div class="form-group text-center">
                        <input type="submit"  name="delete_ac" style="background:red;" value="delete account">
                    </div>
            </form>
        </div>
    </div>
</div>
</section>
