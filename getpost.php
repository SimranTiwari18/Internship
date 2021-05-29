<html>
    <body>
        <h1>FORM</h1>
        <form method="post" action="process.php">
            <table>
                <tr>
                    <td>NAME :</td>
                    <td><input type="text" name="txt1" required /></td>
                </tr>
                <tr>
                    <td>AGE :</td>
                    <td>
                        <input type="number" name="txt2" min="1" max="100" required/>   
                    </td>
                    
                </tr>
                <tr>
                    <td>Emil :</td>
                    <td>
                        <input type="email" name="txt3" required/>   
                    </td>
                    
                </tr>
                <tr>
                    <td><input type="submit" /></td>
                    <td><input type="reset" /></td>
                </tr>
            </table>
           
        </form>
        
    </body>
    
</html>