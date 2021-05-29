<html>
    <body>
        <h1>REGISTRATION FORM</h1>
        <form   method="post" action="data.php">
            <table >
                <tr>
                    <td>NAME</td>
                    <td><input type="text" name="txt1" placeholder="Enter Your Name Here" required/></td>
                </tr>
                <tr>
                    <td>AGE</td>
                    <td><input type="number" name="txt2" placeholder="EX:#01" min="1" max="100" required/></td>
                </tr>
                <tr>
                    <td>MOBILE NO:</td>
                    <td><input type="number" name="txt3" placeholder="EX:1234567890" minlength="10"  required/><td>
                </tr>
                <tr>
                    <td>Email :</td>
                    <td><input type="email" placeholder="Enter Your Email Here" name="txt4" /><td>
                </tr>
                 <tr>
                    <td>GENDER :</td>
                    <td>MALE<input type="checkbox"name="txt5" checked=""/></td>
                    <td>FEMALE<input type="checkbox"name="txt6"  /></td> 
                 </tr>
                 <tr>
                     <td>ADDRESS</td>
                     <td ><input type="text"  name="txt8"  required/></td>
                 </tr>
                
                <tr>
                    <td><input type="submit"/></td>
                    <td><input type="reset"/></td>
                </tr>
            </table>
        </form>
        
    </body>
</html>