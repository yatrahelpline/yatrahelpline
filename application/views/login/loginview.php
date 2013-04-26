<div id="content" class="container_16 clearfix" style="border: 0px solid red;height: 200px">
    <div style="width: 400px;padding-bottom: 30px;border: 1px solid grey;margin: 0 auto;padding-bottom: 25px" >
        <div style="width: 400px;height: 30px;border: 0px solid red;background-color: gray" >
            <label style="color: white">&nbsp;&nbsp;Admin Login</label>
        </div>
        <div style="color: red;padding-left: 5px">
        <?php echo validation_errors(); ?>
        </div>
        <form action="<?php echo base_url('index.php/verifylogin');  ?>" method="post">
        <table>
            <tr>
                <td width="200">User Name</td>
                <td width="20">:</td>
                <td width="200">
                    <input type="text" name="username" id="username"/>
                </td>
            </tr>
             <tr>
                <td width="200">Password</td>
                <td width="20">:</td>
                <td width="200">
                    <input type="text" name="password" id="password"/>
                </td>
            </tr>
            <tr>
                <td width="200"></td>
                <td width="20"></td>
                <td width="200">
                    <input type="submit" name="btn" value="Login" />&nbsp;
                    <input type="reset" name="btn" value="Reset" />
                </td>
            </tr>

        </table>
        </form>

    </div>

</div>